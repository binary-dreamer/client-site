<?php
session_start();
$baseUrl = '/client-site';
require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/header.php";
?>

<div class="text-center mx-auto pb-5" style="max-width: 800px;">
  <h1 class="text-primary">Journaling</h1>

  <h5 class=" mb-4">Where Your Thoughts Find a Home!</h5>
  <p class="mb-0"></p>

</div>

<!-- Include Quill Editor -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/quill-emoji/dist/quill-emoji.css">
<script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/quill-emoji/dist/quill-emoji.min.js"></script>

<section id="journal">
<button id="viewJournals" style="font-size: 15px;margin-left:80% ;padding: 12px 8px; border-radius: 10px; background-color: #20c997; color: white; border: none; cursor: pointer;margin-bottom: 10px;">
    📖 View Saved Journals
</button>
<div class="container">
    <div id="editor-container" style="height: 400px;"></div></div>
    <button id="saveJournal" style="font-size: 15px; margin-left:8% ;padding: 12px 8px; border-radius: 10px; background-color: #20c997; color: white; border: none; cursor: pointer; margin-top: 10px;">
    📝 Save Journal
</button>
<!-- Added a div to display fetched journals --><div class="container">
<div id="journalEntries" style="margin-top: 20px;"></div></div>
</section>

<script src="/client-site/assets/js/journal.js"></script>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/footer.php"; ?>
