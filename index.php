<?php $baseUrl = '/client-site';
require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/header.php";
?>

<!-- BillBoard Section -->
<section id="billboard" class="position-relative d-flex align-items-center py-5 bg-light-gray"
  style="background-image: url(<?= $baseUrl ?>/assets/images/banner_2.jpg); background-size: cover; background-repeat: no-repeat; background-position: center; min-height: 60vh;">

  <div class="container">
    <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
      
      <!-- Text Content -->
      <div class="col-md-6 text-center text-md-start mt-4 mt-md-0">
        <div class="banner-content">
          <h1 class="main-title">Welcome To NovelNest!!</h1>
          <div class="text-animation">
            <p class="dynamic-text"></p>
          </div>
        </div>
      </div>

      <!-- Image -->
      <div class="col-md-6 text-center">
        <div class="image-holder">
          <img src="<?= $baseUrl ?>/assets/images/bb2.png" class="img-fluid" alt="banner" style="max-width: 100%; height: auto;">
        </div>
      </div>
      
    </div>
  </div>

</section>
<!-- BillBoard Section End -->


<!--Services-info-->
<section id="company-services" class="padding-large pb-0">

  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 pb-3 pb-lg-0">
        <div class="icon-box d-flex">
          <div class="icon-box-icon pe-3 pb-3">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path d="M249.6 471.5c10.8 3.8 22.4-4.1 22.4-15.5l0-377.4c0-4.2-1.6-8.4-5-11C247.4 52 202.4 32 144 32C93.5 32 46.3 45.3 18.1 56.1C6.8 60.5 0 71.7 0 83.8L0 454.1c0 11.9 12.8 20.2 24.1 16.5C55.6 460.1 105.5 448 144 448c33.9 0 79 14 105.6 23.5zm76.8 0C353 462 398.1 448 432 448c38.5 0 88.4 12.1 119.9 22.6c11.3 3.8 24.1-4.6 24.1-16.5l0-370.3c0-12.1-6.8-23.3-18.1-27.6C529.7 45.3 482.5 32 432 32c-58.4 0-103.4 20-123 35.6c-3.3 2.6-5 6.8-5 11L304 456c0 11.4 11.7 19.3 22.4 15.5z" />
            </svg>
          </div>
          <div class="icon-box-content">
            <h4 class="card-title mb-1 text-capitalize text-dark">Online Reading</h4>
            <p>Read your favorite books anytime, anywhere with our web reader.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 pb-3 pb-lg-0">
        <div class="icon-box d-flex">
          <div class="icon-box-icon pe-3 pb-3">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path d="M0 64C0 28.7 28.7 0 64 0L224 0l0 128c0 17.7 14.3 32 32 32l128 0 0 144-208 0c-35.3 0-64 28.7-64 64l0 144-48 0c-35.3 0-64-28.7-64-64L0 64zm384 64l-128 0L256 0 384 128zM176 352l32 0c30.9 0 56 25.1 56 56s-25.1 56-56 56l-16 0 0 32c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-48 0-80c0-8.8 7.2-16 16-16zm32 80c13.3 0 24-10.7 24-24s-10.7-24-24-24l-16 0 0 48 16 0zm96-80l32 0c26.5 0 48 21.5 48 48l0 64c0 26.5-21.5 48-48 48l-32 0c-8.8 0-16-7.2-16-16l0-128c0-8.8 7.2-16 16-16zm32 128c8.8 0 16-7.2 16-16l0-64c0-8.8-7.2-16-16-16l-16 0 0 96 16 0zm80-112c0-8.8 7.2-16 16-16l48 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-32 0 0 32 32 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-32 0 0 48c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-64 0-64z" />
            </svg>
          </div>
          <div class="icon-box-content">
            <h4 class="card-title mb-1 text-capitalize text-dark">E-Books</h4>
            <p>Download and read thousands of e-books on any device.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 pb-3 pb-lg-0">
        <div class="icon-box d-flex">
          <div class="icon-box-icon pe-3 pb-3">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
              <path d="M64 0C28.7 0 0 28.7 0 64L0 448c0 35.3 28.7 64 64 64l256 0c35.3 0 64-28.7 64-64l0-288-128 0c-17.7 0-32-14.3-32-32L224 0 64 0zM256 0l0 128 128 0L256 0zm2 226.3c37.1 22.4 62 63.1 62 109.7s-24.9 87.3-62 109.7c-7.6 4.6-17.4 2.1-22-5.4s-2.1-17.4 5.4-22C269.4 401.5 288 370.9 288 336s-18.6-65.5-46.5-82.3c-7.6-4.6-10-14.4-5.4-22s14.4-10 22-5.4zm-91.9 30.9c6 2.5 9.9 8.3 9.9 14.8l0 128c0 6.5-3.9 12.3-9.9 14.8s-12.9 1.1-17.4-3.5L113.4 376 80 376c-8.8 0-16-7.2-16-16l0-48c0-8.8 7.2-16 16-16l33.4 0 35.3-35.3c4.6-4.6 11.5-5.9 17.4-3.5zm51 34.9c6.6-5.9 16.7-5.3 22.6 1.3C249.8 304.6 256 319.6 256 336s-6.2 31.4-16.3 42.7c-5.9 6.6-16 7.1-22.6 1.3s-7.1-16-1.3-22.6c5.1-5.7 8.1-13.1 8.1-21.3s-3.1-15.7-8.1-21.3c-5.9-6.6-5.3-16.7 1.3-22.6z" />
            </svg>
          </div>
          <div class="icon-box-content">
            <h4 class="card-title mb-1 text-capitalize text-dark">Audiobooks</h4>
            <p>Listen to professionally narrated audiobooks on the go.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 pb-3 pb-lg-0">
        <div class="icon-box d-flex">
          <div class="icon-box-icon pe-3 pb-3">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path d="M345 39.1L472.8 168.4c52.4 53 52.4 138.2 0 191.2L360.8 472.9c-9.3 9.4-24.5 9.5-33.9 .2s-9.5-24.5-.2-33.9L438.6 325.9c33.9-34.3 33.9-89.4 0-123.7L310.9 72.9c-9.3-9.4-9.2-24.6 .2-33.9s24.6-9.2 33.9 .2zM0 229.5L0 80C0 53.5 21.5 32 48 32l149.5 0c17 0 33.3 6.7 45.3 18.7l168 168c25 25 25 65.5 0 90.5L277.3 442.7c-25 25-65.5 25-90.5 0l-168-168C6.7 262.7 0 246.5 0 229.5zM144 144a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z" />
            </svg>
          </div>
          <div class="icon-box-content">
            <h4 class="card-title mb-1 text-capitalize text-dark">Subscription</h4>
            <p>Access unlimited books with our flexible subscription plans.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
