<?php
$baseUrl = '/client-site';
require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/header.php";
?>
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
    <div class="contact-us padding-large">
        <div class="container">
            <div class="row">
                <div class="contact-info col-lg-6 pb-3">
                    <h3>Contact info</h3>
                    <p class="mb-5">Tortor dignissim convallis aenean et tortor at risus viverra adipiscing.</p>
                    <div class="page-content d-flex flex-wrap">
                        <div class="col-lg-6 col-sm-12">
                            <div class="content-box text-dark pe-4 mb-5">
                                <h5 class="fw-bold">Office</h5>
                                <div class="contact-address pt-3">
                                    <p>730 Glenstone Ave 65802, Springfield, US</p>
                                </div>
                                <div class="contact-number">
                                    <p>
                                        <a href="#">+123 987 321</a>
                                    </p>
                                    <p>
                                        <a href="#">+123 123 654</a>
                                    </p>
                                </div>
                                <div class="email-address">
                                    <p>
                                        <a href="#">info@yourinfo.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="content-box">
                                <h5 class="fw-bold">Management</h5>
                                <div class="contact-address pt-3">
                                    <p>730 Glenstone Ave 65802, Springfield, US</p>
                                </div>
                                <div class="contact-number">
                                    <p>
                                        <a href="#">+123 987 321</a>
                                    </p>
                                    <p>
                                        <a href="#">+123 123 654</a>
                                    </p>
                                </div>
                                <div class="email-address">
                                    <p>
                                        <a href="#">info@yourinfo.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="inquiry-item col-lg-6">
                    <h3>Any questions?</h3>
                    <p class="mb-5">Use the form below to get in touch with us.</p>

                    <form id="form" class="d-flex gap-3 flex-wrap">
                        <div class="w-100 d-flex gap-3">
                            <div class="w-50">
                                <input type="text" name="name" placeholder="Write your name here *" class="form-control w-100">
                            </div>
                            <div class="w-50">
                                <input type="text" name="email" placeholder="Write your email here *" class="form-control w-100">
                            </div>
                        </div>
                        <div class="w-100">
                            <input type="text" name="phone" placeholder="Phone number" class="form-control w-100">
                        </div>
                        <div class="w-100">
                            <input type="text" name="subject" placeholder="Write your subject here" class="form-control w-100">
                        </div>
                        <div class="w-100">
                            <textarea placeholder="Write your message here *" class="form-control w-100"></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn my-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<?php require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/footer.php"; ?>