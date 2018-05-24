<?php
/**
 *
 * Display posts
 *
 * @package WordPress
 **/

?>
<div class="post-container">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
	if ( is_single() ) {
		the_title( '<h1 class="entry-title">', '</h1>' );
	} else {
		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
	}
	?>
	<ul class="post">
		<li><?php echo get_the_date(); ?></li>
		<li><?php the_category(); ?></li>
		<li><?php the_tags(); ?></li>
	<div class="post-img"><?php the_post_thumbnail(); ?></div>
	<?php
	the_content( '読む' )
	?>
</ul>
</article></div>