<!--Services-info end-->

<!-- Featured Books -->
<section id="best-selling-items" class="position-relative padding-large ">
  <div class="your-element" data-aos="fade-in">
    <div class="container">
      <div class="section-title d-md-flex justify-content-between align-items-center mb-4">
        <h3 class="d-flex align-items-center">Featured Books</h3>
        <a href="view/pages/books.php" class="btn">View All</a>
      </div>

      <div class="swiper product-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="card position-relative p-4 border rounded-3">
              <div class="position-absolute">
                <p class="bg-primary py-1 px-3 fs-6 text-white rounded-2">10% off</p>
              </div>
              <img src="<?= $baseUrl ?>/assets/images/product-item1.png" class="img-fluid shadow-sm" alt="product item">
              <h6 class="mt-4 mb-0 fw-bold"><a href="<?= $baseUrl ?>/view/pages/bookPage.php">House of Sky Breath</a></h6>
              <div class="review-content d-flex">
                <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                <div class="rating text-warning d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
              </div>
              <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
              <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                <button type="button" href="#" class="btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="top"
                  data-bs-title="Tooltip on top">
                  <svg class="cart">
                    <use xlink:href="#cart"></use>
                  </svg>
                </button>
                <a href="#" class="btn btn-dark">
                  <span>
                    <svg class="wishlist">
                      <use xlink:href="#heart"></use>
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card position-relative p-4 border rounded-3">
              <img src="<?= $baseUrl ?>/assets/images/product-item2.png" class="img-fluid shadow-sm" alt="product item">
              <h6 class="mt-4 mb-0 fw-bold"><a href="index.html">Heartland Stars</a></h6>
              <div class="review-content d-flex">
                <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                <div class="rating text-warning d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
              </div>

              <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
              <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                <button type="button" href="#" class="btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="top"
                  data-bs-title="Tooltip on top">
                  <svg class="cart">
                    <use xlink:href="#cart"></use>
                  </svg>
                </button>
                <a href="#" class="btn btn-dark">
                  <span>
                    <svg class="wishlist">
                      <use xlink:href="#heart"></use>
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card position-relative p-4 border rounded-3">
              <img src="<?= $baseUrl ?>/assets/images/product-item3.png" class="img-fluid shadow-sm" alt="product item">
              <h6 class="mt-4 mb-0 fw-bold"><a href="index.html">Heavenly Bodies</a></h6>
              <div class="review-content d-flex">
                <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                <div class="rating text-warning d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
              </div>

              <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
              <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                <button type="button" href="#" class="btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="top"
                  data-bs-title="Tooltip on top">
                  <svg class="cart">
                    <use xlink:href="#cart"></use>
                  </svg>
                </button>
                <a href="#" class="btn btn-dark">
                  <span>
                    <svg class="wishlist">
                      <use xlink:href="#heart"></use>
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card position-relative p-4 border rounded-3">
              <div class="position-absolute">
                <p class="bg-primary py-1 px-3 fs-6 text-white rounded-2">10% off</p>
              </div>
              <img src="<?= $baseUrl ?>/assets/images/product-item4.png" class="img-fluid shadow-sm" alt="product item">
              <h6 class="mt-4 mb-0 fw-bold"><a href="index.html">His Saving Grace</a></h6>
              <div class="review-content d-flex">
                <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                <div class="rating text-warning d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
              </div>

              <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
              <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                <button type="button" href="#" class="btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="top"
                  data-bs-title="Tooltip on top">
                  <svg class="cart">
                    <use xlink:href="#cart"></use>
                  </svg>
                </button>
                <a href="#" class="btn btn-dark">
                  <span>
                    <svg class="wishlist">
                      <use xlink:href="#heart"></use>
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card position-relative p-4 border rounded-3">
              <img src="<?= $baseUrl ?>/assets/images/product-item5.png" class="img-fluid shadow-sm" alt="product item">
              <h6 class="mt-4 mb-0 fw-bold"><a href="index.html">My Dearest Darkest</a></h6>
              <div class="review-content d-flex">
                <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                <div class="rating text-warning d-flex align-items-center d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
              </div>

              <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
              <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                <button type="button" href="#" class="btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="top"
                  data-bs-title="Tooltip on top">
                  <svg class="cart">
                    <use xlink:href="#cart"></use>
                  </svg>
                </button>
                <a href="#" class="btn btn-dark">
                  <span>
                    <svg class="wishlist">
                      <use xlink:href="#heart"></use>
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card position-relative p-4 border rounded-3">
              <img src="<?= $baseUrl ?>/assets/images/product-item6.png" class="img-fluid shadow-sm" alt="product item">
              <h6 class="mt-4 mb-0 fw-bold"><a href="index.html">The Story of Success</a></h6>
              <div class="review-content d-flex">
                <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                <div class="rating text-warning d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
              </div>

              <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
              <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                <button type="button" href="#" class="btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="top"
                  data-bs-title="Tooltip on top">
                  <svg class="cart">
                    <use xlink:href="#cart"></use>
                  </svg>
                </button>
                <a href="#" class="btn btn-dark">
                  <span>
                    <svg class="wishlist">
                      <use xlink:href="#heart"></use>
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>


