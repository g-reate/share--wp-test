<?php
/**
 * Header.
 *
 * @package WP-TEST
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="format-detection" content="telephone=no">
		<meta name="author" content="<?php echo esc_url( home_url() ); ?>">
		<meta name="description" content="WordPressテストテーマ">
		<script>
			const viewport = document.createElement( 'meta' );
			viewport.setAttribute( 'name', 'viewport' );
			if ( 768 > screen.width ) {
				viewport.setAttribute( 'content', 'width=device-width, initial-scale=1.0' );
			} else {
				viewport.setAttribute( 'content', 'width=1280' );
			}
			document.getElementsByTagName( 'head' )[0].appendChild( viewport );
		</script>
		<?php wp_head(); ?>
	</head>
