<?php get_header();
	// Template Name: All Posts
?>
<div class="feed-wrapper" id="main">
	<?php if( have_posts() ){ ?>
	<div id="feed">
		<?php while ( have_posts() ){ the_post(); ?>
		<div class="item">
			<div class="item-decor">
				<?php if ( get_the_post_thumbnail_url() ) { ?>
					<a href="<?php echo get_permalink() ?>">
						<div class="thumbnail" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
							<div class="cta">
								<p>LEGGI</p>
							</div>
						</div>
					</a>
				<?php } ?>
			</div>

			<div class="item-info">
				<p class="title"><a class="link" href="<?php echo get_permalink() ?>"><?php the_title() ?></a></p>
				<hr>
				<p class="descr"><?php the_excerpt() ?></p>
				<br>
				<p class="info"><?php if ( get_the_author_meta("first_name") && get_the_author_meta("last_name") ) { ?><a><?php echo get_the_author_meta("first_name")." ".get_the_author_meta("last_name") ?></a><?php } ?> | <b><?php echo get_the_author_meta("nickname") ?></b><br><?php the_time("d M Y") ?> @ <?php the_time() ?></p>
				<br>
				<a href="<?php echo get_permalink() ?>" class="continue-reading link">CONTINUA A LEGGERE...</a>
			</div>
		</div>
		<?php }/*end of while*/ } /*end of if*/ ?>
	</div>
</div>

<?php get_footer(); ?>