<!-- Category Section -->
<section id="categories" class="padding-large pt-0">
  <div class="container">
    <div class="section-title overflow-hidden mb-4">
      <h3 class="d-flex align-items-center">Categories</h3>
    </div>
    <div class="row">
      <!-- First Three Categories (Always Visible) -->
      <div class="col-md-4">
        <div class="card text-center mb-4 border-0 rounded-3 category-box">
          <a href="index.html">
            <img src="<?= $baseUrl ?>/assets/images/fiction.jpg" class="img-fluid rounded-3 category-image" alt="fiction">
            <h6 class="position-absolute bottom-0 bg-primary m-4 py-2 px-3 rounded-3">
              <a href="<?= $baseUrl ?>/view/pages/books.php" class="text-white">Fiction</a>
            </h6>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-center mb-4 border-0 rounded-3 category-box">
          <a href="index.html">
            <img src="<?= $baseUrl ?>/assets/images/horror.jpg" class="img-fluid rounded-3 category-image" alt="Horror">
            <h6 class="position-absolute bottom-0 bg-primary m-4 py-2 px-3 rounded-3">
              <a href="<?= $baseUrl ?>/view/pages/books.php" class="text-white">Horror</a>
            </h6>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-center mb-4 border-0 rounded-3 category-box">
          <a href="index.html">
            <img src="<?= $baseUrl ?>/assets/images/historical.jpg" class="img-fluid rounded-3 category-image" alt="Historical">
            <h6 class="position-absolute bottom-0 bg-primary m-4 py-2 px-3 rounded-3">
              <a href="<?= $baseUrl ?>/view/pages/books.php" class="text-white">Historical</a>
            </h6>
          </a>
        </div>
      </div>

      <!-- Hidden Categories -->
      <div id="moreCategories" class="d-none">
        <div class="row">
          <div class="col-md-4">
            <div class="card text-center mb-4 border-0 rounded-3 category-box">
              <a href="index.html">
                <img src="<?= $baseUrl ?>/assets/images/science.jpg" class="img-fluid rounded-3 category-image" alt="Science Fiction">
                <h6 class="position-absolute bottom-0 bg-primary m-4 py-2 px-3 rounded-3">
                  <a href="<?= $baseUrl ?>/view/pages/books.php" class="text-white">Science Fiction</a>
                </h6>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-center mb-4 border-0 rounded-3 category-box">
              <a href="index.html">
                <img src="<?= $baseUrl ?>/assets/images/romance.jpg" class="img-fluid rounded-3 category-image" alt="Romance">
                <h6 class="position-absolute bottom-0 bg-primary m-4 py-2 px-3 rounded-3">
                  <a href="<?= $baseUrl ?>/view/pages/books.php" class="text-white">Romance</a>
                </h6>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-center mb-4 border-0 rounded-3 category-box">
              <a href="index.html">
                <img src="<?= $baseUrl ?>/assets/images/thriller.jpg" class="img-fluid rounded-3 category-image" alt="Thriller">
                <h6 class="position-absolute bottom-0 bg-primary m-4 py-2 px-3 rounded-3">
                  <a href="<?= $baseUrl ?>/view/pages/books.php" class="text-white">Thriller</a>
                </h6>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-center mb-4 border-0 rounded-3 category-box">
              <a href="index.html">
                <img src="<?= $baseUrl ?>/assets/images/young adult.jpg" class="img-fluid rounded-3 category-image" alt="Young Adult">
                <h6 class="position-absolute bottom-0 bg-primary m-4 py-2 px-3 rounded-3">
                  <a href="<?= $baseUrl ?>/view/pages/books.php" class="text-white">Young Adult</a>
                </h6>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-center mb-4 border-0 rounded-3 category-box">
              <a href="index.html">
                <img src="<?= $baseUrl ?>/assets/images/education.jpg" class="img-fluid rounded-3 category-image" alt="Education">
                <h6 class="position-absolute bottom-0 bg-primary m-4 py-2 px-3 rounded-3">
                  <a href="<?= $baseUrl ?>/view/pages/books.php" class="text-white">Education</a>
                </h6>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-center mb-4 border-0 rounded-3 category-box">
              <a href="index.html">
                <img src="<?= $baseUrl ?>/assets/images/autobiography.jpg" class="img-fluid rounded-3 category-image" alt="Autobiography">
                <h6 class="position-absolute bottom-0 bg-primary m-4 py-2 px-3 rounded-3">
                  <a href="<?= $baseUrl ?>/view/pages/books.php" class="text-white">Autobiography</a>
                </h6>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- See More Button -->
    <div class="text-center mt-4">
      <button id="seeMoreBtn" class="btn btn-primary">See More</button>
    </div>
  </div>
