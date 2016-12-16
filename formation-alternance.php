<?php
//Template Name: Formation alternance
 
 get_header();
	?>  
<div class="container-fluid" id="filariane"> 

       <div class="container"> 
           <div class="retour"><a href="javascript:history.go(-1)"><img src="<?php bloginfo('template_url'); ?>/img/retour.jpg" alt="bouton retour"/></a></div><div class="ariane"><ol class="breadcrumb">
  <li> <a href="<?php bloginfo('url'); ?>">ACCUEIL</a></li>
  <li>FORMATIONS EN ALTERNANCE</li>
  <li class="active"><?php the_title(); ?></li>
</ol>
           </div>
           <br class="stopfloat"/>
    </div>
</div>

 <div class="container-fluid principal">   
<div class="container">
 <div class="row"> 
<div class="col-xs-12 col-sm-9 col-md-9 maininitial">
    <section>
    <h1><?php the_title(); ?></h1>
    <div class="objectif wow bounceInUp"><h2><?php the_field('titre_objectif'); ?></h2><?php the_field('texte_objectif'); ?></div>
    <div class="duree wow bounceInUp"><h2><?php the_field('titre_duree'); ?></h2><?php the_field('texte_duree'); ?></div>
    <div class="admission wow bounceInUp"><h2><?php the_field('titre_admission'); ?></h2><?php the_field('texte_admission'); ?></div> 
    <div class="stage wow bounceInUp"><h4><?php the_field('titre_stage_en_entreprise'); ?></h4>
        <div class="stagemod">
            <h5><?php the_field('titre_modalite_du_stage'); ?></h5>
       <?php the_field('modalite_du_stage'); ?>
        </div>
        <div class="stageduree"> 
            <h5><?php the_field('titre_duree_du_stage'); ?></h5>
       <?php the_field('duree_du_stage'); ?>
        </div>
        
        <br class="stopfloat"/>
        </div>
       <div class="metier wow bounceInUp">
        <h4><?php the_field('titre_metiers_vises'); ?></h4>
        <?php the_field('metiers_vises'); ?>
        </div> 
    <div class="enseignpro">
        <h3><?php the_field('titre_enseignement_professionnel'); ?></h3>
    
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          <?php the_field('programmepro1'); ?>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <?php the_field('textprogrammepro1'); ?>
      </div>
    </div>
  </div>
            
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <?php the_field('programmepro2'); ?>
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <?php the_field('textprogrammepro2'); ?>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <?php the_field('programmepro3'); ?>
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <?php the_field('textprogrammepro3'); ?>
      </div>
    </div>
  </div>
            <?php 
        $value1 = get_field('programmepro4');
        if(isset($value1[0])){ ?>
   <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          <?php the_field('programmepro4'); ?>
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">
        <?php the_field('textprogrammepro4'); ?>
      </div>
    </div>
  </div>     
            <?php } ?>
          <?php 
        $value2 = get_field('programmepro5');
        if(isset($value2[0])){ ?>     
     <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFive">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          <?php the_field('programmepro5'); ?>
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
      <div class="panel-body">
        <?php the_field('textprogrammepro5'); ?>
      </div>
    </div>
  </div>            
     <?php } ?> 
         <?php 
        $value3 = get_field('programmepro6');
        if(isset($value3[0])){ ?>    
      <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSix">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          <?php the_field('programmepro6'); ?>
        </a>
      </h4>
    </div>
    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
      <div class="panel-body">
        <?php the_field('textprogrammepro6'); ?>
      </div>
    </div>
  </div>    
        <?php } ?>        
       
        <?php 
        $value4 = get_field('programmepro7');
        if(isset($value4[0])){ ?>    
      <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSeven">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
         <?php the_field('programmepro7'); ?>
        </a>
      </h4>
    </div>
    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
      <div class="panel-body">
        <?php the_field('textprogrammepro7'); ?>
      </div>
    </div>
  </div>    
        <?php } ?>             
         
        <?php 
        $value5 = get_field('programmepro8');
        if(isset($value5[0])){ ?>    
      <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingHeight">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseHeight" aria-expanded="false" aria-controls="collapseHeight">
          <?php the_field('programmepro8'); ?>
        </a>
      </h4>
    </div>
    <div id="collapseHeight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingHeight">
      <div class="panel-body">
        <?php the_field('textprogrammepro8'); ?>
      </div>
    </div>
  </div>    
        <?php } ?>             
            
