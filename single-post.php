<?php
/**
 * The template for generic page
 
 */
 
 get_header();
	?>   
<div class="container-fluid" id="filariane">
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="ariane">
                <ol class="breadcrumb">
                    <li> <a href="<?php bloginfo('url'); ?>">ACCUEIL</a></li>
                    <li>
                    <a href="<?php bloginfo('url'); ?>/actualites">Actualités</a>
                    </li>
                    <li>
                        <?php the_title();?>
                    </li>
                </ol>
            </div>
            <br class="stopfloat" />
        </div>
    </div>
    <div class="background">
        <h1>Actualités</h1>
    </div>
</div>


<div class="container actu actu-detail">
    
<div class="col-xs-12 col-sm-3 col-md-3 aside hide_mobile">
     
       <div class="sidebar">
         <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("sidebar-widget") ) : ?>
					
		 <?php endif; ?>
       </div>
</div>
    
    
    

<div class="col-xs-12 col-sm-9 col-md-9 actumain">
   
     


   <?php if ( have_posts() ): while ( have_posts()) : the_post(); ?>      
            <div class="actu-item">
                 <h2 class="titreactu"><?php the_title(); ?></h2>
                <div class="actuimg">
                    <?php the_post_thumbnail( 'full' ); ?>

                </div>
             <div class="actutext">
                
               
             
                
       <?php the_content(); ?><br>
               <div class="details">
                   <span class="author"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    <?php the_author(); ?>
                    </span>
                    <span class="date"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                    <?php the_time('j F Y'); ?>
                    </span>
                 </div>
         
                </div> 
             
                    <div class="partage">
       <?php if ( function_exists( 'sharing_display' ) ) {
    sharing_display( '', true );
}         
            ?>    
                </div>
                
               </div> 
                  <?php
                global $withcomments;
                $withcomments = true;
                comments_template();
                ?> 
    
       <?php endwhile; else: ?>
       <p>Aucun résultat</p>
                    <?php endif; ?>
       <!-- Fin boucle article -->
     
    <?php wp_reset_query(); ?>
    
    
    
    
    
    <br class="stopfloat"/>
    
    <div class="linkprev"><?php previous_post_link(); ?></div>
    <div class="linknext"><?php next_post_link(); ?></div>
    
     <br class="stopfloat"/>

  
     </div>

   
    
</div>




<?php 
get_footer(); ?>