<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/client-site/config/db.php"; // Adjust path as needed

$db = new DB(); // Create an instance of the DB class
$conn = $db->connection(); // Get the database connection

$query = "SELECT a.id, a.name AS audiobook_name, a.description, a.file AS audio_file, 
                 a.narrator, a.uploaded_at, b.cover_image AS book_image, b.title AS book_name 
          FROM audiobooks a 
          JOIN books b ON a.book_id = b.id";

$result = mysqli_query($conn, $query);
$audiobooks = [];

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $audiobooks[] = $row;
    }
}

mysqli_close($conn);
?>
