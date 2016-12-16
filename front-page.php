<?php
//Template Name: Home
 
 get_header();
	?>  
<div class="container-fluid slider">
<?php echo do_shortcode( '[rev_slider slider]' ); ?>
</div>

<div class="container-fluid milieu">
    <div class="container sousmilieu">
<div class="row">
<div class="col-xs-4 col-sm-4 col-md-4 push pushleft">

    <h3><?php the_field('titre-home'); ?></h3>
    
        <a href="<?php // the_field('lien1'); ?>">
        <div class="pushimg">
    <img src="<?php // the_field('picto_push1'); ?>"/>
            </div>
            </a>
        <div class="pushtext">
        <hr class="traitblanc"/>
        <?php //the_field('texte_push1'); ?>
            <span><a href="<?php //the_field('lien1'); ?>">Découvrir</a></span>
        </div>
   
    </div>
<div class="col-xs-4 col-sm-4 col-md-4 push pushmiddle">
      
     <h3><?php //the_field('titre_push2'); ?> Titre 2</h3>
    
        <a href="<?php //the_field('lien2'); ?>">
        <div class="pushimg">
    <img src="<?php //the_field('picto_push2'); ?>"/>
            </div>
            </a>
        <div class="pushtext">
        <hr class="traitblanc"/>
          <?php //the_field('texte_push2'); ?>
            <span><a href="<?php //the_field('lien2'); ?>">Découvrir</a></span>
        </div>
   
    </div>   
 <div class="col-xs-4 col-sm-4 col-md-4 push pushright">
      
     <h3><?php //the_field('titre_push3'); ?>Titre 3</h3>
    
        <a href="<?php //the_field('lien3'); ?>">
        <div class="pushimg">
    <img src="<?php //the_field('picto_push3'); ?>"/>
            </div>
            </a>
        <div class="pushtext">
        <hr class="traitblanc"/>
         <?php //the_field('texte_push3'); ?>
            <span><a href="<?php //the_field('lien3'); ?>">Découvrir</a></span>
        </div>
   
    </div>   
  
    
    
    
    
    
    </div>

</div>

</div><!-- fin container fluid milieu -->


<div class="container bas">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 present">
    <h1><?php //the_field('titre_principal'); ?> Titre principal</h1>
   
            <?php //the_field('texte_presention'); ?>
            
            <div class="lien"><a href="<?php //bloginfo('url'); ?>/aqua-wellness/">EN SAVOIR +</a></div>
        </div>
            </div>
    
    
                </div>

<div class="container abohome">
<a href="<?php //bloginfo('url'); ?>/abonnements/"><h3>DÉCOUVRIR NOS ABONNEMENTS</h3></a>

</div>
<div class="container-fluid salle">
        <div class="container basbas">
    <div class="row slidertemoin">
        
        
         <?php /* $query = new WP_Query( 'post_type=temoignage' ); 
      while ( $query->have_posts() ) : $query->the_post(); */?>
        
        
         <div class="col-xs-4 col-sm-4 col-md-4 temoin">
            <img src="<?php //the_field('photo'); ?>" /> <h2><?php //the_field('nom'); ?></h2>
                <span><?php //the_field('date'); ?></span>
             <br class="stopfloat"/>
             <?php //the_field('texte'); ?>
        </div>
    
         <?php /* endwhile; wp_reset_postdata();
     //fin loop $ma_boucle */
            ?>
        
    
            </div>
            <div class="row">
             <div class="col-xs-12 col-sm-12 col-md-6 activitemain">
            <h4><?php //the_field('titre_activite'); ?></h4>
          
            <?php //the_field('video_activite'); ?>    
            <?php //the_field('texte_video'); ?>  
                 
            </div>
             <div class="col-xs-12 col-sm-12 col-md-6 actumain">
            <h4>Nos actualités</h4>
            
                 <?php /* $my_query = new WP_Query( 'posts_per_page=4' ); 

php while ( $my_query->have_posts() ) : $my_query->the_post(); */ ?>
                 
               <div class="activite">
                 <div class="activiteimg"> <?php //the_post_thumbnail( 'full' ); ?><div class="transparent"><h6><a class="hvr-fade" href="<?php //the_permalink(); ?>" title="">Voir</a></h6></div></div>
                 <div class="activitetext"><span class="date"><?php //the_time('j F Y'); ?></span><h5 class="titreactu"><?php //the_title(); ?></h5></div>
                 
                 </div>
             
                 <?php //endwhile; wp_reset_query();?>
                
            </div>
            
            </div>
                </div>
                    </div>
            <div class="container">

                <div class="col-xs-12 col-sm-12 col-md-12 galerie">
                    <h6>Galerie</h6>
<div class="grid">
    <div class="grid-sizer"></div>
    
     <?php /* $query = new WP_Query( 'post_type=galerie' ); 
      while ( $query->have_posts() ) : $query->the_post(); */ ?>
    
  <div class="grid-item"><img src="<?php //the_field('photo'); ?>"/><div class="transparent2"><h6><?php //the_field('texte'); ?></h6></div></div>
 
 <?php /* endwhile;
    wp_reset_postdata();
    // fin loop $ma_boucle */
            ?>
                    </div>
            </div>

</div>



