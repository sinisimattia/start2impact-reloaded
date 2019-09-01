<!DOCTYPE html>
<html>

<head>
	<?php wp_head(); ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php get_bloginfo("name"); ?></title>
	<script src="<?php echo get_template_directory_uri() ?>/js/jquery.js" rel="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri() ?>/js/masonry.js" rel="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri() ?>/js/layout.js" rel="text/javascript"></script>
</head>

<body>
	<!-- HEADER -->
	<div class="header">
		<div class="wrapper grid" id="header">
			<div id="logo-wrp">
				<a class="link title" href="/"><span id="s2i"><?php echo get_bloginfo("name") ?></span><img id="logo" src="<?php echo get_template_directory_uri()."/img/s2i_logo.png"; ?>" alt="[=o)>]"></a>
			</div>

			<div class="menu">
				<?php wp_nav_menu( array("theme_location"=>"header-menu" ) ); ?>
			</div>
		</div>
	</div>