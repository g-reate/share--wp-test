<?php
/**
 * Index.
 *
 * @package WP-TEST
 */

?>


<?php get_header(); ?>
<div id="wrapper" class="l-wrapper l-wrapper__index">
<!-- ここから -->

<div class="img1">
	<img id="image1" src="<?php echo esc_url( get_theme_file_uri( '/images/test.jpg' ) ); ?>" width="1920" height="1187" alt="濃紺の空と小さな山">
</div>
<div class="center">
	<p class="Bold">WPテスト</p>
</div>
<div class="cssgrid">
	<div class="block">
		<p>01</p>
	</div>
	<div class="block">
		<p>02</p>
	</div>
	<div class="block">
		<p>03</p>
	</div>
	<div class="block">
		<p>04</p>
	</div>
</div>

<!-- ここまで -->
</div>

<?php get_footer(); ?>
