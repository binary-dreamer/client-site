<?php
$baseUrl = '/client-site';
require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/config/DB.php";

class BookClass
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

    // Fetch all books
    public function getAllBooks()
    {
        $query = "SELECT * FROM books";
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

    // Fetch books by genre
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

    // Fetch a single book by ID
    public function getBookById($bookId)
    {
        $query = "SELECT books.*, genre.name AS genre_name 
              FROM books 
              JOIN genre ON books.genre_id = genre.id 
              WHERE books.id = ?";

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $bookId);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->num_rows > 0 ? $result->fetch_assoc() : null;
    }



    // Fetch PDF details by book_id
    public function getPdfByBookId($bookId)
    {
        return $this->fetchSingleRecord("pdfs", "book_id", $bookId);
    }

    // Fetch Audiobook details by book_id
    public function getAudiobookByBookId($bookId)
    {
        return $this->fetchSingleRecord("audiobooks", "book_id", $bookId);
    }

    // Generic function to fetch a single record
    private function fetchSingleRecord($table, $column, $value)
    {
        $query = "SELECT * FROM $table WHERE $column = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $value);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->num_rows > 0 ? $result->fetch_assoc() : null;
    }

    //function to get book cover image
    private function getCoverImage($image)
    {
        return !empty($image)
            ? "/NovelNest/assets/images/book-cover/" . htmlspecialchars($image)
            : "/NovelNest/assets/images/book-cover/default.jpg";
    }

    // Fetch Harry Potter books
    public function getHarryPotterBooks()
    {
        $query = "SELECT * FROM books WHERE title LIKE '%Harry Potter%'";
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
}
