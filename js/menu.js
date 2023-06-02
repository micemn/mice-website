// Change mobile menu icon on open close
$( document ).ready(function() {
  $('.navbar-toggler').click(function(){ 
   if($('.navbar-toggler').hasClass('collapsed')){
     $('.navbar-toggler span').removeClass('navbar-close');
     $('.navbar-toggler span').addClass('navbar-open');
   }else{
     $('.navbar-toggler  span').removeClass('navbar-open');
     $('.navbar-toggler  span').addClass('navbar-close');
   }
  });
});
