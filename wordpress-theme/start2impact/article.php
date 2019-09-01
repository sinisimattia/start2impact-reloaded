<?php get_header();

/*
 * Template Name: Single Article
 * Template Post Type: post, page, product
 */

?>
<div class="larger-wrapper">
	<?php if ( have_posts() ) { the_post(); ?>
		<div class="article spaced-vertical">
			<div class="title"><?php the_title() ?></div>
			<div class="snippet">
				<span class="green">&#34;</span>
				<a class="descr"><?php if( get_the_excerpt() ) echo get_the_excerpt() ?></a>
				<span class="green">&#34;</span>
			</div>
			<hr>
			<div class="info">
				<div id="author">
					<?php if ( get_the_author_meta("first_name") && get_the_author_meta("last_name") ) { ?>
						<a class="descr"><?php echo get_the_author_meta("first_name")." ".get_the_author_meta("last_name") ?></a>
					<?php } ?>
					<br>
					<a href="<?php echo get_the_author_meta("user_url") ?>" target="_blank" noreferer class="link green">@<?php echo get_the_author_meta("nickname") ?></a>
				</div>

				<div id="details">
					<div class="date">
						<a id="day"><?php echo get_the_time("d") ?></a>
						<a id="month"><?php echo get_the_time("M") ?></a>
						<a id="year"><?php echo get_the_time("Y") ?></a>
						<a id="time">@ <?php echo get_the_time() ?></a>
					</div>

					<div class="tags">
						<?php
							the_tags();
						?>							
					</div>
				</div>
			</div>
			
			<div class="content">
				<?php
					the_content();

					$next = get_the_post_navigation( array(
						"screen_reader_text" => "Altri post:",
						"next_text" => "%title <span class='bold yellow'>&gt;&gt;</span>",
						"prev_text" => "<span class='bold yellow'>&lt;&lt;</span> %title",

					));

					if ( $next ) echo "<hr>".$next;
				?>
			</div>

			<div id="thread">
				<?php comments_template(); ?>
			</div>
		</div>
	<?php } ?>
</div>

<?php get_footer(); ?>