</section>

<!--Category Section end-->

<!-- Your categories section here -->


</body>


<!--Audiobook Section-->
<section id="audiobook-section">

  <div class="parallax-container">
    <div class="parallax-content">
      <div class="container text-center text-white">
        <h2 class="display-4 mb-4">Discover Our Audiobook Collection</h2>
        <p class="lead mb-4" style="color: white;">Escape Into a World Where Words Come Alive.</p>
        <a href="view/pages/audiobooks.php" class="btn">Browse Audiobooks</a>
      </div>
    </div>
  </div>

</section>
<!--Audiobook Section end-->

<!--Books section-->
<section id="best-selling-items" class="position-relative padding-large ">
  <!-- <div class="your-element" data-aos="fade-in"> -->
    <div class="container">
      <div class="section-title d-md-flex justify-content-between align-items-center mb-4">
        <h3 class="d-flex align-items-center">Books</h3>
        <a href="view/pages/books.php" class="btn">View All</a>
      </div>
      <div class="position-absolute top-50 end-0 pe-0 pe-xxl-5 me-0 me-xxl-5 swiper-next product-slider-button-next">
        <svg class="chevron-forward-circle d-flex justify-content-center align-items-center p-2" width="80" height="80">
          <use xlink:href="#alt-arrow-right-outline"></use>
        </svg>
      </div>
      <div class="position-absolute top-50 start-0 ps-0 ps-xxl-5 ms-0 ms-xxl-5 swiper-prev product-slider-button-prev">
        <svg class="chevron-back-circle d-flex justify-content-center align-items-center p-2" width="80" height="80">
          <use xlink:href="#alt-arrow-left-outline"></use>
        </svg>
      </div>
      <div class="swiper product-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="card position-relative p-4 border rounded-3">
              <div class="position-absolute">
                <p class="bg-primary py-1 px-3 fs-6 text-white rounded-2">10% off</p>
              </div>
              <img src="<?= $baseUrl ?>/assets/images/product-item1.png" class="img-fluid shadow-sm" alt="product item">
              <h6 class="mt-4 mb-0 fw-bold"><a href="index.html">House of Sky Breath</a></h6>
              <div class="review-content d-flex">
                <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                <div class="rating text-warning d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
              </div>
              <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
              <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                <button type="button" href="#" class="btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="top"
                  data-bs-title="Tooltip on top">
                  <svg class="cart">
                    <use xlink:href="#cart"></use>
                  </svg>
                </button>
                <a href="#" class="btn btn-dark">
                  <span>
                    <svg class="wishlist">
                      <use xlink:href="#heart"></use>
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card position-relative p-4 border rounded-3">
              <img src="<?= $baseUrl ?>/assets/images/product-item2.png" class="img-fluid shadow-sm" alt="product item">
              <h6 class="mt-4 mb-0 fw-bold"><a href="index.html">Heartland Stars</a></h6>
              <div class="review-content d-flex">
                <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                <div class="rating text-warning d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
              </div>

              <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
              <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                <button type="button" href="#" class="btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="top"
                  data-bs-title="Tooltip on top">
                  <svg class="cart">
                    <use xlink:href="#cart"></use>
                  </svg>
                </button>
                <a href="#" class="btn btn-dark">
                  <span>
                    <svg class="wishlist">
                      <use xlink:href="#heart"></use>
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card position-relative p-4 border rounded-3">
              <img src="<?= $baseUrl ?>/assets/images/product-item3.png" class="img-fluid shadow-sm" alt="product item">
              <h6 class="mt-4 mb-0 fw-bold"><a href="index.html">Heavenly Bodies</a></h6>
              <div class="review-content d-flex">
                <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                <div class="rating text-warning d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
              </div>

              <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
              <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                <button type="button" href="#" class="btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="top"
                  data-bs-title="Tooltip on top">
                  <svg class="cart">
                    <use xlink:href="#cart"></use>
                  </svg>
                </button>
                <a href="#" class="btn btn-dark">
                  <span>
                    <svg class="wishlist">
                      <use xlink:href="#heart"></use>
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card position-relative p-4 border rounded-3">
              <div class="position-absolute">
                <p class="bg-primary py-1 px-3 fs-6 text-white rounded-2">10% off</p>
              </div>
              <img src="<?= $baseUrl ?>/assets/images/product-item4.png" class="img-fluid shadow-sm" alt="product item">
              <h6 class="mt-4 mb-0 fw-bold"><a href="index.html">His Saving Grace</a></h6>
              <div class="review-content d-flex">
                <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                <div class="rating text-warning d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
              </div>

              <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
              <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                <button type="button" href="#" class="btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="top"
                  data-bs-title="Tooltip on top">
                  <svg class="cart">
                    <use xlink:href="#cart"></use>
                  </svg>
                </button>
                <a href="#" class="btn btn-dark">
                  <span>
                    <svg class="wishlist">
                      <use xlink:href="#heart"></use>
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card position-relative p-4 border rounded-3">
              <img src="<?= $baseUrl ?>/assets/images/product-item5.png" class="img-fluid shadow-sm" alt="product item">
              <h6 class="mt-4 mb-0 fw-bold"><a href="index.html">My Dearest Darkest</a></h6>
              <div class="review-content d-flex">
                <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                <div class="rating text-warning d-flex align-items-center d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
              </div>

              <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
              <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                <button type="button" href="#" class="btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="top"
                  data-bs-title="Tooltip on top">
                  <svg class="cart">
                    <use xlink:href="#cart"></use>
                  </svg>
                </button>
                <a href="#" class="btn btn-dark">
                  <span>
                    <svg class="wishlist">
                      <use xlink:href="#heart"></use>
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card position-relative p-4 border rounded-3">
              <img src="<?= $baseUrl ?>/assets/images/product-item6.png" class="img-fluid shadow-sm" alt="product item">
              <h6 class="mt-4 mb-0 fw-bold"><a href="index.html">The Story of Success</a></h6>
              <div class="review-content d-flex">
                <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                <div class="rating text-warning d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
              </div>

              <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
              <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                <button type="button" href="#" class="btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="top"
                  data-bs-title="Tooltip on top">
                  <svg class="cart">
                    <use xlink:href="#cart"></use>
                  </svg>
                </button>
                <a href="#" class="btn btn-dark">
                  <span>
                    <svg class="wishlist">
                      <use xlink:href="#heart"></use>
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<!--Books ends-->



