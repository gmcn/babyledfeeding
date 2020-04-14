<?php

$recipe_categories = get_terms( 'recipe-categories', 'orderby=count&hide_empty=1' );
$recipe_diets = get_terms( 'recipe-diets', 'orderby=count&hide_empty=1' );
$recipe_types = get_terms( 'recipe-type', 'orderby=count&hide_empty=1' );

?>

<div class="container-fluid filter">
  <div class="container">
    <div class="row">
      <div class="col-md-7 filter_options">

        <div class="col-md-4">
          <div class="dropdown show">
            <a class="btn btn-secondary dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Filter by Course <img src="<?php echo get_template_directory_uri(); ?>/images/caret.svg" alt="Dropdown Arrow">
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="/recipes/">All</a></li>

              <?php foreach ( $recipe_categories as $recipe_category ) { ?>
              <li>
                <a href="/recipe-categories/<?php echo $recipe_category->slug ?>">
                    <?php echo $recipe_category->name ?>
                </a>
              </li>
          <?php  } ?>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="dropdown show">
            <a class="btn btn-secondary dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Filter by Diet <img src="<?php echo get_template_directory_uri(); ?>/images/caret.svg" alt="Dropdown Arrow">
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="/recipes-diet/">All</a></li>

              <?php foreach ( $recipe_diets as $recipe_diet ) { ?>
              <li>
                <a href="/recipe-diet/<?php echo $recipe_diet->slug ?>">
                    <?php echo $recipe_diet->name ?>
                </a>
              </li>
          <?php  } ?>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="dropdown show">
            <a class="btn btn-secondary dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Filter by Type <img src="<?php echo get_template_directory_uri(); ?>/images/caret.svg" alt="Dropdown Arrow">
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="/recipes-type/">All</a></li>

              <?php foreach ( $recipe_types as $recipe_type) { ?>
              <li>
                <a href="/recipe-type/<?php echo $recipe_type->slug ?>">
                    <?php echo $recipe_type->name ?>
                </a>
              </li>
          <?php  } ?>
            </div>
          </div>
        </div>

      </div>
      <div class="col-md-5 filter_search">

        <div class="col-md-12">
          <form role="search" method="get" class="search-form" action="/">
    				<label>
    					<span class="screen-reader-text">Search for:</span>
    					<input type="search" class="search-field" placeholder="Search…" value="" name="s">
    				</label>
    				<input <?php if($catColour) : ?>style="background-color: <?php echo $catColour ?>" <?php endif; ?> type="submit" class="search-submit" value="Search">
    			</form>
        </div>


      </div>
    </div>
  </div>
</div>
