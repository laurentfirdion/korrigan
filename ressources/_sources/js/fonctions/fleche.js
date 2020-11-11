  jQuery(document).ready(function($) {
$('#fleche a').on('click', function(evt){
       // bloquer le comportement par défaut: on ne rechargera pas la page
       evt.preventDefault(); 
       // enregistre la valeur de l'attribut  href dans la variable target
	var target = $(this).attr('href');
       /* le sélecteur $(html, body) permet de corriger un bug sur chrome 
       et safari (webkit) */
	$('html, body')
       // on arrête toutes les animations en cours 
       .stop()
       /* on fait maintenant l'animation vers le haut (scrollTop) vers 
        notre ancre target */
       .animate({scrollTop: $(target).offset().top}, 1000 );
    });
      
    
      $(document).scroll(function(evt){
           evt.preventDefault(); 
          var scroll = $(window).scrollTop();
   
  
    
          if(scroll > 400){
              $("#fleche").fadeIn();
              $("#fleche").addClass('animated infinite bounceInDown')
          }
          else{
              $("#fleche").fadeOut();
              $("#fleche").removeClass('animated infinite bounceInDown')
          }
          
          if( $('.affix').length){
          var offsetnav = $(".aside").offset().top;
              
          if(scroll > offsetnav){
          $('.affix').css({'position':'fixed', 'top':'15px'});
          }
          else {                               
          $('.affix').css({'position':'relative', 'top':'auto'});
          }
              
          }
      });
       
      
      
  });