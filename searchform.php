<?php
/**
 * Formulario de busca.
 *
 * @package ai-theme
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
  <label>
    <span class="screen-reader-text"><?php esc_html_e('Buscar por:', 'ai-theme'); ?></span>
    <input type="search" class="search-field" placeholder="<?php echo esc_attr_x('Buscar ...', 'placeholder', 'ai-theme'); ?>" value="<?php echo esc_attr(get_search_query()); ?>" name="s">
  </label>
  <button type="submit" class="search-submit"><?php echo esc_html_x('Buscar', 'submit button', 'ai-theme'); ?></button>
</form>