<!--subscription-->
<section id="subscription" class="padding-large">
<!-- <div class="your-element" data-aos="fade-in"> -->
  <div class="container">
    <div class="row text-center mb-5">
      <div class="col-12"><br>
        <h2 class="display-4 mb-3" style="color:white;">Choose Your Reading Plan</h2>
        <p class="lead text-muted">Unlock a world of books with our flexible subscription plans</p>
      </div>
    </div>

    <div class="row justify-content-center">
      <!-- Book Explorer (FREE) Plan -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100 shadow-sm border-0 rounded-3">
          <div class="card-body p-5">
            <div class="mb-4">
              <h3 class="h4 mb-2">Book Explorer (FREE)</h3>
              <p class="text-teal mb-4">Perfect for those just starting their reading journey</p>
              <div class="d-flex align-items-baseline mb-3">
                <span class="h2 mb-0 fw-bold">Free</span>
                <span>/month</span>
              </div>
            </div>
            <ul class="list-unstyled mb-4">
              <li class="mb-3">
                <svg class="text-primary me-2" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
                Access to a curated selection of books, audiobooks, and eBooks
              </li>
              <li class="mb-3">
                <svg class="text-primary me-2" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
                Limited monthly reading selection
              </li>
              <li class="mb-3">
                <svg class="text-primary me-2" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
                Basic reading features
              </li>
            </ul>
            <button class="btn btn-outline-primary w-100">Start Free</button>
          </div>
        </div>
      </div>

      <!-- Epic Reader (PRO) Plan -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100 shadow-sm border-0 rounded-3">
          <div class="card-body p-5">
            <div class="mb-4">
              <h3 class="h4 mb-2">Epic Reader (PRO)</h3>
              <p class="text-teal mb-4">For the passionate reader who craves more</p>
              <div class="d-flex align-items-baseline mb-3">
                <span class="h2 mb-0 fw-bold">₹149</span>
                <span>/month</span>
              </div>
            </div>
            <ul class="list-unstyled mb-4">
              <li class="mb-3">
                <svg class="text-primary me-2" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
                Full access to a good selection of books
              </li>
              <li class="mb-3">
                <svg class="text-primary me-2" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
                No ads
              </li>
              <li class="mb-3">
                <svg class="text-primary me-2" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
                Some premium features (e.g., offline reading, bookmarks, etc.)
              </li>
              <li class="mb-3">
                <svg class="text-primary me-2" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
                Personalized recommendations
              </li>
            </ul>
            <button class="btn btn-outline-primary w-100">Start Pro </button>
          </div>
        </div>
      </div>

      <!-- Novel Enthusiast (MAX) Plan -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100 shadow-sm border-0 rounded-3">
          <div class="card-body p-5">
            <div class="mb-4">
              <h3 class="h4 mb-2">Novel Enthusiast (MAX)</h3>
              <p class="text-teal mb-4">For the ultimate book lover</p>
              <div class="d-flex align-items-baseline mb-3">
                <span class="h2 mb-0 fw-bold">₹349</span>
                <span>/month</span>
              </div>
            </div>
            <ul class="list-unstyled mb-4">
              <li class="mb-3">
                <svg class="text-primary me-2" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
                Unlimited access to all books, audiobooks, and eBooks
              </li>
              <li class="mb-3">
                <svg class="text-primary me-2" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
                Exclusive member-only content
              </li>
              <li class="mb-3">
                <svg class="text-primary me-2" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
                Early access to new releases
              </li>
              <li class="mb-3">
                <svg class="text-primary me-2" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
                Tailored recommendations
              </li>
            </ul>
            <button class="btn btn-outline-primary w-100">Start Max</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<!--subscription end-->



