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
    $(".dropdown-toggle").dropdown();
});

  $(document).ready(function() {
    $('#AutoWidth').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#AutoWidth').removeClass('cS-hidden');
        } 
    });  

    $(".size").on('click', function(){
      $(this).toggleClass('focus').siblings().removeClass('focus');
   })
   
  });
  $(function() {

    $('.custom-dropdown').on('show.bs.dropdown', function() {
       var that = $(this);
      setTimeout(function(){
          that.find('.dropdown-menu').addClass('active');
      }, 100);
      
  
    });
    $('.custom-dropdown').on('hide.bs.dropdown', function() {
      $(this).find('.dropdown-menu').removeClass('active');
    });
  
    $(document).ready(function () {
      $(".open").click(function () {
       $(".popup").fadeIn(500);
       $(".cover").fadeTo(500, 0.5);
   });
   $(".close").click(function () {
       $(".popup").fadeOut(500);
       $(".cover").fadeOut(500);
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