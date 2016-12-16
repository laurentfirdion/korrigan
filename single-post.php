<?php
/**
 * The template for generic page
 
 */
 
 get_header();
	?>   
  <div class="container" id="filariane"> 
           <div class="retour hvr-bubble-float-left"><a href="javascript:history.go(-1)"><img src="<?php bloginfo('template_url'); ?>/img/retour2.png" alt="bouton retour"/></a></div><div class="ariane"><ol class="breadcrumb">
  <li> <a href="<?php bloginfo('url'); ?>">ACCUEIL</a></li>
       <li> <a href="<?php bloginfo('url'); ?>/actualites">ACTUALITÉS</a></li>
  <li><?php the_title(); ?></li>
  
</ol>
           </div>
           <br class="stopfloat"/>
    </div>
<div class="container">
 <div class="row"> 
<div class="col-xs-12 col-sm-9 col-md-9 maininitial">
   
     


   <?php if ( have_posts() ): while ( have_posts()) : the_post(); ?>      
            <div class="article">
                <div class="artimage">
            <?php the_post_thumbnail('full')?>
                </div>
            <div class="artext"> 
                <div class='tags'>
                 <?php the_tags(); ?>
                    </div>
                 <h1><?php the_title(); ?></h1>
               
             
                
       <?php the_content(); ?><br>
                <div class="sideart"><i class="author"><?php the_author(); ?></i> <?php the_date('j F Y') ?></div>
             
                 <br class="stopfloat"/> 
                </div> 
             
                    <div class="partage">
       <?php if ( function_exists( 'sharing_display' ) ) {
    sharing_display( '', true );
}         
            ?>    
                </div>
                
               </div> 
            
    
       <?php endwhile; else: ?>
       <p>Aucun résultat</p>
                    <?php endif; ?>
       <!-- Fin boucle article -->
     
    <?php wp_reset_query(); ?>
    
    
    
    
    
    <br class="stopfloat"/>

  
     </div>
<div class="col-xs-12 col-sm-3 col-md-3"> 
     <div id="aside">
         <div class="sidebar">
         <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("sidebar-widget") ) : ?>
					
				<?php endif; ?>
         </div>
           <div class="lien"><a href="<?php bloginfo('url'); ?>/nous-contacter">CONTACTEZ NOUS</a></div> 
     </div>
    
     </div>
     
     
     
    </div>
      <div class="linkprev"><?php previous_post_link(); ?></div>
    <div class="linknext"><?php next_post_link(); ?></div>
    
     <br class="stopfloat"/>

</div>




<?php 
get_footer(); ?>