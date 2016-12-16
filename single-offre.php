<?php
//Template Name: Offre emploi

 get_header();
	?>   
      <div class="container-fluid" id="filariane"> 

       <div class="container"> 
           <div class="retour"><a href="javascript:history.go(-1)"><img src="<?php bloginfo('template_url'); ?>/img/retour.jpg" alt="bouton retour"/></a></div><div class="ariane"><ol class="breadcrumb">
  <li> <a href="<?php bloginfo('url'); ?>">ACCUEIL</a></li>
           <li><a href="<?php bloginfo('url'); ?>/offres-demploi">OFFRES D'EMPLOI</a></li>
  <li class="active"><?php the_title().' '.the_time(' d/m/Y');?></li>
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
        <h1><?php the_title().' '.the_time(' d/m/Y');?><?php if( get_field('urgence') ){ ?>
        <span class="color2"><?php echo 'URGENT'; ?></span>
         <?php } ?> <?php if( get_field('disponibilite') ){ ?>
        <span class="color"><?php echo 'DÉJA POURVU'; ?></span>
         <?php } ?></h1>
          

        <div class="presentoffre">
         <?php the_field('presentation'); ?>
        </div>
        
        <div class="mission"><h2>Missions</h2>
        <?php the_field('mission'); ?>
        </div>
        
        <div class="profil"><h2>Profil</h2>
        <?php the_field('profil'); ?>
        
        </div>
        
          <?php if( !get_field('disponibilite') ){ ?>
        <div class='postuler'><a href="mailto:formation@aforem.fr?subject=<?php the_title().' '.the_time(' d/m/Y');?>">POSTULER</a></div>
        <?php } ?>
      
     
           <?php 
    $choix = get_field('formation'); 
    $exclude_ids = get_the_ID();
           $args = array(
	'numberposts'	=> -1,
	'post_type'		=> 'offre',
	'meta_key'		=> 'formation',
	'meta_value'	=> $choix,
    'post__not_in' => array($exclude_ids)           
);

        
         $the_query = new WP_Query( $args ); ?>
        
        
        
         <?php if( $the_query->have_posts() ): ?>
               <h2 class="h2offre">Offres similaires</h2>
            <?php     while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
         <div class="projetassoc">   
        <a href="<?php the_permalink()?>"><h4><?php the_field('titre_poste');?><?php if( get_field('urgence') ){ ?>
        <span class="color"><?php echo 'URGENT'; ?></span>
         <?php } ?><?php if( get_field('disponibilite') ){ ?>
        <span class="color"><?php echo 'DÉJA POURVU'; ?></span>
         <?php } ?></h4>
            
            <p><?php the_time('d/m/Y');?></p></a>
             <p><?php the_field('formation');?></p>
        </div>
        
        
        
        
       <?php endwhile;?>
<?php endif; ?>
   <?php wp_reset_query();?> 
        
        <br class='stopfloat'/>
        
        <a href="<?php bloginfo('url'); ?>/offres-demploi"><h5>Revenir à la liste</h5></a>
        
       
        
        
 
   

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