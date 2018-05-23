<?php
/**
 *
 * The main theme file
 *
 * @package WordPress
 **/

get_header(); ?>

<!-- <div class="post-container"> -->
<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/components/content' );
	endwhile;
	?>
	<!-- </div> -->
	<?php
	the_posts_pagination( array(
		'prev_text' => '&larr;',
		'next_text' => '&rarr;',
	) );
	else :
		echo '記事はありません';
	endif;
?>

<?php
get_footer();
