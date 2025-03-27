<?php
$baseUrl = '/client-site';
require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/header.php";
require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/config/DB.php";

$db = new DB();
$conn = $db->connection();

// Fetch all genres
$genreQuery = "SELECT * FROM genre";
$genreResult = $conn->query($genreQuery);

// Get active genre from query param
$activeGenreId = isset($_GET['genre_id']) ? (int)$_GET['genre_id'] : 0;
?>

<div class="text-center mx-auto pb-5 wow fadeInUp" 
     data-wow-delay="0.2s" 
     style="
       
       background-image: url('<?= $baseUrl ?>/assets/images/banner_2.jpg'); 
       background-size: cover; 
       background-position: center; 
       background-repeat: no-repeat; 
       padding: 65px ; ">
    <h1 class="text-primary">Audiobooks</h1>
    <h5 class="mb-4">Tune In, Zone Out!: Your audiobook escape is just a click away.</h5>
</div>


<section id="audiobook-section" class="audiobook-list container">
    <div class="row">
        <!-- Sidebar Categories Column -->
        <div class="col-md-3">
            <div class="widget-product-categories audiobook-widget pt-5 mt-5">
                <div class="section-title overflow-hidden mb-2">
                    <h3 class="d-flex flex-column mb-0">Categories</h3>
                </div>
                <ul class="product-categories audiobook-categories mb-0 sidebar-list list-unstyled">
                    <li class="cat-item">
                        <a href="?genre_id=0" class="tab <?= $activeGenreId == 0 ? 'active' : '' ?>">All Genres</a>
                    </li>
                    <?php
                    // Refetch genres since the previous result might be consumed
                    $genreResult = $conn->query($genreQuery);
                    while ($row = $genreResult->fetch_assoc()) : ?>
                        <li class="cat-item">
                            <a href="?genre_id=<?= $row['id']; ?>"
                               class="tab <?= $activeGenreId == $row['id'] ? 'active' : '' ?>">
                                <?= htmlspecialchars($row['name']); ?>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>

        <!-- Audiobook List Column -->
        <div class="col-md-9">
            <div class="tab-content">
                <div id="audiobook-list" class="row">
                    <!-- Audiobooks will be loaded here via AJAX -->
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Audiobook Player Modal -->

<div class="modal fade" id="audioModal" tabindex="-1" aria-labelledby="audioModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Audiobook Player</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <audio id="audioPlayer" controls class="w-100">
                    <source src="" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>
        </div>
    </div>
</div>


<!-- Scripts -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    const baseUrl = '/client-site';
    const activeGenreId = <?= $activeGenreId ?>;

    function loadAudiobooks(genre_id = 0) {
        $.ajax({
            url: `${baseUrl}/model/fetchAudiobook.php`,
            type: "POST",
            data: { genre_id: genre_id },
            beforeSend: function() {
                $("#audiobook-list").html('<p class="text-center">Loading audiobooks...</p>');
            },
            success: function(response) {
                $("#audiobook-list").html(response);
            }
        });
    }

    loadAudiobooks(activeGenreId);

    $(document).on("click", ".listen-audiobook-btn", function() {
        var audioSrc = $(this).data("audio");
        $("#audioPlayer source").attr("src", audioSrc);
        $("#audioPlayer")[0].load();
        $("#audioModal").modal("show");
    });
});
</script>


<!-- Styles -->

<style>


#audiobook-list {
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
    justify-content: center;
}

.audiobook-item {
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    padding: 15px;
    text-align: center;
    transition: transform 0.3s ease;
}
.audiobook-item:hover {
    transform: translateY(-5px);
}
</style>


<?php require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/footer.php"; ?>

