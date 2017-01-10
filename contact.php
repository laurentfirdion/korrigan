<?php
//Template Name: Contact
 
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
    
<?php echo do_shortcode( '[ninja_form id=1]' ); ?>
  
  
     
</div>


</div>


    <?php 
get_footer(); ?>