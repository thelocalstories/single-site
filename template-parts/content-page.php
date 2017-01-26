<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Single Site
 */
?>
<?php
    global $post;
?>
<section id="<?php echo $post->post_name; ?>" <?php post_class(); ?>>
	<div class="grid-container">
    <div class="col-6 text-block">
		<?php the_title( '<h2 class="">', '</h2>' ); ?>

		<?php the_content(); ?>
		
        </div>
    </div>
</section><!-- #post-## -->
