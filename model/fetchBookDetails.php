<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/client-site/model/BookClass.php";

$BookClass = new BookClass();
$book_id = isset($_POST['book_id']) ? intval($_POST['book_id']) : 0;

if ($book_id > 0) {
    $book = $BookClass->getBookById($book_id);
    $pdf = $BookClass->getPdfByBookId($book_id);

    if ($book) {
        $output = '
        <div class="ebook-content">
            <div class="ebook-image-container">
                <img src="/NovelNest/assets/images/book-cover/' . htmlspecialchars($book['cover_image']) . '" 
                    alt="' . htmlspecialchars($book['title']) . '" class="ebook-image">
            </div>
            <div class="ebook-details">
                <h2 class="ebook-title">' . htmlspecialchars($book['title']) . '</h2>
                <p class="author"><i class="fas fa-book"></i> <strong>' . htmlspecialchars($book['author']) . '</strong></p>
                <div class="ebook-meta">
                    <span class="pages"><i class="fas fa-file-alt"></i> ' . htmlspecialchars($book['pages']) . ' </span>
                    <span class="language"><i class="fas fa-globe"></i> Language: English</span>
                </div>
                <span class="ebook-category">' . htmlspecialchars($book['genre_name']) . '</span>
                <a href="#" class="wishlist-btn">
                    <span class="wishlist-icon"><i class="fas fa-heart"></i></span>
                    <span>Add to Wishlist</span>
                </a>
                <div class="rating-container mt-4">
                    <span class="rating-text">Rating: </span>
                    <div class="star-rating">
                        <span class="star" data-value="1">☆</span>
                        <span class="star" data-value="2">☆</span>
                        <span class="star" data-value="3">☆</span>
                        <span class="star" data-value="4">☆</span>
                        <span class="star" data-value="5">☆</span>
                    </div>
                    <div class="rating-value" id="rating-value">' . htmlspecialchars($book['rating']) . '</div>
                </div>
                <p class="description">' . nl2br(htmlspecialchars($book['description'])) . '</p>';

        if ($pdf) {
            $pdfPath = '/NovelNest/assets/pdfs/' . rawurlencode($pdf['file']);
            $output .= '
                        <div class="d-flex gap-2">
                            <button class="btn btn-primary view-flipbook-btn"
                                    data-title="' . htmlspecialchars($book['title']) . '"
                                    data-pdf="' . $pdfPath . '"
                                    data-bs-toggle="modal"
                                    data-bs-target="#flipbookModal">
                                Start Reading
                            </button>
                            <button class="btn btn-secondary view-magazine-btn"
                                    data-title="' . htmlspecialchars($book['title']) . '"
                                    data-pdf="' . $pdfPath . '"
                                    data-bs-toggle="modal"
                                    data-bs-target="#magazineModal">
                                View Flipbook
                            </button>
                        </div>';
        }


        $output .= '
                <div class="social mt-4">
                    <h5 class="mb-0 me-2">Share:</h5>
                    <ul class="list-inline d-flex gap-3 p-0 mb-0 social-icons">
                        <li><a href="https://www.facebook.com/" class="social-icon facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://x.com/" class="social-icon twitter"><i class="fab fa-x-twitter"></i></a></li>
                        <li><a href="https://www.youtube.com/" class="social-icon youtube"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="https://in.pinterest.com/" class="social-icon pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>';

        echo $output;
    } else {
        echo '<p class="text-center">Book not found.</p>';
    }
} else {
    echo '<p class="text-center">Invalid book ID.</p>';
}
