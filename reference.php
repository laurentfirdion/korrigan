<?php
//Template Name: Reference
 
 get_header();
	?>  

  <div class="container" id="filariane"> 
           <div class="retour hvr-bubble-float-left"><a href="javascript:history.go(-1)"><img src="<?php bloginfo('template_url'); ?>/img/retour2.png" alt="bouton retour"/></a></div><div class="ariane"><ol class="breadcrumb">
  <li> <a href="<?php bloginfo('url'); ?>">ACCUEIL</a></li>
  <li><?php the_title(); ?></li>
  
</ol>
           </div>
           <br class="stopfloat"/>
    </div>
<div class="container">
<div class="col-xs-12 col-sm-12 col-md-12 refmain">

    
      <div id="filters" class="button-group">
  <button data-filter="*">TOUTES</button>

     <?php $query = new WP_Query( array ( 'post_type' => 'reference_type', 'posts_per_page' => '-1') ); ?>
     <?php     while ( $query->have_posts() ) : $query->the_post(); ?>
          
 <button data-filter=".<?php the_title()?>"><?php the_title()?></button>
        
          
          
          
      <?php endwhile;
wp_reset_query();
            ?>  
</div>
      <div id="isotopcontainer">
          
           <?php $query = new WP_Query( array ( 'post_type' => 'reference', 'posts_per_page' => '-1', 'order' => 'ASC') ); ?>
     <?php     while ( $query->have_posts() ) : $query->the_post(); ?>
          
<div class="col-xs-6 col-sm-2 col-md-2 item <?php the_field('categorie'); ?> <?php the_title()?>">
 <a target="_blank" href="<?php the_field('lien'); ?>"><img src="<?php the_field('image'); ?>" alt="<?php the_field('image_alt'); ?>" /></a>   
</div>

  
      <script>
jQuery(document).ready(function($) {
      $('.<?php the_title()?>').mouseover(function(){
        $('img', this).attr({'src':'<?php the_field('logo_hover'); ?>'});
        });
         $('.<?php the_title()?>').mouseleave(function(){
        $('img', this).attr({'src':'<?php the_field('image'); ?>'});
         });    
});
</script>
     
          
     <?php endwhile;
wp_reset_query();
            ?>  
    
  
        
    </div>
</div>

</div>



<script>
jQuery(document).ready(function($) {
 
    
    var $container = $('#isotopcontainer');
    /*.isotope({
 isResizeBound: true,
  isInitLayout: false
});*/


            $('#filters').on( 'click', 'button', function() {
             $container.isotope({isInitLayout: true});   
  var filterValue = $(this).attr('data-filter');
        $('button').css({'color':'white'});        
         $(this).css({'color':'lightgrey'});
        $container.isotope({ isResizeBound: true, filter: filterValue});
}); 
   
 
});
</script>
<?php 

get_footer(); ?>