<?php
//Template Name: Ecole
 
 get_header();
	?>  
<div class="container-fluid" id="filariane"> 

       <div class="container"> 
           <div class="retour"><a href="javascript:history.go(-1)"><img src="<?php bloginfo('template_url'); ?>/img/retour.jpg" alt="bouton retour"/></a></div><div class="ariane"><ol class="breadcrumb">
  <li> <a href="<?php bloginfo('url'); ?>">ACCUEIL</a></li>
  <li>NOTRE ÉCOLE</li>
  <li class="active"></li>
</ol>
           </div>
           <br class="stopfloat"/>
    </div>
</div>
    
    
 <div class="container-fluid principal">   
<div class="container">
 <div class="row"> 
<div class="col-xs-12 col-sm-9 col-md-9 mainecole">
     <section>
     <div id="presentation" class="tabpresent">
         <h1><?php the_field('titre_presentation'); ?></h1>
         <img src="<?php the_field('photo_presentation'); ?>" alt="<?php the_field('photo_alt_presentation'); ?>"/>
     <h2><?php the_field('sous-titre_presentation'); ?></h2>
         
         <?php the_field('texte_presentation'); ?>
     </div>
        <div id="equipe" class="tabpresent">
         <h1><?php the_field('titre_equipe'); ?></h1>
         <img src="<?php the_field('photo_equipe'); ?>" alt="<?php the_field('photo_alt_equipe'); ?>"/>
     <h2><?php the_field('sous-titre_equipe'); ?></h2>
         
         <?php the_field('texte_equipe'); ?>   


     <div class="isotope">
         <?php $query = new WP_Query( 'post_type=equipe' ); ?>
     <?php     while ( $query->have_posts() ) : $query->the_post(); ?>
         
  <div class="item"><img src="<?php the_field('photo'); ?>" alt="<?php the_field('photo_description'); ?>"/> 
      <h3><?php the_field('nom'); ?></h3>
      <div class="text"><?php the_field('courte_biographie'); ?></div>
         </div>
 <?php endwhile;
    wp_reset_postdata();
    // fin loop $ma_boucle
            ?>
    </div>       
            <br class="stopfloat"/>
     </div>
            <div id="chiffre" class="tabpresent">
                <h1><?php the_field('titre_chiffre'); ?></h1>
             <div class="chiffretext">
         <h2><?php the_field('sous-titre_chiffre'); ?></h2>
         
         <?php the_field('texte_chiffre'); ?> 
                </div>   
              <div class="chiffres1"> 
                <div class="chiffre1hover"><img src="<?php the_field('image1_hover'); ?>" alt="<?php the_field('image1_hover_description'); ?>"/></div>
                <div class="chiffre1"><img src="<?php the_field('image1'); ?>" alt="<?php the_field('image_1_alt'); ?>"/></div>
                </div> 
                
                <div class="chiffres2"> 
                <div class="chiffre2hover"><img src="<?php the_field('image2_hover'); ?>" alt="<?php the_field('image2_hover_description'); ?>"/></div>
                <div class="chiffre2"><img src="<?php the_field('image2'); ?>" alt="<?php the_field('image_2_description'); ?>"/></div>
                </div> 
                
                    <div class="chiffres3"> 
                <div class="chiffre3hover"><img src="<?php the_field('image3_hover'); ?>" alt="<?php the_field('image3_hover_description'); ?>"/></div>
                <div class="chiffre3"><img src="<?php the_field('image3'); ?>" alt="<?php the_field('image_3_description'); ?>"/></div>
                </div> 
                
                    <div class="chiffres4"> 
                <div class="chiffre4hover"><img src="<?php the_field('image4_hover'); ?>" alt="<?php the_field('image4_hover_description'); ?>"/></div>
                <div class="chiffre4"><img src="<?php the_field('image4'); ?>" alt="<?php the_field('image_4_description'); ?>"/></div>
                </div>
                
                <div class="chiffres5"> 
                <div class="chiffre5hover"><img src="<?php the_field('image5_hover'); ?>" alt="<?php the_field('image5_hover_description'); ?>"/></div>
                <div class="chiffre5"><img src="<?php the_field('image5'); ?>" alt="<?php the_field('image_5_description'); ?>"/></div>
                </div>
                
                <div class="chiffres6"> 
                <div class="chiffre6hover"><img src="<?php the_field('image6_hover'); ?>" alt="<?php the_field('image6_hover_description'); ?>"/></div>
                <div class="chiffre6"><img src="<?php the_field('image6'); ?>" alt="<?php the_field('image_6_description'); ?>"/></div>
                </div>
                
                <br class="stopfloat"/>
    
     </div>
            <div id="visite" class="tabpresent">
                 <h1><?php the_field('titre_visite'); ?></h1>
        <div class="visitetext">
     <h2><?php the_field('sous-titre_visite'); ?></h2>
         
         <?php the_field('texte_visite'); ?> 
            </div>
                <br>
         <?php the_field('visite_virtuelle'); ?>       
     </div>
     </section>
     </div>
