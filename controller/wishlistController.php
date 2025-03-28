<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

header('Content-Type: application/json');
require_once __DIR__ . "/../model/BookClass.php";

class wishlistController {
    private $BookClass;

    public function __construct() {
        $this->BookClass = new BookClass();
    }

    public function addToWishlist($book_id) {
        if (!isset($_SESSION['wishlist'])) {
            $_SESSION['wishlist'] = [];
        }

        if (!in_array($book_id, $_SESSION['wishlist'])) {
            $_SESSION['wishlist'][] = $book_id;
            echo json_encode(["status" => "success", "message" => "Book added to wishlist"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Book is already in wishlist"]);
        }
        exit;
    }

    public function removeFromWishlist($book_id) {
        if (isset($_SESSION['wishlist']) && in_array($book_id, $_SESSION['wishlist'])) {
            $_SESSION['wishlist'] = array_values(array_diff($_SESSION['wishlist'], [$book_id]));
            echo json_encode(["status" => "removed", "message" => "Book removed from wishlist"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Book not found in wishlist"]);
        }
        exit;
    }

    public function getWishlist() {
        if (!isset($_SESSION['wishlist']) || empty($_SESSION['wishlist'])) {
            echo json_encode(["wishlist" => []]);
            exit;
        }

        $wishlistBooks = $this->BookClass->getBookById($_SESSION['wishlist']);
        echo json_encode(["wishlist" => $wishlistBooks]);
        exit;
    }
}

$rawData = file_get_contents("php://input");
$inputData = json_decode($rawData, true);

if (!empty($inputData) && isset($inputData["action"])) {
    $wishlistController = new wishlistController();

    if ($inputData["action"] === "add" && isset($inputData["book_id"])) {
        $wishlistController->addToWishlist(intval($inputData["book_id"]));
    } elseif ($inputData["action"] === "remove" && isset($inputData["book_id"])) {
        $wishlistController->removeFromWishlist(intval($inputData["book_id"]));
    } elseif ($inputData["action"] === "get") {
        $wishlistController->getWishlist();
    }
}

echo json_encode(["status" => "error", "message" => "Invalid request"]);
exit;
