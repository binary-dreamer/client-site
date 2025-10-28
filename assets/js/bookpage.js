$(document).ready(function () {
    const baseUrl = "/client-site";
    
    console.log("jQuery Version:", $.fn.jquery);

    if (typeof $.fn.turn === "undefined") {
        console.warn("Turn.js not detected! Trying to load manually...");

        $.getScript("https://cdnjs.cloudflare.com/ajax/libs/turn.js/3/turn.min.js")
            .done(function () {
                console.log("Turn.js is now loaded:", typeof $.fn.turn);
            })
            .fail(function () {
                console.error("Failed to load Turn.js!");
            });
    } else {
        console.log("Turn.js is already loaded!");
    }

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
                    var scale = 2.0;
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
        $("#magazine").html(""); // Clear previous content
    
        pdfjsLib.getDocument(pdfUrl).promise.then(function (pdf) {
            const totalPages = pdf.numPages;
            const magazine = $("#magazine");
    
            let promises = [];
    
            for (let i = 1; i <= totalPages; i++) {
                let promise = pdf.getPage(i).then(function (page) {
                    return new Promise((resolve) => {
                        let scale = 1.5; 
                        let viewport = page.getViewport({ scale: scale });
    
                        let canvas = document.createElement("canvas");
                        let context = canvas.getContext("2d");
                        canvas.width = viewport.width;
                        canvas.height = viewport.height;
    
                        let renderContext = { canvasContext: context, viewport: viewport };
    
                        page.render(renderContext).promise.then(() => {
                            let pageDiv = document.createElement("div");
                            pageDiv.classList.add("page"); // Use class "page" instead of "hard"
                            pageDiv.style.background = `url(${canvas.toDataURL("image/png")}) no-repeat center center`;
                            pageDiv.style.backgroundSize = "contain";
    
                            resolve(pageDiv);
                        });
                    });
                });
    
                promises.push(promise);
            }
    
            Promise.all(promises).then(function (pages) {
                pages.forEach((page) => {
                    magazine.append(page);
                });
    
                // Initialize turn.js AFTER all pages are loaded
                if (typeof $.fn.turn !== "undefined") {
                    console.log("Initializing turn.js...");
                    magazine.turn({
                        width: 1000,
                        height: 800,
                        elevation: 50,
                        gradients: true,
                        autoCenter: true,
                        display: "double",
                        acceleration: true, 
                        when: {
                            turning: function (event, page, view) {
                                $("#page-number").text(`Page ${page} of ${totalPages}`);
                            },
                            turned: function (event, page, view) {
                                $(this).turn('center');
                            }
                        }
                    });
                } else {
                    console.error("Turn.js is still not loaded!");
                }
            });
        }).catch(function (error) {
            console.error("Error loading PDF:", error);
            $("#magazine").html('<div class="alert alert-danger">Error loading the book. Please try again.</div>');
        });
    }
    

    function addNavigationControls(magazine) {
        let currentZoom = 1;
        const zoomStep = 0.2;

        $('.zoom-in').off('click').on('click', function () {
            currentZoom = Math.min(2.5, currentZoom + zoomStep);
            magazine.css({
                'transform': `scale(${currentZoom})`,
                'transform-origin': 'center center'
            });
        });

        $('.zoom-out').off('click').on('click', function () {
            currentZoom = Math.max(0.5, currentZoom - zoomStep);
            magazine.css({
                'transform': `scale(${currentZoom})`,
                'transform-origin': 'center center'
            });
        });

        $(document).off('keydown').on('keydown', function (e) {
            if ($("#magazineModal").is(":visible")) {
                switch (e.keyCode) {
                    case 37:
                        magazine.turn('previous');
                        e.preventDefault();
                        break;
                    case 39:
                        magazine.turn('next');
                        e.preventDefault();
                        break;
                }
            }
        });
    }

    $(document).on("click", ".view-flipbook-btn", function () {
        var pdfUrl = $(this).attr("data-pdf");
        var bookTitle = $(this).attr("data-title");

        $("#flipbookModalLabel").text(bookTitle);
        loadPdfAsImages(pdfUrl);
        $("#flipbookModal").modal("show");
    });

    $(document).on("click", ".view-magazine-btn", function () {
        const pdfUrl = $(this).attr("data-pdf");
        const bookTitle = $(this).attr("data-title");

        $("#magazineModalLabel").text(bookTitle);
        loadMagazineView(pdfUrl);
        $("#magazineModal").modal("show");
    });

    $("#magazineModal").on("hidden.bs.modal", function () {
        const magazine = $('#magazine');
        if (magazine.data().turn) {
            magazine.turn('destroy');
        }
    });

    loadBookDetails();
});
