<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<!--Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Description" content="developpement web et developpement logiciel">
<meta name="Keywords" content="developpement web ,développeur python, création logiciels,logiciel, html, css, python, java, javascript, jquery, react, developpeur,développeur, front-end, back-end, site web, sites, site internet">
<meta name="author" content="monarc">
<link rel="shortcut icon" href="logo.ico">
<link rel="icon" type="image/png" href="images/logo.png" />
<meta name="viewport" content="width=800" />
<!--optimisation Facebook-->
<meta property="og:title" content="Monarc développement" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://monarc.dx.am" />
<meta property="og:image" content="/slide_2.jpg" />
<meta property="og:image:height" content="500" />
<meta property="og:image:width" content="165" />
<meta property="og:description" content="développement web, site web et applications, logiciels" />
<meta property="og:site_name" content="Monarc développement" />
<title>Monarc developpement</title>
<!--Fichier importés par le site & Files for the page -->
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/font-awesome.min.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,300,600' rel='stylesheet' type='text/css'>
<link href="css/jquery.bxslider.css" rel="stylesheet" />
<link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
<?php unset($_POST);?>
<header>
  <div class="container"> <a id="title" href="http://www.monarc.dx.am" class="logo">
    <hgroup>
      <h1>CV</h1>
      <h3>Monarc</h3><br/><!--ajout d'un espace & to put a space charact=>&nbsp;-->&nbsp;Développement
    </hgroup>
    </a>
    <article class="search"> <a href="javascript:void(0);" class="search_icon"><img src="images/LOUPE.png"/></a>
      <div class="search_box">
        <input type="search" name="" placeholder="Search.." />
      </div>
    </article>
    <a href="javascript:void(0);" class="mob_nav"><img src="images/menu.png"/> </a>
    <nav>
      <ul>
        <li><a href="http://www.monarc.dx.am" class="active">Acceuil</a></li>
        <li><a href="javascript:void(0);">à propos</a></li>
        <li><a href="/comp.php">Compétences</a></li>
        <li class="dd"><a href="javascript:void(0);"><img id="fleche" src="images/next.svg" style="height:12px;width:15px;">Portfolio </a>
          <ul class="dd_content">
            <li><a href="#">Web Design</a></li>
            <li><a href="#">App Design</a></li>
            <li><a href="#">Others</a></li>
          </ul>
        </li>
        <li><a href="javascript:void(0);">Blog</a></li>
        <li><a href="javascript:void(0);">Liens</a></li>
        <li><a href="/contact.php">me contacter</a></li>
      </ul>
    </nav>
  </div>
</header>
<section class="page">
  <div class="container">
    <span id="travaux"><h3>En travaux ne fonctionne pas encore! </h3><p>Email: <a href="mailto:segurm@mail.com">segurm@mail.com</a></p></span>
    <form class="webform" action="#" enctype="multipart/form-data" method="post"
      id="webform-client-form-1" accept-charset="UTF-8"><div><div class="form-item-name"  id="webform-componen">
      <label class="element-invisible" for="edit-submitted-name">Nom <span class="form-required" title="This field is required.">*&nbsp;</span></label>
 <input type="text" id="edit-submitted-name" name="nom" placeholder="Nom" size="60" maxlength="128" class="form-text" />
</div>
<div class="form-item-name" id="webform-component-email">
  <label class="element-invisible" for="edit-submitted-email">Email <span class="form-required" title="This field is required.">*</span></label>
 <input class="form-text" pattern="[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})" type="email" id="edit-submitted-email" name="email" placeholder="Email" size="60" />
</div>
<div class="textarea" id="webform-message">
  <label class="element-invisible" for="edit-submitted-message">Message <span class="form-required" title="This field is required.">*</span></label>
 <div class="form-textarea-wrapper"><textarea id="edit-submitted-message" name="message" placeholder="Tapez (sans lui faire trop mal!) votre texte ici!"  cols="77" rows="5" class="form-textarea required"></textarea></div>
</div>
<div class="form-actions form-wrapper" id="edit-actions"><input type="submit" id="edit-submit" name="envoi" value="ENVOYER" class="form-submit" /></div></div></form></div><?php
//envoie de mail complet
// on teste si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if (isset($_REQUEST['envoi'] )){
$mail = "91marcsegur@gmail.com"; // Déclaration de l'adresse de destination.

if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.

{

    $passage_ligne = "\r\n";

}

else

{

    $passage_ligne = "\n";

}

//=====Déclaration des messages au format texte et au format HTML.

