<?php
/**
 * Template de busca.
 *
 * @package ai-theme
 */

get_header();
?>

<div class="wrap site-content">
  <div class="content-grid has-sidebar">
    <main id="primary" class="site-main">
      <header class="card">
        <h1 class="entry-title">
          <?php
          printf(
              esc_html__('Resultados para: %s', 'ai-theme'),
              '<span>' . esc_html(get_search_query()) . '</span>'
          );
          ?>
        </h1>
      </header>

      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class('card'); ?>>
            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="entry-content"><?php the_excerpt(); ?></div>
          </article>
        <?php endwhile; ?>

        <?php the_posts_pagination(); ?>
      <?php else : ?>
        <article class="card not-found">
          <h2><?php esc_html_e('Nada encontrado', 'ai-theme'); ?></h2>
          <?php get_search_form(); ?>
        </article>
      <?php endif; ?>
    </main>

    <?php get_sidebar(); ?>
  </div>
</div>

<?php
get_footer();
