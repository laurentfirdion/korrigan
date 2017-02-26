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
            <h4>Nos dernières actualités</h4>
            
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
                
            <a style="display: block;color: white;margin-top: 40px;font-size: 24px;margin-bottom: 15px;text-align: center;" href="<?php bloginfo('url'); ?>/actualites"> Voir toutes les actualités</a>
        </div>
        
    </div>

   </div>
</div>
<div class="container-fluid map">
                    <h6>Adresse</h6>

        
        
<?php echo do_shortcode("[wpgmza id='1']"); ?>

</div>


<?php 

get_footer(); ?>