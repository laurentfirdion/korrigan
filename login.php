<?php
/*
* Template Name: Login Page
*/
 
get_header(); ?>
 

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

<div class="col-xs-12 col-sm-12 col-md-12">


<?php
   $args = array(
       'echo'           => true,
       'redirect'       => site_url( $_SERVER['REQUEST_URI'] ),
       'form_id'       => 'loginform',
       'label_username' => __( 'Username' ),
       'label_password' => __( 'Password' ),
       'label_remember' => __( 'Remember Me' ),
       'label_log_in'   => __( 'Log In' ),
       'id_username'   => 'user_login',
       'id_password'   => 'user_pass',
       'id_remember'   => 'rememberme',
       'id_submit'     => 'wp-submit',
       'remember'       => true,
       'value_username' => NULL,
       'value_remember' => false
);
?>

<div class="login-form">

    <?php $args = array(
       'echo'           => true,
       'redirect'       => site_url( $_SERVER['REQUEST_URI'] ),
       'form_id'       => 'loginform',
       'label_username' => __( 'Identifiant' ),
       'label_password' => __( 'Mot de passe' ),
       'label_remember' => __( 'Se souvenir de moi' ),
       'label_log_in'   => __( 'Connectez-vous' ),
       'id_username'   => 'user_login',
       'id_password'   => 'user_pass',
       'id_remember'   => 'rememberme',
       'id_submit'     => 'wp-submit',
       'remember'       => true,
       'value_username' => NULL,
       'value_remember' => false
); ?>
 

<?php
   $args = array(
   'redirect'  => get_permalink( get_page_by_title( 'Espace membre' ) ) //mettre le page id de la page réservée au membre
   );
if(isset($_GET['login']) && $_GET['login'] == 'failed')
{   ?>
          <div id="login-error">
               <p>Identifiant ou mot de passe incorrect</p>
          </div>
<?php   } 
wp_login_form( $args );
?>
    
</div>
<div class="bottom-link">
    <div class ="home-link"><a href="<?php echo home_url(); ?> "> Revenir à l'accueil</a></div>
  <div class ="reset-link"> <a href="<?php echo wp_lostpassword_url(); ?> "> Mot de passe perdu</a></div>
      
</div>

    </div>
</div>
<?php get_footer(); ?>