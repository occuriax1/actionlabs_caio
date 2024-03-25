<?php
// Chama o cabeçalho do tema
get_header(); 
?>

<!-- Conteúdo principal da homepage -->
<main id="main-content">

  <!-- Seção Cliente -->
  <section class="cliente-section">
    <h1 class="cliente-title">Portal do Cliente</h1>
  </section>

  <!-- Seção dos Cards -->
  <section class="cards">
    <?php
    // Argumentos para buscar os últimos posts
    $args = array('numberposts' => 6);
    // Busca os posts
    $latest_posts = get_posts($args);
    foreach ($latest_posts as $post) : setup_postdata($post);
      // Estrutura de cada card
      ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('card'); ?>>
    <?php $categories = get_the_category(); ?>
    <?php if (!empty($categories)) : ?>
        <div class="card-badge"><?php echo esc_html($categories[0]->name); ?></div>
    <?php endif; ?>
    <?php if (has_post_thumbnail()) : ?>
        <div class="card-image">
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_post_thumbnail('full', ['class' => 'responsive-img']); ?>
        </a>
        </div>
    <?php endif; ?>
    <div class="card-content">
        <h2 class="card-title">
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_title(); ?>
        </a>
        </h2>
        <p class="card-summary"><?php the_excerpt(); ?></p>
        <div class="card-read-more">
        <a href="<?php the_permalink(); ?>" class="read-more">Leia mais</a>
        </div>
    </div>
    </article>
    <?php
    endforeach;
    wp_reset_postdata();
    ?>
  </section>

</main>

<?php
// Chama o rodapé do tema
get_footer(); 
?>