<?php
//Template Name: membership
 
 get_header();
	?>  

<div class="container-fluid" id="filariane">
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="ariane">
                <ol class="breadcrumb">
                    <li> <a href="<?php bloginfo('url'); ?>">ACCUEIL</a></li>
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

<div class="container"> 

    
<div class="col-xs-12 col-sm-3 col-md-3 aside">
    <nav id="navbarside" class="affix-top">
       

      
 <div class="actu-side">
     
                  <?php  $query = new WP_Query( 'post_type=info' ); 
                    while ( $query->have_posts() ) : $query->the_post(); ?>
                    
                    <div class="heure">
                    <h4 class="heure"><span class="picto picto-clock-black"></span>Heures de garde</h4>
                    <?php the_field('horaires'); ?>
                    </div>
                    <div class="adresse">
                    <h4 class="adresse"><span class="picto picto-adress-black"></span>Adresse</h4>
                    <?php the_field('adresse'); ?>
                    </div>
                    <div class="telephone">
                    <h4 class="telephone"><span class="picto picto-phone-black"></span>Téléphone</h4>
                    <p> <?php the_field('telephone'); ?> </p>
                    </div>
                    <div class="mail">
                    <h4 class="mail"><span class="picto picto-email-black"></span>Mail</h4>
                    <p> <?php the_field('email'); ?> </p>
                    </div>
                    
                     <?php endwhile; wp_reset_postdata(); ?> 
     
     
             <h3>ACTUALITÉ</h3>
    
<?php $args = array(
	'posts_per_page' => 1,
	'post__in'  => get_option( 'sticky_posts' ),
	'ignore_sticky_posts' => 1
);
$query = new WP_Query( $args ); 

?>

<?php while ( $query->have_posts() ) : $query->the_post(); ?>
    
    <div class="sideactu">
    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <p><?php the_excerpt(); ?></p>
    </div>
<?php endwhile; wp_reset_query();?>
  </div>
        
    </nav>
  
    
</div>    
    
    
<div class="col-xs-12 col-sm-9 col-md-9 mainmetier">
    
 <?php echo do_shortcode( '[CPABC_APPOINTMENT_CALENDAR calendar="1"]' ) ;?>   
    
    
<h2>Planning repas</h2>    
    
  
<?php  $query = new WP_Query(array(
	'post_type'			=> 'repas',
	'posts_per_page'	=> 5,
	'order'				=> 'DESC'
));
            while ( $query->have_posts() ) : $query->the_post(); 
    $pdf = get_field('repas-pdf'); 
    ?>
    
        <div class="repas">
           <a href="<?php echo $pdf ?>" target="_blank"> <span class="picto picto-menu"></span> <?php the_field('repas-date'); ?></a>
        </div>
    
    
      <?php endwhile; wp_reset_postdata(); ?> 
    
    
    <br class="stopfloat" />    
    
<h2>Fichiers utiles</h2>
  
      <?php  $query = new WP_Query(array(
	'post_type'			=> 'fichier',
	'posts_per_page'	=> -1,
	'order'				=> 'ASC'
));
            while ( $query->have_posts() ) : $query->the_post(); 
    $pdf = get_field('fichier'); 
    ?>
    
        <div class="fichier">
           <a class="button" href="<?php echo $pdf ?>" target="_blank"><?php the_field('nom'); ?></a>
        </div>
    
    
      <?php endwhile; wp_reset_postdata(); ?> 
    
    
    <br class="stopfloat" />
    
    <div class="partage-photo">
    <h2>Partager une photo</h2>
    
       <?php the_field('texte'); ?>
        
      <?php echo do_shortcode( '[wordpress_file_upload singlebutton="true" uploadpath="uploads/partage" uploadpatterns="*.jpg,*.jpeg,*.png,*.gif" maxsize="1" duplicatespolicy="maintain both" placements="selectbutton+uploadbutton+progressbar/message" uploadtitle="Votre fichier ?" widths="message:100%" heights="message:50" userdatalabel="Votre fichier ?|t:text|s:none|r:0|a:0|p:inline|d:"]' ); ?>
    
        
   
           <a class="button-galerie" href="<?php bloginfo('url'); ?>/galerie">Voir la galerie</a>
       
        
    </div>
    

    
</div>


</div>


    <?php 
get_footer(); ?>