</div>
      
    </div>    
       <div class="enseigngeneral">
           <h3><?php the_field('titre_enseignement_general'); ?></h3>
               <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingNine">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
          <?php the_field('programmegene1'); ?>
        </a>
      </h4>
    </div>
    <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
      <div class="panel-body">
       <?php the_field('textprogrammegene1'); ?>
      </div>
    </div>
  </div>
            
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTen">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
          <?php the_field('programmegene2'); ?>
        </a>
      </h4>
    </div>
    <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
      <div class="panel-body">
        <?php the_field('textprogrammegene2'); ?>
      </div>
    </div>
  </div>
                   <?php 
        $value1 = get_field('programmegene3');
        if(isset($value1[0])){ ?>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingEleven">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
          <?php the_field('programmegene3'); ?>
        </a>
      </h4>
    </div>
    <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">
      <div class="panel-body">
        <?php the_field('textprogrammegene3'); ?>
      </div>
    </div>
  </div>
                   <?php } ?> 
            <?php 
        $value2 = get_field('programmegene4');
        if(isset($value2[0])){ ?>
   <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwelve">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
          <?php the_field('programmegene4'); ?>
        </a>
      </h4>
    </div>
    <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwelve">
      <div class="panel-body">
        <?php the_field('textprogrammegene4'); ?>
      </div>
    </div>
  </div>         
                    <?php } ?>  
             <?php 
        $value3 = get_field('programmegene5');
        if(isset($value3[0])){ ?>    
                   
     <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThirteen">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
          <?php the_field('programmegene5'); ?>
        </a>
      </h4>
    </div>
    <div id="collapseThirteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThirteen">
      <div class="panel-body">
        <?php the_field('textprogrammegene5'); ?>
      </div>
    </div>
  </div>            
     <?php } ?>  
         <?php 
        $value4 = get_field('programmegene6');
        if(isset($value4[0])){ ?>    
                   
      <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFourteen">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
          <?php the_field('programmegene6'); ?>
        </a>
      </h4>
    </div>
    <div id="collapseFourteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFourteen">
      <div class="panel-body">
        <?php the_field('textprogrammegene6'); ?>
      </div>
    </div>
  </div>    
        <?php } ?>        
       
       
            
</div> 
        
        
    </div>   
        
    </section>
     </div>
     
 <div class="col-xs-12 col-sm-3 col-md-3"> 
     <div id="navbar-side">
          <form class="form1" method="post" action="<?php echo esc_url( home_url('/sinscrire/')); ?>">
          <input type="hidden" id="formation" name="formationffff" value="<?php $nom = get_the_title(); echo $nom; ?>"/>
         
       <h7><input id="submit" type="submit" value="INSCRIPTION" /></h7>
                </form>
      <h4><a href="<?php bloginfo('url'); ?>/contact">NOUS CONTACTER</a></h4>
    <h3>FORMATIONS ALTERNANCE</h3>
         
         <?php

$defaults = array(
	'theme_location'  => 'Menu formation alternance',
	'menu'            => '',
	'container'       => '',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'menu',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul>%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);

wp_nav_menu( $defaults );

?>
   
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


<script src="<?php bloginfo('template_url'); ?>/assets/js/wow.min.js"></script>
<script> 

new WOW().init();
   jQuery(document).ready(function($) {   
   $("#navbar-side h7").mouseover(function(){
            $(this).css({"background-color": "#d37338"});
       });
       $("#navbar-side h7").mouseleave(function(){
           $(this).css({"background-color" : "#e07a3b"});  
       });      
    
   });
</script>
<?php 

get_footer(); ?>