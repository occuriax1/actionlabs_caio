<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ActionLabs_teste
 */


?>

<?php get_header(); ?>
<div class="about-header">
    <div class="container-about">
        <h1 class="about-title">Sobre nós</h1>
    </div>
</div>
<div class="container-about about-content">
    <?php while (have_posts()) : the_post(); ?>
        <div class="content">
            <?php the_content(); ?>
        </div>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>
