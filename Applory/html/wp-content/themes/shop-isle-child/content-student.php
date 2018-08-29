<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Shop Isle
 */
?>

<div <?php post_class( 'post' ); ?> id="post-<?php the_ID(); ?>">

	<?php

	/*
	 * @hooked shop_isle_post_header() - 10
	 * @hooked shop_isle_post_meta() - 20
	 * @hooked shop_isle_post_content() - 30
	 */
	do_action( 'shop_isle_loop_post' );
	?>

  <ul>
    <li><h5>이름: <?php the_field('name') ?></h5></li>
    <li><h5>학번: <?php the_field('sno') ?></h5></li>
  </ul>

</div><!-- #post-## -->
