<?php
//Template Name: structure
 
 get_header();
	?>  

       <div class="container-fluid" id="filariane"> 
     <div class="container">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="ariane">
            <ol class="breadcrumb">
                <li> <a href="<?php bloginfo('url'); ?>">ACCUEIL</a></li>
                <li>
                    <?php the_title();?>
                </li>
            </ol>
        </div>
        <br class="stopfloat" />
    </div>
</div>
         <div class="background">
           <h1><?php the_title();?></h1>
         </div>  
    </div>

<div class="container"> 

    
    
    
    
<div class="col-xs-12 col-sm-9 col-md-9 mainmetier">
    

    
    <div  id="partie1" class="mainmetiertext">

        <h2><?php the_field('titre_1'); ?></h2>
   
        <img src="<?php the_field('image_1'); ?>" />
        
         <?php the_field('texte_1'); ?>
        
      
    </div>
    
        <div id="partie2" class="mainmetiertext">
        

        <h2><?php the_field('titre_2'); ?></h2>
   
            <?php the_field('texte_2'); ?>
    </div>
    
        <div id="partie3" class="mainmetiertext">
        
       
     

        <h2><?php the_field('titre_3'); ?></h2>
             <?php the_field('texte_3'); ?>
    
    </div>
    

    
     
    
    </div>
<div class="col-xs-12 col-sm-3 col-md-3 aside">
    <nav id="navbarside" class="affix-top">
       
   <ul class="nav">
       
        <li><a href="#partie1"><?php the_field('titre_1'); ?></a></li>
         <li><a href="#partie2"><?php the_field('titre_2'); ?></a></li>
        <li><a href="#partie3"><?php the_field('titre_3'); ?></a></li>
     
    </ul>
      
    </nav>
    </div>

</div>


<script>
jQuery(document).ready(function($) {
$('body').scrollspy({ target: '#navbarside', offset:400 })

$('#navbarside').affix({
  offset: {
    top: 50,
    bottom: function () {
      return (this.bottom = $('.footer').outerHeight(true))
    }
  }
});

var width = $('.aside').width();    
$('#navbarside.affix').css({'width':width});


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





});
</script>    
<?php 

get_footer(); ?>