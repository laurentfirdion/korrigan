<?php
//Template Name: structure
 
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

    
<div class="col-xs-12 col-sm-3 col-md-3 aside hide_mobile">
    <nav id="navbarside" class="affix-top">
       
   <ul class="nav">
       
        <li><a href="#partie1"><?php the_field('titre_1'); ?> <i class="fa fa-angle-right"><span class="glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span></i></a></li>
         <li><a href="#partie2"><?php the_field('titre_2'); ?><i class="fa fa-angle-right"><span class="glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span></i></a></li>
        <li><a href="#partie3"><?php the_field('titre_3'); ?><i class="fa fa-angle-right"><span class="glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span></i></a></li>
        <?php $value = get_field('titre_4');
    if(isset($value[0])) { ?>   
       <li><a href="#partie4"><?php the_field('titre_4'); ?><i class="fa fa-angle-right"><span class="glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span></i></a></li>
        <?php } ?>   
    </ul>
      
        <div class="actu-side">
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
    

    
    <div  id="partie1" class="mainmetiertext">

        <h2><?php the_field('titre_1'); ?></h2>
   
        <img src="<?php the_field('image_1'); ?>" />
        
         <?php the_field('texte_1'); ?>
        
      
    </div>
    
        <div id="partie2" class="mainmetiertext">
        

        <h2><?php the_field('titre_2'); ?></h2>
            
              <img src="<?php the_field('image_2'); ?>" />
   
            <?php the_field('texte_2'); ?>
    </div>
    
    <div id="partie3" class="mainmetiertext">
        
       
     

        <h2><?php the_field('titre_3'); ?></h2>
        
          <img src="<?php the_field('image_3'); ?>" />
        
             <?php the_field('texte_3'); ?>
    
    </div>
    
    <?php $value = get_field('titre_4');
    
    if($value == "L’équipe"){ ?>
        
    <div id="partie4" class="mainmetiertext equipe">

        <h2><?php the_field('titre_4'); ?></h2>
    <div class="slidertemoin">
        
        
         <?php  $query = new WP_Query( 'post_type=personnel' ); 
      while ( $query->have_posts() ) : $query->the_post(); 
        
        $image= get_field('image');
        
        if($image == "fille rousse"){
            $image = "rousse";
        } else if($image == "fille brune"){
            $image = "brune";
        } else if($image == "fille chatain"){
            $image = "chatain";
        }  else {
             $image = "blonde";
        }                   
                             
        ?>
        
        
         <div class="col-xs-6 col-sm-6 col-md-6 temoin">
            <img src="<?php bloginfo('template_url'); ?>/ressources/img/sprites/svg/<?php echo $image ?>.svg" /> 
             <h3><?php the_field('nom'); ?></h3>
               
             <br class="stopfloat"/>
             <?php the_field('presentation'); ?>
        </div>
    
         <?php endwhile; wp_reset_postdata();
     //fin loop $ma_boucle
            ?>
        
    
    </div>  
    </div>
        
  <?php  }
    else if(isset($value[0])) { ?>   
    
    <div id="partie4" class="mainmetiertext">

        <h2><?php the_field('titre_4'); ?></h2>
        
           <img src="<?php the_field('image_4'); ?>" />
        
        
             <?php the_field('texte_4'); ?>
    
        
        <?php $pdf = get_field('formulaire_inscription_braderie'); 
        if(isset($pdf[0])){ ?>
            <a class="button" href="<?php echo $pdf ?>" target="_blank">Formulaire d'inscription à la braderie</a>
       <?php }
        ?>
    </div>
    
    
    <?php } ?>   
    
     
    
    </div>


</div>


<?php 

get_footer(); ?>