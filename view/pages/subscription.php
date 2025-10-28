<?php
$baseUrl = '/client-site';
$adminUrl = '/NovelNest';



?>

<!DOCTYPE html>
<html>

<head>
  <title> Subscription </title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicon -->
  <link rel="icon" href="<?= $baseUrl ?>/assets/images/monogram.png" type="image/x-icon">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

  <link rel="stylesheet" type="text/css" href="<?= $baseUrl ?>/assets/css/style.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
  <!-- AOS CSS -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <!-- <meta http-equiv="Content-Security-Policy" content="default-src 'self'; style-src 'self' https://fonts.googleapis.com; font-src https://fonts.gstatic.com;"> -->
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">


  <!-- Include Stripe.js library from Stripe's CDN -->
  <script src="https://js.stripe.com/v3/"></script>


</head>

<body>
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <!-- SVG symbols here -->
  </svg>

  <div id="preloader" class="preloader">
    <div class="spinner"></div>
  </div>

  <!--subscription-->
  <section id="subscription" class="padding-large">
    <div class="container">
      <div class="row text-center">
        <div class=""><br>
          <h2 class="display-4 mb-3" style="color:black;">Choose Your Reading Plan</h2>
          <p class="lead" style="color:black;">Unlock a world of books with our flexible subscription plans</p>
        </div>
      </div>

      <div class="row justify-content-center">
        <!-- Book Explorer (FREE) Plan -->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card h-100 shadow-sm border-0 rounded-3">
            <div class="card-body p-5 d-flex flex-column">
              <div class="content">
                <h3 class="h4 mb-2">Book Explorer (FREE)</h3>
                <p class="text-teal mb-4">Perfect for those just starting their reading journey</p>
                <div class="price">
                  <span class="amount">Free</span>
                  <span class="duration">/month</span>
                </div>
              </div>
              <ul class="list-unstyled mb-4">
                <li class="mb-3"><i class="fa-solid fa-check"></i> Browse the entire website</li>
                <li class="mb-3"><i class="fa-solid fa-check"></i> Access to 4-5 books</li>
                <li class="mb-3"><i class="fa-solid fa-check"></i> Save up to 3 journal entries</li>
              </ul>
              <button class="sbbtn btn-outline-primary w-100 subscription-btn" data-plan-id="free">Start Free</button>
            </div>
          </div>
        </div>

        <!-- Epic Reader (PRO) Plan -->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card h-100 shadow-sm border-0 rounded-3">
            <div class="card-body p-5 d-flex flex-column">
              <div class="content">
                <h3 class="h4 mb-2">Epic Reader (PRO)</h3>
                <p class="text-teal mb-4">For the passionate reader who craves more</p>
                <div class="price">
                  <span class="amount">₹150</span>
                  <span class="duration">/month</span>
                </div>
              </div>
              <ul class="list-unstyled mb-4">
                <li class="mb-3"><i class="fa-solid fa-check"></i> Access to all PDFs</li>
                <li class="mb-3"><i class="fa-solid fa-check"></i> Enjoy 4-5 audiobooks</li>
                <li class="mb-3"><i class="fa-solid fa-check"></i> Save up to 10 journal entries</li>
              </ul>
              <button class="sbbtn btn-outline-primary w-100 subscription-btn" data-plan-id="pro">Start Pro Plan</button>
            </div>
          </div>
        </div>

        <!-- Novel Enthusiast (MAX) Plan -->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card h-100 shadow-sm border-0 rounded-3">
            <div class="card-body p-5 d-flex flex-column">
              <div class="content">
                <h3 class="h4 mb-2">Novel Enthusiast (MAX)</h3>
                <p class="text-teal mb-4">For the ultimate book lover</p>
                <div class="price">
                  <span class="amount">₹250</span>
                  <span class="duration">/month</span>
                </div>
              </div>
              <ul class="list-unstyled mb-4">
                <li class="mb-3"><i class="fa-solid fa-check"></i> Unlimited access to all PDFs</li>
                <li class="mb-3"><i class="fa-solid fa-check"></i> Unlimited audiobooks</li>
                <li class="mb-3"><i class="fa-solid fa-check"></i> Unlimited journal entries</li>
              </ul>
              <button class="sbbtn btn-outline-primary w-100 subscription-btn" data-plan-id="max">Start Max Plan</button>
            </div>
          </div>
        </div>

        <!-- Yearly Plan -->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card h-100 shadow-sm border-0 rounded-3 yearly">
            <div class="sticker">20% OFF</div>
            <div class="card-body p-5 d-flex flex-column">
              <div class="content">
                <h3 class="h4 mb-2">Novel Enthusiast (MAX) - Yearly</h3>
                <p class="text-teal mb-4">Get MAX for a year and save big!</p>
                <div class="price">
                  <span class="amount">₹2,400</span>
                  <span class="duration">/year</span>
                </div>
              </div>
              <ul class="list-unstyled mb-4">
                <li class="mb-3"><i class="fa-solid fa-check"></i> Enjoy all MAX features at a discounted price</li>
                <li class="mb-3"><i class="fa-solid fa-check"></i> Save ₹1,012 compared to monthly payments</li>
              </ul>
              <button class="sbbtn btn-outline-primary w-100 subscription-btn" data-plan-id="yearly">Get Yearly Plan</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--subscription end-->

  <script src="<?= $baseUrl ?>/assets/js/jquery-1.11.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script type="text/javascript" src="<?= $baseUrl ?>/assets/js/script.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- AOS JS -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

  <!-- jQuery (required for Bootstrap) -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <!-- Bootstrap Bundle (JS + Popper.js for dropdowns) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Your script.js -->
  <script src="<?= $baseUrl ?>/assets/js/script.js"></script>

  <script type="text/javascript" src="<?= $baseUrl ?>/assets/js/custom.js"></script>

  <!-- Include stripe.js here -->
  <script src="<?= $baseUrl ?>/assets/js/stripe.js"></script>

</body>

</html>