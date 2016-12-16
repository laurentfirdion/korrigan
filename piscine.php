<?php
//Template Name: piscine
 
 get_header();
	?>  

       <div class="container-fluid" id="filariane"> 
           <div class="container">
           <div class="retour"><a href="javascript:history.go(-1)"><img src="<?php bloginfo('template_url'); ?>/img/retourgris.jpg" alt="bouton retour"/></a></div><div class="ariane"><ol class="breadcrumb">
  <li> <a href="<?php bloginfo('url'); ?>">ACCUEIL</a></li>
  <li><?php the_title();?></li>
</ol>
           </div>
           <br class="stopfloat"/>
               </div>
    </div>

<div class="container"> 

<div class="col-xs-12 col-sm-9 col-md-9 mainmetier">
    
  <?php $query = new WP_Query( array ( 'post_type' => 'piscine', 'posts_per_page' => '-1', 'order' => 'ASC') ); ?>
     <?php     while ( $query->have_posts() ) : $query->the_post(); ?>
    
    <div class="mainmetiertext">
        
        <?php  $video = get_field('lien_video'); 
        if($video){
        ?>
        <h1 class="half" id="<?php the_field('motclef'); ?>"><?php the_field('titre'); ?></h1><div class="videobouton" data-toggle="modal" data-frame="iframe" data-target="#portfolioModal1" data-theVideo="<?php the_field('lien_video'); ?>">VOIR LA VIDÉO</div>

<div class="modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="gridSystemModalLabel">Vidéo AQUAWELLNESS - PISCINE</h4>
         </div>
 <iframe width="100%" height="450" src="" frameborder="0" allowfullscreen></iframe>
       
    </div>
  </div>
</div>
        
        
        <?php  } else { ?>
        <h1 class="full" id="<?php the_field('motclef'); ?>"><?php the_field('titre'); ?></h1>
        <?php  } ?>
        
<img src="<?php the_field('image'); ?>" />
        
    <?php the_field('texte'); ?>
        
          <div class="duree"><h3>DURÉE : <?php the_field('duree'); ?></h3></div>
         <div class="calorie"><h3>CALORIES : ~<?php the_field('calorie'); ?></h3></div>
         <div class="intensite"><h3>INTENSITÉ : <?php $choix = get_field('intensite'); 
         
         if($choix == "faible"){
          echo "Faible";
         } 
    else if($choix == "moyenne") {
         echo "Moyenne"; }
else if($choix == "forte") {
         echo "Forte"; } else if($choix == "extreme") {
         echo "Extrême"; }?></h3><div class="percent-container <?php the_field('motclef'); ?>"></div> 
        
        <script>
        jQuery(document).ready(function($) {     
          
            var <?php the_field('motclef'); ?> = new ProgressBar.Circle('.<?php the_field('motclef'); ?>', {
    color: '#0aade2',
    strokeWidth: 3,
    trailWidth: 1,
     easing: 'bounce',
    duration: 1500,
    text: {
        value: '0'
    },
    step: function(state, bar) {
        bar.setText((bar.value() * 100).toFixed(0));
    }
});

$('.intensite').mouseover(function(){    
<?php the_field('motclef'); ?>.animate(<?php $choix = get_field('intensite'); 
         
         if($choix == "faible"){
          echo "0.25";
         } 
    else if($choix == "moyenne") {
         echo "0.5"; }
else if($choix == "forte") {
         echo "0.75"; } else if($choix == "extreme") {
         echo "1"; };?>);
});
    $('.intensite').mouseleave(function(){    
<?php the_field('motclef'); ?>.animate(0);
});
        });
        </script>
        
        
        </div>
         <br class="stopfloat"/>
         <div class="resultat">
        <div class="resultimg">
          <img src="<?php bloginfo('template_url'); ?>/img/resultat.png" />   
           <h4>RÉSULTATS :</h4>  
             
             
             </div>
        <div class="resultext">
<?php the_field('resultat'); ?>
            
            </div>
        </div>
       
    </div>
    
     <?php endwhile;
    wp_reset_postdata();
    // fin loop $ma_boucle
            ?>
    
    
     
    
    </div>
<div class="col-xs-12 col-sm-3 col-md-3 aside">
    <nav id="navbarside" class="affix-top">
        <h2 class="aquawellness"><?php the_title();?></h2>
   <ul class="nav">
       
       <?php $query = new WP_Query( array ( 'post_type' => 'piscine', 'posts_per_page' => '-1', 'order' => 'ASC') ); ?>
     <?php     while ( $query->have_posts() ) : $query->the_post(); ?>
       
        <li><a href="#<?php the_field('motclef'); ?>"><?php the_field('titre'); ?></a></li>
     
       
           <?php endwhile;
    wp_reset_postdata();
    // fin loop $ma_boucle
            ?>
        </ul>
        <a href="<?php bloginfo('url'); ?>/contact" class="aquacontact">CONTACT</a>
    </nav>
    </div>

</div>


<script>
jQuery(document).ready(function($) {
$('body').scrollspy({ target: '#navbarside' })

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
       .animate({scrollTop: $(target).offset().top}, 1000 );
});

 function autoPlayModal(){
      var trigger = $("body").find('[data-toggle="modal"]');
      trigger.click(function() {
        var theFrame = $(this).data( "frame" );
        var theModal = $(this).data( "target" );
        videoSRC = $(this).attr( "data-theVideo" ); 
        if (theFrame == "iframe") {
          videoSRCauto = videoSRC+"?autoplay=1" ;
        } else {
          videoSRCauto = videoSRC;
          $("[id*=portfolioModal] video").attr('autoplay','true');
        }
        $(theModal+' '+ theFrame).attr('src', videoSRCauto); 
        $("[id*=portfolioModal]").on('hidden.bs.modal', function () {
            $("[id*=portfolioModal] "+ theFrame).removeAttr('src');
        })
      });
    }

  autoPlayModal();



});
</script>    
<?php 

get_footer(); ?>