$message_txt = "Salut à toi, voici un e-mail envoyé par @Monarc.dx.am".$passage_ligne." ".$_POST['message']." ".$passage_ligne;

$message_html = "<html><head></head><body><b>Salut à tous</b>, voici un e-mail envoyé par un <i>script PHP</i>.".$passage_ligne." ".$_POST['message']." ".$passage_ligne."</body></html>";

//==========

 

//=====Création de la boundary

$boundary = "-----=".md5(rand());

//==========

 

//=====Définition du sujet.

$sujet = "Hey mon ami , voilà ton adresse!";

//=========

 

//=====Création du header de l'e-mail.

$header = "From: \"WeaponsB\"<marcsegur@monarc.dx.am>".$passage_ligne;

$header.= "Reply-to: \"WeaponsB\" <".$_POST['email'].">".$passage_ligne;

$header.= "MIME-Version: 1.0".$passage_ligne;

$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;

//==========

 

//=====Création du message.

$message = $passage_ligne."--".$boundary.$passage_ligne;

//=====Ajout du message au format texte.

$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;

$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;

$message.= $passage_ligne.$message_txt.$passage_ligne;

//==========

$message.= $passage_ligne."--".$boundary.$passage_ligne;

//=====Ajout du message au format HTML

$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;

$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;

$message.= $passage_ligne.$message_html.$passage_ligne;

//==========

$message.= $passage_ligne."--".$boundary."--".$passage_ligne;

$message.= $passage_ligne."--".$boundary."--".$passage_ligne;

//==========

 

//=====Envoi de l'e-mail.

mail($mail,$sujet,$message,$header);
echo"mail envoyé!! de ".$_POST['nom'];//vérifier que le mail est parti!}}
}} else {echo "no mail sent!";}

 ?>
    <section class="set_of_4">
      <article class="block"> <img src="images/SQL-Training.png"/>
        <h3>SQL</h3>
        <p> Travail avec méthode merise et MySQL</p>
        <a href="#" class="button abs">Plus...</a> </article>
      <article class="block">  <img src="images/python.png"/>
        <h3>Python</h3>
        <p> Réalisation de logiciel avec interfaces graphiques (Tkinter).</p>
        <a href="#" class="button abs">Plus...</a> </article>
      <article class="block">  <img src="images/htmljscss.jpg"/>
        <h3>Développement WEB</h3>
        <p> Formation suivie en 2015</p>
        <a href="#" class="button abs">Plus...</a> </article>
      <article class="block"> <img src="images/java.jpg"/>
        <h3>Java</h3>
        <p> Réalisation d'application avec Swing.</p>
        <a href="#" class="button abs">Plus...</a> </article>
    </section>
</div>

<section class="page_alternate">
  <div class="container">
    <h1>Monarc CV Online</h1>
    <p>Autodicdacte en <a class="lin" href="#" title="MONTGERON 91">informatique Paris.</a></p>
    <article class="portfolio_set">
      <div class="optionz"> 
        <!-- Filter -->
        <ul>
          <li class="filter selected" data-filter="all">All</li>
          <li class="filter" data-filter="web_design">Web Design</li>
          <li class="filter" data-filter="web_dev"> Web Development</li>
          <li class="filter" data-filter="app_design">App Design</li>
          <li class="filter" data-filter="tee_design">mobile Application </li>
        </ul>
        </nav>
        <!-- End Filter --> 
      </div>
      <div class="mix_container">
        <ul id="Grid">
          
          <!-- Item Project and Filter Name -->
          <li class="mix web_design"> <a href="javascript:void(0);"> 
            <!-- Thumb Image and Description --> 
            <img src="images/portfolio/1.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis." /> </a> </li>
          <!-- End Item Project --> 
          
          <!-- Item Project and Filter Name -->
          <li class="mix web_design"> <a href="javascript:void(0);"> 
            <!-- Thumb Image and Description --> 
            <img src="images/portfolio/5.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis." /> </a> </li>
          <!-- End Item Project --> 
          
          <!-- Item Project and Filter Name -->
          <li class="mix web_dev"> 
            <!-- Thumb Image and Description --> 
            <a href="javascript:void(0);"> <img src="images/portfolio/2.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis." /> </a> </li>
          <!-- End Item Project --> 
          
          <!-- Item Project and Filter Name -->
          <li class="mix app_design"> 
            <!-- Thumb Image and Description --> 
            <a href="javascript:void(0);"> <img src="images/portfolio/3.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis." /> </a> </li>
          <!-- End Item Project --> 
          <!-- Item Project and Filter Name -->
          
          <li class="mix tee_design"> 
            <!-- Thumb Image and Description --> 
            <a href="javascript:void(0);"> <img src="images/portfolio/4.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis." /> </a> </li>
          <!-- End Item Project --> 
          
          <!-- Item Project and Filter Name -->
          <li class="mix app_design"> 
            <!-- Thumb Image and Description --> 
            <a href="javascript:void(0);"> <img src="images/portfolio/10.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis." /> </a> </li>
          <!-- End Item Project --> 
          <!-- Item Project and Filter Name -->
          <li class="mix tee_design"> 
            <!-- Thumb Image and Description --> 
            <a href="javascript:void(0);"> <img src="images/portfolio/9.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis." /> </a> </li>
          <!-- End Item Project --> 
          <!-- Item Project and Filter Name -->
          <li class="mix web_dev"> 
            <!-- Thumb Image and Description --> 
            <a href="javascript:void(0);"> <img src="images/portfolio/8.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis." /> </a> </li>
          <!-- End Item Project --> 
          <!-- Item Project and Filter Name -->
          <li class="mix web_design"> 
            <!-- Thumb Image and Description --> 
            <a href="javascript:void(0);"> <img src="images/portfolio/7.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis." /> </a> </li>
          <!-- End Item Project --> 
          <!-- Item Project and Filter Name -->
          <li class="mix web_dev"> 
            <!-- Thumb Image and Description --> 
            <a href="javascript:void(0);"> <img src="images/portfolio/6.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis." /> </a> </li>
          <!-- End Item Project -->
          
        </ul>
      </div>
    </article>
  </div>
