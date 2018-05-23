<?php
/**
 *
 * Header
 *
 * @package WordPress
 **/

?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>test13</title>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>
	<header>
		<h1><a href="<?php bloginfo( 'url' ); ?>"<?php bloginfo( 'name' ); ?></a></h1>
		<p><?php bloginfo( 'description' ); ?></p>
	</header>
	<?php
	get_template_part( 'template-parts/components/nav' );
