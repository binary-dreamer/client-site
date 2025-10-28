<?php $baseUrl = '/client-site';

require_once $_SERVER['DOCUMENT_ROOT'] . '/client-site/controller/CheckoutController.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/client-site/controller/SuccessController.php';

$controller = $_GET['controller'] ?? 'Home';
$action = $_GET['action'] ?? 'index';

// Prevent HTML output for API calls
if ($controller === 'Checkout' && $action === 'createSession') {
    (new CheckoutController())->createSession();
    exit;
} elseif ($controller === 'Success' && $action === 'index') {
    (new SuccessController())->index();
    exit;
}

require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/header.php";

?>

<!-- BillBoard Section -->
<section id="billboard" class="position-relative d-flex align-items-center py-5 bg-light-gray"
  style="background-image: url(<?= $baseUrl ?>/assets/images/banner_2.jpg); background-size: cover; background-repeat: no-repeat; background-position: center; min-height: 80vh;">

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
      
      <div class="col-lg-3 col-md-6 pb-3 pb-lg-0 zoom-in">
        <div class="icon-box d-flex">
          <div class="icon-box-icon pe-3 pb-3">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path d="M0 64C0 28.7 28.7 0 64 0L224 0l0 128c0 17.7 14.3 32 32 32l128 0 0 144-208 0c-35.3 0-64 28.7-64 64l0 144-48 0c-35.3 0-64-28.7-64-64L0 64zm384 64l-128 0L256 0 384 128zM176 352l32 0c30.9 0 56 25.1 56 56s-25.1 56-56 56l-16 0 0 32c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-48 0-80c0-8.8 7.2-16 16-16zm32 80c13.3 0 24-10.7 24-24s-10.7-24-24-24l-16 0 0 48 16 0zm96-80l32 0c26.5 0 48 21.5 48 48l0 64c0 26.5-21.5 48-48 48l-32 0c-8.8 0-16-7.2-16-16l0-128c0-8.8 7.2-16 16-16zm32 128c8.8 0 16-7.2 16-16l0-64c0-8.8-7.2-16-16-16l-16 0 0 96 16 0zm80-112c0-8.8 7.2-16 16-16l48 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-32 0 0 32 32 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-32 0 0 48c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-64 0-64z" />
            </svg>
          </div>
          <div class="icon-box-content fade-in">
            <h4 class="card-title mb-1 text-capitalize text-dark">E-Books</h4>
            <p>Read a vast collection of e-books anytime on any device.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 pb-3 pb-lg-0 zoom-in">
        <div class="icon-box d-flex">
          <div class="icon-box-icon pe-3 pb-3">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
              <path d="M64 0C28.7 0 0 28.7 0 64L0 448c0 35.3 28.7 64 64 64l256 0c35.3 0 64-28.7 64-64l0-288-128 0c-17.7 0-32-14.3-32-32L224 0 64 0zM256 0l0 128 128 0L256 0zm2 226.3c37.1 22.4 62 63.1 62 109.7s-24.9 87.3-62 109.7c-7.6 4.6-17.4 2.1-22-5.4s-2.1-17.4 5.4-22C269.4 401.5 288 370.9 288 336s-18.6-65.5-46.5-82.3c-7.6-4.6-10-14.4-5.4-22s14.4-10 22-5.4zm-91.9 30.9c6 2.5 9.9 8.3 9.9 14.8l0 128c0 6.5-3.9 12.3-9.9 14.8s-12.9 1.1-17.4-3.5L113.4 376 80 376c-8.8 0-16-7.2-16-16l0-48c0-8.8 7.2-16 16-16l33.4 0 35.3-35.3c4.6-4.6 11.5-5.9 17.4-3.5zm51 34.9c6.6-5.9 16.7-5.3 22.6 1.3C249.8 304.6 256 319.6 256 336s-6.2 31.4-16.3 42.7c-5.9 6.6-16 7.1-22.6 1.3s-7.1-16-1.3-22.6c5.1-5.7 8.1-13.1 8.1-21.3s-3.1-15.7-8.1-21.3c-5.9-6.6-5.3-16.7 1.3-22.6z" />
            </svg>
          </div>
          <div class="icon-box-content fade-in">
            <h4 class="card-title mb-1 text-capitalize text-dark">Audiobooks</h4>
            <p>Listen to professionally narrated audiobooks on the go.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 pb-3 pb-lg-0 zoom-in">
        <div class="icon-box d-flex">
          <div class="icon-box-icon pe-3 pb-3">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path d="M249.6 471.5c10.8 3.8 22.4-4.1 22.4-15.5l0-377.4c0-4.2-1.6-8.4-5-11C247.4 52 202.4 32 144 32C93.5 32 46.3 45.3 18.1 56.1C6.8 60.5 0 71.7 0 83.8L0 454.1c0 11.9 12.8 20.2 24.1 16.5C55.6 460.1 105.5 448 144 448c33.9 0 79 14 105.6 23.5zm76.8 0C353 462 398.1 448 432 448c38.5 0 88.4 12.1 119.9 22.6c11.3 3.8 24.1-4.6 24.1-16.5l0-370.3c0-12.1-6.8-23.3-18.1-27.6C529.7 45.3 482.5 32 432 32c-58.4 0-103.4 20-123 35.6c-3.3 2.6-5 6.8-5 11L304 456c0 11.4 11.7 19.3 22.4 15.5z" />
            </svg>
          </div>
          <div class="icon-box-content fade-in">
            <h4 class="card-title mb-1 text-capitalize text-dark">Journaling</h4>
            <p>Write, reflect, and track your thoughts with our journaling feature.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 pb-3 pb-lg-0 zoom-in">
        <div class="icon-box d-flex">
          <div class="icon-box-icon pe-3 pb-3">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path d="M345 39.1L472.8 168.4c52.4 53 52.4 138.2 0 191.2L360.8 472.9c-9.3 9.4-24.5 9.5-33.9 .2s-9.5-24.5-.2-33.9L438.6 325.9c33.9-34.3 33.9-89.4 0-123.7L310.9 72.9c-9.3-9.4-9.2-24.6 .2-33.9s24.6-9.2 33.9 .2zM0 229.5L0 80C0 53.5 21.5 32 48 32l149.5 0c17 0 33.3 6.7 45.3 18.7l168 168c25 25 25 65.5 0 90.5L277.3 442.7c-25 25-65.5 25-90.5 0l-168-168C6.7 262.7 0 246.5 0 229.5zM144 144a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z" />
            </svg>
          </div>
          <div class="icon-box-content fade-in">
            <h4 class="card-title mb-1 text-capitalize text-dark">Subscription</h4>
            <p>Access unlimited books with our flexible subscription plans.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Services-info end-->

