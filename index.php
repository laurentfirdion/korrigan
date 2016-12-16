<?php
/**
 * The template for generic page
 
 */
 
 get_header();
	?>   
      <div class="container-fluid" id="filariane"> 

       <div class="container"> 
           <div class="retour"><a href="javascript:history.go(-1)"><img src="<?php bloginfo('template_url'); ?>/img/retour.jpg" alt="bouton retour"/></a></div><div class="ariane"><ol class="breadcrumb">
  <li> <a href="<?php bloginfo('url'); ?>">ACCUEIL</a></li>
  <li>ACTUALITÉS</li>
  
</ol>
           </div>
           <br class="stopfloat"/>
    </div>
</div>
        
 <div class="container-fluid principal">   
<div class="container">
 <div class="row"> 
<div class="col-xs-12 col-sm-9 col-md-9 maininitial">
    <section>
        <h1><?php the_title(); ?></h1>


   <?php
query_posts('showpost=-1');
        if ( have_posts() ): while ( have_posts()) : the_post(); ?>       
            <div class="article">
                <div class="artimage">
            <?php the_post_thumbnail('medium')?>
                </div>
            <div class="artext">  
                 <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
               
             
                
       <?php the_excerpt(); ?><br>
                
             
               
                </div> 
             
               </div> 
            
    
       <?php endwhile; else: ?>
       <p>Aucun résultat</p>
                    <?php endif; ?>
       <!-- Fin boucle article -->
     
    <?php wp_reset_query(); ?>
    
    
    
    
    
    <br class="nofloat"/>

    </section>
     </div>
 <div class="col-xs-12 col-sm-3 col-md-3"> 
     <div id="navbar-side">
         <div class="sidebar">
         <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("sidebar-widget") ) : ?>
					
				<?php endif; ?>
         </div>
         <h4><a href="<?php bloginfo('url'); ?>/contact">NOUS CONTACTER</a></h4>
     </div>
     </div>
    </div>
     </div>
</div>


<?php 
get_footer(); ?>