<!-- <section id="items-listing" class="padding-large">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mb-4 mb-lg-0 col-lg-3">
        <div class="featured border rounded-3 p-4">
          <div class="section-title overflow-hidden mb-5 mt-2">
            <h3 class="d-flex flex-column mb-0">Featured</h3>
          </div>
          <div class="items-lists">
            <div class="item d-flex">
              <img src="<?= $baseUrl ?>/assets/images/product-item2.png" class="img-fluid shadow-sm" alt="product item">
              <div class="item-content ms-3">
                <h6 class="mb-0 fw-bold"><a href="index.html">Echoes of the Ancients</a></h6>
                <div class="review-content d-flex">
                  <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                  <div class="rating text-warning d-flex align-items-center">
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                  </div>
                </div>
                <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
              </div>
            </div>
            <hr class="gray-400">
            <div class="item d-flex">
              <img src="<?= $baseUrl ?>/assets/images/product-item1.png" class="img-fluid shadow-sm" alt="product item">
              <div class="item-content ms-3">
                <h6 class="mb-0 fw-bold"><a href="index.html">The Midnight Garden</a></h6>
                <div class="review-content d-flex">
                  <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                  <div class="rating text-warning d-flex align-items-center">
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                  </div>
                </div>
                <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
              </div>
            </div>
            <hr>
            <div class="item d-flex">
              <img src="<?= $baseUrl ?>/assets/images/product-item3.png" class="img-fluid shadow-sm" alt="product item">
              <div class="item-content ms-3">
                <h6 class="mb-0 fw-bold"><a href="index.html">Shadow of the Serpent</a></h6>
                <div class="review-content d-flex">
                  <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                  <div class="rating text-warning d-flex align-items-center">
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                  </div>
                </div>
                <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4 mb-lg-0 col-lg-3">
        <div class="latest-items border rounded-3 p-4">
          <div class="section-title overflow-hidden mb-5 mt-2">
            <h3 class="d-flex flex-column mb-0">Latest items</h3>
          </div>
          <div class="items-lists">
            <div class="item d-flex">
              <img src="<?= $baseUrl ?>/assets/images/product-item4.png" class="img-fluid shadow-sm" alt="product item">
              <div class="item-content ms-3">
                <h6 class="mb-0 fw-bold"><a href="index.html">Whispering Winds</a></h6>
                <div class="review-content d-flex">
                  <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                  <div class="rating text-warning d-flex align-items-center">
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                  </div>
                </div>
                <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
              </div>
            </div>
            <hr class="gray-400">
            <div class="item d-flex">
              <img src="<?= $baseUrl ?>/assets/images/product-item5.png" class="img-fluid shadow-sm" alt="product item">
              <div class="item-content ms-3">
                <h6 class="mb-0 fw-bold"><a href="index.html">The Forgotten Realm</a></h6>
                <div class="review-content d-flex">
                  <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                  <div class="rating text-warning d-flex align-items-center">
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                  </div>
                </div>
                <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
              </div>
            </div>
            <hr>
            <div class="item d-flex">
              <img src="<?= $baseUrl ?>/assets/images/product-item6.png" class="img-fluid shadow-sm" alt="product item">
              <div class="item-content ms-3">
                <h6 class="mb-0 fw-bold"><a href="index.html">Moonlit Secrets</a></h6>
                <div class="review-content d-flex">
                  <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                  <div class="rating text-warning d-flex align-items-center">
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                  </div>
                </div>
                <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4 mb-lg-0 col-lg-3">
        <div class="best-reviewed border rounded-3 p-4">
          <div class="section-title overflow-hidden mb-5 mt-2">
            <h3 class="d-flex flex-column mb-0">Best reviewed</h3>
          </div>
          <div class="items-lists">
            <div class="item d-flex">
              <img src="<?= $baseUrl ?>/assets/images/product-item7.png" class="img-fluid shadow-sm" alt="product item">
              <div class="item-content ms-3">
                <h6 class="mb-0 fw-bold"><a href="index.html">The Crystal Key</a></h6>
                <div class="review-content d-flex">
                  <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                  <div class="rating text-warning d-flex align-items-center">
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                  </div>
                </div>
                <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
              </div>
            </div>
            <hr class="gray-400">
            <div class="item d-flex">
              <img src="<?= $baseUrl ?>/assets/images/product-item8.png" class="img-fluid shadow-sm" alt="product item">
              <div class="item-content ms-3">
                <h6 class="mb-0 fw-bold"><a href="index.html">Starlight Sonata</a></h6>
                <div class="review-content d-flex">
                  <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                  <div class="rating text-warning d-flex align-items-center">
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                  </div>
                </div>
                <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
              </div>
            </div>
            <hr>
            <div class="item d-flex">
              <img src="<?= $baseUrl ?>/assets/images/product-item9.png" class="img-fluid shadow-sm" alt="product item">
              <div class="item-content ms-3">
                <h6 class="mb-0 fw-bold"><a href="index.html">Tales of the Enchanted Forest</a></h6>
                <div class="review-content d-flex">
                  <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                  <div class="rating text-warning d-flex align-items-center">
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                  </div>
                </div>
                <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4 mb-lg-0 col-lg-3">
        <div class="on-sale border rounded-3 p-4">
          <div class="section-title overflow-hidden mb-5 mt-2">
            <h3 class="d-flex flex-column mb-0">On sale</h3>
          </div>
          <div class="items-lists">
            <div class="item d-flex">
              <img src="<?= $baseUrl ?>/assets/images/product-item10.png" class="img-fluid shadow-sm" alt="product item">
              <div class="item-content ms-3">
                <h6 class="mb-0 fw-bold"><a href="index.html">The Phoenix Chronicles</a></h6>
                <div class="review-content d-flex">
                  <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                  <div class="rating text-warning d-flex align-items-center">
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                  </div>
                </div>
                <span class="price text-primary fw-bold mb-2 fs-5"><s class="text-black-50">$1666</s>
                  $999</span>
              </div>
            </div>
            <hr class="gray-400">
            <div class="item d-flex">
              <img src="<?= $baseUrl ?>/assets/images/product-item11.png" class="img-fluid shadow-sm" alt="product item">
              <div class="item-content ms-3">
                <h6 class="mb-0 fw-bold"><a href="index.html">Dreams of Avalon</a></h6>
                <div class="review-content d-flex">
                  <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                  <div class="rating text-warning d-flex align-items-center">
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                  </div>
                </div>
                <span class="price text-primary fw-bold mb-2 fs-5"><s class="text-black-50">$500</s>
                  $410</span>
              </div>
            </div>
            <hr>
            <div class="item d-flex">
              <img src="<?= $baseUrl ?>/assets/images/product-item12.png" class="img-fluid shadow-sm" alt="product item">
              <div class="item-content ms-3">
                <h6 class="mb-0 fw-bold"><a href="index.html">Legends of the Dragon Isles</a></h6>
                <div class="review-content d-flex">
                  <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                  <div class="rating text-warning d-flex align-items-center">
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                  </div>
                </div>
                <span class="price text-primary fw-bold mb-2 fs-5"><s class="text-black-50">$600</s>
                  $500</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- <section id="customers-reviews" class="position-relative padding-large"
      style="background-image: url(<?= $baseUrl ?>/assets/images/banner-image-bg.jpg); background-size: cover; background-repeat: no-repeat; background-position: center; height: 600px;">
      <div class="container offset-md-3 col-md-6 ">
        <div class="position-absolute top-50 end-0 pe-0 pe-xxl-5 me-0 me-xxl-5 swiper-next testimonial-button-next">
          <svg class="chevron-forward-circle d-flex justify-content-center align-items-center p-2" width="80" height="80">
            <use xlink:href="#alt-arrow-right-outline"></use>
          </svg>
        </div>
        <div class="position-absolute top-50 start-0 ps-0 ps-xxl-5 ms-0 ms-xxl-5 swiper-prev testimonial-button-prev">
          <svg class="chevron-back-circle d-flex justify-content-center align-items-center p-2" width="80" height="80">
            <use xlink:href="#alt-arrow-left-outline"></use>
          </svg>
        </div>
        <div class="section-title mb-4 text-center">
          <h3 class="mb-4">Customers reviews</h3>
        </div>
        <div class="swiper testimonial-swiper ">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="card position-relative text-left p-5 border rounded-3">
                <blockquote>"I stumbled upon this bookstore while visiting the city, and it instantly became my favorite spot. The cozy atmosphere, friendly staff, and wide selection of books make every visit a delight!"</blockquote>
                <div class="rating text-warning d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
                <h5 class="mt-1 fw-normal">Emma Chamberlin</h5>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card position-relative text-left p-5 border rounded-3">
                <blockquote>"As an avid reader, I'm always on the lookout for new releases, and this bookstore never disappoints. They always have the latest titles, and their recommendations have introduced me to some incredible reads!"</blockquote>
                <div class="rating text-warning d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
                <h5 class="mt-1 fw-normal">Thomas John</h5>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card position-relative text-left p-5 border rounded-3">
                <blockquote>"I ordered a few books online from this store, and I was impressed by the quick delivery and careful packaging. It's clear that they prioritize customer satisfaction, and I'll definitely be shopping here again!"</blockquote>
                <div class="rating text-warning d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
                <h5 class="mt-1 fw-normal">Kevin Bryan</h5>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card position-relative text-left p-5 border rounded-3">
                <blockquote>"I stumbled upon this tech store while searching for a new laptop, and I couldn't be happier
                  with my experience! The staff was incredibly knowledgeable and guided me through the process of choosing
                  the perfect device for my needs. Highly recommended!"</blockquote>
                <div class="rating text-warning d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
                <h5 class="mt-1 fw-normal">Stevin</h5>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card position-relative text-left p-5 border rounded-3">
                <blockquote>"I stumbled upon this tech store while searching for a new laptop, and I couldn't be happier
                  with my experience! The staff was incredibly knowledgeable and guided me through the process of choosing
                  the perfect device for my needs. Highly recommended!"</blockquote>
                <div class="rating text-warning d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
                <h5 class="mt-1 fw-normal">Roman</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>  -->

