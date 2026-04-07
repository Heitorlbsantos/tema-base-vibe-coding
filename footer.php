<?php
/**
 * Rodape do tema.
 *
 * @package ai-theme
 */
?>
<footer class="site-footer">
  <div class="wrap">
    <p>
      <?php
      printf(
          esc_html__('© %1$s %2$s. Todos os direitos reservados.', 'ai-theme'),
          esc_html(wp_date('Y')),
          esc_html(get_bloginfo('name'))
      );
      ?>
    </p>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
