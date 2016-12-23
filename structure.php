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
    if(isset($value[0])) { ?>   
    
    <div id="partie4" class="mainmetiertext">

        <h2><?php the_field('titre_4'); ?></h2>
        
           <img src="<?php the_field('image_4'); ?>" />
        
        
             <?php the_field('texte_4'); ?>
    
    </div>
    
    
    <?php } ?>   
    
     
    
    </div>
<div class="col-xs-12 col-sm-3 col-md-3 aside">
    <nav id="navbarside" class="affix-top">
       
   <ul class="nav">
       
        <li><a href="#partie1"><?php the_field('titre_1'); ?> <i class="fa fa-angle-right"><span class="glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span></i></a></li>
         <li><a href="#partie2"><?php the_field('titre_2'); ?><i class="fa fa-angle-right"><span class="glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span></i></a></li>
        <li><a href="#partie3"><?php the_field('titre_3'); ?><i class="fa fa-angle-right"><span class="glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span></i></a></li>
        <?php if(isset($value[0])) { ?>   
       <li><a href="#partie4"><?php the_field('titre_4'); ?><i class="fa fa-angle-right"><span class="glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span></i></a></li>
        <?php } ?>   
    </ul>
      
    </nav>
    </div>

</div>


<?php 

get_footer(); ?>