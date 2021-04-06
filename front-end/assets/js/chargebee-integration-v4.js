function getCookie(name) {
    var value = "; " + document.cookie;
    var parts = value.split("; " + name + "=");
    if (parts.length == 2) return parts.pop().split(";").shift();
}

function getUTMSource() {
    return getCookie('utm_source');
}

$(document).ready(function() {
// changing buttons on length selction
$(".checkout-lengths .serivce-length").click(function(){
  $(".active").removeClass("active");
  $(".current").removeClass("current");
  $(this).addClass("active");
  $($(this).data("target")).addClass("current");
  $(".checkout-btn.selected").removeClass("selected");
  $($(".selected.current").data("targetbtn")).addClass("selected");
  $(".show-addon-price").removeClass("show-addon-price");
  $($(this).data("addonlength")).addClass("show-addon-price");
});



// changing button on plan selection
$(".checkout-bar").click(function(){

  if($(this).hasClass("selected")){return true;}



  $(".show-addon").removeClass("show-addon");

    $($(this).data("targetaddon")).addClass("show-addon");




  $(".checkout-bar.selected").removeClass("selected");

  $(".checkout-btn.selected").removeClass("selected");
  $($(this).data("targetbtn")).addClass("selected");

  $($(this).data("targetplan")).addClass("selected");


// showing regional and state dropdowns in the laziest way possible don't @ me
  if($(this).hasClass("plan-123") ){
    $(".drop-holder-123").addClass("show-drop");
    $(".drop-holder-124").removeClass("show-drop");
  }
  else if($(this).hasClass("plan-124") ){
    $(".drop-holder-124").addClass("show-drop");
    $(".drop-holder-123").removeClass("show-drop");
  }
  else{
    $(".drop-holder-123").removeClass("show-drop");
      $(".drop-holder-124").removeClass("show-drop");
  }

});



// start chargebee integration

var cbInstance;





$(".check-btn").click(function() {
  // get current addon
  var addon = $(this).data("addon");
  // if we're add an addon
  if (!$(this).hasClass("selected")) {
    $(this).addClass("selected");
    // cycle through all instances of the checkout buttons
    $(".checkout-btn").each(function(index) {
      var newLink = document.querySelectorAll("[data-cb-type=checkout]")[index];
      var checkoutProduct = cbInstance.getProduct(newLink);
      //get plan prefix
      var planPrefix = checkoutProduct['planId'].substr(0,checkoutProduct['planId'].indexOf('-'));

      planPrefix += "_";
      // add addon
      checkoutProduct.addAddon(planPrefix+addon);
      var planName = planPrefix+addon;
      // apply coupon




    })
  } else {
    // cycle through all instances of the checkout buttons
      $(this).removeClass("selected");
    $(".checkout-btn").each(function(index) {
      var newLink = document.querySelectorAll("[data-cb-type=checkout]")[index];
      var checkoutProduct = cbInstance.getProduct(newLink);
      //get plan prefix
      var planPrefix = checkoutProduct['planId'].substr(0,checkoutProduct['planId'].indexOf('-'));
      planPrefix += "_";
      // remove addon
      checkoutProduct.removeAddon(planPrefix+addon);
    })
  }
})

var flag = 0;

// adding quantity data

$(".increment").click(function() {
  //  if we're adding users
  if ($(this).hasClass("up-counter")) {
    if ( ($(".counter").text() == 0) && (flag == 0)) {
        flag = 1;
      // cycle throgh checkout buttons
      $(".checkout-btn").each(function(index) {
        var newLink = document.querySelectorAll("[data-cb-type=checkout]")[index];
        var checkoutProduct = cbInstance.getProduct(newLink);
        //plan prefix
        var planPrefix = checkoutProduct['planId'].substr(0,checkoutProduct['planId'].indexOf('-'));
        planPrefix += "_";
        checkoutProduct.addAddon(planPrefix+"add_users");
        checkoutProduct.incrementAddonQty(planPrefix+"add_users");
      })
    } else {
      $(".checkout-btn").each(function(index) {
        var newLink = document.querySelectorAll("[data-cb-type=checkout]")[index];
        var checkoutProduct = cbInstance.getProduct(newLink);
        //plan prefix
        var planPrefix = checkoutProduct['planId'].substr(0,checkoutProduct['planId'].indexOf('-'));
        planPrefix += "_";
        checkoutProduct.incrementAddonQty(planPrefix+"add_users");
      })
    }

    $(".counter").each(function(){

        $(this).text(parseInt($(this).text()) + 1);

    })
  } else {
    if ($(".counter").text() == 0) {
      // we can go bellow 0
    } else
    if ($(".counter").text() == 1) {
      $(".checkout-btn").each(function(index) {
        var newLink = document.querySelectorAll("[data-cb-type=checkout]")[index];
        var checkoutProduct = cbInstance.getProduct(newLink);
        //plan prefix
        var planPrefix = checkoutProduct['planId'].substr(0,checkoutProduct['planId'].indexOf('-'));
        planPrefix += "_";
        checkoutProduct.removeAddon(planPrefix+"add_users");
      })
      $(".counter").each(function(){
        $(this).text(parseInt($(this).text()) - 1);

      })
    } else {
      $(".checkout-btn").each(function(index) {
        var newLink = document.querySelectorAll("[data-cb-type=checkout]")[index];
        var checkoutProduct = cbInstance.getProduct(newLink);
        //plan prefix
        var planPrefix = checkoutProduct['planId'].substr(0,checkoutProduct['planId'].indexOf('-'));
        planPrefix += "_";
        checkoutProduct.decrementAddonQty(planPrefix+"add_users");
      })
      $(".counter").each(function(){
        $(this).text(parseInt($(this).text()) - 1);

      })
    }
  }
})



// adding dropdown data

$("#state-pro").change(function() {
  var value = $(this).val();

  console.log(value);

  $(".checkout-btn").each(function(index) {
    var newLink = document.querySelectorAll("[data-cb-type=checkout]")[index];
    var checkoutProduct = cbInstance.getProduct(newLink);
    checkoutProduct.data["cf_state"] = value;
    checkoutProduct.data["cf_lead_source"] = getUTMSource();
    checkoutProduct.data["cf_region"] = "none";

  })
})

$("#regional-pro").change(function() {
  var value = $(this).val();
    console.log(value);
  $(".checkout-btn").each(function(index) {
    var newLink = document.querySelectorAll("[data-cb-type=checkout]")[index];
    var checkoutProduct = cbInstance.getProduct(newLink);
    checkoutProduct.data["cf_region"] = value;
    checkoutProduct.data["cf_state"] = "none";
    checkoutProduct.data["cf_lead_source"] = getUTMSource();

  })
})

// Application of Coupon to reduce price per subscription timeframe
// DISABLED - 6/18 to use new pricing schema and allow for use of user coupon codes
//applyCoupon();

function applyCoupon(){



  $(".checkout-btn").each(function(index) {
    var newLink = document.querySelectorAll("[data-cb-type=checkout]")[index];
    var checkoutProduct = cbInstance.getProduct(newLink);

    //get plan prefix
    var plan = checkoutProduct['planId'].split('-');
    if(plan[1] != 'monthly'){
          // apply coupon
    checkoutProduct.addCoupon("DISCOUNT-" + checkoutProduct['planId'].toUpperCase());

    }
  })

}


var cart = cbInstance.getCart();

function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}


//Code to deal with PRO-FORM email verification.
$("#pro-form").submit(function(e){

  e.preventDefault()
    $( ".loading-container" ).addClass( "show-me" );
  $(".wrong-email").hide();
  $(".checkout-btn").removeClass("usable");

      if(isEmail($('#pro-form #email').val())){


    var name = $('#pro-form #email').val();
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

            checkRegion();


            var customer = {email: name}
            cart.setCustomer(customer);

            return true;
          } else {
          	//NOTE:  These event responses are mirrored in verify_email_v2.js - ANY CHANGES NEED TO BE DONE THERE ALSO
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

                    $("#modal3 .email").val($("#pro-form .email-check").val());
                  //alert("Email has subscription setup in progress");
              }else if (response == "CATALOG") {
                  $(".checkout-btn").removeClass("usable");
                  $('#modal5').addClass('show-me');
                  $("#modal5 .email").val($("#pro-form .email-check").val());

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
      	$(".wrong-email").show();
         // alert("Please enter a valid email");
      }

})



function checkRegion(){

  if( $(".plan-125").hasClass("selected") ){
      $(".checkout-btn").addClass("usable");
      selected_plan = "national_";
      return true;
  }

  if( $(".plan-124").hasClass("selected") ){
      if (($("#regional-pro").val()) ){
        console.log($("#regional-pro").val());
        $(".checkout-btn").addClass("usable");
        selected_plan = "regional_";
        return true;
      }

      else{
          $(".show-drop").addClass("red-border");
          $('html, body').animate({
       scrollTop: $(".show-drop").offset().top - 110
     }, 500);
     return false;
      }

  }

  if( $(".plan-123").hasClass("selected") ){

      if (($("#state-pro").val()) ){
      console.log($("#state-pro").val());
      $(".checkout-btn").addClass("usable");
      selected_plan = "state_";
      return true;
    }

    else{
        $(".show-drop").addClass("red-border");
        $('html, body').animate({
     scrollTop: $(".show-drop").offset().top - 110
   }, 500);
    }



  }


}




})