<?php 
/*
 * Template Name: Menu	
*/
get_header();
?>

<?php 
	$taxonomy = 'category';
	$terms = get_terms($taxonomy);
	foreach ($terms as $key => $term) {
        $cat_id =  $term->term_id;
		$backgroundImage = get_field('background_image', 'category_'.$cat_id);
		$block_background_color = get_field('block_background_color', 'category_'.$cat_id);
		//echo '<div style="background-color:'.$block_background_color.';"><img src="'.$backgroundImage.'" height="200px;" width="200px;" ></div>';
		 
		 $args = array( 'post_type' => 'menus', 'posts_per_page' => 5, 'category' => $cat_id );
		 $myposts = get_posts( $args );
		 foreach ( $myposts as $post ) {
		 	echo $post->post_title;
		 	echo '<br>';	
		 	
		  }  
		 wp_reset_postdata(); 
	
	}

?>
<?php get_footer(); ?>