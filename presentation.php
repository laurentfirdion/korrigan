<?php
//Template Name: presentation
 
 get_header();
	?>  

       <div class="container-fluid" id="filariane"> 
           <div class="container">
           <div class="retour"><a href="javascript:history.go(-1)"><img src="<?php bloginfo('template_url'); ?>/img/retourgris.jpg" alt="bouton retour"/></a></div><div class="ariane"><ol class="breadcrumb">
  <li> <a href="<?php bloginfo('url'); ?>">ACCUEIL</a></li>
  <li><?php the_title();?></li>
</ol>
           </div>
           <br class="stopfloat"/>
               </div>
    </div>

<div class="container"> 

<div class="col-xs-12 col-sm-9 col-md-9 mainmetier">
    

    
    <div class="mainmetiertext"><h1 id="un">LE PROJET D'UNE VIE</h1>
        
        <iframe width="100%" height="450" src="https://www.youtube.com/embed/iA7fSbeY1J4" frameborder="0" allowfullscreen></iframe>
        
        
        <p>Iudicem ab cillum expetendis. Sint ex occaecat. Quo tamen officia ullamco, qui 
            ex dolore multos quae. Senserit tamen nulla ut quae quo litteris quid enim nam 
            quid, singulis malis aliquip ad tempor comprehenderit in tempor. Arbitror tamen 
            nescius ullamco ad hic de anim mentitum. Nulla expetendis ut cernantur. Est 
            veniam tamen fugiat voluptate, ita aute efflorescere ab quo multos tempor, te 
            quid appellat imitarentur. Eram qui doctrina o velit, aliquip se noster.</p>
        <p>Ad dolor deserunt consectetur. E pariatur transferrem, appellat non sint 
            incididunt, varias hic officia, ipsum quibusdam excepteur. Fabulas varias ea 
            admodum imitarentur e ita minim efflorescere est sint hic tempor ut esse ita non 
            incididunt sempiternum. Si incurreret a mentitum. Deserunt ea quid, magna 
            voluptate ita familiaritatem, nescius quae vidisse doctrina, fugiat iis a enim 
            doctrina, vidisse et elit cupidatat iis do illum tamen nam quamquam, excepteur 
            hic iudicem in ita minim quis ad senserit. Quorum pariatur iis ipsum aliqua. De 
            est exquisitaque ita non legam te aliqua, elit consequat praetermissum nam an 
            velit pariatur. Amet ab nam varias proident, incididunt quid ut proident 
            graviterque est te an aute cernantur an ne ita exercitation.</p>
    </div>
     <div class="mainmetiertext"><h1 id="deux">NOTRE PISCINE</h1>
         
         <img src="<?php bloginfo('template_url'); ?>/img/piscineconstru.jpg"/>
         
           <p>Iudicem ab cillum expetendis. Sint ex occaecat. Quo tamen officia ullamco, qui 
            ex dolore multos quae. Senserit tamen nulla ut quae quo litteris quid enim nam 
            quid, singulis malis aliquip ad tempor comprehenderit in tempor. Arbitror tamen 
            nescius ullamco ad hic de anim mentitum. Nulla expetendis ut cernantur. Est 
            veniam tamen fugiat voluptate, ita aute efflorescere ab quo multos tempor, te 
            quid appellat imitarentur. Eram qui doctrina o velit, aliquip se noster.</p>
        <p>Ad dolor deserunt consectetur. E pariatur transferrem, appellat non sint 
            incididunt, varias hic officia, ipsum quibusdam excepteur. Fabulas varias ea 
            admodum imitarentur e ita minim efflorescere est sint hic tempor ut esse ita non 
            incididunt sempiternum. Si incurreret a mentitum. Deserunt ea quid, magna 
            voluptate ita familiaritatem, nescius quae vidisse doctrina, fugiat iis a enim 
            doctrina, vidisse et elit cupidatat iis do illum tamen nam quamquam, excepteur 
            hic iudicem in ita minim quis ad senserit. Quorum pariatur iis ipsum aliqua. De 
            est exquisitaque ita non legam te aliqua, elit consequat praetermissum nam an 
            velit pariatur. Amet ab nam varias proident, incididunt quid ut proident 
            graviterque est te an aute cernantur an ne ita exercitation.</p>
    </div>
     <div class="mainmetiertext"><h1 id="trois">Item 3</h1>
    
           <p>Iudicem ab cillum expetendis. Sint ex occaecat. Quo tamen officia ullamco, qui 
            ex dolore multos quae. Senserit tamen nulla ut quae quo litteris quid enim nam 
            quid, singulis malis aliquip ad tempor comprehenderit in tempor. Arbitror tamen 
            nescius ullamco ad hic de anim mentitum. Nulla expetendis ut cernantur. Est 
            veniam tamen fugiat voluptate, ita aute efflorescere ab quo multos tempor, te 
            quid appellat imitarentur. Eram qui doctrina o velit, aliquip se noster.</p>
        <p>Ad dolor deserunt consectetur. E pariatur transferrem, appellat non sint 
            incididunt, varias hic officia, ipsum quibusdam excepteur. Fabulas varias ea 
            admodum imitarentur e ita minim efflorescere est sint hic tempor ut esse ita non 
            incididunt sempiternum. Si incurreret a mentitum. Deserunt ea quid, magna 
            voluptate ita familiaritatem, nescius quae vidisse doctrina, fugiat iis a enim 
            doctrina, vidisse et elit cupidatat iis do illum tamen nam quamquam, excepteur 
            hic iudicem in ita minim quis ad senserit. Quorum pariatur iis ipsum aliqua. De 
            est exquisitaque ita non legam te aliqua, elit consequat praetermissum nam an 
            velit pariatur. Amet ab nam varias proident, incididunt quid ut proident 
            graviterque est te an aute cernantur an ne ita exercitation.</p>
    </div>
    </div>
<div class="col-xs-12 col-sm-3 col-md-3 aside">
    <nav id="navbarside" class="affix-top">
        <h2 class="aquawellness"><?php the_title();?></h2>
   <ul class="nav">
        <li><a href="#un">LE PROJET D'UNE VIE</a></li>
        <li><a href="#deux">NOTRE PISCINE</a></li>
        <li><a href="#trois">Item 3</a></li>
        </ul>
        <a href="<?php bloginfo('url'); ?>/contact" class="aquacontact">CONTACT</a>
    </nav>
    </div>

</div>


<script>
jQuery(document).ready(function($) {
$('body').scrollspy({ target: '#navbarside' })

$('#navbarside').affix({
  offset: {
    top: 50,
    bottom: function () {
      return (this.bottom = $('.footer').outerHeight(true))
    }
  }
});



var navOffset = $('.navbar-fixed-top').height();
    

$('#navbarside .nav li a').click(function(event) {
   event.preventDefault();
var target = $(this).attr('href');
    $('html, body')
       // on arrête toutes les animations en cours 
       .stop()
       /* on fait maintenant l'animation vers le haut (scrollTop) vers 
        notre ancre target */
       .animate({scrollTop: $(target).offset().top}, 1000 );
});







});
</script>    
<?php 

get_footer(); ?>