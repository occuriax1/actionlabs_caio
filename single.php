<?php get_header(); ?>

<!-- Imagem destacada como cabeçalho da página -->
<?php if (has_post_thumbnail()): ?>
  <header class="page-header" style="background-image: url('<?php echo get_the_post_thumbnail_url(null, 'full'); ?>');">
    <div class="page-header-overlay">
    </div>
  </header>
<?php endif; ?>

<!-- Conteúdo da postagem -->
<div class="container post-content-container">
  <?php while (have_posts()): the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="post-content">
        <?php the_content(); ?>
      </div>
    </article>
  <?php endwhile; ?>
</div>

<?php get_footer(); ?>

<script>
document.addEventListener('DOMContentLoaded', function() {
  
  var categoryLink = document.querySelector('.taxonomy-category.wp-block-post-terms a');
  if (categoryLink) {
    categoryLink.href = '<?php echo home_url(); ?>'; // Redefine o href para a URL da página inicial
  }
});
</script>