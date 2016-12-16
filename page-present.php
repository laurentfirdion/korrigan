<?php
//Template Name: Page
 
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
<div class="col-xs-12 col-sm-12 col-md-12 textemain">
   
<h1><?php the_field('titre'); ?></h1>
    
    
 <?php the_field('texte'); ?>   
    
    
    
    <div class="lien"><a href="<?php bloginfo('url'); ?>/nous-contacter">CONTACTEZ NOUS</a></div> 
        
   
</div>

</div>
<?php 

get_footer(); ?>