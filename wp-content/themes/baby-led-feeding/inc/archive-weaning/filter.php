<?php

$weaning_categories = get_terms( 'weaning-categories', 'orderby=count&hide_empty=1' );

?>

<div class="container-fluid filter">
  <div class="container">
    <div class="row">
      <div class="col-md-6 filter_options">
        <div class="dropdown show">
          <a class="btn btn-secondary dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Filter Weanings by <img src="<?php echo get_template_directory_uri(); ?>/images/caret.svg" alt="Dropdown Arrow">
          </a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="/weaning/">All</a></li>

            <?php foreach ( $weaning_categories as $weaning_category ) { ?>
            <li>
              <a href="/weaning-categories/<?php echo $weaning_category->slug ?>">
                  <?php echo $weaning_category->name ?>
              </a>
            </li>
        <?php  } ?>
          </div>
        </div>
      </div>
      <div class="col-md-6 filter_search">
        <?php echo get_search_form(); ?>
      </div>
    </div>
  </div>
</div>