<!-- harry potter Books -->
<section id="best-selling-items" class="position-relative padding-large ">
  <div class="your-element" data-aos="fade-in">
    <div class="container">
      <div class="section-title d-md-flex justify-content-between align-items-center mb-4">
        <h3 class="d-flex align-items-center slide-in">Harry Potter Books</h3>
        <a href="view/pages/books.php" class="btn slide-in">View All</a>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

      <div class="swiper product-swiper">
        <div class="swiper-wrapper slide-in" id="harry-potter-books">
          <!-- Harry Potter books will be dynamically inserted here -->
        </div>
        <!-- Add Swiper navigation buttons -->

      </div>
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    fetch('/client-site/controller/bookController.php?harry_potter=true')
      .then(response => response.json())
      .then(data => {
        if (data.status === 'success') {
          const booksContainer = document.getElementById('harry-potter-books');
          const baseUrl = '/client-site'; // Define your base URL here
          data.data.forEach(book => {
            const bookElement = `
                        <div class="swiper-slide">
                            <div class="card_index position-relative p-4 border rounded-3">
                                <img src="${book.cover_image}" class="img-fluid shadow-sm" alt="${book.title}">
                                <h6 class="mt-4 mb-0 fw-bold">
                                    <a href="${baseUrl}/view/pages/bookPage.php?id=${encodeURIComponent(book.id)}">${book.title}</a>
                                </h6>
                                <div class="review-content d-flex">
                                    <p class="my-2 me-2 fs-6 text-black-50">${book.author}</p>
                                    <div class="rating text-warning d-flex align-items-center">
                                        <!-- Add star ratings here based on book.rating -->
                                    </div>
                                </div>
                                <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                                    <a href="#" class="btn btn-dark">
                                        <span><svg class="wishlist"><use xlink:href="#heart"></use></svg></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    `;
            booksContainer.innerHTML += bookElement;
          });

          // Initialize Swiper after adding slides
          new Swiper('.product-swiper', {
            loop: true,
            navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
            },
            slidesPerView: 5, // Adjust the number of slides per view
            spaceBetween: 30,
          });
        } else {
          console.error('No Harry Potter books found:', data.message);
        }
      })
      .catch(error => console.error('Error fetching Harry Potter books:', error));
  });
