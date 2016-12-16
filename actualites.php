<?php
//Template Name: Actu
 
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

   <div class="row"> 
<div class="col-xs-12 col-sm-9 col-md-9 maininitial">
    
     


   <?php
query_posts('showpost=-1');
        if ( have_posts() ): while ( have_posts()) : the_post(); ?>       
            <div class="article">
                <div class="artimage">
            <?php the_post_thumbnail('medium')?>
                </div>
            <div class="artext">  
                 <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
               
             
                
       <?php the_excerpt(); ?><br>
                
             
               
                </div> 
              <br class="nofloat"/>
               </div> 
             
    
       <?php endwhile; else: ?>
       <p>Aucun résultat</p>
                    <?php endif; ?>
       <!-- Fin boucle article -->
     
    <?php wp_reset_query(); ?>
    
    
    
    
    
  

    
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
    
    
    
    

    
   
</div>
<?php 

get_footer(); ?>