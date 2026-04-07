<?php
/**
 * Template de post unico.
 *
 * @package ai-theme
 */

get_header();
?>

<div class="wrap site-content">
  <div class="content-grid has-sidebar">
    <main id="primary" class="site-main">
      <?php
      while (have_posts()) :
          the_post();
          ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class('card'); ?>>
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <p class="entry-meta"><?php echo esc_html(get_the_date()); ?> · <?php the_author(); ?></p>
            <div class="entry-content"><?php the_content(); ?></div>
          </article>

          <?php if (comments_open() || get_comments_number()) : ?>
            <?php comments_template(); ?>
          <?php endif; ?>
      <?php endwhile; ?>
    </main>

    <?php get_sidebar(); ?>
  </div>
</div>

<?php
get_footer();
