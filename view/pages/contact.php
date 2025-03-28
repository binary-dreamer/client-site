<?php
$baseUrl = '/client-site';
require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/header.php";
?>
<style>

    .contact-info-box {
        background: white;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    .contact-info-box h5 {
        color: #20C997;
    }

    .contact-form input,
    .contact-form textarea {
        border-radius: 5px;
        padding: 12px;
        border: 1px solid #ddd;
    }

    .contact-form button {
        background: #20C997;
        color: white;
        padding: 12px 20px;
        border-radius: 5px;
        transition: 0.3s;
    }

    .contact-form button:hover {
        background: #20C997;
    }
</style>
<div id="toast-message" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
        <div class="toast-body">Success!</div>
        <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
</div>

<div class="text-center mx-auto pb-5 wow fadeInUp"
    data-wow-delay="0.2s"
    style="
       
       background-image: url('<?= $baseUrl ?>/assets/images/banner_2.jpg'); 
       background-size: cover; 
       background-position: center; 
       background-repeat: no-repeat; 
       padding: 65px ; ">

    <h1 class="text-primary" style="color: #ffc107;">Contact</h1>

    <h5 class="mb-4">
        Stay Connected, Stay Inspired: Reach Out to NovelNest!
    </h5>

    <p class="mb-0"></p>

</div>
<section>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="contact-info-box">
                    <h5><i class="fas fa-map-marker-alt"></i> Office Address</h5>
                    <p>730 Glenstone Ave 65802, Springfield, US</p>
                    <h5><i class="fas fa-phone"></i> Phone</h5>
                    <p>+91 987 321 | 0261 123 654</p>
                    <h5><i class="fas fa-envelope"></i> Email</h5>
                    <p>novelnestinfo@gmail.com</p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="contact-info-box">
                    <h3>Any Questions?</h3>
                    <p>Use the form below to get in touch with us.</p>
                    <form class="contact-form">
                        <div class="mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Your Name *">
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Your Email *">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="phone" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="subject" class="form-control" placeholder="Subject *">
                        </div>
                        <div class="mb-3">
                            <textarea name="message" class="form-control" rows="4" placeholder="Write your message here *"></textarea>
                        </div>
                        <button type="submit" class="btn w-100">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</section>
<script src="../../assets/js/email.js"></script>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/footer.php"; ?>