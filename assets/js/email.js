document.getElementById("form").addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent form from submitting normally

    let formData = new FormData(this); // Get form data

    fetch("../../model/send_email.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text()) // Get text response first
    .then(text => {
        try {
            return JSON.parse(text); // Try parsing JSON
        } catch (error) {
            console.error("Response is not valid JSON:", text);
            throw new Error("Invalid response from server");
        }
    })
    .then(data => {
        if (data.status === "success") {
            showToast("Email sent successfully!", "success");
            document.getElementById("form").reset(); // Reset form
        } else {
            showToast("Error: " + data.message, "danger");
        }
    })
    .catch(error => {
        showToast("Something went wrong!", "danger");
        console.error("Error:", error);
    });
});

// Function to show toast notification
function showToast(message, type) {
    let toastEl = document.getElementById("toast-message");

    if (!toastEl) {
        console.error("Toast element not found!");
        return;
    }

    let toastBody = toastEl.querySelector(".toast-body");
    toastBody.innerText = message; // Set message text

    // Remove old classes and add new type class
    toastEl.classList.remove("text-bg-success", "text-bg-danger");
    toastEl.classList.add(`text-bg-${type}`);

    // Show toast using Bootstrap Toast
    let toast = new bootstrap.Toast(toastEl);
    toast.show();
}
