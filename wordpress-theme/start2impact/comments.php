<div class="comments">
	<!--<p class="title">Discussione</p>-->
	<?php
		if ( post_password_required() ){
			echo "<a>This comment section is private.</a>";
			echo "</div>";
			return;
		}
	?>

	<div id="new_comment">
		<?php comment_form( array() ); ?>
	</div>

	<hr>

	<p class="info">
	<?php
		if ( have_comments() )
			printf( _nx( "Un solo commento per questo post: ", "%s commenti per questo post: ", get_comments_number(), "Number of comments", "start2impact" ), number_format_i18n( get_comments_number() ) );
		else echo "Non ci sono commenti...";

		//print_r( get_comments( array() ) );
	?>
	</p>

	<div>
		<?php
			wp_list_comments( array(
				"style" => "div",
				"avatar_size" => 30,
				"page" => get_the_ID()
			) );
		?>
	</div>
</div>