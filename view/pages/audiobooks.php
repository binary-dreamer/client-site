<?php
$baseUrl = '/client-site';
require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/header.php"; ?>

<div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
  <h1 class="text-primary">Audiobooks</h1>
  <h5 class=" mb-4">" Tune In, Zone Out!: Life's noisy, but your audiobook escape <br> is just a click away. "</h5>
  <p class="mb-0"></p>
</div>

<div class="search-container">
        <input type="text" placeholder="Search Title" style="width: 300px;">
        <select style="width: 200px;">
            <option class="dropdown">All Genre</option>
            <option class="dropdown">Fiction</option>
            <option class="dropdown">Horror</option>
            <option class="dropdown">Historical</option>
            <option class="dropdown">Science Fiction</option>
            <option class="dropdown">Romantic</option>
            <option class="dropdown">Thriller</option>
            <option class="dropdown">Young Adult</option>
            <option class="dropdown">Education</option>
            <option class="dropdown">Autobiography</option>
        </select>
    </div>


<?php require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/footer.php"; ?>