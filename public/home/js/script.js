$(document).ready(function() {
    $('#autoWidth').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cS-hidden');
        } 
    });  
  });

  $(document).ready(function() {
    $('#AutoWidth').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#AutoWidth').removeClass('cS-hidden');
        } 
    });  
  });

  $(document).ready(function() {
    $('#Autowidth').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#Autowidth').removeClass('cS-hidden');
        } 
    });  
  });

  (function(){
 
    $("#cart").on("click", function() {
      $(".shopping-cart").fadeToggle( "fast");
    });
    
  })();

// $(document).ready(function() {
//     $(".dropdown-toggle").dropdown();
//   });