</section>
<section class="page">
  <div class="container">
    <aside class="col-4">
      <h3>Sites interressants</h3>
      <ul>
        <li><i class="fa fa-arrow-right"></i><a href="https://www.openclassrooms.com" >OpenClassRooms </a> </li>
        <li><i class="fa fa-arrow-right"></i><a href="https://www.developpez.com" >Developpez</a> </li>
        <li><i class="fa fa-arrow-right"></i><a href="http://indexerror.net/">indexError </a> </li>
        <li><i class="fa fa-arrow-right"></i><a href="https://open.kattis.com" >Kattis</a> </li>
        <li><i class="fa fa-arrow-right"></i><a href="https://www.codecademy.com/fr" >CodeAcademy</a> </li>
        <li><i class="fa fa-arrow-right"></i><a href="https://codes-sources.commentcamarche.net" >Codes Sources <span style="color:grey;">(Comment ça marche) </span></a></li>
      
      </ul>
    </aside>
    <article class="col-mid"><h2> Compteur de visiteurs.</h2><br/>
    <?php include('cont.php'); ?>
    </script><br/><br/>
      <ul class="knob_holder">
        <li>
          <input class="knob" readonly data-angleOffset=-125 data-angleArc=250 data-fgColor="#e2534b" value="0">
          <strong>Dizaines de milliers</strong></li>
        <li>
          <input class="knob" readonly data-angleOffset=-125 data-angleArc=250 data-fgColor="#e2534b" value="0">
          <strong>Milliers</strong></li>
        <li>
          <input class="knob" readonly data-angleOffset=-125 data-angleArc=250 data-fgColor="#e2534b" value="0">
          <strong>Centaines</strong></li>
        <li>
          <?php echo '<input class="knob" readonly data-angleOffset=-125 data-angleArc=250 data-fgColor="#e2534b" value="'.$compteur.'" id="kn1">';?><strong>Unités</strong></li>
      </ul><br/><br/>
    </article>
<!-- voilà ce que les clients disent!
    <aside class="col-4">
      <h3>What Client Says <a href="#">[more]</a></h3>
      <ul class="client_testmnl_fader">
        <li>
          <blockquote>Compteur de visiteurs</blockquote>
          <h3>Lionel Messi</h3>
        </li>
        <li>
          <blockquote>2Curabitur quis nisl in leo euismod venenatis eu in diam. Etiam auctor diam pellentesque lectus vehicula mattis. Nulla ac massa at dolor condimentum </blockquote>
          <h3>Neymar Jr.</h3>
        </li>
        <li>
          <blockquote>3Curabitur quis nisl in leo euismod venenatis eu in diam. Etiam auctor diam pellentesque lectus vehicula mattis. Nulla ac massa at dolor condimentum </blockquote>
          <h3>Don Iniesta</h3>
        </li>
        <li>
          <blockquote>4Curabitur quis nisl in leo euismod venenatis eu in diam. Etiam auctor diam pellentesque lectus vehicula mattis. Nulla ac massa at dolor condimentum</blockquote>
          <h3>Xavi</h3>
        </li>
      </ul>
    </aside> -->
  </div>
