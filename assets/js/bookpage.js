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

    function loadMagazineView(pdfUrl) {
        $('#magazine').html('');
        
        pdfjsLib.getDocument(pdfUrl).promise.then(function(pdf) {
            const totalPages = pdf.numPages;
            const promises = [];
    
            for (let i = 1; i <= totalPages; i++) {
                promises.push(
                    pdf.getPage(i).then(function(page) {
                        const canvas = document.createElement('canvas');
                        const context = canvas.getContext('2d');
                        
                        // Set dimensions for better viewing
                        const desiredWidth = 2000;
                        const viewport = page.getViewport({ scale: 1.0 });
                        const scale = desiredWidth / viewport.width;
                        const scaledViewport = page.getViewport({ scale });
    
                        canvas.width = scaledViewport.width;
                        canvas.height = scaledViewport.height;
    
                        return page.render({
                            canvasContext: context,
                            viewport: scaledViewport
                        }).promise.then(function() {
                            const div = document.createElement('div');
                            div.className = 'page';
                            div.style.width = `${scaledViewport.width}px`;
                            div.style.height = `${scaledViewport.height}px`;
                            div.appendChild(canvas);
                            return div;
                        });
                    })
                );
            }
    
            Promise.all(promises).then(function(pages) {
                const magazine = $('#magazine');
                pages.forEach(page => {
                    magazine.append(page);
                });
    
                // Initialize turn.js with enhanced settings
                magazine.turn({
                    display: 'double',
                    acceleration: true,
                    gradients: true,
                    elevation: 50,
                    width: pages[0].offsetWidth * 2,
                    height: pages[0].offsetHeight,
                    autoCenter: true,
                    when: {
                        turning: function(e, page, view) {
                            // Add page turning sound effect
                            const audio = new Audio('/client-site/assets/sounds/page-flip.mp3');
                            audio.play();
                        },
                        turned: function(e, page) {
                            // Add page number display
                            const currentPage = magazine.turn('page');
                            const totalPages = magazine.turn('pages');
                            $('#page-number').text(`Page ${currentPage} of ${totalPages}`);
                        }
                    }
                });
    
                // Add navigation controls
                addNavigationControls(magazine);
            });
        });
    }
    
    function addNavigationControls(magazine) {
        // Add zoom controls
        let currentZoom = 1;
        
        $('.zoom-in').click(function() {
            currentZoom += 0.2;
            magazine.css('transform', `scale(${currentZoom})`);
        });
    
        $('.zoom-out').click(function() {
            currentZoom = Math.max(0.5, currentZoom - 0.2);
            magazine.css('transform', `scale(${currentZoom})`);
        });
    
        // Keyboard navigation
        $(document).keydown(function(e) {
            switch(e.keyCode) {
                case 37: magazine.turn('previous'); break;
                case 39: magazine.turn('next'); break;
            }
        });
    
        // Mouse wheel navigation
        magazine.bind('mousewheel', function(e) {
            if (e.originalEvent.wheelDelta > 0) {
                magazine.turn('previous');
            } else {
                magazine.turn('next');
            }
        });
    }

    // Existing click handler for regular flipbook
    $(document).on("click", ".view-flipbook-btn", function () {
        var pdfUrl = $(this).attr("data-pdf");
        var bookTitle = $(this).attr("data-title");

        $("#flipbookModalLabel").text(bookTitle);
        loadPdfAsImages(pdfUrl);
        $("#flipbookModal").modal("show");
    });

    // New click handler for magazine view
    $(document).on("click", ".view-magazine-btn", function () {
        const pdfUrl = $(this).attr("data-pdf");
        const bookTitle = $(this).attr("data-title");

        $("#magazineModalLabel").text(bookTitle);
        loadMagazineView(pdfUrl);
        $("#magazineModal").modal("show");
    });

    // Cleanup when magazine modal is closed
    $("#magazineModal").on("hidden.bs.modal", function() {
        const magazine = $('#magazine');
        if (magazine.data().turn) {
            magazine.turn('destroy');
        }
    });

    $(document).on("click", ".view-flipbook-btn", function () {
        var pdfUrl = $(this).attr("data-pdf");
        var bookTitle = $(this).attr("data-title");

        $("#flipbookModalLabel").text(bookTitle); // Fixed: Corrected modal title update
        loadPdfAsImages(pdfUrl);
        $("#flipbookModal").modal("show");
    });

    loadBookDetails();
});
