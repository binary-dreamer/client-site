<?php
$baseUrl = '/client-site';
require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . '/model/AudiobookClass.php';

// header('Content-Type: application/json');
// header("Access-Control-Allow-Origin: *");

$AudioFetch = new AudiobookClass();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Fetch a specific audiobook by ID
    if (isset($_GET['audiobook']) && is_numeric($_GET['audiobook'])) {
        $audiobook = $AudioFetch->getAudiobookById($_GET['audiobook']);
        if ($audiobook) {
            echo json_encode(["status" => "success", "data" => $audiobook]);
        } else {
            echo json_encode(["status" => "error", "message" => "No audiobook found."]);
        }
        exit;
    }

// Fetch books that have audiobooks
if (isset($_GET['fetch_books_with_audiobooks'])) {
    $booksWithAudiobooks = $AudioFetch->getBooksWithAudiobooks();
    if (!empty($booksWithAudiobooks)) {
        echo json_encode(["status" => "success", "data" => $booksWithAudiobooks]);
    } else {
        echo json_encode(["status" => "error", "message" => "No books with audiobooks found."]);
    }
    exit;
}

// echo json_encode(["status" => "error", "message" => "Invalid request."]);
}
?>