<!-- <section id="latest-posts" class="padding-large">
      <div class="container">
        <div class="section-title d-md-flex justify-content-between align-items-center mb-4">
          <h3 class="d-flex align-items-center">Latest posts</h3>
          <a href="index.html" class="btn">View All</a>
        </div>
        <div class="row">
          <div class="col-md-3 posts mb-4">
            <img src="<?= $baseUrl ?>/assets/images/post-item1.jpg" alt="post image" class="img-fluid rounded-3">
            <a href="blog.html" class="fs-6 text-primary">Books</a>
            <h4 class="card-title mb-2 text-capitalize text-dark"><a href="index.html">10 Must-Read Books of the Year: Our Top Picks!</a></h4>
            <p class="mb-2">Dive into the world of cutting-edge technology with our latest blog post, where we highlight
              five essential gadge. <span><a class="text-decoration-underline text-black-50" href="index.html">Read More</a></span>
            </p>
          </div>
          <div class="col-md-3 posts mb-4">
            <img src="<?= $baseUrl ?>/assets/images/post-item2.jpg" alt="post image" class="img-fluid rounded-3">
            <a href="blog.html" class="fs-6 text-primary">Books</a>
            <h4 class="card-title mb-2 text-capitalize text-dark"><a href="index.html">The Fascinating Realm of Science Fiction</a></h4>
            <p class="mb-2">Explore the intersection of technology and sustainability in our latest blog post. Learn about
              the innovative <span><a class="text-decoration-underline text-black-50" href="index.html">Read More</a></span> </p>
          </div>
          <div class="col-md-3 posts mb-4">
            <img src="<?= $baseUrl ?>/assets/images/post-item3.jpg" alt="post image" class="img-fluid rounded-3">
            <a href="blog.html" class="fs-6 text-primary">Books</a>
            <h4 class="card-title mb-2 text-capitalize text-dark"><a href="index.html">Finding Love in the Pages of a Book</a></h4>
            <p class="mb-2">Stay ahead of the curve with our insightful look into the rapidly evolving landscape of
              wearable technology. <span><a class="text-decoration-underline text-black-50" href="index.html">Read More</a></span>
            </p>
          </div>
          <div class="col-md-3 posts mb-4">
            <img src="<?= $baseUrl ?>/assets/images/post-item4.jpg" alt="post image" class="img-fluid rounded-3">
            <a href="blog.html" class="fs-6 text-primary">Books</a>
            <h4 class="card-title mb-2 text-capitalize text-dark"><a href="index.html">Reading for Mental Health: How Books Can Heal and Inspire</a></h4>
            <p class="mb-2">In today's remote work environment, productivity is key. Discover the top apps and tools that
              can help you stay <span><a class="text-decoration-underline text-black-50" href="index.html">Read More</a></span>
            </p>
          </div>
        </div>
      </div>
    </section> -->

