<?php
/**
 * Template de arquivos.
 *
 * @package ai-theme
 */

get_header();
?>

<div class="wrap site-content">
  <div class="content-grid has-sidebar">
    <main id="primary" class="site-main">
      <header class="card">
        <h1 class="entry-title"><?php the_archive_title(); ?></h1>
        <div class="entry-meta"><?php the_archive_description(); ?></div>
      </header>

      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class('card'); ?>>
            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p class="entry-meta"><?php echo esc_html(get_the_date()); ?></p>
            <div class="entry-content"><?php the_excerpt(); ?></div>
          </article>
        <?php endwhile; ?>

        <?php the_posts_pagination(); ?>
      <?php else : ?>
        <article class="card not-found">
          <h2><?php esc_html_e('Nenhum resultado', 'ai-theme'); ?></h2>
        </article>
      <?php endif; ?>
    </main>

    <?php get_sidebar(); ?>
  </div>
</div>

<?php
get_footer();
