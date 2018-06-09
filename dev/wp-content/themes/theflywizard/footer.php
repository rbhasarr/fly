<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<?php if( is_page_template('home.php')) {
?>
<div class="footer-wrapper">
 <a name="scroll"></a>
  <div class="container">
  <a name="scroll"></a>
    <div class="contact-section">
      <?php the_field('contact_us',2); ?>
			<?php echo do_shortcode('[contact-form-7 id="8" title="Contact form"]'); ?>	</div>
		 <footer class="footer">
      <div class="row">
        <div class="col-md-5">
          <div class="about-info"><h3><?php echo ot_get_option('about_us_title','im@rk');?></h3>
          <?php echo ot_get_option('about_us_content','im@rk');?></div>
        </div>
        <div class="col-md-3 col-md-offset-1">
          <div class="quicklinks">
		  <h3>Quick Links</h3>
		<?php wp_nav_menu( array('menu' => 'footer','menu_class' => '') ); ?>
          </div>
        </div>
        <div class="col-md-3">
          <div class="company-info"><h3> <?php echo ot_get_option('company_info_title','im@rk');?></h3>
           <?php echo ot_get_option('address','im@rk');?>
           <?php echo ot_get_option('phone','im@rk');?>
           <?php echo ot_get_option('email_footer','im@rk');?></div>
        </div>
      </div>
      
      <div class="copyright-div"><p>Copyright <?php echo date('Y');?> © Theflywizard. All rights reserved.</p></div>
    </footer>
  </div>
</div>
<?php
}
else
{
	?>
	<div class="footer-wrapper inner">
 <a name="scroll"></a>
  <div class="container">
  
		 <footer class="footer">
      <div class="row">
        <div class="col-md-5">
          <div class="about-info"><h3><?php echo ot_get_option('about_us_title','im@rk');?></h3>
          <?php echo ot_get_option('about_us_content','im@rk');?></div>
        </div>
        <div class="col-md-3 col-md-offset-1">
          <div class="quicklinks">
		  <h3>Quick Links</h3>
		<?php wp_nav_menu( array('menu' => 'footer','menu_class' => '') ); ?>
          </div>
        </div>
        <div class="col-md-3">
          <div class="company-info"><h3> <?php echo ot_get_option('company_info_title','im@rk');?></h3>
           <?php echo ot_get_option('address','im@rk');?>
           <?php echo ot_get_option('phone','im@rk');?>
           <?php echo ot_get_option('email_footer','im@rk');?></div>
        </div>
      </div>
      
      <div class="copyright-div"><p>Copyright <?php echo date('Y');?> © Theflywizard. All rights reserved.</p></div>
    </footer>
  </div>
</div>
	<?php
}	
?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
<!--<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/custom.js"></script>-->
<script type="text/javascript">
jQuery(document).ready(function(e) {
     jQuery(".topnav ul li a").append("<span class='bottom-line'></span>");
});

</script>
<script type="text/javascript">
jQuery(function() {
  jQuery('a.contact-btn').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        jQuery('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
jQuery(function() {
  jQuery('.contact-btn1>a').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        jQuery('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>
<script type="text/javascript">
		jQuery(function() {
    jQuery("input[name='text-31']").keydown(function(e) {
      if (e.shiftKey || e.ctrlKey || e.altKey) {
        e.preventDefault();
      } else {
        var key = e.keyCode;
        if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
          e.preventDefault();
        }
      }
    });
  });
		</script>
		<script type="text/javascript">

jQuery(document).ready(function() {
    jQuery("input[name='tel-199']").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if (jQuery.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode == 65 && ( e.ctrlKey === true || e.metaKey === true ) ) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
});

</script>
		<script type="text/javascript">
		jQuery(document).ready(function() {
	
    jQuery(".quantity>input[name='quantity']").attr({
      
       "min" : "<?php the_field('minimum_product',2); ?>"
    });
});
		</script>
		<script type="text/javascript">
		jQuery(document).on( 'click', '#submit_cart', function(e) {
		 e.preventDefault();
		var quantity = jQuery(".quantity>input[name='quantity']").val();
		var id = jQuery('.id').val();
		var minimum="<?php the_field('minimum_product',2); ?>";
		var minimum1=parseInt(minimum)
		var quantity1=parseInt(quantity)
		if(quantity1<minimum1)
		{
			alert("Minimum <?php the_field('minimum_product',2); ?> Products Required");
			return false;
		}
	 //alert(quantity);
          jQuery.ajax({
            type: 'POST',
            url: 'http://theflywizard.imarkclients.com/dev/wp-content/themes/theflywizard/cart.php',
            data:{quantity:quantity,
			id:id},
            success: function(data) {
				// jQuery("#content").html(data);
				 window.location.href="http://theflywizard.imarkclients.com/dev/cart/";
            // alert(data);
            }
          });
	}
	);

		</script>
		<script type="text/javascript">
		jQuery(document).on( 'click', '.actions>input[name="update_cart"]', function(e) {
		var quantity = jQuery('.input-text').val();
		var id = jQuery('.id').val();
		var minimum="<?php the_field('minimum_product',2); ?>";
		if(quantity<minimum)
		{
			alert("Minimum <?php the_field('minimum_product',2); ?> Products Required");
		return false;
		}
		}
	);

		</script>
        <script type="text/javascript">
        jQuery(".contact-btn1").removeClass("current-menu-item");
        </script>
        
<?php wp_footer(); ?>
</body>
</html>
