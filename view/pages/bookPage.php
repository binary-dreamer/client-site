<?php
$baseUrl = '/client-site';
require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/header.php"; ?>

<section>
    <div class="back-button-container">
        <a href="javascript:history.back()" class="back-button">
            <i class="fas fa-arrow-left"></i>
            <span class="back-text"> Back</span>
        </a>
    </div>
</section>


<section class="ebook-container">
    <div class="ebook-content">
        <div class="ebook-image-container">
            <img src="<?= $baseUrl ?>/assets/images/tab-item1.jpg" alt="The Notebook Cover" class="ebook-image">
        </div>
        <div class="ebook-details">
            <h2 class="ebook-title">The Notebook</h2>
            <p class="author"><i class="fas fa-book"></i> <strong>NICHOLAS SPARKS</strong></p>
            <div class="ebook-meta">
                <span class="pages"><i class="fas fa-file-alt"></i> 174 Pages</span>
                <span class="language"><i class="fas fa-globe"></i> Language: English</span>
            </div>
            <span class="ebook-category">Romantic</span>

            <a href="#" class="wishlist-btn">
                <span class="wishlist-icon">
                    <i class="fas fa-heart"></i>
                </span>
                <span>Add to Wishlist</span>
            </a>

            <div class="rating-container mt-4">
                <span class="rating-text">Rating: </span>
                <div class="star-rating">
                    <span class="star" data-value="1">☆</span>
                    <span class="star" data-value="2">☆</span>
                    <span class="star" data-value="3">☆</span>
                    <span class="star" data-value="4">☆</span>
                    <span class="star" data-value="5">☆</span>
                </div>
                <div class="rating-value" id="rating-value">0</div>
            </div>

            <p class="description">
                The Notebook by Nicholas Sparks is a heartwarming romance about Noah and Allie,
                whose love endures despite time and obstacles. Set in coastal North Carolina, this timeless
                tale of love, loss, and memory captivates readers.
            </p>
            <button class="download-btn">View<span class="pdf-tag">(pdf)</span></button>

            <div class="social mt-4">
                <h5 class="mb-0 me-2">Share:</h5>
                <ul class="list-inline d-flex gap-3 p-0 mb-0 social-icons">
                    <li>
                        <a href="https://www.facebook.com/" class="social-icon facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://x.com/?mx=2" class="social-icon twitter">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/" class="social-icon youtube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://in.pinterest.com/" class="social-icon pinterest">
                            <i class="fab fa-pinterest-p"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/footer.php"; ?>