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
    <div class="col-2 text-block" id="<?php echo $post->post_name . '-box1'; ?>">
		<?php the_field('box_1'); ?>
    </div>
     <div class="col-2 text-block" id="<?php echo $post->post_name . '-box2'; ?>">
		<?php the_field('box_2'); ?>
    </div>
    <div class="col-2 text-block" id="<?php echo $post->post_name . '-box3'; ?>">
		<?php the_field('box_3'); ?>
    </div>
    </div>
</section><!-- #post-## -->
