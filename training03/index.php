<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
</head>

<body>
<div id="container"><!-- 全体を中央寄せ-->
	<div id="header">
		<h1><?php bloginfo('name'); ?></h1>
	</div> <!–header–>
	<div id="contents">
		<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<div class="post">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php the_content(); ?>
		</div> <!–post–>
		<?php endwhile; endif; ?>
	</div> <!–contents–>
	<div id="footer">
		<?php bloginfo('name'); ?> All rights reserved.
	</div><!-- footer -->
    </div><!-- container -->
</body>
</html>