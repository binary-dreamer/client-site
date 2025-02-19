<?php
require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/config/DB.php";

class BookClass
{
    private $conn;

    public function __construct()
    {
        $db = new DB();
        $this->conn = $db->connection();
    }

    public function getAllBooks()
    {
        $query = "SELECT * FROM books";
        $result = $this->conn->query($query);

        $books = [];
        while ($row = $result->fetch_assoc()) {
            $row['cover_image'] = !empty($row['cover_image']) 
                ? "/NovelNest/assets/images/book-cover/" . $row['cover_image'] 
                : "/NovelNest/assets/images/book-cover/default.jpg";
            $books[] = $row;
        }

        return $books;
    }

    public function getBooksByGenre($genre_id = null)
    {
        if (empty($genre_id)) {
            $query = "SELECT books.*, genre.name AS genre_name FROM books 
                      JOIN genre ON books.genre_id = genre.id";
            $stmt = $this->conn->prepare($query);
        } else {
            $query = "SELECT books.*, genre.name AS genre_name FROM books 
                      JOIN genre ON books.genre_id = genre.id
                      WHERE books.genre_id = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->bind_param("i", $genre_id);
        }

        if (!$stmt->execute()) {
            return [];
        }

        $result = $stmt->get_result();
        
        $books = [];
        while ($row = $result->fetch_assoc()) {
            $row['cover_image'] = !empty($row['cover_image']) 
                ? "/NovelNest/assets/images/book-cover/" . $row['cover_image'] 
                : "/NovelNest/assets/images/book-cover/default.jpg";
            $books[] = $row;
        }

        return $books;
    }
}
