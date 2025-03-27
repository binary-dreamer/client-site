<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/client-site/config/DB.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/client-site/model/BookClass.php";

$db = new DB();
$conn = $db->connection();

// Get genre_id and search_title from AJAX request
$genre_id = isset($_POST['genre_id']) ? intval($_POST['genre_id']) : 0;
$search_title = isset($_POST['search_title']) ? trim($_POST['search_title']) : "";

// Base query
$query = "SELECT audiobooks.*, books.genre_id, books.title AS book_title, books.cover_image, genre.name AS genre_name 
          FROM audiobooks 
          JOIN books ON audiobooks.book_id = books.id
          JOIN genre ON books.genre_id = genre.id
          WHERE 1"; // Ensures conditions can be appended safely

// Apply genre filter
if ($genre_id > 0) {
    $query .= " AND books.genre_id = $genre_id";
}

// Apply title search filter
if (!empty($search_title)) {
    $search_title = $conn->real_escape_string($search_title);
    $query .= " AND books.title LIKE '%$search_title%'";
}

$result = $conn->query($query);

if ($result->num_rows > 0) {
    while ($audiobook = $result->fetch_assoc()) {
        ?>
        <div class="col-md-3 audiobook-item">
            <div class="audiobook-card">
                <figure class="audiobook-style">
                    <img src="/client-site/assets/images/<?= !empty($audiobook['cover_image']) ? htmlspecialchars($audiobook['cover_image']) : 'default-audiobook.jpg' ?>"
                        alt="Audiobook Cover"
                        class="audiobook-item"
                        style="width: 200px; height: 250px; object-fit: cover; border-radius: 10px;">
                </figure>
                <figcaption>
                    <a href="/client-site/view/pages/audiobookPage.php?id=<?= $audiobook['id'] ?>">
                        <h5><?= htmlspecialchars($audiobook['book_title']) ?></h5>
                    </a>
                    <span>Narrated by <?= htmlspecialchars($audiobook['narrator']) ?></span>
                </figcaption>
            </div>
        </div>
        <?php
    }
} else {
    echo "<p class='text-center'>No audiobooks available.</p>";
}
?>