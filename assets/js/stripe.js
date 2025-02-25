$(document).ready(function () {
    $(".subscription-btn").click(function () {
        let planId = $(this).data("plan-id");
        console.log("🔹 Selected Plan ID:", planId); // Debugging

        $.ajax({
            url: "http://localhost/client-site/index.php?controller=Checkout&action=createSession",
            type: "POST",
            data: { plan_id: planId },
            dataType: "json",
            success: function (response) {
                console.log(" Server Response:", response); // Debugging

                if (response.id) {
                    console.log("🔗 Redirecting to Stripe Checkout:", response.id);
                    
                    // Correct redirection using Stripe.js
                    var stripe = Stripe("pk_test_51QuctDKCx3klHNuFFYeXEYpWUcHbbtQpuoSCpcrN99BdGQEUSX1eijKQx45ZuT20x3MaP932ksTUoByhHd1WGZzr00vwdwsuFF");
                    stripe.redirectToCheckout({ sessionId: response.id }).then(function (result) {
                        if (result.error) {
                            alert("Error: " + result.error.message);
                        }
                    });

                } else {
                    alert("Something went wrong. Please try again.");
                }
            },
            error: function (xhr, status, error) {
                console.log(" AJAX Error:", xhr.responseText);
                alert("Something went wrong, please try again later.");
            }
        });
    });
});
