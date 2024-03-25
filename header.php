<?php
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="header">
    <div class="logo">  <a href="<?php echo home_url(); ?>"style=" text-decoration: none;  color: white;">  LOGO CLIENTE  </a></div>
	<nav class="menu">
  		<?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
	</nav>
  </header>
