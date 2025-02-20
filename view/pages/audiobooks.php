<?php
$baseUrl = '/client-site';
require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/header.php";
require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/controller/audioFetch.php"; // Include the controller
?>

<div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
  <h1 class="text-primary">Audiobooks</h1>
  <h5 class="mb-4">"Tune In, Zone Out!: Life's noisy, but your audiobook escape is just a click away."</h5>
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
</div><br><br>

<div class="container">
<div class="container">
  <div class="audiobooks-container">
    <div class="row">
      <?php if (!empty($audiobooks)): ?>
        <?php foreach ($audiobooks as $audiobook) : ?>
          <div class="col-md-3">
            <div class="audiobook-item">
              <figure class="audiobook-style" style="text-align: center;">
                <img src="<?= $baseUrl ?>/assets/images/<?= htmlspecialchars($audiobook['book_image']); ?>" 
                     alt="<?= htmlspecialchars($audiobook['book_name']); ?>" 
                     class="audiobook-item"
                     style="width: 150px; height: 220px; object-fit: cover; border-radius: 8px; display: block; margin: 0 auto;margin-top:15%">
              </figure>
              <figcaption style="text-align: center;">
                <h5><?= htmlspecialchars($audiobook['audiobook_name']); ?></h5>
                <span>Narrated by <?= htmlspecialchars($audiobook['narrator']); ?></span>
                <div class="item-price">₹ 20.00</div>

                <!-- <p>Audio Path: <?= $baseUrl ?>/assets/audio/<?= htmlspecialchars($audiobook['audio_file']); ?></p>  -->
                
                <audio controls style="width: 100%;">
                  <source src="<?= $baseUrl ?>/assets/audio/<?= htmlspecialchars($audiobook['audio_file']); ?>" 
                          type="audio/mp3/media">
                  Your browser does not support the audio element.
                </audio>
              </figcaption>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <p class="text-center">No audiobooks available.</p>
      <?php endif; ?>
    </div>
  </div>
</div>
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/footer.php"; ?>
