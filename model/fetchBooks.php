<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/client-site/config/DB.php"; // Adjust the path if needed
$baseUrl = '/client-site';
$db = new DB();
$conn = $db->connection();

$genre_id = $_POST['genre_id'] ?? ''; // Get genre ID from AJAX request

$sql = "SELECT * FROM books";
if (!empty($genre_id)) {
    $sql .= " WHERE genre_id = ?";
}

$stmt = $conn->prepare($sql);

if (!empty($genre_id)) {
    $stmt->bind_param("i", $genre_id);
}

$stmt->execute();
$result = $stmt->get_result();
$books = $result->fetch_all(MYSQLI_ASSOC);

$output = '';

if ($books) {
    foreach ($books as $book) {
        $output .= '
            <div class="col-md-3">
                <div class="product-item">
                    <figure class="product-style">
                        <img src="' . $baseUrl . '/assets/images/book-cover/' . $book['cover_image'] . '" alt="' . $book['title'] . '" class="product-item">
                    </figure>
                    <figcaption>
                        <h5>' . $book['title'] . '</h5>
                        <span>' . $book['author'] . '</span>
                    </figcaption>
                </div>
            </div>';
    }
} else {
    $output = '<div class="col-12"><p class="text-center">No books found.</p></div>';
}

echo $output;
?>
