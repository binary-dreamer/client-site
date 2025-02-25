<?php
$baseUrl = '/client-site';
require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/header.php";
require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/model/BookClass.php";

$BookClass = new BookClass();
$book_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
?>

<section class="ebook-container">
    <div class="back-button-container">
        <a href="javascript:history.back()" class="back-button">
            <i class="fas fa-arrow-left"></i>
        </a>
        <span class="back-text">Back</span>
    </div>

    <div id="book-details">
        <p class="text-center">Loading book details...</p>
    </div>
</section>

<!-- Flipbook Modal -->
<div class="modal fade" id="flipbookModal" tabindex="-1" aria-labelledby="flipbookModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="flipbookModalLabel">Flipbook View</h5> <!-- FIXED: Added ID -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="flipbook" class="flipbook-container" style="max-height: 90vh; overflow-y: auto;"></div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.12.313/pdf.min.js"></script>

<script>
    const bookId = <?= $book_id ?>; // Embedding book ID directly in JavaScript
</script>
<script src="/client-site/assets/js/bookpage.js"></script>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/footer.php"; ?>