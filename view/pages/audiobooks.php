<?php
$baseUrl = '/client-site';
require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/header.php";
?>

<div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
  <h1 class="text-primary">Audiobooks</h1>
  <h5 class="mb-4">Tune In, Zone Out! : Life's noisy,<br> but your audiobook escape is just a click away.</h5>
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
</div><br><br>

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
            <h5>Portrait Photography</h5>
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

      <!-- Audiobook 7 -->
      <div class="col-md-3">
        <div class="audiobook-item">
          <figure class="audiobook-style">
            <img src="<?= $baseUrl ?>/assets/images/tab-item7.jpg" alt="Audiobooks" class="audiobook-item">
          </figure>
          <figcaption>
            <h5>Life Among the Pirates</h5>
            <span>Narrated by Armor Ramsey</span>
            <div class="item-price">₹ 20.00</div>
            <audio controls>
              <source src="path-to-audio-file7.mp3" type="audio/mpeg">
              Your browser does not support the audio element.
            </audio>
          </figcaption>
        </div>
      </div>

      <!-- Audiobook 8 -->
      <div class="col-md-3">
        <div class="audiobook-item">
          <figure class="audiobook-style">
            <img src="<?= $baseUrl ?>/assets/images/tab-item8.jpg" alt="Audiobooks" class="audiobook-item">
          </figure>
          <figcaption>
            <h5> Peace Life</h5>
            <span>Narrated by Armor Ramsey</span>
            <div class="item-price">₹ 20.00</div>
            <audio controls>
              <source src="path-to-audio-file8.mp3" type="audio/mpeg">
              Your browser does not support the audio element.
            </audio>
          </figcaption>
        </div>
      </div>
    </div>
  </div>
</div>

<style>



</style>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/footer.php"; ?>
