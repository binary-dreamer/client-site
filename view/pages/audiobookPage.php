<?php
$baseUrl = '/client-site';
require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/header.php";
require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/config/db.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/client-site/model/BookClass.php";

$db = new DB();
$conn = $db->connection();

$BookClass = new BookClass();

// Get book ID from URL
$book_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch book details
$bookQuery = "SELECT * FROM books WHERE id = $book_id";
$bookResult = $conn->query($bookQuery);
$book = $bookResult->fetch_assoc();

// Fetch the most recent audiobook for this book
$audiobookQuery = "SELECT * FROM audiobooks WHERE book_id = $book_id ORDER BY uploaded_at DESC LIMIT 1";
$audiobookResult = $conn->query($audiobookQuery);
$latestAudiobook = $audiobookResult->fetch_assoc();

// If no book is found, show an error message
if (!$book) {
    echo "<p style='color:red; text-align:center;'>Book not found.</p>";
    exit();
}
?>

<div class="containerPage">
    <section>
        <div class="back-button-container">
            <div class="audioBPM">
                <marquee class="marq" bgcolor="#F9F9F9" direction="left" scrollamount="8">
                    <span class="audiosinglepage">Enjoy listening to your audiobooks!!</span>
                    <span class="audiosinglepage">Enjoy listening to your audiobooks!!</span>
                    <span class="audiosinglepage">Enjoy listening to your audiobooks!!</span>
                    <span class="audiosinglepage">Enjoy listening to your audiobooks!!</span>
                    <span class="audiosinglepage">Enjoy listening to your audiobooks!!</span>
                    <span class="audiosinglepage">Enjoy listening to your audiobooks!!</span>
                    <span class="audiosinglepage">Enjoy listening to your audiobooks!!</span>
                    <span class="audiosinglepage">Enjoy listening to your audiobooks!!</span>
                </marquee>
            </div>


        <a href="javascript:history.back()" class="back-button">
            <i class="fas fa-arrow-left"></i>
            <span class="back-text"> Back</span>
        </a>
        </div>
</section>
    <span class="back-text"></span>
</div>
<div></div><div></div>
<div class="ebook-content">
    <div class="ebook-image-container">
        <img src="<?= $baseUrl ?>/assets/images/<?= !empty($book['cover_image']) ? htmlspecialchars($book['cover_image']) : 'default.jpg' ?>" 
             alt="<?= htmlspecialchars($book['title']) ?>" 
             class="ebook-image">
    </div>

    <div class="ebook-details">
        <h2 class="ebook-title"> <?= htmlspecialchars($book['title']) ?> </h2>
        <p class="author"><i class="fas fa-book"></i> <strong><?= htmlspecialchars($book['author']) ?></strong></p>
        <div class="ebook-meta">
            <span class="language"><i class="fas fa-globe"></i>Language: English</span>
        </div>
            
            <a href="#" class="wishlist-btn">
            <span class="wishlist-icon">
                <i class="fas fa-heart"></i>
            </span>
            <span>Add to Wishlist</span>
        </a>
        <div class="rating-container mt-4">
            <span class="rating-text">Rating: </span>
            <div class="star-rating">
                <span class="star" data-value="1">☆</span>
                <span class="star" data-value="2">☆</span>
                <span class="star" data-value="3">☆</span>
                <span class="star" data-value="4">☆</span>
                <span class="star" data-value="5">☆</span>
            </div>
            <div class="rating-value" id="rating-value"><?= htmlspecialchars($book['rating']) ?></div>
        </div>
        <p class="description"> <?= htmlspecialchars($book['description']) ?> </p>
        
        <h3 class="audiobook-title">Audiobook Player</h3>
        <p><strong>Narrator:</strong> <?= htmlspecialchars($latestAudiobook['narrator'] ?? 'Unknown') ?></p>
        
        <?php if (!empty($latestAudiobook)) : ?>
            <audio id="audiobook-audio" controls>
                <source id="audio-source" src="<?= $baseUrl ?>/assets/audio/<?= htmlspecialchars($latestAudiobook['file']) ?>" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
        <?php else : ?>
            <p>No audiobook available for this book.</p>
        <?php endif; ?>
    </div>
</div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        const baseUrl = '<?= $baseUrl ?>';
        const bookId = <?= $book_id ?>;
    });
</script>
<script src="/client-site/assets/js/rating.js"></script>


<?php require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/footer.php"; ?>