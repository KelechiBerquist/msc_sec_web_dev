


<!-- <div> Movie Details </div> -->
<div>
	<div>
    <?php
      // echo 'GET is <br>';
      // var_dump($_GET);
      // echo '<br><br><br><br>';
      var_dump($_SESSION['movies_by_id']);
      echo '<br><br><br><br>';

      // if (isset($_SESSION['get_specific_movie_msg'])){
      //   echo $_SESSION['get_specific_movie_msg'];
      //   echo '<br><br><br><br>';
      // }
    ?>
  </div>

	<!-- Description

	ticket price
	rating -->
    </div>

</div>

<!--
  `movieID` mediumint(8) UNSIGNED NOT NULL,
  `movie_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `ticket_price` decimal(7,2) NOT NULL,
  `rating` char(3) NOT NULL -->
