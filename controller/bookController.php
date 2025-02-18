<?php
$baseUrl = '/NovelNest';
require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . '/model/BooksClass.php';

$BooksClass = new BookClass();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $books = $BooksClass->getAllBooks();
    if ($books) {
        foreach ($books as &$book) {
            $book['cover_image'] = $baseUrl . '/assets/images/book-cover/' . $book['cover_image'];
        }
        echo json_encode([
            "status" => "success",
            "data" => $books
        ]);
    } else {
        echo json_encode([
            "status" => "error",
            "message" => "Failed to fetch books."
        ]);
    }
}
