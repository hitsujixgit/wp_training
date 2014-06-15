<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
<!--[if lt IE 7]> 
<style type="text/css">
 #menu-nav {
  position: absolute;
  top: expression(eval(document.documentElement.scrollTop+40));
 }
</style>
<![endif]-->
</head>

<body>
<div id="wrapper">
<div id="header">
	<div id="header-menu">
  		<div class="centering"><!-- 中央寄せ-->
        	<?php wp_nav_menu(array('theme_location'=>'topmenu','container'=>'','menu_class'=>'','items_wrap'=>'<ul>%3$s</ul>')); ?>
    	</div>
    </div>
	<img src="<?php bloginfo('template_url'); ?>/img/background_wave_rev02.png" width="1200" height="60" alt="wave" />
</div><!-- header-->

<div id="container" class="centering">
 <div id="navigation-box">
	<h1><?php bloginfo('name'); ?></h1>
    <p id="description"><?php bloginfo('description'); ?></p>
    <?php wp_nav_menu(array('theme_location'=>'sidemenu','container'=>'','menu_class'=>'','items_wrap'=>'<ul>%3$s</ul>')); ?>
</div>
<div id="main-box"> 