<!-- <section id="instagram">
      <div class="container">
        <div class="text-center mb-4">
          <h3>Instagram</h3>
        </div>
        <div class="row">
          <div class="col-md-2">
            <figure class="instagram-item position-relative rounded-3">
              <a href="https://templatesjungle.com/" class="image-link position-relative">
                <div class="icon-overlay position-absolute d-flex justify-content-center">
                  <svg class="instagram">
                    <use xlink:href="#instagram"></use>
                  </svg>
                </div>
                <img src="<?= $baseUrl ?>/assets/images/insta-item1.jpg" alt="instagram" class="img-fluid rounded-3 insta-image">
              </a>
            </figure>
          </div>
          <div class="col-md-2">
            <figure class="instagram-item position-relative rounded-3">
              <a href="https://templatesjungle.com/" class="image-link position-relative">
                <div class="icon-overlay position-absolute d-flex justify-content-center">
                  <svg class="instagram">
                    <use xlink:href="#instagram"></use>
                  </svg>
                </div>
                <img src="<?= $baseUrl ?>/assets/images/insta-item2.jpg" alt="instagram" class="img-fluid rounded-3 insta-image">
              </a>
            </figure>
          </div>
          <div class="col-md-2">
            <figure class="instagram-item position-relative rounded-3">
              <a href="https://templatesjungle.com/" class="image-link position-relative">
                <div class="icon-overlay position-absolute d-flex justify-content-center">
                  <svg class="instagram">
                    <use xlink:href="#instagram"></use>
                  </svg>
                </div>
                <img src="<?= $baseUrl ?>/assets/images/insta-item3.jpg" alt="instagram" class="img-fluid rounded-3 insta-image">
              </a>
            </figure>
          </div>
          <div class="col-md-2">
            <figure class="instagram-item position-relative rounded-3">
              <a href="https://templatesjungle.com/" class="image-link position-relative">
                <div class="icon-overlay position-absolute d-flex justify-content-center">
                  <svg class="instagram">
                    <use xlink:href="#instagram"></use>
                  </svg>
                </div>
                <img src="<?= $baseUrl ?>/assets/images/insta-item4.jpg" alt="instagram" class="img-fluid rounded-3 insta-image">
              </a>
            </figure>
          </div>
          <div class="col-md-2">
            <figure class="instagram-item position-relative rounded-3">
              <a href="https://templatesjungle.com/" class="image-link position-relative">
                <div class="icon-overlay position-absolute d-flex justify-content-center">
                  <svg class="instagram">
                    <use xlink:href="#instagram"></use>
                  </svg>
                </div>
                <img src="<?= $baseUrl ?>/assets/images/insta-item5.jpg" alt="instagram" class="img-fluid rounded-3 insta-image">
              </a>
            </figure>
          </div>
          <div class="col-md-2">
            <figure class="instagram-item position-relative rounded-3">
              <a href="https://templatesjungle.com/" class="image-link position-relative">
                <div class="icon-overlay position-absolute d-flex justify-content-center">
                  <svg class="instagram">
                    <use xlink:href="#instagram"></use>
                  </svg>
                </div>
                <img src="<?= $baseUrl ?>/assets/images/insta-item6.jpg" alt="instagram" class="img-fluid rounded-3 insta-image">
              </a>
            </figure>
          </div>
        </div>
      </div>
    </section> -->



<?php require_once "view/layout/footer.php"; ?>
