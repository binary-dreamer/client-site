<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/client-site/config/db.php";

$db = new DB();
$conn = $db->connection();

$genre_id = isset($_POST['genre_id']) ? intval($_POST['genre_id']) : 0;

if ($genre_id === 0) {
    $sql = "SELECT books.*, genre.name AS genre_name FROM books 
            JOIN genre ON books.genre_id = genre.id";
    $stmt = $conn->prepare($sql);
} else {
    $sql = "SELECT books.*, genre.name AS genre_name FROM books 
            JOIN genre ON books.genre_id = genre.id WHERE books.genre_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $genre_id);
}

$stmt->execute();
$result = $stmt->get_result();

$output = '';
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $output .= '
        <div class="col-lg-3 col-md-4 col-sm-6 d-flex mt-4">
    <div class="card position-relative p-3 border rounded-3 w-100">

                <img src="/NovelNest/assets/images/book-cover/' . htmlspecialchars($row['cover_image']) . '" 
                     class="img-fluid shadow-sm" alt="' . htmlspecialchars($row['title']) . '">
                <h6 class="mt-4 mb-0 fw-bold"><a href="#">' . htmlspecialchars($row['title']) . '</a></h6>
                <p class="my-2 fs-6 text-black-50">' . htmlspecialchars($row['author']) . '</p>
            </div>
        </div>';
    }
} else {
    $output = '<p class="text-center">No books found for this genre.</p>';
}

echo $output;
