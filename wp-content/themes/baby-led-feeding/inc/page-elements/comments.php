<?php if ( comments_open() || get_comments_number() ): ?>

  <div class="container single-recipe__comments">
    <a id="review"></a>
    <div itemprop="comment" class="row">
      <div class="col-md-10 col-md-offset-1">
        <?php echo comments_template(); ?>
      </div>
    </div>
  </div>

<?php endif; ?>
