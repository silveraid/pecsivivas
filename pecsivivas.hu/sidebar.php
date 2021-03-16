<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pecsivivas
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="col-md-3 col-lg-3">
<aside id="secondary" class="widget-area">
	<div class="card card-body bg-light">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>
</aside><!-- #secondary -->
</div>

</div><!-- closing .row -->
</div><!-- closing .container -->