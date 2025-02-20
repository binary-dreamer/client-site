document.addEventListener("DOMContentLoaded", function () {
    var quill = new Quill("#editor-container", {
        theme: "snow",
        modules: {
            toolbar: [
                [{ header: [1, 2, 3, false] }],
                ["bold", "italic", "underline"],
                [{ list: "ordered" }, { list: "bullet" }],
                ["emoji"], 
                ["image"], 
                ["clean"],
            ],
             "emoji-toolbar": true,  // Enable emoji in toolbar
            "emoji-shortname": true, // Enable emoji shortcuts (:smile:)
            "emoji-textarea": false 
        },
    });

    let editingJournalId = null;

    // Save or Update Journal
    document.getElementById("saveJournal").addEventListener("click", function () {
        let content = quill.root.innerHTML.trim();

        if (!content) {
            alert("Journal content cannot be empty!");
            return;
        }

        let url = "/client-site/controller/journalController.php";
        let action = editingJournalId ? "update" : "save";
        let requestData = {
            action: action,
            content: content,
        };

        if (editingJournalId) {
            requestData.journal_id = editingJournalId;
        }

        fetch(url, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(requestData),
        })
            .then((response) => response.json())
            .then((data) => {
                if (data.status === "success") {
                    alert(editingJournalId ? "Journal updated successfully!" : "Journal saved successfully!");
                    editingJournalId = null;
                    document.getElementById("saveJournal").innerText = "Save Journal";
                    quill.root.innerHTML = "";
                    document.getElementById("viewJournals").click();
                } else {
                    alert("Error: " + data.message);
                }
            })
            .catch((error) => console.error("Error:", error));
    });

    // Fetch & Display Journals
    document.getElementById("viewJournals").addEventListener("click", function () {
        fetch("/client-site/controller/journalController.php?action=fetch")
            .then((response) => response.json())
            .then((data) => {
                if (data.status === "success") {
                    displayJournals(data.journals);
                } else {
                    console.error("Error fetching journals:", data.message);
                }
            })
            .catch((error) => console.error("Error:", error));
    });

    function displayJournals(journals) {
        let journalSection = document.getElementById("journalEntries");
        if (!journalSection) {
            journalSection = document.createElement("div");
            journalSection.id = "journalEntries";
            journalSection.style.marginTop = "20px";
            document.getElementById("journal").appendChild(journalSection);
        }
        journalSection.innerHTML = "<h4 style='color:#20c997'>Saved Journals</h4>";

        if (journals.length === 0) {
            journalSection.innerHTML += "<p>No journals found.</p>";
            return;
        }

        journalSection.innerHTML += journals
            .map(
                (journal) => `
                <div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px; position:relative;">
                    <strong>${journal.created_at}</strong>
                    <p>${journal.content}</p>
                    <button class="editJournal" data-id="${journal.id}">✏️</button>
                    <button class="deleteJournal" data-id="${journal.id}">🗑️</button>
                </div>
            `
            )
            .join("");

        // DELETE BUTTON FUNCTIONALITY
        document.querySelectorAll(".deleteJournal").forEach((button) => {
            button.addEventListener("click", function () {
                let journalId = this.getAttribute("data-id");
                if (!confirm("Are you sure you want to delete this journal?")) return;

                fetch("/client-site/controller/journalController.php", {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify({ action: "delete", journal_id: journalId }),
                })
                    .then((response) => response.json())
                    .then((data) => {
                        if (data.status === "success") {
                            alert("Journal deleted successfully!");
                            this.parentElement.remove();
                        }
                    });
            });
        });

        // EDIT BUTTON FUNCTIONALITY
        document.querySelectorAll(".editJournal").forEach((button) => {
            button.addEventListener("click", function () {
                let journalId = this.getAttribute("data-id");

                fetch(`/client-site/controller/journalController.php?action=get&journal_id=${journalId}`)
                    .then((response) => response.json())
                    .then((data) => {
                        if (data.status === "success") {
                            quill.root.innerHTML = data.journal.content;
                            editingJournalId = journalId;
                            document.getElementById("saveJournal").innerText = "Update Journal";
                            alert("You can now edit the journal and save changes.");
                        } else {
                            alert("Error fetching journal.");
                        }
                    })
                    .catch((error) => console.error("Error:", error));
            });
        });
    }
});