</script>



<!-- harry potter Books ends -->



<!-- Category Section -->
<section id="categories" class="padding-large pt-0 flip-in">
  <div class="container">
    <div class="section-title overflow-hidden mb-4">
      <h3 class="d-flex align-items-center">Categories</h3>
    </div>
    <div class="row">
      <!-- First Three Categories (Always Visible) -->
      <div class="col-md-4">
        <div class="card text-center mb-4 border-0 rounded-3 category-box">
          <a href="<?= $baseUrl ?>/view/pages/books.php?genre_id=1">
            <img src="<?= $baseUrl ?>/assets/images/fiction.jpg" class="img-fluid rounded-3 category-image" alt="fiction">
            <h6 class="position-absolute bottom-0 bg-primary m-4 py-2 px-3 rounded-3">
              <a href="<?= $baseUrl ?>/view/pages/books.php" class="text-white">Fiction</a>
            </h6>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-center mb-4 border-0 rounded-3 category-box">
          <a href="<?= $baseUrl ?>/view/pages/books.php?genre_id=3">
            <img src="<?= $baseUrl ?>/assets/images/horror.jpg" class="img-fluid rounded-3 category-image" alt="Horror">
            <h6 class="position-absolute bottom-0 bg-primary m-4 py-2 px-3 rounded-3">
              <a href="<?= $baseUrl ?>/view/pages/books.php" class="text-white">Horror</a>
            </h6>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-center mb-4 border-0 rounded-3 category-box">
          <a href="<?= $baseUrl ?>/view/pages/books.php?genre_id=4">
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
              <a href="<?= $baseUrl ?>/view/pages/books.php?genre_id=5">
                <img src="<?= $baseUrl ?>/assets/images/science.jpg" class="img-fluid rounded-3 category-image" alt="Science Fiction">
                <h6 class="position-absolute bottom-0 bg-primary m-4 py-2 px-3 rounded-3">
                  <a href="<?= $baseUrl ?>/view/pages/books.php" class="text-white">Science Fiction</a>
                </h6>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-center mb-4 border-0 rounded-3 category-box">
              <a href="<?= $baseUrl ?>/view/pages/books.php?genre_id=6">
                <img src="<?= $baseUrl ?>/assets/images/romance.jpg" class="img-fluid rounded-3 category-image" alt="Romance">
                <h6 class="position-absolute bottom-0 bg-primary m-4 py-2 px-3 rounded-3">
                  <a href="<?= $baseUrl ?>/view/pages/books.php" class="text-white">Romance</a>
                </h6>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-center mb-4 border-0 rounded-3 category-box">
              <a href="<?= $baseUrl ?>/view/pages/books.php?genre_id=8">
                <img src="<?= $baseUrl ?>/assets/images/thriller.jpg" class="img-fluid rounded-3 category-image" alt="Thriller">
                <h6 class="position-absolute bottom-0 bg-primary m-4 py-2 px-3 rounded-3">
                  <a href="<?= $baseUrl ?>/view/pages/books.php" class="text-white">Thriller</a>
                </h6>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-center mb-4 border-0 rounded-3 category-box">
              <a href="<?= $baseUrl ?>/view/pages/books.php?genre_id=9">
                <img src="<?= $baseUrl ?>/assets/images/young adult.jpg" class="img-fluid rounded-3 category-image" alt="Young Adult">
                <h6 class="position-absolute bottom-0 bg-primary m-4 py-2 px-3 rounded-3">
                  <a href="<?= $baseUrl ?>/view/pages/books.php" class="text-white">Young Adult</a>
                </h6>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-center mb-4 border-0 rounded-3 category-box">
              <a href="<?= $baseUrl ?>/view/pages/books.php?genre_id=10">
                <img src="<?= $baseUrl ?>/assets/images/education.jpg" class="img-fluid rounded-3 category-image" alt="Education">
                <h6 class="position-absolute bottom-0 bg-primary m-4 py-2 px-3 rounded-3">
                  <a href="<?= $baseUrl ?>/view/pages/books.php" class="text-white">Education</a>
                </h6>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-center mb-4 border-0 rounded-3 category-box">
              <a href="<?= $baseUrl ?>/view/pages/books.php?genre_id=7">
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

