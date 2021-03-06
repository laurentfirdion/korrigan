<?php
/**
 * The template for displaying Footer
 */
 ?>

    <footer class="footer">
        <div class="container">

            <div class="row">

                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h6>Mentions</h6>
                    <p> © Association les Korrigans 2017</p>

                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h6>Plan du site</h6>
                    <?php

$defaults = array(
	'theme_location'  => 'Menu bas',
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

                        <br class="stopfloat" />

                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h6>Contact</h6>

                     <?php  $query = new WP_Query( 'post_type=info' ); 
                    while ( $query->have_posts() ) : $query->the_post(); ?>
                    
                    <h5 class="heure"><span class="picto picto-clock"></span>Horaires</h5>
                    <?php the_field('horaires'); ?>
                    <h5 class="adresse"><span class="picto picto-adress"></span>Adresse</h5>
                    <?php the_field('adresse'); ?>
                    <h5 class="telephone"><span class="picto picto-phone"></span>Téléphone</h5>
                    <p> <?php the_field('telephone'); ?> </p>
                    <h5 class="mail"><span class="picto picto-email"></span>Mail</h5>
                    <p> <?php the_field('email'); ?> </p>
                    
                     <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->



<div id="fleche"><a href="#top"><span class='picto picto-arrow'></span></a></div>

    </div>
    <!-- Wrapper End -->

    <?php
  wp_footer();
?>
        </body>

        </html>