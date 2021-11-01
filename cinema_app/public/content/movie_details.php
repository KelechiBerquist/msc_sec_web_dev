
<?php include __DIR__ . '/templates/header.php'; ?>


<div class="pad-1 w-100">
<?php
  $movie_name = $_SESSION['listed_movie']['movie_name'];
  $description = $_SESSION['listed_movie']['description'];
  $movieID = $_SESSION['listed_movie']['movieID'];
  $img_caption = "
    <div class='pad-2 w-60 d-inline h-100'>
      <div class='text-align-center pg-header-banner w-100 d-inline text-sz-md text-wt-reg pad-3'>
        {$movie_name}
      </div>
      <div class='w-100 d-inline text-sz-rg text-wt-reg text-align-justify pad-3 movie-details'>
        {$description}

         <div class='button link-1 pad-tb-2 text-align-center text-sz-rg text-wt-reg'> 
            <a class='button' href='/movie/booking/{$movieID}'> Book now </a>
        </div>
      </div>
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
