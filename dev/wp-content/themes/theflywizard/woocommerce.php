<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div class="container">
  <div class="inner-wrapper">
    <main id="main" class="woocommerce woo" role="main">
      <?php woocommerce_content(); WW?>
    </main>
    <?php get_sidebar( 'content-bottom' ); ?>
  </div>
</div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
