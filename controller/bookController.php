<?php
$baseUrl = '/NovelNest';
require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . '/model/BooksClass.php';

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");

$BooksClass = new BookClass();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $books = $BooksClass->getAllBooks();
    
    if (!empty($books)) {
        echo json_encode([
            "status" => "success",
            "data" => $books
        ]);
    } else {
        echo json_encode([
            "status" => "error",
            "message" => "No books found."
        ]);
    }
}
