<?php
/**
 * Template de pagina.
 *
 * @package ai-theme
 */

get_header();
?>

<div class="wrap site-content">
  <div class="content-grid">
    <main id="primary" class="site-main">
      <?php
      while (have_posts()) :
          the_post();
          ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class('card'); ?>>
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <div class="entry-content"><?php the_content(); ?></div>
          </article>

          <?php if (comments_open() || get_comments_number()) : ?>
            <?php comments_template(); ?>
          <?php endif; ?>
      <?php endwhile; ?>
    </main>
  </div>
</div>

<?php
get_footer();
