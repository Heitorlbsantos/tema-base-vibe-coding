<?php
/**
 * Sidebar do tema.
 *
 * @package ai-theme
 */
?>
<aside id="secondary" class="widget-area">
  <?php if (is_active_sidebar('sidebar-1')) : ?>
    <?php dynamic_sidebar('sidebar-1'); ?>
  <?php else : ?>
    <section class="widget card">
      <h2 class="widget-title"><?php esc_html_e('Sidebar', 'ai-theme'); ?></h2>
      <p><?php esc_html_e('Adicione widgets em Aparencia > Widgets.', 'ai-theme'); ?></p>
    </section>
  <?php endif; ?>
</aside>
