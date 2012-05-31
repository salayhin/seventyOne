     <div class="span3">
          <div class="well sidebar-nav">
          <p><img src="<?php echo get_template_directory_uri();?>/assets/img/rightbrainsolution.png" alt=""></p>
          <hr />
            <ul class="nav nav-list">
        <?php if ( !function_exists('dynamic_sidebar')
            || !dynamic_sidebar() ) : ?>

    <li id="search" class="widget-container widget_search">
        <?php get_search_form(); ?>
    </li>

    <li id="archives" class="widget-container nav-header">
        <p class="nav-header"><?php _e( 'Archives', 'seventyOne' ); ?></p>
        <ul class="nav nav-list">
            <?php wp_get_archives( 'type=monthly' ); ?>
        </ul>
    </li>

    <li id="meta" class="widget-container">
        <p class="widgettitle"><?php _e( 'Meta', 'seventyOne' ); ?></p>
        <ul class="nav nav-list">
            <?php wp_register(); ?>
            <li><?php wp_loginout(); ?></li>
            <?php wp_meta(); ?>
        </ul>
    </li>

    <?php endif; // end primary widget area ?>

    </ul>
          </div><!--/.well -->
        </div><!--/span-->
