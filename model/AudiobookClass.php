<?php
$baseUrl = '/client-site';
require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/config/DB.php";

class AudioBookClass
{
    private $conn;

    public function __construct()
    {
        $db = new DB();
        $this->conn = $db->connection();

        if (!$this->conn) {
            die("Database connection failed.");
        }
    }

    // Fetch all books that have audiobooks
    public function getBooksWithAudiobooks()
    {
        $query = "SELECT DISTINCT b.id, b.cover_image, b.title, b.genre_id, b.author, b.description 
              FROM books b
              JOIN audiobooks a ON b.id = a.book_id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

        $books = [];
        while ($row = $result->fetch_assoc()) {
            $row['cover_image'] = $this->getCoverImage($row['cover_image']);
            $books[] = $row;
        }
        return $books;
    }

    // Fetch a single audiobook by ID
    public function getAudiobookById($id)
    {
        $query = "SELECT a.*, b.title, b.cover_image, b.author 
              FROM audiobooks a 
              JOIN books b ON a.book_id = b.id 
              WHERE a.id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->num_rows > 0 ? $result->fetch_assoc() : null;
    }

    // Helper function to get book cover image
    private function getCoverImage($image)
    {
        return !empty($image)
            ? "/NovelNest/assets/images/book-cover/" . htmlspecialchars($image)
            : "/NovelNest/assets/images/book-cover/default.jpg";
    }

    public function getBooksByGenre($genre_id = null)
    {
        $query = "SELECT books.*, genre.name AS genre_name FROM books 
              JOIN genre ON books.genre_id = genre.id";

        if ($genre_id) {
            $query .= " WHERE books.genre_id = ?";
        }

        $stmt = $this->conn->prepare($query);
        if ($genre_id) {
            $stmt->bind_param("i", $genre_id);
        }

        if (!$stmt->execute()) {
            return [];
        }

        $result = $stmt->get_result();
        $books = [];

        while ($row = $result->fetch_assoc()) {
            $row['cover_image'] = $this->getCoverImage($row['cover_image']);
            $books[] = $row;
        }

        return $books;
    }
}
