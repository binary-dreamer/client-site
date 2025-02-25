<?php
$baseUrl = '/client-site';
require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/header.php";
?>

<div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
  <h1 class="text-primary">Audiobooks</h1>


  <h5 class="mb-0">Tune In, Zone Out!: Life's noisy, <br> but your audiobook escape is just a click away.</h5>


</div>

<div class="search-container">
  <input type="text" placeholder="Search Title" style="width: 300px;">
  <!-- <select style="width: 200px;">
    <option>All Genre</option>
    <option>Fiction</option>
    <option>Horror</option>
    <option>Historical</option>
    <option>Science Fiction</option>
    <option>Romantic</option>
    <option>Thriller</option>
    <option>Young Adult</option>
    <option>Education</option>
    <option>Autobiography</option>
  </select> -->
</div><br><br>

<div class="container">
  <div class="container">
    <div class="audiobooks-container">
      <div class="row">

        <!-- Audiobook 1 -->
        <div class="col-md-3">
          <div class="audiobook-item">
            <figure class="audiobook-style">
              <img src="<?= $baseUrl ?>/assets/images/tab-item1.jpg" alt="Audiobooks" class="audiobook-item">
            </figure>
            <figcaption>
              <a href="<?= $baseUrl ?>/view/pages/audiobookPage.php">
                <h5>Portrait Photography</h5>
              </a>
              <span>Narrated by Adam Silber</span>
              <div class="item-price">₹ 20.00</div>
              <audio controls>
                <source src="path-to-audio-file1.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
            </figcaption>
          </div>
        </div>

        <!-- Audiobook 2 -->
        <div class="col-md-3">
          <div class="audiobook-item">
            <figure class="audiobook-style">
              <img src="<?= $baseUrl ?>/assets/images/tab-item2.jpg" alt="Audiobooks" class="audiobook-item">
            </figure>
            <figcaption>
              <h5>Once Upon a Time</h5>
              <span>Narrated by Klien Marry</span>
              <div class="item-price">₹ 17.50</div>
              <audio controls>
                <source src="path-to-audio-file2.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
            </figcaption>
          </div>
        </div>

        <!-- Audiobook 3 -->
        <div class="col-md-3">
          <div class="audiobook-item">
            <figure class="audiobook-style">
              <img src="<?= $baseUrl ?>/assets/images/tab-item3.jpg" alt="Audiobooks" class="audiobook-item">
            </figure>
            <figcaption>
              <h5>Simple Lifestyle</h5>
              <span>Narrated by Bratt Smith</span>
              <div class="item-price">₹ 20.00</div>
              <audio controls>
                <source src="path-to-audio-file3.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
            </figcaption>
          </div>
        </div>

        <!-- Audiobook 4 -->
        <div class="col-md-3">
          <div class="audiobook-item">
            <figure class="audiobook-style">
              <img src="<?= $baseUrl ?>/assets/images/tab-item4.jpg" alt="Audiobooks" class="audiobook-item">
            </figure>
            <figcaption>
              <h5>Just Felt from Outside</h5>
              <span>Narrated by Nicole Wilson</span>
              <div class="item-price">₹ 20.00</div>
              <audio controls>
                <source src="path-to-audio-file4.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
            </figcaption>
          </div>
        </div>

        <!-- Audiobook 5 -->
        <div class="col-md-3">
          <div class="audiobook-item">
            <figure class="audiobook-style">
              <img src="<?= $baseUrl ?>/assets/images/tab-item5.jpg" alt="Audiobooks" class="audiobook-item">
            </figure>
            <figcaption>
              <h5>Peaceful Enlightment</h5>
              <span>Narrated by Marmik Lama</span>
              <div class="item-price">₹ 20.00</div>
              <audio controls>
                <source src="path-to-audio-file5.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
            </figcaption>
          </div>
        </div>

        <!-- Audiobook 6 -->
        <div class="col-md-3">
          <div class="audiobook-item">
            <figure class="audiobook-style">
              <img src="<?= $baseUrl ?>/assets/images/tab-item6.jpg" alt="Audiobooks" class="audiobook-item">
            </figure>
            <figcaption>
              <h5>Great Travel at Desert</h5>
              <span>Narrated by Sanchit Howdy</span>
              <div class="item-price">₹ 20.00</div>
              <audio controls>
                <source src="path-to-audio-file6.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
            </figcaption>
          </div>
        </div>




      </div>
    </div>
  </div>



  <?php require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/footer.php"; ?>