<?php
/**
 * Template 404.
 *
 * @package ai-theme
 */

get_header();
?>

<div class="wrap site-content">
  <main id="primary" class="site-main">
    <article class="card not-found">
      <h1 class="entry-title"><?php esc_html_e('Pagina nao encontrada', 'ai-theme'); ?></h1>
      <p><?php esc_html_e('A pagina que voce tentou acessar nao existe ou foi movida.', 'ai-theme'); ?></p>
      <?php get_search_form(); ?>
    </article>
  </main>
</div>

<?php
get_footer();
