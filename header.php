<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width">

    <?php wp_head();?>
  </head>

  <body <?php body_class();?>>
    <?php wp_body_open(); ?>

  <div class="bg_container">    
    <header class="img_bg">
      <div class="title">
        <h1><a href="<?php echo esc_url( home_url('/') );?>"><?php bloginfo('name'); ?></a></h1>
      </div>

      <nav>
        <a href="<?php echo get_header_navlink('prof')?>">
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon_p.png" alt="" width="45" height="45">
            <p>PROFILE</p>
          </div>
        </a>
        <a href="<?php echo get_header_navlink('skill')?>">
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon_s.png" alt="" width="45" height="45">
            <p>SKILLS</p>
          </div>
        </a>
        <a href="<?php echo get_header_navlink('text-2')?>">
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon_c.png" alt="" width="45" height="45">
            <p>CONTACT</p>
          </div>
        </a>
      </nav>
    </header>