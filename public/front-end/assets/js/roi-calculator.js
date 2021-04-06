

  $(".roi-form input").on('keyup', function(){


    if( $(".money").val().length ){

    var total = ($(".money").val() * 1.25 * $(".employees").val() * $(".hours").val() * 52);
      }


      else{
        var total = (( $(".salary").val().replace(",", "") / 2080) * 1.25 * $(".employees").val() * $(".hours").val() * 52);

      }

      $(".total span").text(total.toLocaleString("en-US", {
    style: "currency",
    currency: "USD"
  }));

  })



$(".money").click(function(){
  $(".salary").val("");
})

$(".salary").click(function(){
  $(".money").val("");
})




$(".salary").on('keyup', function(){
  if($(this).val().length ){
    var n = parseInt($(this).val().replace(/\D/g,''),10);
    $(this).val(n.toLocaleString("en-US"));
}
  });
