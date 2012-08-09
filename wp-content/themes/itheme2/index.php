<?php get_header(); ?>

<?php if(is_front_page() && !is_paged()){ get_template_part( 'includes/header-slider'); } ?>

<?php 
/////////////////////////////////////////////
// Setup Default Variables	 							
/////////////////////////////////////////////
?>

<?php global $post_layout, $hide_title, $hide_image, $hide_title, $hide_meta, $hide_date, $display_content; ?>
<?php $layout = themify_get('setting-default_layout'); /* set default layout */ if($layout == '' ) : $layout = 'sidebar1'; endif; ?>
<?php $post_layout = themify_get('setting-default_post_layout'); /* set default post layout */ if($post_layout == ''): $post_layout = 'list-post'; endif; ?>
<?php $page_title = themify_get('setting-hide_page_title'); ?>
<?php $hide_title = themify_get('setting-default_post_title'); ?>
<?php $unlink_title = themify_get('setting-default_unlink_post_title'); ?>
<?php $hide_image = themify_get('setting-default_post_image'); ?>
<?php $unlink_image = themify_get('setting-default_unlink_post_image'); ?>
<?php $hide_meta = themify_get('setting-default_post_meta'); ?>
<?php $hide_date = themify_get('setting-default_post_date'); ?>

<?php $display_content = themify_get('setting-default_layout_display'); ?>
<?php $post_image_width = themify_get('image_width'); ?>
<?php $post_image_height = themify_get('image_height'); ?>
<?php $page_navigation = themify_get('hide_navigation'); ?>
<?php $posts_per_pages = themify_get('posts_per_page'); ?>

	
<?php 

/////////////////////////////////////////////
// Set Default Image Sizes 							
/////////////////////////////////////////////

$content_width = 918;
$sidebar1_content_width = 600;

// Grid4
$grid4_width = 194;
$grid4_height = 140;

// Grid3
$grid3_width = 272;
$grid3_height = 180;

// Grid2
$grid2_width = 428;
$grid2_height = 250;

// List Large
$list_large_image_width = 600;
$list_large_image_height = 390;
 
// List Thumb
$list_thumb_image_width = 200;
$list_thumb_image_height = 200;

// List Grid2 Thumb
$grid2_thumb_width = 100;
$grid2_thumb_height = 90;

// List Post
$list_post_width = 908;
$list_post_height = 400;

		
///////////////////////////////////////////
// Setting image width, height
///////////////////////////////////////////

global $width, $height;

if($post_layout == 'grid4'):

	$width = $grid4_width;
	$height = $grid4_height;

elseif($post_layout == 'grid3'):

	$width = $grid3_width;
	$height = $grid3_height;

elseif($post_layout == 'grid2'):

	$width = $grid2_width;
	$height = $grid2_height;
	
elseif($post_layout == 'list-large-image'):

	$width = $list_large_image_width;
	$height = $list_large_image_height;

elseif($post_layout == 'list-thumb-image'):

	$width = $list_thumb_image_width;
	$height = $list_thumb_image_height;

elseif($post_layout == 'grid2-thumb'):

	$width = $grid2_thumb_width;
	$height = $grid2_thumb_height;
	
elseif($post_layout == 'list-post'):

	$width = $list_post_width;
	$height = $list_post_height;

else:
			
	$width = $list_post_width;
	$height = $list_post_height;
	
endif;

if($layout == "sidebar1" || $layout == "sidebar1 sidebar-left"):
	
	$ratio = $width / $content_width;
	$aspect = $height / $width;
	$width = round($ratio * $sidebar1_content_width);
	if($height != '' && $height != 0):
		$height = round($width * $aspect);
	endif;
	
endif;
?>
			
<!-- layout-container -->
<div id="layout" class="clearfix <?php echo $layout; ?>">

	<!-- content -->

	<!--/content -->
	
	<?php 
	/////////////////////////////////////////////
	// Sidebar							
	/////////////////////////////////////////////
	?>
	
	<?php if ($layout != "sidebar-none"): get_sidebar(); endif; ?>
	
</div>
<!-- layout-container -->

<?php get_footer(); ?>