<?php get_header(); ?>

<div class="">

    <div class="span6">
    <p style="line-height:20px;">


        <?php while (have_posts()) : the_post() ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"
                                       title="<?php printf(__('Permalink to %s', 'your-theme'), the_title_attribute('echo=0')); ?>"
                                       rel="bookmark"><?php the_title(); ?></a></h2>

            <div class="entry-meta">
                <span class="meta-prep meta-prep-author"><?php _e('By ', 'your-theme'); ?></span>
                <span class="author vcard"><a class="url fn n"
                                              href="<?php echo get_author_link(false, $authordata->ID, $authordata->user_nicename); ?>"
                                              title="<?php printf(__('View all posts by %s', 'your-theme'), $authordata->display_name); ?>"><?php the_author(); ?></a></span>
                <span class="meta-sep"> | </span>
                <span class="meta-prep meta-prep-entry-date"><?php _e('Published ', 'your-theme'); ?></span>
                <span class="entry-date"><abbr class="published"
                                               title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time(get_option('date_format')); ?></abbr></span>
                <?php edit_post_link(__('Edit', 'your-theme'), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t") ?>
            </div>
            <!-- .entry-meta -->
            <br />
            <div class="entry-content">
                <?php the_content(__('Continue reading <span class="meta-nav">&raquo;</span>', 'your-theme')); ?>
                <?php wp_link_pages('before=<div class="page-link">' . __('Pages:', 'your-theme') . '&after=</div>') ?>


            </div>
            <!-- .entry-content -->


            <div class="entry-utility">
                <span class="cat-links"><span
                    class="entry-utility-prep entry-utility-prep-cat-links"><?php _e('Posted in ', 'your-theme'); ?></span><?php echo get_the_category_list(', '); ?></span>
                <span class="meta-sep"> | </span>
                <?php the_tags('<span class="tag-links"><span class="entry-utility-prep entry-utility-prep-tag-links">' . __('Tagged ', 'your-theme') . '</span>', ", ", "</span>\n\t\t\t\t\t\t<span class=\"meta-sep\">|</span>\n") ?>
                <span
                    class="comments-link"><?php comments_popup_link(__('Leave a comment', 'your-theme'), __('1 Comment', 'your-theme'), __('% Comments', 'your-theme')) ?></span>
                <?php edit_post_link(__('Edit', 'your-theme'), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t\n") ?>
            </div>
            <!-- #entry-utility -->
            <br />
            <div class="span6">
                                                    <div class="fb-like" data-href="<?php the_permalink() ?>" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false"></div>
                                                    <a href="https://twitter.com/share" class="twitter-share-button" data-via="salayhin">Tweet</a>
                                                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                                                    <script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
                                                    <script type="IN/Share" data-counter="right"></script>
                                                    <g:plusone></g:plusone>
            </div>
        </div><!-- #post-<?php the_ID(); ?> -->


        </p>
        <?php endwhile; ?>

        <?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ($total_pages > 1) { ?>
        <div id="nav-below" class="navigation">
            <div
                class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&laquo;</span> Older posts', 'your-theme')) ?></div>
            <div
                class="nav-next"><?php previous_posts_link(__('Newer posts <span class="meta-nav">&raquo;</span>', 'your-theme')) ?></div>
        </div><!-- #nav-below -->
        <?php } ?>
        <div id="single-post-comments">
            <?php comments_template('', true); ?>
        </div>

    </div>
    <?php include ("sidebar.php"); ?>

</div><!--/span-->

</div><!--/row-->


<?php include_once("footer_top.php"); ?>

<?php include ("footer.php"); ?>


<?php get_footer(); ?>