<div class="col-xs-12 col-sm-3 col-md-3">
<div id="navbar-side">
    <h3>NOTRE ÉCOLE</h3>
    <ul>
   <li id="nav-present" class="navitem"><?php the_field('entree_navigation'); ?></li>
    <li id="nav-equipe" class="navitem"><?php the_field('titre_equipe'); ?></li>
    <li id="nav-chiffre" class="navitem"><?php the_field('titre_chiffre'); ?></li>
    <li id="nav-visite" class="navitem"><?php the_field('titre_visite'); ?></li>
    </ul>
    
    <h4><a href="<?php bloginfo('url'); ?>/contact">NOUS CONTACTER</a></h4>
    <h5>DERNIÈRE ACTUALITÉ</h5>
     <?php $my_query = new WP_Query( 'posts_per_page=1' ); ?>

<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
    
    <?php the_post_thumbnail( 'full' ); ?>
    <div class="sideactu">
    <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
        <p><?php the_excerpt(); ?></p>
    </div>
    <?php endwhile; wp_reset_query();?>
  </div>

     </div>
     
    </div>
    </div>
</div>
<script>
jQuery(document).ready(function($) {
    $("#presentation").show(500);
    $("#nav-present").css({'color':'#a54679'});
    $('.breadcrumb .active').html("PRÉSENTATION");
    var a = 1; 
     var b = 0;
    var c =0;
    var d = 0;
 $("#nav-present").click(function(){  
     if(a == 0){
          $(".tabpresent").hide();
         $('.navitem').css({'color':'#56585c'});
          $("#presentation").show(500);
         a=1;
          b=0;
          c =0;
          d =0;
         $(this).css({'color':'#a54679'});
         $('.breadcrumb .active').html("<?php the_field('entree_navigation'); ?>");
     }
     });
 $("#nav-equipe").click(function(){  
     if(b == 0){
          $(".tabpresent").hide();
          $('.navitem').css({'color':'#56585c'});
          $("#equipe").show(500);
         a=0;
         b=1;
         c=0;
         d=0;
         $(this).css({'color':'#a54679'});
         $('.breadcrumb .active').html("<?php the_field('titre_equipe'); ?>");
     }     
 
});
     $("#nav-chiffre").click(function(){  
     if(c == 0){
          $(".tabpresent").hide();
          $('.navitem').css({'color':'#56585c'});
          $("#chiffre").show(500);
         a=0;
         b=0;
         c=1;
         d=0;
         $(this).css({'color':'#a54679'});
         $('.breadcrumb .active').html("<?php the_field('titre_chiffre'); ?>");
     }     
 
});
    
   $("#nav-visite").click(function(){  
     if(d == 0){
          $(".tabpresent").hide();
          $('.navitem').css({'color':'#56585c'});
          $("#visite").show(500);
         a=0;
         b=0;
         c=0;
         d=1;
         $(this).css({'color':'#a54679'});
         $('.breadcrumb .active').html("<?php the_field('titre_visite'); ?>");
     }     
 
});  
         


  var $container = $('.isotope');
 var g = 0;
 $container.on( 'click', '.item', function() {
     var $container = $('.isotope').isotope({
    itemSelector: '.item',
    transitionDuration :'0.5s',
    masonry: {
      columnWidth: 100
    }
  });
    // change size of item by toggling gigante class
    $('.item').removeClass('gigante'); 
    $('.text').removeClass('show');
          
  
     $( this ).toggleClass('gigante');
     $( '.text', this ).addClass('show');
     //$('.text').hide(); 
     //$('.text', this).fadeIn();  
    $container.isotope('layout');
  });
    
$('.chiffres1').mouseover(function(){
    $('.chiffre1').slideUp('slow');
});
    $('.chiffres1').mouseleave(function(){
    $('.chiffre1').slideDown('slow');
});

 $('.chiffres2').mouseover(function(){
    $('.chiffre2').slideUp('slow');
});
    $('.chiffres2').mouseleave(function(){
    $('.chiffre2').slideDown('slow');
});   
    
 $('.chiffres3').mouseover(function(){
    $('.chiffre3').slideUp('slow');
});
    $('.chiffres3').mouseleave(function(){
    $('.chiffre3').slideDown('slow');
});   
    
 $('.chiffres4').mouseover(function(){
    $('.chiffre4').slideUp('slow');
});
    $('.chiffres4').mouseleave(function(){
    $('.chiffre4').slideDown('slow');
});   
 
    $('.chiffres5').mouseover(function(){
    $('.chiffre5').slideUp('slow');
});
    $('.chiffres5').mouseleave(function(){
    $('.chiffre5').slideDown('slow');
});  
   $('.chiffres6').mouseover(function(){
    $('.chiffre6').slideUp('slow');
});
    $('.chiffres6').mouseleave(function(){
    $('.chiffre6').slideDown('slow');
});   
    
});
</script>
<?php 

get_footer(); ?>