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
    <div class="col-6">
		<?php the_title( '<h2 class="">', '</h2>' ); ?>
     </div>
    <div class="col-3 text-block" id="<?php echo  $post->post_name . '-box1'; ?>">
		<?php the_field('box_1'); ?>
    </div>
     <div class="col-3 form-block">
		<?php the_field('request_form'); ?>
    </div>
    </div>
</section><!-- #post-## -->
