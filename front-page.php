<?php
//Template Name: Home
 
 get_header();
	?>  
<div class="container-fluid slider">
    <?php echo do_shortcode( '[rev_slider slider]' ); ?>
        <div class="tint">
            <div class="welcome">
                <h2>Bienvenue aux Korrigans</h2>
            </div>
        </div>
</div>

<div class="container-fluid milieu">
    <div class="container sousmilieu">
<div class="row">
<div class="col-xs-4 col-sm-4 col-md-4 push pushleft">

    <h2><a href="<?php bloginfo('url'); ?>/structure-parentale"><?php the_field('titre_push1'); ?></a></h2>
    
      
        <div class="pushimg">
            <span class="picto picto-parents"></span>  
        </div>
           
        <div class="pushtext">
        <hr class="traitblanc"/>
        <?php the_field('text_push1'); ?>
          
        </div>
   
    </div>
<div class="col-xs-4 col-sm-4 col-md-4 push pushmiddle">
      
    <h2><a href="<?php bloginfo('url'); ?>/creche"><?php the_field('titre_push2'); ?></a></h2>
    
    
        <div class="pushimg">
                <span class="picto picto-ours"></span>
        </div>
          
        <div class="pushtext">
        <hr class="traitblanc"/>
          <?php the_field('text_push2'); ?>
           
        </div>
   
    </div>   
 <div class="col-xs-4 col-sm-4 col-md-4 push pushright">
      
     <h2><a href="<?php bloginfo('url'); ?>/valeurs"><?php the_field('titre_push3'); ?></a></h2>
    
     
         <div class="pushimg">
             <span class="picto picto-castle"></span>
        </div>
           
        <div class="pushtext">
        <hr class="traitblanc"/>
         <?php the_field('text_push3'); ?>
       
        </div>
   
    </div>   
  
    
    
    
    
    
    </div>

</div>
    <br class="stopfloat"/>
</div><!-- fin container fluid milieu -->


<div class="container bas">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 present">
    <h3><?php the_field('titre_mission'); ?></h3>
   
            <p><?php the_field('texte_mission'); ?></p>
            
          
        </div>
            </div>
    
    
</div>


<div class="container-fluid actu">
        <div class="container basbas">
    <div class="row">
        
       <div class="col-xs-12 col-sm-12 col-md-8 actumain">
            <h4>Nos actualités</h4>
            
                 <?php  $my_query = new WP_Query( 'posts_per_page=4' );
            while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
                 
               <div class="actu-item">
                 <div class="actuimg"> <?php the_post_thumbnail( 'full' ); ?>
                                     
                </div>
                 <div class="actutext"><span class="date"><?php the_time('j F Y'); ?></span>
                     <h5 class="titreactu"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                   <p> <?php the_excerpt(); ?></p>
                
                   </div>
                 
                 </div>
             
                <?php endwhile; wp_reset_query();?>
                
        </div>
        
        
        
        
        
         <?php /* $query = new WP_Query( 'post_type=temoignage' ); 
      while ( $query->have_posts() ) : $query->the_post(); */?>
        
        
       <!--  <div class="col-xs-4 col-sm-4 col-md-4 temoin">
            <img src="<?php //the_field('photo'); ?>" /> <h2><?php //the_field('nom'); ?></h2>
                <span><?php //the_field('date'); ?></span>
             <br class="stopfloat"/>
             <?php //the_field('texte'); ?>
        </div>
    
         <?php /* endwhile; wp_reset_postdata();
     //fin loop $ma_boucle */
            ?>
        -->
    
    </div>

   </div>
</div>
<div class="container-fluid map">
                    <h6>Adresse</h6>

        
        
<?php echo do_shortcode("[wpgmza id='1']"); ?>

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