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
        <h1><?php the_title();?></h1>
    </div>
</div>
<div class="container actu">

 <div class="col-xs-12 col-sm-3 col-md-3 aside hide_mobile">
     
       <div class="sidebar">
         <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("sidebar-widget") ) : ?>
					
		 <?php endif; ?>
       </div>
</div>
    

<div class="col-xs-12 col-sm-9 col-md-9 actumain">
    
     


   <?php
query_posts('showpost=-1');
        if ( have_posts() ): while ( have_posts()) : the_post(); ?>       
 <div class="actu-item">
    <h2 class="titreactu"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="details">
        <span class="date"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
        <?php the_time('j F Y'); ?>
        </span>
            <span class="author"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
            <?php the_author(); ?>
            </span>
                <span class="comments"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
                <?php  comments_number(' 0','1','%'); 
        if(get_comments_number() > 1){ echo ' commentaires';} else { echo ' commentaire';}; ?>
                </span>
    </div>
    <div class="actuimg">
        <?php the_post_thumbnail( 'full' ); ?>

    </div>
    <div class="actutext">
       
        <p>
            <?php the_excerpt(); ?>
        </p>

    </div>

</div>
             
    
       <?php endwhile; else: ?>
       <p>Aucun résultat</p>
                    <?php endif; ?>
       <!-- Fin boucle article -->
     
    <?php wp_reset_query(); ?>
    
    
    
    
    
  

</div>

   
    
    
    
    

    
   
</div>
<?php 

get_footer(); ?>