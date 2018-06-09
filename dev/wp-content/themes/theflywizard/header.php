<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

<?php wp_head(); ?>
<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon.ico" type="image/x-icon">

<!-- Bootstrap -->
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css" rel="stylesheet">

<!-- Animation css -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css" rel="stylesheet">

<!--  Font Awesome icons -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<!--  Custom Styles -->
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php if( is_page_template('home.php')) {
?>
<header class="header animated slideInDown">
  <div class="topbar">
    <div class="container">
     <p><?php echo ot_get_option('number_email','im@rk');?></p>
    </div>
  </div>
  <div class="container">
    <div class="logo"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="The Flying Wizard"></a> </div>
	<?php
if ( is_user_logged_in() ) {
	?>
    <nav class="topnav">
	<?php wp_nav_menu( array('menu' => 'service','menu_class' => '') ); ?>
	<!--<ul>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>products">Products</a></li>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us">Contact us</a></li>
		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>my-account">My account/Logout</a></li>
      </ul>-->
	 
	</nav>
	<?php 
}
else
{
	?>
	<nav class="topnav">
	<?php wp_nav_menu( array('menu' => 'header','menu_class' => '') ); ?>
	<!--<ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Contact us</a></li>
		<li><a href="#">Login/SignUp</a></li>
      </ul>-->
	   
    </nav>
	<?php
}
?>
  </div>
</header>
<?php $id=2;?>
		<?php  $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'home');?>
<div class="home-banner" style="background-image:url(<?php echo $image_url[0]; ?>);">
  <div class="container">
    <div class="banner-caption animated zoomIn">
     <?php while ( have_posts() ) : the_post();
 echo content('90');
endwhile; wp_reset_query(); ?>
      <div><a href="#scroll" class="contact-btn">Contact Us</a></div>
    </div>
  </div>
</div>
<?php
}
else
{
	?>
	<header class="header animated slideInDown">
  <div class="topbar">
    <div class="container">
     <p><?php echo ot_get_option('number_email','im@rk');?></p>
    </div>
  </div>
  <div class="container">
    <div class="logo"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="The Flying Wizard"></a> </div>
	<?php
if ( is_user_logged_in() ) {
	?>
    <nav class="topnav">
	<?php wp_nav_menu( array('menu' => 'service','menu_class' => '') ); ?>
	<!--<ul>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>products">Products</a></li>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us">Contact us</a></li>
		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>my-account">My account/Logout</a></li>
      </ul>-->
	 
	</nav>
	<?php 
}
else
{
	?>
	<nav class="topnav">
	<?php wp_nav_menu( array('menu' => 'header','menu_class' => '') ); ?>
	<!--<ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Contact us</a></li>
		<li><a href="#">Login/SignUp</a></li>
      </ul>-->
	   
    </nav>
	<?php
}
?>
  </div>
</header>
<?php
	  $image_id=get_post_meta(2,"header_image",true);				
	  $thumb = wp_get_attachment_image_src($image_id, 'header_inner' );		
	  ?>			
<div class="home-banner inner" style="background-image:url(<?php echo $thumb['0']; ?>);">
  <div class="container">
    <!--<div class="banner-caption animated zoomIn">
     <?php //while ( have_posts() ) : the_post();
 //echo content('90');
//endwhile; wp_reset_query(); ?>
      <div><a href="#scroll" class="contact-btn">Contact Us</a></div>
    </div>-->
  </div>
</div>
	<?php
}	
?>
    