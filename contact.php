<?php
//Template Name: Contact
 
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
<div class="col-xs-12 col-sm-8 col-md-8 textemain">
   
<h1><?php the_field('titre'); ?></h1>
    
 <?php the_field('formulaire_texte'); ?>   

  <div class="formulaire">
   <?php the_field('formulaire'); ?> 
  </div>
    
    
    </div>  
  <div class="col-xs-12 col-sm-4 col-md-4">
      <div class="side">
     <?php the_field('side'); ?>
          <h5><img class="petit hvr-buzz" src="<?php bloginfo('template_url'); ?>/img/oldphone.png"/><?php the_field('fixe'); ?></h5>
           <h5><img class="petit hvr-wobble-top" src="<?php bloginfo('template_url'); ?>/img/mobile.png"/> <?php the_field('mobile'); ?></h5>
           <h5><img class="petit hvr-sink" src="<?php bloginfo('template_url'); ?>/img/fax.png"/> <?php the_field('fax'); ?></h5>
          </div>
</div>   
    
 <div class="col-xs-12 col-sm-8 col-md-8 tarifmain">   
  <div class="tarif">
     <?php the_field('tarif'); ?> 
    
    
   </div>
   
    </div>
 
</div>
<?php 

get_footer(); ?>