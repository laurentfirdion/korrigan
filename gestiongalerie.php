<?php
//Template Name: gestion
 
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
    
    <h2>Photos partagées</h2>
    <div class="grid"> 
       
   <?php
$uploads = wp_upload_dir();

if ($dir = opendir($uploads['basedir'].'/partage')) {
	$images = array();
    $nb = 0;
	while (false !== ($file = readdir($dir))) {
		if ($file != "." && $file != ".." && preg_match('#\.(jpe?g|gif|png)$#i', $file) && $nb < 100) {
			$images[] = $file; 
            $nb++;
		}
	}
	closedir($dir);
}


foreach($images as $image) {
	echo '<div class="grid-item"><a class="fancybox" rel="group" href="';
    echo $uploads['baseurl'].'/partage/'.$image;
    echo '"width="100%"><img class="lazy" data-original="';
    echo $uploads['baseurl'].'/partage/'.$image;
    echo '" alt="" scale="0"/></a><a href="#" onclick="deleteFile(jQuery(this))">Supprimer le fichier</a></div>';
}

?>
    
    </div>   
</div>


</div>
<script>
function deleteFile(elt) {

    var $href = elt.parent().find('.fancybox').attr('href');
    var $file = $href.replace('http://localhost:8888/wordpress-korrigans/wp-content/uploads/partage/', '').trim();
    console.log($file);

    $file = $file.trim();
    jQuery.ajax({
    method: "POST",
    url: "<?php echo get_template_directory_uri()?>/deletefile.php",
    data: { file : $file}
   }).done(function( msg ) {
    console.log( msg );
}).fail(function( jqXHR, textStatus ) {
  console.log( "Request failed: " + textStatus );
    });
}
</script>

    <?php 
get_footer(); ?>