<?php
/**
 * Template de comentarios.
 *
 * @package ai-theme
 */

if (post_password_required()) {
    return;
}
?>

<section id="comments" class="comments-area card">
  <?php if (have_comments()) : ?>
    <h2 class="comments-title">
      <?php
      printf(
          esc_html(_nx('%1$s comentario', '%1$s comentarios', get_comments_number(), 'comments title', 'ai-theme')),
          esc_html(number_format_i18n(get_comments_number()))
      );
      ?>
    </h2>

    <ol class="comment-list">
      <?php
      wp_list_comments([
          'style'      => 'ol',
          'short_ping' => true,
      ]);
      ?>
    </ol>

    <?php the_comments_pagination(); ?>
  <?php endif; ?>

  <?php comment_form(); ?>
</section>
