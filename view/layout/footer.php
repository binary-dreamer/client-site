<?php
$baseUrl = '/client-site';
?>
<hr>
<footer id="footer" class="padding-small">
  <div class="container">
    <div class="row">
      <div class="footer-top-area">

        <div class="row d-flex flex-wrap justify-content-between">
          <div class="col-lg-3 col-sm-6 pb-3">
            <div class="footer-menu">
              <img src="<?= $baseUrl ?>/assets/images/logo.png" class="logo" style="max-width: 200px; height: auto; display: block;">
              <p>NovelNest is your gateway to a world of captivating stories, offering an immersive online reading experience.</p>
              <div class="social-links">
                <ul class="d-flex list-unstyled">
                  <li>
                    <a href="#">
                      <svg class="facebook">
                        <use xlink:href="#facebook" />
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <svg class="instagram">
                        <use xlink:href="#instagram" />
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <svg class="twitter">
                        <use xlink:href="#twitter" />
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <svg class="linkedin">
                        <use xlink:href="#linkedin" />
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <svg class="youtube">
                        <use xlink:href="#youtube" />
                      </svg>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-sm-6 pb-3">
            <div class="footer-menu text-capitalize">
              <h5 class="widget-title pb-2">Quick Links</h5>
              <ul class="menu-list list-unstyled text-capitalize">
                <li class="menu-item mb-1">
                  <a href="<?= $baseUrl ?>/index.php">Home</a>
                </li>
                <li class="menu-item mb-1">
                  <a href="<?= $baseUrl ?>/view/pages/books.php">Books</a>
                </li>
                <li class="menu-item mb-1">
                  <a href="<?= $baseUrl ?>/view/pages/audiobooks.php">Audiobooks</a>
                </li>
                <li class="menu-item mb-1">
                  <a href="<?= $baseUrl ?>/view/pages/journaling.php">Journaling</a>
                </li>
                <li class="menu-item mb-1">
                  <a href="<?= $baseUrl ?>/view/pages/contact.php">Contact</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 pb-3">
            <div class="footer-menu text-capitalize">
              <h5 class="widget-title pb-2">Help & Info Help</h5>
              <ul class="menu-list list-unstyled">
                <li class="menu-item mb-1">
                  <a href="<?= $baseUrl ?>/view/pages/contact.php">Contact Us</a>
                </li>
                <li class="menu-item mb-1">
                  <a href="#">Faqs</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 pb-3">
            <div class="footer-menu contact-item">
              <h5 class="widget-title text-capitalize pb-2">Contact Us</h5>
              <p>Do you have any queries or suggestions? <a href="mailto:"
                  class="text-decoration-underline">novelnestinfo@gmail.com</a></p>
              <p>If you need support? Just give us a call. <a href="#" class="text-decoration-underline">+55 111 222
                  333 44</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<hr>
<div id="footer-bottom" class="mb-2">
  <div class="container">
    <div class="d-flex flex-wrap justify-content-between">
      <div class="ship-and-payment d-flex gap-md-5 flex-wrap">
        <div class="shipping d-flex">
          <p>novelnestinfo@gmail.com</p>
        </div>
      </div>
      <div class="copyright">
        <p>© Copyright 2025 NovelNest
        </p>
      </div>
    </div>
  </div>
</div>

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a> 

<script>
  // Show the button when scrolling down
window.addEventListener("scroll", function () {
    var backToTop = document.querySelector(".back-to-top");
    if (window.scrollY > 200) {
        backToTop.style.display = "block";
    } else {
        backToTop.style.display = "none";
    }
});

// Smooth scroll to top on click
document.querySelector(".back-to-top").addEventListener("click", function (e) {
    e.preventDefault();
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});

</script>


<script src="<?= $baseUrl ?>/assets/js/jquery-1.11.0.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
  crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script type="text/javascript" src="<?= $baseUrl ?>/assets/js/script.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<!-- AOS JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

<!-- jQuery (required for Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Bootstrap Bundle (JS + Popper.js for dropdowns) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Your script.js -->
<script src="<?= $baseUrl ?>/assets/js/script.js"></script>

<script type="text/javascript" src="<?= $baseUrl ?>/assets/js/custom.js"></script>



</body>

</html>