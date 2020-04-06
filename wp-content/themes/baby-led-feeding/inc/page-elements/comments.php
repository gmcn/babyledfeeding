<?php if ( comments_open() || get_comments_number() ): ?>

  <div class="container single-recipe__comments">
    <a id="review"></a>
    <div class="row">
      <?php echo comments_template(); ?>
    </div>
  </div>

<?php endif; ?>