<script>
    /*
jQuery(document).ready(function($) {
 
    $('.slidertemoin').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 800,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]       
});
    
    $('.activite').eq(0).css({'margin-right':'5%'});
     $('.activite').eq(2).css({'margin-right':'5%'});
   
    
    
     $('.activite').mouseover(function(){

         $('.transparent', this).show();
                 
    //$('.activitetext', this).css({'background-color': '#0aade2'});
      
      $('.activitetext .date', this).css({'color': 'white'});  
       $('.activitetext .titreactu', this).css({'color': 'white'});  
     });
      $('.activite').mouseleave(function(){
  
          $('.transparent', this).hide();
            //$('.activitetext', this).css({'background-color': 'white'});
           $('.activitetext .date', this).css({'color': '#0aade2'});  
          $('.activitetext .titreactu', this).css({'color': '#686868'}); 
     });
    
    
        $('.grid-item').mouseover(function(){
        $('.transparent2', this).show();   

});
    $('.grid-item').mouseleave(function(){
        $('.transparent2', this).hide();
 
});  
    
                var a = 0;
    $('.pushmid').eq(0).mouseover(function(){
         if(a == 0){
           $(".pushimg img", this).animate({opacity: 0.6});
         $('.pushimg img', this).attr({"src":"<?php //the_field('photo_push1'); ?>"});
             $(".pushimg img", this).animate({opacity: 1});
         $('.pushimg', this).animate({'width':'60%'}, 300, "linear");
         $('h3', this).css({'background-color':'transparent'});
        $('p', this).hide();
        $('span', this).css({'display':'block'}); 
         a = 1;   
}     
    });
     $('.pushmid').eq(0).mouseleave(function(){
          if(a == 1){
          $('.pushimg', this).animate({'width':'57%'});
        $('h3', this).css({'background-color':'black'});
         $('.pushimg img', this).attr({"src":"<?php //the_field('picto_push1'); ?>"});
          $('span', this).css({'display':'none'});    
         $('p', this).show();
        a = 0;
           }      
    });
    
            var b = 0;
    $('.pushmid').eq(1).mouseover(function(){
         if(b == 0){
           $(".pushimg img", this).animate({opacity: 0.6});
         $('.pushimg img', this).attr({"src":"<?php //the_field('photo_push2'); ?>"});
             $(".pushimg img", this).animate({opacity: 1});
         $('.pushimg', this).animate({'width':'60%'}, 300, "linear");
         $('h3', this).css({'background-color':'transparent'});
        $('p', this).hide();
        $('span', this).css({'display':'block'}); 
         b = 1;   
}     
    });
     $('.pushmid').eq(1).mouseleave(function(){
          if(b == 1){
          $('.pushimg', this).animate({'width':'57%'});
        $('h3', this).css({'background-color':'black'});
         $('.pushimg img', this).attr({"src":"<?php //the_field('picto_push2'); ?>"});
          $('span', this).css({'display':'none'});    
         $('p', this).show();
        b = 0;
           }      
    });
    
    
        var c = 0;
    $('.pushmid').eq(2).mouseover(function(){
         if(c == 0){
           $(".pushimg img", this).animate({opacity: 0.6});
         $('.pushimg img', this).attr({"src":"<?php //the_field('photo_push3'); ?>"});
             $(".pushimg img", this).animate({opacity: 1});
         $('.pushimg', this).animate({'width':'60%'}, 300, "linear");
         $('h3', this).css({'background-color':'transparent'});
        $('p', this).hide();
        $('span', this).css({'display':'block'}); 
         c = 1;   
}     
    });
     $('.pushmid').eq(2).mouseleave(function(){
          if(c == 1){
          $('.pushimg', this).animate({'width':'57%'});
        $('h3', this).css({'background-color':'black'});
         $('.pushimg img', this).attr({"src":"<?php //the_field('picto_push3'); ?>"});
          $('span', this).css({'display':'none'});    
         $('p', this).show();
        c = 0;
           }      
    });
    
    
    var d = 0;
    $('.pushmid').eq(3).mouseover(function(){
         if(d == 0){
           $(".pushimg img", this).animate({opacity: 0.6});
         $('.pushimg img', this).attr({"src":"<?php //the_field('photo_push4'); ?>"});
             $(".pushimg img", this).animate({opacity: 1});
         $('.pushimg', this).animate({'width':'60%'}, 300, "linear");
         $('h3', this).css({'background-color':'transparent'});
        $('p', this).hide();
        $('span', this).css({'display':'block'}); 
         d = 1;   
}     
    });
     $('.pushmid').eq(3).mouseleave(function(){
          if(d == 1){
          $('.pushimg', this).animate({'width':'57%'});
        $('h3', this).css({'background-color':'black'});
         $('.pushimg img', this).attr({"src":"<?php //the_field('picto_push4'); ?>"});
          $('span', this).css({'display':'none'});    
         $('p', this).show();
        d = 0;
           }      
    });
    
   var $grid = $('.grid').masonry({
    itemSelector: '.grid-item',
    percentPosition: true,
    columnWidth: '.grid-sizer'
  });
  // layout Isotope after each image loads
  $grid.imagesLoaded().progress( function() {
    $grid.masonry();
  });  

});
*/
</script>
<?php 

get_footer(); ?>