</section></section>
<div class="mainFooter" >
<footer>
  <div class="container">
    <article class="footer_col_1"> <a href="http://www.monarc.dx.am/index.html" class="logo">
      <hgroup>
        <h1>M0N4RC</h1>
        <h3>  CV en ligne</h3>
      </hgroup>
      </a>
      <p>Retrouvez ici mes Réalisations, compétences et informations de contacts.</p>
      <p>Phone: <span>06 XX XX XX XX</span></p>
      <p>Email: <a href="mailto:segurm@mail.com">segurm@mail.com</a></p>
    </article>
    <!-- Raccourcis et liens
    <article class="footer_listing">
      <h1>Company</h1>
      <ul>
        <li><a href="#"><i class="fa fa-chevron-right"></i> About</a></li>
        <li><a href="#"><i class="fa fa-chevron-right"></i> FAQ</a></li>
        <li><a href="#"><i class="fa fa-chevron-right"></i> About</a></li>
        <li><a href="#"><i class="fa fa-chevron-right"></i> FAQ</a></li>
        <li><a href="#"><i class="fa fa-chevron-right"></i> About</a></li>
        <li><a href="#"><i class="fa fa-chevron-right"></i> FAQ</a></li>
      </ul>
    </article>
    <article class="footer_listing">
      <h1>Community</h1>
      <ul>
        <li><a href="#"><i class="fa fa-chevron-right"></i> Blog</a></li>
        <li><a href="#"><i class="fa fa-chevron-right"></i> Forum</a></li>
        <li><a href="#"><i class="fa fa-chevron-right"></i> Blog</a></li>
        <li><a href="#"><i class="fa fa-chevron-right"></i> Forum</a></li>
      </ul>
    </article>
    <article class="footer_col_1">
      <h1><i>form the</i> blog</h1>
      <ul>
        <li>
          <figure> <img src="images/blog_img.png" alt="" /> </figure>
          <aside> <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a> <span>13 Feb, 2014</span> </aside>
        </li>
        <li>
          <figure> <img src="images/blog_img.png" alt="" /> </figure>
          <aside> <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a> <span>13 Feb, 2014</span> </aside>
        </li>
      </ul>
    </article>-->
  </div>
</footer>
</div>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script> 
<script src="js/modernizr.custom.93219.js"></script> 
<!-- bxSlider Javascript file --> 
<script src="js/jquery.bxslider.js"></script> 
<!-- Jquery Knob Javascript file --> 
<script src="js/jquery.knob.js"></script> 
<!-- Mix it Up --> 
<script src="js/mix_it_up.js"></script> 
<script>
		$(document).ready(function(){
		  //Slider
		  $('.bxslider').bxSlider({
			  captions: true
			});
		
		  //Testimonial Slider
		  $('.client_testmnl_fader').bxSlider({
			  captions: true,
			  controls:false,
			  mode:'fade'
			});
		 
		  // Jquery Knob
		  $('.knob').knob();
		  
		  //Thumbs MIx it Up
		  $('#Grid').mixitup();
		  
				
			//MObile Nav
			$(".mob_nav").click(function(){
				$("header nav").slideToggle(500);
			});
		  
		  //Menu Click and Show
		  $('header nav ul li.dd').click(function(){
			  $(this).find($('ul.dd_content')).fadeToggle(500);
			  $(this).find($('a')).toggleClass("active");
		  });
		  
		  
		  //To hide on body click		
	      $(document).click(function(event){
			var opened_content = $("ul.dd_content");
        	var click_to_open = $("header nav ul li.dd");
			if (opened_content.has(event.target).length === 0 && click_to_open.has(event.target).length === 0) {
				opened_content.fadeOut(500);
				click_to_open.find($('a')).removeClass("active");
			}
		});
		  
		  // Search Box Click and Show
		  $('.search_icon').click(function(){
			 $(this).toggleClass("active");
			 $('.search_box').fadeToggle(500); 
		  });
		  
		  //To hide on body click
		  $(document).click(function(event){
			var search_box = $(".search_box");
        	var search_icon = $(".search_icon");
			if (search_box.has(event.target).length === 0 && search_icon.has(event.target).length === 0) {
				search_box.fadeOut(500);
				search_icon.removeClass("active");
			}
		});
		
		//Set of 4 blocks
		$("a.abs").hover(function(){
			$(this).parent().find($("section.set_of_4 article.block i")).toggleClass("hover_state");
			$(this).parent().toggleClass("bg_white");
			
		});
		
		
		});
	</script>
</body>
</html>
