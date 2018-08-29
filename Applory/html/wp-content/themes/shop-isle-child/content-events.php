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

	<table width="50%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="25%"><strong>제목:</strong></td>
    <td width="75%"><?php the_field('title'); ?></td>
  </tr>
   <tr>
    <td><strong>저자:</strong></td>
    <td><?php the_field('title'); ?></td>
  </tr>
  <tr>
    <td><strong>커버:</strong></td>
    <td><?php the_field('period'); ?></td>
  </tr>

</table>

</div><!-- #post-## -->
