<?php
//widgetを追加する
register_sidebars(2, array('name'=>'Sidebar %d','before_widget'=>'<li id="%1$s" class="widget %2$s">', 'after_widget'=>'</li>', 'before_title' => '<h2>', 'after_title' => '</h2>'));

//custom menuを追加する
register_nav_menus( array( 'topmenu' => 'Top Menu', 'sidemenu' => 'Side Menu'));
