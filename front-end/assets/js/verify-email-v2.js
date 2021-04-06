$(function() {
    $('.hidden-error').hide();
    $('.hidden-success').hide();
    $('#email').change(function(){
        $('.hidden-error').hide();
    	$('.hidden-success').hide();
    });
    $('#verify-email').change(function(){
        $('.hidden-error').hide();
    	$('.hidden-success').hide();
    });
});

function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}

function bidsyncGetParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}

function bidsyncSetCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}

//GET UTM SOURCE IF SET AND CREATE A COOKIE
if (bidsyncGetParameterByName('utm_source') != '' && bidsyncGetParameterByName('utm_source') != null) {
    bidsyncSetCookie('utm_source', bidsyncGetParameterByName('utm_source'), 7);
}

$("#basic-form .check-arrow").click(function(e){
  e.preventDefault();
  $( ".loading-container" ).addClass( "show-me" );
  if(isEmail($("#verify-email").val()) && isEmail($("#email").val())){
        $(".wrong-email").hide();
  if($("#verify-email").val() === $("#basic-form #email").val()){
  	var name = $('#email').val();
  	if (name) {
  		$.ajax({
  			type: 'post',
  			url: 'verify.php',
  			data: {
  				user_name: name,
  			},
  			success: function(response) {
          console.log(response);

              $( ".loading-container" ).removeClass( "show-me" );

  				if (response == "OK") {

			$(".hidden-success").show();
            $( "*:disabled" ).removeAttr("disabled");
            $(".unusable").removeClass("unusable");


  					return true;
  				} else {
  			  //NOTE:  These event responses are mirrored in chargebee_integration_v4.js - ANY CHANGES NEED TO BE DONE THERE ALSO
              if (response == "USER_EXISTS") {
                  $(".checkout-btn").removeClass("usable");
                $('#modal1').addClass('show-me');
                  //alert("Email already in use");
              }
              else if (response == "LEGACY_ACCT") {
                  $(".checkout-btn").removeClass("usable");
                  $('#modal2').addClass('show-me');
                  //alert("Email has Classic Subscription");
              }
              else if (response == "IN_PROGRESS") {
                  $(".checkout-btn").removeClass("usable");
                  $('#modal3').addClass('show-me');
                    $("#modal3 .email").val($("#verify-email").val());

                  //alert("Email has subscription setup in progress");
              }else if (response == "CATALOG") {
                  $(".checkout-btn").removeClass("usable");
                  $('#modal5').addClass('show-me');
                  $("#modal5 .email").val($("#verify-email").val());

                  //alert("Email has subscription setup in progress");
              }
              else if (response == "TIME_OUT") {
                  $(".checkout-btn").removeClass("usable");
                  $('#modal4').addClass('show-me');
                  //alert("Received a Time Out from Verification Server");
              }

  				}
  			}
  		});
  	} else {
  	  alert("not submitted successfully");
  	}

  }

  else{
    $(".hidden-error").show();
    $( ".loading-container" ).removeClass( "show-me" );
  }

  }
  else{
    $(".wrong-email").show();
    $( ".loading-container" ).removeClass( "show-me" );
  }

});
