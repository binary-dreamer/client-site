<?php
require_once 'DB.php';

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
            $books[] = $row;
        }

        return $books;
    }
}
