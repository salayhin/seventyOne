<?php get_header(); ?>

<div class="">
    <div class="span6">
   <?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>


				<?php endwhile; // end of the loop. ?>

</div>
    <?php include ("sidebar.php"); ?>

</div>

</div>


<?php include_once("footer_top.php"); ?>


<?php include ("footer.php"); ?>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
