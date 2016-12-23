//scripts
jQuery(document).ready(function($) {
    
    
if($('body').hasClass('page-template-structure-php')){    
    
    
$('body').scrollspy({ target: '#navbarside', offset:400 });

$('#navbarside').affix({
  offset: {
    top: 50,
    bottom: function () {
      return (this.bottom = $('.footer').outerHeight(true))
    }
  }
});




var navOffset = $('.navbar-fixed-top').height();
    

$('#navbarside .nav li a').click(function(event) {
   event.preventDefault();
var target = $(this).attr('href');
    $('html, body')
       // on arrête toutes les animations en cours 
       .stop()
       /* on fait maintenant l'animation vers le haut (scrollTop) vers 
        notre ancre target */
       .animate({scrollTop: $(target).offset().top-30}, 1000 );
});
    
var width = $('.aside').width();   
$('#navbarside.affix').css({'width':width});
    
$(window).scroll(function(){
    
    var width = $('.aside').width();   
    $('#navbarside.affix').css({'width':width});
});    

}     
    
    
});