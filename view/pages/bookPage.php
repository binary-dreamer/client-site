<?php
$baseUrl = '/client-site';
require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/header.php";
require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/model/BookClass.php";

$BookClass = new BookClass();
$book_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
?>
<div class="containerPage">
    <section>
        <div class="back-button-container">
            <div class="audioBPM">
                <marquee class="marq" bgcolor="#F9F9F9" direction="left" scrollamount="8">
                    <span class="audiosinglepage">Dive into the World of Stories!</span>
                    <span class="audiosinglepage">Happy Reading! 📚</span>
                    <span class="audiosinglepage">Unlock New Adventures with Every Page!</span>
                    <span class="audiosinglepage">Feed Your Imagination, One Book at a Time!</span>
                    <span class="audiosinglepage">Escape Reality, Embrace Fantasy!</span>
                    <span class="audiosinglepage">Get Lost in a Good Book!</span>
                    <span class="audiosinglepage">Your Next Favorite Book Awaits!</span>
                    <span class="audiosinglepage">Enjoy the Journey Through Words!</span>
                </marquee>
            </div>
            <a href="javascript:history.back()" class="back-button">
                <i class="fas fa-arrow-left"></i>
                <span class="back-text"> Back</span>
            </a>
        </div>
    </section>
    <section class="ebook-container">
        <div class="">
            <div id="book-details">
                <p class="text-center">Loading book details...</p>
            </div>
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
    <!-- Magazine Flipbook Modal -->
    <div class="modal fade" id="magazineModal" tabindex="-1" aria-labelledby="magazineModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="magazineModalLabel">Flipbook View</h5>
                    <div class="controls">
                        <button class="btn btn-sm btn-secondary zoom-in">
                            <i class="fas fa-search-plus"></i>
                        </button>
                        <button class="btn btn-sm btn-secondary zoom-out">
                            <i class="fas fa-search-minus"></i>
                        </button>
                        <span id="page-number" class="ms-2">Page 1</span>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="magazine" class="magazine-container"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery (Only Load Once) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- PDF.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.12.313/pdf.min.js"></script>

<!-- Turn.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/turn.js/3/turn.min.js"></script>

<!-- Book ID from PHP -->
<script>
    const bookId = <?= $book_id ?>; 
</script>

<!-- Your JS File -->
<script src="/client-site/assets/js/bookpage.js"></script>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/footer.php"; ?>