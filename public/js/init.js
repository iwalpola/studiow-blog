/*-----------------------------------------------------------------------------------
/*
/* Init JS
/*
-----------------------------------------------------------------------------------*/

 jQuery(document).ready(function() {


/*----------------------------------------------------*/
/*	Flexslider
/*----------------------------------------------------*/
   $('#intro-slider').flexslider({
      animation: 'fade',
      controlNav: false,
   });

/*----------------------------------------------------*/
/*	contact form
------------------------------------------------------*/

   $('form#contactForm button.submit').click(function() {

      $('#image-loader').fadeIn();

      var formData = {
         contactName: $('#contactForm #contactName').val(),
         contactEmail: $('#contactForm #contactEmail').val(),
         contactSubject: $('#contactForm #contactSubject').val(),
         contactMessage: $('#contactForm #contactMessage').val(),
         _token: $('#contactForm #token').val(),
      }

      $.ajax({

	      type: "POST",
	      url: "newmail",
	      data: formData,
         dataType: 'json',
	      success: function(data) {

            // Message was sent
            if (data.msg == 'OK') {
               $('#image-loader').fadeOut();
               $('#message-warning').hide();
               $('#contactForm').fadeOut();
               $('#message-success').fadeIn();   
            }
            // There was an error
            else {
               $('#image-loader').fadeOut();
               $('#message-warning').html(msg);
	            $('#message-warning').fadeIn();
            }

	      }

      });

      return false;

   });


});








