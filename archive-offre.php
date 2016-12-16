<?php
//Template Name: Offre emploi

 get_header();
	?>   
      <div class="container-fluid" id="filariane"> 

       <div class="container"> 
           <div class="retour"><a href="javascript:history.go(-1)"><img src="<?php bloginfo('template_url'); ?>/img/retour.jpg" alt="bouton retour"/></a></div><div class="ariane"><ol class="breadcrumb">
  <li> <a href="<?php bloginfo('url'); ?>">ACCUEIL</a></li>
  <li>OFFRES D'EMPLOI</li>
  
</ol>
           </div>
           <br class="stopfloat"/>
    </div>
</div>
        
 <div class="container-fluid principal">   
<div class="container">
 <div class="row"> 
<div class="col-xs-12 col-sm-9 col-md-9 mainoffre">
    <section>
        <h1><?php the_title(); ?></h1>

        <div class="emploi">
            <div class="postetitre"><h2>Poste</h2></div>  
             <div class="formationtitre"><h2>Formation</h2></div> 
            <div class='secteurtitre'> <h2>Secteurs</h2></div>
        </div>
        
        <br class="stopfloat"/>
        
        
        <?php 

// query
$the_query = new WP_Query(array(
	'post_type'			=> 'offre',
	'posts_per_page'	=> -1,
	'meta_key'			=> 'urgence',
	'orderby'			=> 'meta_value_num date',
	'order'				=> 'DESC'
));

?>
        <?php if( $the_query->have_posts() ): ?>
        
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); 
		
		
		?>
<div class="offre">

     <div class="postetext">
       <a href="<?php the_permalink()?>"><h3><?php the_field('titre_poste');?></h3>
           <p><?php the_time('d/m/Y');?></p></a>
         <?php if( get_field('urgence') ){ ?>
        <span class="color"><?php echo 'URGENT'; ?></span>
         <?php } ?>
             <?php if( get_field('disponibilite') ){ ?>
        <span class="color"><?php echo 'DÉJA POURVU'; ?></span>
         <?php } ?>
        </div>
    
            <div class="formationtext">
            
            <h4><?php the_field('formation');?></h4>
            </div>
               
  
        <div class="secteurtext">
       <h5><?php the_field('titre_secteur');?></h5>
       </div>
        
        
        </div>          
            
            <br class="stopfloat"/>
    
    <?php endwhile; ?>
    <?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
    
    
    
    
   

    </section>
     </div>
 <div class="col-xs-12 col-sm-3 col-md-3"> 
     <div id="navbar-side">
         <h7><a href="<?php bloginfo('url'); ?>/sinscrire">S'INSCRIRE</a></h7>
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