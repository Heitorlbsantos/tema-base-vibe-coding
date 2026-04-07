<?php
/**
 * Template principal.
 *
 * @package ai-theme
 */

get_header();
?>

<div class="wrap site-content">
  <div class="content-grid has-sidebar">
    <main id="primary" class="site-main">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class('card'); ?>>
            <?php if (is_singular()) : ?>
              <h1 class="entry-title"><?php the_title(); ?></h1>
            <?php else : ?>
              <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php endif; ?>

            <p class="entry-meta"><?php echo esc_html(get_the_date()); ?> · <?php the_author(); ?></p>

            <div class="entry-content">
              <?php
              if (is_singular()) {
                  the_content();
              } else {
                  the_excerpt();
              }
              ?>
            </div>
          </article>
        <?php endwhile; ?>

        <?php the_posts_pagination(); ?>
      <?php else : ?>
        <article class="card not-found">
          <h2><?php esc_html_e('Nada encontrado', 'ai-theme'); ?></h2>
          <p><?php esc_html_e('Tente buscar por outro termo.', 'ai-theme'); ?></p>
          <?php get_search_form(); ?>
        </article>
      <?php endif; ?>
    </main>

    <?php get_sidebar(); ?>
  </div>
</div>

<?php
get_footer();
