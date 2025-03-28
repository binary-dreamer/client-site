$(document).ready(function () {
    let wishlist = JSON.parse(localStorage.getItem("wishlist")) || [];

    $(".wishlist-btn").click(function (e) {
        e.preventDefault();
        let bookId = $(this).data("book-id");
        let button = $(this);

        if (!wishlist.includes(bookId)) {
            wishlist.push(bookId);
            localStorage.setItem("wishlist", JSON.stringify(wishlist));

            button.find(".wishlist-icon i").addClass("wishlist-added");
            button.find("span").text("Added to Wishlist");
            button.addClass("disabled");

            // ✅ Send AJAX request to PHP to update session
            $.ajax({
                url: "/client-site/controller/wishlistController.php",
                type: "POST",
                data: JSON.stringify({ book_id: bookId, action: "add" }),
                contentType: "application/json",
                success: function (response) {
                    if (response.status === "success") {
                        alert("Book added to wishlist!");
                        window.location.href = "/client-site/view/pages/wishlist.php"; // ✅ Redirect to wishlist page
                    } else {
                        alert(response.message);
                    }
                },
                error: function () {
                    alert("Failed to add book to wishlist.");
                }
            });
        } else {
            alert("Book is already in your wishlist.");
        }
    });
});
