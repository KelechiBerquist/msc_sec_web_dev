<?php include __DIR__ . '/templates/header.php'; ?>

<div class="w-100 pg-header-banner">
	<div class="marg-5 pad-2 text-sz-md text-wt-reg  text-align-center">
		Available Movies
	</div>
</div>

<div class='w-100'>
	<div class='w-90 marg-tb-5 pg_content'>
		<div>
			<span class='pad-1 text-align-left w-20 text-sz-rg text-wt-bold d-inline-tab'>Movie</span>
			<span class='pad-1 text-align-left w-30 text-sz-rg text-wt-bold d-inline-tab'>Description</span>
			<span class='pad-1 text-align-left w-20 text-sz-rg text-wt-bold d-inline-tab'>Ticket</span>
			<span class='pad-1 text-align-left w-5  text-sz-rg text-wt-bold d-inline-tab'>Rating</span>
		</div>

		<?php
			$table = '';
			$pgination = "<ul class='marg-2'>";
			$page_items = 5;
			$arr_split = array_chunk($_SESSION['all_movies'], $page_items, true);
			$num_pages = count($arr_split);

			for ($i = 0; $i < $num_pages; $i++){
				$page = $i + 1;
				$this_page = $arr_split[$i];
				$table = $table . " <div id='tbl_pg_{$page}' class='marg-1'> ";
				foreach ($this_page as $row) {
					$movie_id = $row['movieID'];
					$movie_name = $row['movie_name'];
					$description = substr($row['description'], 0, 20) . '...';
					$ticket_price = $row['ticket_price'];
					$rating = $row['rating'];
					$table = $table . "
						<div class='marg-0 pad-0'>
							<span class='pad-1 link-1 text-align-left w-20 text-sz-rg d-inline-tab'>
								<a href='/movie/listing/{$movie_id}'>{$movie_name}</a>
							</span>
							<span class='pad-1 link-1 text-align-left w-30 text-sz-rg d-inline-tab'>{$description}</span>
							<span class='pad-1 link-1 text-align-left w-20 text-sz-rg d-inline-tab'>&dollar;{$ticket_price}</span>
							<span class='pad-1 link-1 text-align-left w-5  text-sz-rg d-inline-tab'>{$rating}</span>
						</div>
					";
				}
				$table = $table . "</div>";
				$pgination = $pgination . "<li class='link-2 d-inline marg-lr-2 text-sz-rg'><a href=#tbl_pg_{$page}>{$page}</a></li>";
			}
			$pgination = $pgination . '</ul>';
			echo $table;
		?>
	</div>
	<?php
		echo $pgination;
	?>
</div>


<?php include __DIR__ . '/templates/footer.php'; ?>
