<?php
$baseUrl = '/client-site';
require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/header.php"; ?>

<!-- Header Start -->
<!-- <div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Books</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="<?= $baseUrl ?>/index.php">Home</a></li>
            <li class="breadcrumb-item active">Books</li>
        </ol>
    </div>
</div> -->
<!-- Header End -->

<div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
  <h1 class="text-primary">Books</h1>
  <h5 class=" mb-4">Find Your Escape!: Because reality is overrated.<br> Welcome to NovelNest—your cozy escape from adulting!</h5>
  <p class="mb-0"></p>
</div>


<section id="popular-books" class="bookshelf py-0 my-0">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <div class="section-header align-center">
          <h2 class="section-title"></h2>
        </div>

        <ul class="tabs">
          <li data-tab-target="#all-genre" class="active tab">All Genre</li>
          <li data-tab-target="#fiction" class="tab">Fiction</li>
          <li data-tab-target="#horror" class="tab">Horror</li>
          <li data-tab-target="#historical" class="tab">Historical</li>
          <li data-tab-target="#science" class="tab">Science Fiction</li>
          <li data-tab-target="#romantic" class="tab">Romantic</li>
          <li data-tab-target="#thriller" class="tab">Thriller</li>
          <li data-tab-target="#youngadult" class="tab">Young Adult</li>
          <li data-tab-target="#education" class="tab">Education</li>
          <li data-tab-target="#autobiography" class="tab">Autobiography</li>
        </ul>

        <div class="tab-content">
  <div id="all-genre" data-tab-content class="active">
    <div class="row">
      <!-- All Genre Books -->
      <div class="col-md-3">
        <div class="product-item">
          <figure class="product-style">
            <img src="<?= $baseUrl ?>/assets/images/tab-item1.jpg" alt="Books" class="product-item">
          </figure>
          <figcaption>
            <h5>Portrait photography</h5>
            <span>Adam Silber</span>
            <div class="item-price">$ 40.00</div>
          </figcaption>
        </div>
      </div>
      <div class="col-md-3">
        <div class="product-item">
          <figure class="product-style">
            <img src="<?= $baseUrl ?>/assets/images/tab-item2.jpg" alt="Books" class="product-item">
          </figure>
          <figcaption>
            <h5>Once upon a time</h5>
            <span>Klien Marry</span>
            <div class="item-price">$ 35.00</div>
          </figcaption>
        </div>
      </div>
      <div class="col-md-3">
        <div class="product-item">
          <figure class="product-style">
            <img src="<?= $baseUrl ?>/assets/images/tab-item3.jpg" alt="Books" class="product-item">
          </figure>
          <figcaption>
            <h5>Tips of simple lifestyle</h5>
            <span>Bratt Smith</span>
            <div class="item-price">$ 40.00</div>
          </figcaption>
        </div>
      </div>
      <div class="col-md-3">
        <div class="product-item">
          <figure class="product-style">
            <img src="<?= $baseUrl ?>/assets/images/tab-item4.jpg" alt="Books" class="product-item">
          </figure>
          <figcaption>
            <h5>Just felt from outside</h5>
            <span>Nicole Wilson</span>
            <div class="item-price">$ 40.00</div>
          </figcaption>
        </div>
      </div>
      <div class="col-md-3">
        <div class="product-item">
          <figure class="product-style">
            <img src="<?= $baseUrl ?>/assets/images/tab-item5.jpg" alt="Books" class="product-item">
          </figure>
          <figcaption>
            <h5>Peaceful Enlightment</h5>
            <span>Marmik Lama</span>
            <div class="item-price">$ 40.00</div>
          </figcaption>
        </div>
      </div>
      <div class="col-md-3">
        <div class="product-item">
          <figure class="product-style">
            <img src="<?= $baseUrl ?>/assets/images/tab-item6.jpg" alt="Books" class="product-item">
          </figure>
          <figcaption>
            <h5>Great travel at desert</h5>
            <span>Sanchit Howdy</span>
            <div class="item-price">$ 40.00</div>
          </figcaption>
        </div>
      </div>
      <div class="col-md-3">
        <div class="product-item">
          <figure class="product-style">
            <img src="<?= $baseUrl ?>/assets/images/tab-item7.jpg" alt="Books" class="product-item">
          </figure>
          <figcaption>
            <h5>Life among the pirates</h5>
            <span>Armor Ramsey</span>
            <div class="item-price">$ 40.00</div>
          </figcaption>
        </div>
      </div>
      <div class="col-md-3">
        <div class="product-item">
          <figure class="product-style">
            <img src="<?= $baseUrl ?>/assets/images/tab-item8.jpg" alt="Books" class="product-item">
          </figure>
          <figcaption>
            <h5>Simple way of piece life</h5>
            <span>Armor Ramsey</span>
            <div class="item-price">$ 40.00</div>
          </figcaption>
        </div>
      </div>
    </div>
  </div>

  <div id="fiction" data-tab-content>
    <div class="row">
      <!-- Fiction Books -->
      <div class="col-md-3">
        <div class="product-item">
          <figure class="product-style">
            <img src="<?= $baseUrl ?>/assets/images/tab-item1.jpg" alt="Books" class="product-item">
          </figure>
          <figcaption>
            <h5>Portrait photography</h5>
            <span>Adam Silber</span>
            <div class="item-price">$ 40.00</div>
          </figcaption>
        </div>
      </div>
      <div class="col-md-3">
        <div class="product-item">
          <figure class="product-style">
            <img src="<?= $baseUrl ?>/assets/images/tab-item2.jpg" alt="Books" class="product-item">
          </figure>
          <figcaption>
            <h5>Once upon a time</h5>
            <span>Klien Marry</span>
            <div class="item-price">$ 35.00</div>
          </figcaption>
        </div>
      </div>
    </div>
  </div>

  <div id="horror" data-tab-content>
    <div class="row">
      <!-- Horror Books -->
      <div class="col-md-3">
        <div class="product-item">
          <figure class="product-style">
            <img src="<?= $baseUrl ?>/assets/images/tab-item3.jpg" alt="Books" class="product-item">
          </figure>
          <figcaption>
            <h5>Tips of simple lifestyle</h5>
            <span>Bratt Smith</span>
            <div class="item-price">$ 40.00</div>
          </figcaption>
        </div>
      </div>
      <div class="col-md-3">
        <div class="product-item">
          <figure class="product-style">
            <img src="<?= $baseUrl ?>/assets/images/tab-item4.jpg" alt="Books" class="product-item">
          </figure>
          <figcaption>
            <h5>Just felt from outside</h5>
            <span>Nicole Wilson</span>
            <div class="item-price">$ 40.00</div>
          </figcaption>
        </div>
      </div>
    </div>
  </div>

  <div id="historical" data-tab-content>
    <div class="row">
      <!-- Historical Books -->
      <div class="col-md-3">
        <div class="product-item">
          <figure class="product-style">
            <img src="<?= $baseUrl ?>/assets/images/tab-item5.jpg" alt="Books" class="product-item">
          </figure>
          <figcaption>
            <h5>Peaceful Enlightment</h5>
            <span>Marmik Lama</span>
            <div class="item-price">$ 40.00</div>
          </figcaption>
        </div>
      </div>
      <div class="col-md-3">
        <div class="product-item">
          <figure class="product-style">
            <img src="<?= $baseUrl ?>/assets/images/tab-item6.jpg" alt="Books" class="product-item">
          </figure>
          <figcaption>
            <h5>Great travel at desert</h5>
            <span>Sanchit Howdy</span>
            <div class="item-price">$ 40.00</div>
          </figcaption>
        </div>
      </div>
    </div>
  </div>

  <div id="science" data-tab-content>
    <div class="row">
      <!-- Science Fiction Books -->
      <div class="col-md-3">
        <div class="product-item">
          <figure class="product-style">
            <img src="<?= $baseUrl ?>/assets/images/tab-item7.jpg" alt="Books" class="product-item">
          </figure>
          <figcaption>
            <h5>Life among the pirates</h5>
            <span>Armor Ramsey</span>
            <div class="item-price">$ 40.00</div>
          </figcaption>
        </div>
      </div>
      <div class="col-md-3">
        <div class="product-item">
          <figure class="product-style">
            <img src="<?= $baseUrl ?>/assets/images/tab-item8.jpg" alt="Books" class="product-item">
          </figure>
          <figcaption>
            <h5>Simple way of piece life</h5>
            <span>Armor Ramsey</span>
            <div class="item-price">$ 40.00</div>
          </figcaption>
        </div>
      </div>
    </div>
  </div>

  <div id="romantic" data-tab-content>
    <div class="row">
      <!-- Romantic Books -->
      <div class="col-md-3">
        <div class="product-item">
          <figure class="product-style">
            <img src="<?= $baseUrl ?>/assets/images/tab-item1.jpg" alt="Books" class="product-item">
          </figure>
          <figcaption>
            <h5>Portrait photography</h5>
            <span>Adam Silber</span>
            <div class="item-price">$ 40.00</div>
          </figcaption>
        </div>
      </div>
      <div class="col-md-3">
        <div class="product-item">
          <figure class="product-style">
            <img src="<?= $baseUrl ?>/assets/images/tab-item2.jpg" alt="Books" class="product-item">
          </figure>
          <figcaption>
            <h5>Once upon a time</h5>
            <span>Klien Marry</span>
            <div class="item-price">$ 35.00</div>
          </figcaption>
        </div>
      </div>
      <div class="col-md-3">
        <div class="product-item">
          <figure class="product-style">
            <img src="<?= $baseUrl ?>/assets/images/tab-item3.jpg" alt="Books" class="product-item">
          </figure>
          <figcaption>
            <h5>Tips of simple lifestyle</h5>
            <span>Bratt Smith</span>
            <div class="item-price">$ 40.00</div>
          </figcaption>
        </div>
      </div>
    </div>
  </div>

  <div id="thriller" data-tab-content>
    <div class="row">
      <!-- Thriller Books -->
      <div class="col-md-3">
        <div class="product-item">
          <figure class="product-style">
            <img src="<?= $baseUrl ?>/assets/images/tab-item4.jpg" alt="Books" class="product-item">
          </figure>
          <figcaption>
            <h5>Just felt from outside</h5>
            <span>Nicole Wilson</span>
            <div class="item-price">$ 40.00</div>
          </figcaption>
        </div>
      </div>
      <div class="col-md-3">
        <div class="product-item">
          <figure class="product-style">
            <img src="<?= $baseUrl ?>/assets/images/tab-item5.jpg" alt="Books" class="product-item">
          </figure>
          <figcaption>
            <h5>Peaceful Enlightment</h5>
            <span>Marmik Lama</span>
            <div class="item-price">$ 40.00</div>
          </figcaption>
        </div>
      </div>
    </div>
  </div>

  <div id="youngadult" data-tab-content>
    <div class="row">
      <!-- Young Adult Books -->
      <div class="col-md-3">
        <div class="product-item">
          <figure class="product-style">
            <img src="<?= $baseUrl ?>/assets/images/tab-item6.jpg" alt="Books" class="product-item">
          </figure>
          <figcaption>
            <h5>Great travel at desert</h5>
            <span>Sanchit Howdy</span>
            <div class="item-price">$ 40.00</div>
          </figcaption>
        </div>
      </div>
      <div class="col-md-3">
        <div class="product-item">
          <figure class="product-style">
            <img src="<?= $baseUrl ?>/assets/images/tab-item7.jpg" alt="Books" class="product-item">
          </figure>
          <figcaption>
            <h5>Life among the pirates</h5>
            <span>Armor Ramsey</span>
            <div class="item-price">$ 40.00</div>
          </figcaption>
        </div>
      </div>
    </div>
  </div>

  <div id="education" data-tab-content>
    <div class="row">
      <!-- Education Books -->
      <div class="col-md-3">
        <div class="product-item">
          <figure class="product-style">
            <img src="<?= $baseUrl ?>/assets/images/tab-item8.jpg" alt="Books" class="product-item">
          </figure>
          <figcaption>
            <h5>Simple way of piece life</h5>
            <span>Armor Ramsey</span>
            <div class="item-price">$ 40.00</div>
          </figcaption>
        </div>
      </div>
      <div class="col-md-3">
        <div class="product-item">
          <figure class="product-style">
            <img src="<?= $baseUrl ?>/assets/images/tab-item1.jpg" alt="Books" class="product-item">
          </figure>
          <figcaption>
            <h5>Portrait photography</h5>
            <span>Adam Silber</span>
            <div class="item-price">$ 40.00</div>
          </figcaption>
        </div>
      </div>
    </div>
  </div>

  <div id="autobiography" data-tab-content>
    <div class="row">
      <!-- Autobiography Books -->
      <div class="col-md-3">
        <div class="product-item">
          <figure class="product-style">
            <img src="<?= $baseUrl ?>/assets/images/tab-item2.jpg" alt="Books" class="product-item">
          </figure>
          <figcaption>
            <h5>Once upon a time</h5>
            <span>Klien Marry</span>
            <div class="item-price">$ 35.00</div>
          </figcaption>
        </div>
      </div>
      <div class="col-md-3">
        <div class="product-item">
          <figure class="product-style">
            <img src="<?= $baseUrl ?>/assets/images/tab-item3.jpg" alt="Books" class="product-item">
          </figure>
          <figcaption>
            <h5>Tips of simple lifestyle</h5>
            <span>Bratt Smith</span>
            <div class="item-price">$ 40.00</div>
          </figcaption>
        </div>
      </div>
      <div class="col-md-3">
        <div class="product-item">
          <figure class="product-style">
            <img src="<?= $baseUrl ?>/assets/images/tab-item4.jpg" alt="Books" class="product-item">
          </figure>
          <figcaption>
            <h5>Just felt from outside</h5>
            <span>Nicole Wilson</span>
            <div class="item-price">$ 40.00</div>
          </figcaption>
        </div>
      </div>
    </div>
  </div>
</div>


      </div><!--inner-tabs-->

    </div>
  </div>
</section>

</div>




<?php require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/footer.php"; ?>
