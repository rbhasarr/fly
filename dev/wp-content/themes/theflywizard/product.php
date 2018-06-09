<?php
/*
Template Name: Product Page
*/
?>
<?php get_header(); ?>
 <?php  $args = array('post_type' => 'product','posts_per_page'=>-1,'orderby' =>'date','order'=>'ASC');  $loop = new WP_Query( $args );  while ( $loop->have_posts() ) : $loop->the_post();?><?php the_title(); ?><?php endwhile;						wp_reset_query();?>
<?php get_footer(); ?>