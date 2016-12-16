<?php
/**
 * The template for displaying Footer
 */
 ?>

    <footer id="footer-sec">
        <div class="container">

            <div class="row">

                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h6>INSCRIPTION À LA NEWSLETTER</h6>
                    <p>Inscrivez-vous à notre newsletter et recevez les dernières nouvelles.</p>

                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h6>INFORMATION</h6>
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
                    <h6>CONTACT</h6>

                    <h5 class="heure">Heures de garde</h5>
                    <p>Du lundi au vendredi de 8h00 à 18h00</p>
                    <h5 class="adresse">Adresse</h5>
                    <p>4 bis rue Les Temps Modernes<br />
                    35250 Chevaigné
                    </p>
                    <h5 class="telephone">Téléphone</h5>
                    <p>02 99 55 15 16</p>
                    <h5 class="mail">Mail</h5>
                    <p>asso.korrigans@gmail.com</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->



    <div id="fleche"><a href="#top"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fleche.png" alt="fleche"/></a></div>

    </div>
    <!-- Wrapper End -->

    <?php
  wp_footer();
?>
        </body>

        </html>