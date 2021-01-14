<?php
$site = '6LcRuNAUAAAAADtamJW75fYf8YtNHceSngjKsf-B';
$scrt = '6LcRuNAUAAAAALBu7Ymh0yxmTXTJmP0rsnkjGyj0';
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php wp_head(); ?>
  <style>
    :root{
      --primary_color:<?php echo get_option( 'primary_color', '' ); ?>;
      --secondary_color:<?php echo get_option( 'secondary_color', '' ); ?>;
    }
  </style>
</head>
<body <?php body_class(); ?>>

	<view id="load" class="load"><div class="circle"></div></view>





  <header class="header" id="header">

    <div class="logo">

      <img class="logo_certif" src="<?php echo get_template_directory_uri() . '/img/certificate.png'; ?>" alt="">
      <a class="logo_amg" href="<?php echo site_url(); ?>">
        <img class="logo_img" src="<?php echo get_template_directory_uri() . '/img/logo.png'; ?>" alt="">
      </a>
    </div>

  </header>


  <button class="burger" onclick="altClassFromSelector('mobile_menu_active', 'body')">
    <div class="burgerBar"></div>
    <div class="burgerBar"></div>
    <div class="burgerBar"></div>
  </button>
  <menu class="menu">
    <?php
    $args = array(
      'theme_location' => 'language_bar',
      'depth' => 0,
      'container'	=> false,
      'fallback_cb' => false,
      'menu_class' => 'menu_language',
    );
    wp_nav_menu($args);
    ?>
    <p class="menu_txt">Premium<br>Juices & Nectars</p>

    <!-- <nav class="nav_menu"> -->
      <?php
      $args = array(
        'theme_location' => 'navBar',
        'depth' => 0,
        'container'	=> false,
        'fallback_cb' => false,
        'menu_class' => 'navBar',
      );
      wp_nav_menu($args);
      ?>

    <!-- </nav> -->
  </menu>
