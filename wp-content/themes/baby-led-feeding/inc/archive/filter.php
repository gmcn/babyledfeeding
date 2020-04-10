<div class="container-fluid filter">
  <div class="container">
    <div class="row">
      <div class="col-md-6 filter_options">
        <div class="dropdown show">
          <a class="btn btn-secondary dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Filter blog by <img src="<?php echo get_template_directory_uri(); ?>/images/caret.svg" alt="Dropdown Arrow">
          </a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="/blog/">All</a></li>
            <?php wp_list_categories(array( 'title_li' => '' )); ?>
          </div>
        </div>
      </div>
      <div class="col-md-6 filter_search">
        <?php echo get_search_form(); ?>
      </div>
    </div>
  </div>
</div>
