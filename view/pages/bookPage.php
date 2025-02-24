<?php
$baseUrl = '/client-site';
require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/header.php";

// Get book ID from URL
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

<!-- Fullscreen PDF Viewer Modal -->
<div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content h-100">
            <div class="modal-header">
                <h5 class="modal-title" style="margin-bottom: 25px;">PDF Viewer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0 m-0 h-100" style="position: relative;">
                <iframe id="pdfViewer" class="w-100 h-100" style="border: none;"></iframe>
                <div class="pdf-overlay"></div> <!-- Overlay blocks right-click but allows scrolling -->
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
   $(document).ready(function() {
    const baseUrl = '/client-site';
    const bookId = <?= $book_id ?>;

    function loadBookDetails() {
        $.ajax({
            url: `${baseUrl}/model/fetchBookDetails.php`,
            type: "POST",
            data: { book_id: bookId },
            beforeSend: function() {
                $("#book-details").html('<p class="text-center">Fetching book details...</p>');
            },
            success: function(response) {
                $("#book-details").html(response);
            },
            error: function() {
                $("#book-details").html('<p class="text-center">Error loading book details.</p>');
            }
        });
    }

    // Handle click on "View PDF" button
    $(document).on('click', '.view-pdf-btn', function() {
        var pdfUrl = $(this).attr("data-pdf");
        $("#pdfViewer").attr("src", pdfUrl);
        $('#pdfModal').modal('show');

        // Once the iframe loads, disable right-click inside it
        $("#pdfViewer").on("load", function() {
            disableRightClickInsideIframe();
        });
    });

    function disableRightClickInsideIframe() {
        var iframe = document.getElementById("pdfViewer");
        if (iframe) {
            iframe.onload = function() {
                var iframeDoc = iframe.contentDocument || iframe.contentWindow.document;
                iframeDoc.addEventListener('contextmenu', function(event) {
                    event.preventDefault();
                });
            };
        }
    }

    loadBookDetails();

    // Disable right-click on the modal background but allow scrolling
    $("#pdfModal").on("contextmenu", function(event) {
        event.preventDefault();
    });
});


</script>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/footer.php"; ?>