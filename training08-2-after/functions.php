<?php
//widgetを追加する
register_sidebars(2, array('name'=>'Sidebar %d','before_widget'=>'<li id="%1$s" class="widget %2$s">', 'after_widget'=>'</li>', 'before_title' => '<h2>', 'after_title' => '</h2>'));

//custom menuを追加する
register_nav_menus( array( 'topmenu' => 'Top Menu', 'sidemenu' => 'Side Menu'));

//画像サイズを定義
$hitsuji_app_thumbnails_mid_h = 240;
$hitsuji_app_thumbnails_mid_w = 160;

//アイキャッチ画像対応
add_theme_support('post-thumbnails');
add_image_size('app_thumbnails_mid', $hitsuji_app_thumbnails_mid_w, $hitsuji_app_thumbnails_mid_h, true);
