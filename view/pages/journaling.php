<?php
$baseUrl = '/client-site';
require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/header.php";
?>

<div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
  <h1 class="text-primary">Journaling</h1>
  <h5 class=" mb-4">Where Your Thoughts Find a Home!</h5>
  <p class="mb-0"></p>
</div>

<section id="journal" class="bookshelf py-0 my-0">
  <div class="container">

  </div>
</section>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/footer.php"; ?>