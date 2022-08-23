

// $(document).ready(function(){
//     $("#hide").click(function(){
//       $("p").hide();
//     });
//     $("#show").click(function(){
//       $("p").show();
//     });
//   });


// Up down nmbers

function increaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value++;
  document.getElementById('number').value = value;
}

function decreaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value < 1 ? value = 1 : '';
  value--;
  document.getElementById('number').value = value;
}

//View product
$(".view-product").click(function() {
  $.fancybox.open({
      href : '/php/view-product.html',
      type : 'iframe',
      padding : 5
  });
})

//Products div

$(document).ready(function(){
  $("#close-button").click(function(){
    $('.product-container').hide();
  });
});

//Signup login toogle


$(document).ready(function(){
  $(".signup").hide();
  $(".signup-btn").click(function(){
    $(".signup").show();
    $(".login").hide();
  });

  $(".backto-login-btn").click(function(){
    $(".login").show();
    $(".signup").hide();
  });
});