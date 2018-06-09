
jQuery(document).ready(function() {
	
    jQuery(".quantity>input[name='quantity']").attr({
      
       "min" : 20 
    });
});
// jQuery(document).ready(function(e) {
     // jQuery(".quantity>input[name='quantity']").val(20);
// });



	jQuery(document).on( 'click', '#submit_cart', function(e) {
		e.preventDefault();
		var quantity = jQuery('.input-text').val();
		var id = jQuery('.id').val();
		
		if(quantity<20)
		{
			alert("Minimum 20 Products Required");
			return false;
		}
	// alert(quantity);
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
