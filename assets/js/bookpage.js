$(document).ready(function () {
    const baseUrl = "/client-site";

    console.log("Book ID:", bookId); // Debugging

    if (!bookId || isNaN(bookId)) {
        console.error("Error: Book ID is missing or invalid.");
        return;
    }

    pdfjsLib.GlobalWorkerOptions.workerSrc = "https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.12.313/pdf.worker.min.js";

    function loadBookDetails() {
        $.ajax({
            url: `${baseUrl}/model/fetchBookDetails.php`,
            type: "POST",
            data: { book_id: bookId },
            beforeSend: function () {
                $("#book-details").html('<p class="text-center">Fetching book details...</p>');
            },
            success: function (response) {
                $("#book-details").html(response);
            },
            error: function () {
                $("#book-details").html('<p class="text-center">Error loading book details.</p>');
            }
        });
    }

    function loadPdfAsImages(pdfUrl) {
        $("#flipbook").html(""); // Clear previous content

        pdfjsLib.getDocument(pdfUrl).promise.then(function (pdf) {
            let totalPages = pdf.numPages;

            for (let i = 1; i <= totalPages; i++) {
                pdf.getPage(i).then(function (page) {
                    var scale = 2.0; // Adjusted for better readability
                    var viewport = page.getViewport({ scale: scale });

                    var canvas = document.createElement("canvas");
                    var context = canvas.getContext("2d");
                    canvas.width = Math.floor(viewport.width);
                    canvas.height = Math.floor(viewport.height);

                    var renderContext = { canvasContext: context, viewport: viewport };

                    page.render(renderContext).promise.then(function () {
                        var img = document.createElement("img");
                        img.src = canvas.toDataURL("image/png");
                        img.classList.add("flipbook-page");
                        img.style.width = "100%";
                        img.style.display = "block";

                        $("#flipbook").append(img);
                    }).catch(function (error) {
                        console.error("Error rendering page:", error);
                    });
                }).catch(function (error) {
                    console.error("Error loading page:", error);
                });
            }
        }).catch(function (error) {
            console.error("Error loading PDF:", error);
        });
    }

    $(document).on("click", ".view-flipbook-btn", function () {
        var pdfUrl = $(this).attr("data-pdf");
        var bookTitle = $(this).attr("data-title");

        $("#flipbookModalLabel").text(bookTitle); // Fixed: Corrected modal title update
        loadPdfAsImages(pdfUrl);
        $("#flipbookModal").modal("show");
    });

    loadBookDetails();
});
