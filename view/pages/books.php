<?php
$baseUrl = '/client-site';
require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/header.php";
require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/config/DB.php";

$db = new DB();
$conn = $db->connection();

// Fetch all books with genre names
$query = "SELECT books.*, genre.name AS genre_name FROM books 
          JOIN genre ON books.genre_id = genre.id";
$result = $conn->query($query);

$booksByGenre = [];
$allBooks = [];

// Group books by genre
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $allBooks[] = $row;
    $booksByGenre[$row['genre_name']][] = $row;
  }
}

// Fetch all genres for tabs
$genreQuery = "SELECT * FROM genre";
$genreResult = $conn->query($genreQuery);
?>

<div class="text-center mx-auto pb-5 wow fadeInUp" 
     data-wow-delay="0.2s" 
     style="
       
       background-image: url('<?= $baseUrl ?>/assets/images/banner_2.jpg'); 
       background-size: cover; 
       background-position: center; 
       background-repeat: no-repeat; 
       padding: 65px ; ">
  
  <h1 class="text-primary" style="color: #ffc107;">Books</h1>

  <h5 class="mb-4">
    Find Your Escape!: Because reality is overrated.<br>
    Welcome to NovelNest—your cozy escape from adulting!
  </h5>

  <p class="mb-0"></p>
  
</div>


<section id="popular-books" class="bookshelf py-0 my-0">
  <div class="container">
    <div class="row">
      <!-- Categories Column -->
      <div class="col-md-3">
        <div class="widget-product-categories pt-5">

          <!-- Search Box -->
          <!-- <form role="search" method="get" class="search-form mb-3" action="search.php">
            <input type="search" id="search-form" class="search-field"
              placeholder="Type and press enter"
              name="search"
              value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>" />
            <button type="submit" class="search-submit">
              <svg class="search">
                <use xlink:href="#search"></use>
              </svg>
            </button>
          </form> -->


          <div class="section-title overflow-hidden mb-2">
            <h3 class="d-flex flex-column mb-0">Categories</h3>
          </div>

          <ul class="product-categories mb-0 sidebar-list list-unstyled">
            <li class="cat-item">
              <a href="?genre_id=0" class="tab <?= $activeGenreId == 0 ? 'active' : '' ?>">All Genres</a>
            </li>
            <?php while ($row = $genreResult->fetch_assoc()) : ?>
              <li class="cat-item">
                <a href="?genre_id=<?= $row['id']; ?>"
                  class="tab <?= $activeGenreId == $row['id'] ? 'active' : '' ?>">
                  <?= htmlspecialchars($row['name']); ?>
                </a>
              </li>
            <?php endwhile; ?>
          </ul>
        </div>
      </div>

      <!-- Books Column -->
      <div class="col-md-9">
        <div class="tab-content">
          <div id="book-list" class="row">
            <!-- Books will be loaded here via AJAX -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    const baseUrl = '/client-site';

    function loadBooks(genre_id = 0) {
      $.ajax({
        url: `${baseUrl}/model/fetchBooks.php`,
        type: "POST",
        data: {
          genre_id: genre_id
        },
        beforeSend: function() {
          $("#book-list").html('<p class="text-center">Loading books...</p>');
        },
        success: function(response) {
          $("#book-list").html(response);
        }
      });
    }

    // Get genre_id from URL if available
    const urlParams = new URLSearchParams(window.location.search);
    const genreIdFromUrl = urlParams.get("genre_id") || 0;

    // Load books based on URL parameter
    loadBooks(genreIdFromUrl);

    // Set active tab based on genre_id
    $(".tab").removeClass("active");
    $(`.tab[data-genre-id="${genreIdFromUrl}"]`).addClass("active");

    // Handle tab click event
    $(".tab").click(function() {
      $(".tab").removeClass("active");
      $(this).addClass("active");

      var genre_id = $(this).attr("data-genre-id");
      loadBooks(genre_id);

      // Update URL without reloading
      const newUrl = window.location.pathname + "?genre_id=" + genre_id;
      window.history.pushState({
        path: newUrl
      }, "", newUrl);
    });
  });
</script>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/footer.php"; ?>