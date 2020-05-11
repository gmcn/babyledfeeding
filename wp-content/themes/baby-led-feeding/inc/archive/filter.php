<div class="container-fluid filter">
  <div class="container">
    <div class="row">
      <div class="col-md-7 filter_options">
        <div class="dropdown show">
          <a class="btn btn-secondary dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Filter blog by <img src="<?php echo get_template_directory_uri(); ?>/images/caret_green.svg" alt="Dropdown Arrow">
          </a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="/blog/">All</a></li>
            <?php wp_list_categories(array( 'title_li' => '' )); ?>
          </div>
        </div>
      </div>
      <div class="col-md-5 filter_search">
        <!-- <div class="col-md-12"> -->
          <form role="search" method="get" class="search-form" action="/">
    				<label>
    					<span class="screen-reader-text">Search for:</span>
    					<input type="search" class="search-field" value="" name="s">
    				</label>
    				<input <?php if($catColour) : ?>style="background-color: <?php echo $catColour ?>" <?php endif; ?> type="submit" class="search-submit" value="Search">
    			</form>
        <!-- </div> -->
      </div>
    </div>
  </div>
</div>
