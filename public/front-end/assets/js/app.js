$(".gated-content").click(function (e) {
  e.preventDefault();
  $(".modal-backdrop").addClass("show-me");
})

$(".modal-btn").click(function (e) {
  e.preventDefault();
  $(".modal-backdrop").addClass("show-me");
})

$(".mobile-toggle").click(function () {
  $(".nav").toggleClass("active");
})
var $window = $(window);
var lastScrollTop = 0;
$window.scroll(function () {
  if ($window.scrollTop() > 100) {
      $("body").addClass("scrolling");
      $(".search-drop").removeClass("dropped");
      var st = $(this).scrollTop();
      if (st > lastScrollTop) {
          $("body").removeClass("up");
      } else {
          $("body").addClass("up");
      }
      if ($window.scrollTop() > 500) {
          $("body").addClass("scroll-2");
      } else if ($window.scrollTop() <= 500) {
          $("body").removeClass("scroll-2");
      }
      lastScrollTop = st;
  } else {
      $("body").removeClass("scrolling").removeClass("scroll-2");
  }
})
$(".serivce-length").click(function () {
  if (!$(this).hasClass("active")) {
      $(".serivce-length").removeClass("active");
      $(this).addClass("active");
      $(".show-price").removeClass("show-price");
      $($(this).data("target")).addClass("show-price");
  }
})
$(".slider").slick({
  dots: true,
  arrows: false
});
$(".slide-laptop").slick({
  arrows: false,
  autoplay: true,
  speed: 1700
});
$(".quote-slide").slick({
  dots: false,
  arrows: false,
  autoplay: true,
  speed: 600,
  fade: true
});
$(".slide-laptop").on("beforeChange", function () {
  $(".slide-contents").hide();
})
$(".slide-laptop").on("afterChange", function () {
  var curr = $(".slide-laptop").slick("slickCurrentSlide")
  if (curr == 0) {
      $(".slide-0").show();
  }
  if (curr == 1) {
      $(".slide-1").show();
  }
  if (curr == 2) {
      $(".slide-2").show();
  }
})

$(".tab-content-2").click(function () {
  $(".active-tab").removeClass("active-tab");
  $(this).addClass("active-tab");
  $(".regional-pro, .state-pro, .free-items, .national-pro").addClass("hidden-lg").removeClass(
      "flex-lg");
  $($(this).data("target")).addClass("flex-lg");
})

$(".modal-backdrop .close-btn").click(function () {
  $(".modal-backdrop").removeClass("show-me");

})


$("#resend-email").submit(function (e) {

  e.preventDefault();
  $("#resend-email button").prop("disabled", true);
  var name = $('#email').val();
  if (name) {
      $.ajax({
          type: 'post',
          url: 'resend-email.php',
          data: {
              email: name,
          },
          success: function (response) {
              console.log(response);
              if (response == "NO_RESPONSE") {

                  $("#resend-email").html(
                      "<h3>We're sorry, there was an error. Please refresh the page and try again</h3>"
                  );

              } else {
                  $("#resend-email").html(
                      "<h3>Please check your email for the verification message</h3>");
              }
          }
      });
  }
})

var page = 2;
$('body')
  .on('click', '.load-more', function (e) {
      e.preventDefault();
      $(".loading-container")
          .addClass("show-me");
      var response;
      $.ajax({
          type: "GET",
          url: $(this).data("page") + page,
          dataType: 'html',
          success: function (response) {
              page++;
              refreshProjects(response);
          }
      })
  })

function refreshProjects(response) {
  $(".load-more-btn")
      .html(response);
  $(".loading-container")
      .removeClass("show-me");
}

//CATCH FORM SUBMISSION ON BIDSYNC BASIC AND AVOID MULTIPLE SUBMISSIONS
$("form#basic-form").submit(function () {
  if ($(this)[0].checkValidity()) {
      $(this).submit(function () {
          return false;
      });
      return true;

  } else {
      return false;
  }
});
