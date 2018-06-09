<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>

 
<div class="container">
  <div class="middle-section">
    <div class="row">
      <div class="col-sm-6">
	  <?php
	  $image_id=get_post_meta(2,"product_image1",true);				
	  $thumb = wp_get_attachment_image_src($image_id, 'product' );		
	  ?>									
        <div class="pro-img"><img src="<?php echo $thumb['0']; ?>" class="pull-left"></div>
      </div>
      <div class="col-sm-6">
	  <?php
	  $image_id=get_post_meta(2,"product_image2",true);				
	  $thumb = wp_get_attachment_image_src($image_id, 'product' );		
	  ?>	
        <div class="pro-img"><img src="<?php echo $thumb['0']; ?>" class="pull-right"></div>
      </div>
    </div>
    <div><a href="<?php echo esc_url( get_permalink(38) ); ?>" class="buy-btn">Buy Now</a></div>
  </div>
</div>


<?php get_footer(); ?>