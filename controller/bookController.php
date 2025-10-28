<?php
$baseUrl = '/client-site';
require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . '/model/BookClass.php';

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");

$BooksClass = new BookClass();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Fetch single book if 'id' is provided
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $book = $BooksClass->getBookById($_GET['id']);
        if ($book) {
            echo json_encode(["status" => "success", "data" => $book]);
        } else {
            echo json_encode(["status" => "error", "message" => "Book not found."]);
        }
        exit;
    }

    // Fetch books by genre if 'genre_id' is provided
    if (isset($_GET['genre_id']) && is_numeric($_GET['genre_id'])) {
        $books = $BooksClass->getBooksByGenre($_GET['genre_id']);
        if (!empty($books)) {
            echo json_encode(["status" => "success", "data" => $books]);
        } else {
            echo json_encode(["status" => "error", "message" => "No books found for this genre."]);
        }
        exit;
    }

    // Fetch PDF details by book ID
    if (isset($_GET['pdf']) && is_numeric($_GET['pdf'])) {
        $pdf = $BooksClass->getPdfByBookId($_GET['pdf']);
        if ($pdf) {
            echo json_encode(["status" => "success", "data" => $pdf]);
        } else {
            echo json_encode(["status" => "error", "message" => "No PDF found for this book."]);
        }
        exit;
    }

    // Fetch Audiobook details by book ID
    if (isset($_GET['audiobook']) && is_numeric($_GET['audiobook'])) {
        $audiobook = $BooksClass->getAudiobookByBookId($_GET['audiobook']);
        if ($audiobook) {
            echo json_encode(["status" => "success", "data" => $audiobook]);
        } else {
            echo json_encode(["status" => "error", "message" => "No audiobook found for this book."]);
        }
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['harry_potter'])) {
        $books = $BooksClass->getHarryPotterBooks();
        if (!empty($books)) {
            echo json_encode(["status" => "success", "data" => $books]);
        } else {
            echo json_encode(["status" => "error", "message" => "No Harry Potter books found."]);
        }
        exit;
    }



    // Fetch all books (Default case)
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['all_books'])) {
        $books = $BooksClass->getAllBooks();
        if (!empty($books)) {
            echo json_encode(["status" => "success", "data" => $books]);
        } else {
            echo json_encode(["status" => "error", "message" => "No books found."]);
        }
    }
}
