
<?php include __DIR__ . '/templates/header.php'; ?>


<div class="pad1 w-100">
<?php
  $movie_name = $_SESSION['listed_movie']['movie_name'];
  $description = $_SESSION['listed_movie']['description'];
  $movieID = $_SESSION['listed_movie']['movieID'];
  $img_caption = "
    <div class='pad1  w-60 d-inline h-100'>
      <div class=' w-100 d-inline text-sz-md text-wt-reg pad-tb-2'>
        {$movie_name}
      </div>
      <div class='w-100 d-inline text-sz-rg text-wt-reg text-align-justify pad-tb-2'>
        {$description}
      </div>
      <div class='pad-tb-2'> <a href='/movie/booking/{$movieID}'> Book now </a></div>
    </div>
  ";

  $movie_name = str_replace(" ", "_", $movie_name);
  $movie_name = str_replace(":", "", $movie_name);
  $movie_name = str_replace("'", "", $movie_name);
  $movie_name = strtolower($movie_name);
  $img_tag = "<div class='w-30 d-inline'>
    <img src='/assets/images/{$movie_name}.jpg' class='movie-poster'>
    </div>";
  echo $img_tag;
  echo $img_caption;
?>
</div>

<?php include __DIR__ . '/templates/footer.php'; ?>


<!--
  `movieID` mediumint(8) UNSIGNED NOT NULL,
  `movie_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `ticket_price` decimal(7,2) NOT NULL,
  `rating` char(3) NOT NULL -->
