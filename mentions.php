<?php
//Template Name: Mentions Légales

 get_header();
	?>   
      <div class="container-fluid" id="filariane"> 

       <div class="container"> 
           <div class="retour"><a href="javascript:history.go(-1)"><img src="<?php bloginfo('template_url'); ?>/img/retour.jpg" alt="bouton retour"/></a></div><div class="ariane"><ol class="breadcrumb">
  <li> <a href="<?php bloginfo('url'); ?>">ACCUEIL</a></li>
  <li>Mentions Légales</li>
  
</ol>
           </div>
           <br class="stopfloat"/>
    </div>
</div>
        
 <div class="container-fluid principal">   
<div class="container">
 <div class="row"> 
<div class="col-xs-12 col-sm-9 col-md-9 mainmention">
    <section>
        <h1><?php the_title(); ?></h1>
  <div class="mentiontext">  
       <?php
    while ( have_posts() ) : the_post(); ?>
      
<?php the_content();?>
      
      <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>
        </div>  
 
    </section>
     </div>
 <div class="col-xs-12 col-sm-3 col-md-3"> 
     <div id="navbar-side">
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


<?php 
get_footer(); ?>