<!--Audiobook Section-->
<section id="audiobook-section" class="">

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
  <div class="your-element" data-aos="fade-in">
    <div class="container">
      <div class="section-title d-md-flex justify-content-between align-items-center mb-4">
        <h3 class="d-flex align-items-center slide-in"> Books</h3>
        <a href="view/pages/books.php" class="btn slide-in">View All</a>
      </div>
       <!-- Add Swiper navigation buttons -->
       <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

      <div class="swiper product-swiper ">
        <div class="swiper-wrapper slide-in" id="all-books">
          <!-- books will be dynamically inserted here -->
        </div>
       
        
      </div>
    </div>
  </div>
</section>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    fetch('/client-site/controller/bookController.php?all_books=true')
      .then(response => response.json())
      .then(data => {
        if (data.status === 'success') {
          const booksContainer = document.getElementById('all-books');
          const baseUrl = '/client-site'; // Define your base URL here
          data.data.forEach(book => {
            const bookElement = `
                        <div class="swiper-slide">
                            <div class="card_index position-relative p-4 border rounded-3">
                                <img src="${book.cover_image}" class="img-fluid shadow-sm" alt="${book.title}">
                                <h6 class="mt-4 mb-0 fw-bold">
                                    <a href="${baseUrl}/view/pages/bookPage.php?id=${encodeURIComponent(book.id)}">${book.title}</a>
                                </h6>
                                <div class="review-content d-flex">
                                    <p class="my-2 me-2 fs-6 text-black-50">${book.author}</p>
                                    <div class="rating text-warning d-flex align-items-center">
                                        <!-- Add star ratings here based on book.rating -->
                                    </div>
                                </div>
                                <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                                    <a href="#" class="btn btn-dark">
                                        <span><svg class="wishlist"><use xlink:href="#heart"></use></svg></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    `;
            booksContainer.innerHTML += bookElement;
          });
         }
         else {
          console.error('No books found:', data.message);
        }
      })
      .catch(error => console.error('Error fetching books:', error));
  });
</script>
<!--Books ends-->


        <!-- FAQs Start -->
        <div class="container-fluid faq-section bg-light py-5 zoom-in">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="h-100">
                    <div class="mb-5">
                        <h4 class="text-primary">Some Important FAQ's</h4>
                        <h1 class="display-4 mb-0">Common Frequently Asked Questions</h1>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Q: What makes NovelNest different from other reading platforms?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show active" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body rounded">
                                    A: Ever found a platform that only lets you read, another just for audiobooks, and yet another for journaling? We thought—why not bring them all together? NovelNest is your all-in-one space to <strong>read e-books, listen to audiobooks, and write your own journal</strong>—no distractions, no social media, just pure book-loving bliss.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Q: Can I download books to read offline?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Nope! And here’s why—it keeps things simple and secure. With NovelNest, you can <strong>access your books and audiobooks anytime, anywhere</strong> without worrying about storage space or piracy. Just log in, pick up where you left off, and dive back into your world of stories!
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Q: Is NovelNest free to use?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: We’re a <strong>subscription-based platform</strong>, which means a small fee unlocks <strong>unlimited reading, audiobooks, and journaling</strong>—no ads, no interruptions. Think of it as your personal library that’s always open, always growing, and always just a click away!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <img src="<?= $baseUrl ?>/assets/images/bb5.png" class="img-fluid w-100" alt="FAQ Section Image">
            </div>
        </div>
    </div>
</div>
        <!-- FAQs End -->



<?php require_once "view/layout/footer.php"; ?>

