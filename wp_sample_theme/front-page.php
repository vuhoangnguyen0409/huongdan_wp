<?php get_header();
?>
<div class="content">
	<?php // get 8 newsest postype: go $args=array( 'numberposts'=> 8,'orderby'=> 'post_date', 'order' => 'DESC', 'post_type' => 'go', 'post_status' => 'publish', 'suppress_filters' => true, ); $posts_array = get_posts( $args ); foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
	<div class="thumbnail"> <a href="<?php the_post_thumbnail_url( $size ); ?>"><img src="<?php the_post_thumbnail_url( $size ); ?>" title="<?php the_title(); ?>"></a> </div>
	<?php endforeach; ?> </div>
<?php get_footer(); ?>