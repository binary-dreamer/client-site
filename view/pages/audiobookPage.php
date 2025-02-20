<?php
$baseUrl = '/client-site';
require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/header.php";
?>

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
                tale of love, loss, and memory captivates Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae possimus atque sit voluptate in! Molestiae nostrum doloribus quod quidem eveniet fugiat praesentium illum minus beatae non doloremque ipsum, cum laudantium!
            </p>

            <h3 class="audiobook-title">Audiobook Player</h3>
            <audio id="audiobook-audio" controls>
                <source id="audio-source" src="" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
            <div class="chapters-container">
                <div class="chapters-column">
                  
                    <ul class="chapter-list">
                        <li data-audio-src="<?= $baseUrl ?>/assets/audiobooks/chapter1.mp3">Chapter 1: Introduction</li>
                        <li data-audio-src="<?= $baseUrl ?>/assets/audiobooks/chapter2.mp3">Chapter 2: The Beginning</li>
                        <li data-audio-src="<?= $baseUrl ?>/assets/audiobooks/chapter3.mp3">Chapter 3: The Journey</li>
                        <li data-audio-src="<?= $baseUrl ?>/assets/audiobooks/chapter4.mp3">Chapter 4: The Conflict</li>
                        <li data-audio-src="<?= $baseUrl ?>/assets/audiobooks/chapter5.mp3">Chapter 5: The Resolution</li>
                    </ul>
                </div>
                <div class="chapters-column">
                  
                    <ul class="chapter-list">
                        <li data-audio-src="<?= $baseUrl ?>/assets/audiobooks/chapter6.mp3">Chapter 6: The Aftermath</li>
                        <li data-audio-src="<?= $baseUrl ?>/assets/audiobooks/chapter7.mp3">Chapter 7: Reflections</li>
                        <li data-audio-src="<?= $baseUrl ?>/assets/audiobooks/chapter8.mp3">Chapter 8: The Future</li>
                        <li data-audio-src="<?= $baseUrl ?>/assets/audiobooks/chapter9.mp3">Chapter 9: The Epilogue</li>
                        <li data-audio-src="<?= $baseUrl ?>/assets/audiobooks/chapter10.mp3">Chapter 10: Conclusion</li>
                    </ul>
                </div>
            </div>

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

<section class="audiobook-player mt-4">
</section>

<style>

</style>

<!-- <script>
    const chapterLists = document.querySelectorAll('.chapter-list');
    const audioSource = document.getElementById('audio-source');
    const audiobookAudio = document.getElementById('audiobook-audio');

    chapterLists.forEach(list => {
        list.addEventListener('click', function(e) {
            if (e.target.tagName === 'LI') {
                const audioSrc = e.target.getAttribute('data-audio-src');
                audioSource.src = audioSrc;
                audiobookAudio.load();
                audiobookAudio.play();
            }
        });
    });
</script> -->

<?php require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/footer.php"; ?>
