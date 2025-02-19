<?php
$baseUrl = '/client-site';
require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/header.php";
require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/config/DB.php";

$db = new DB();
$conn = $db->connection();

// Fetch all books with genre names
$query = "SELECT books.*, genre.name AS genre_name FROM books 
          JOIN genre ON books.genre_id = genre.id";
$result = $conn->query($query);

$booksByGenre = [];
$allBooks = [];

// Group books by genre
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $allBooks[] = $row;
    $booksByGenre[$row['genre_name']][] = $row;
  }
}

// Fetch all genres for tabs
$genreQuery = "SELECT * FROM genre";
$genreResult = $conn->query($genreQuery);
?>

<div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
  <h1 class="text-primary">Books</h1>
  <h5 class="mb-4">"Find Your Escape!: Because reality is overrated.<br>Welcome to NovelNest—your cozy escape from adulting!"</h5>
</div>

<section id="popular-books" class="bookshelf py-0 my-0">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="tabs">
          <li data-genre-id="0" class="active tab">All Genres</li>
          <?php while ($row = $genreResult->fetch_assoc()) : ?>
            <li data-genre-id="<?= $row['id']; ?>" class="tab"><?= htmlspecialchars($row['name']); ?></li>
          <?php endwhile; ?>
        </ul>


        <div class="tab-content">
          <div id="book-list" class="row">
            <!-- Books will be loaded here via AJAX -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    const baseUrl = '/client-site';

    function loadBooks(genre_id = 0) {
        $.ajax({
            url: `${baseUrl}/model/fetchBooks.php`,
            type: "POST",
            data: { genre_id: genre_id },
            beforeSend: function() {
                $("#book-list").html('<p class="text-center">Loading books...</p>');
            },
            success: function(response) {
                $("#book-list").html(response);
            }
        });
    }

    // Load all books on page load
    loadBooks();

    // Handle tab click event
    $(".tab").click(function() {
        $(".tab").removeClass("active");
        $(this).addClass("active");

        var genre_id = $(this).attr("data-genre-id"); // Fix: Use correct attribute
        loadBooks(genre_id);
    });
});

</script>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/footer.php"; ?>