<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
  <title><?php bloginfo('name') ?><?php if ( is_404() ) : ?> &raquo; <?php _e('Not Found') ?><?php elseif ( is_home() ) : ?> &raquo; <?php bloginfo('description') ?><?php else : ?><?php wp_title() ?><?php endif ?></title>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /><?php wp_head(); ?>   <?php wp_get_archives('type=monthly&format=link'); ?> <?php //comments_popup_script(); <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css?family=Bilbo" rel="stylesheet">
    <link rel="icon" href="<?php echo esc_url (get_template_directory_uri() );?>/img/favicon.jpg">

   </head>
   <body>

     <!--================= HEADER ======================-->

     <div class="header-top" id="headTop">
       <div class="container">
         <div class="head-main">
           <a href="index.html"><img src="<?php echo esc_url (get_template_directory_uri() );?>/img/final.png" alt="logo beauty and the tech" id="myImg1" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)" />
             <p id="demo1" class="alt"></p></a>
         </div>
       </div>
     </div>

     <header>
       <nav class="navbar navbar-toggleable-md fixed navbar-light">
         <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav mr-auto" id="one">
             <li class="nav-item active" >
               <a class="nav-link " href="home.php" style="font-family: 'Bilbo', cursive;font-weight: bold;font-size: 30px;">Accueil <span class="sr-only">(current)</span></a>
             </li>

             <li class="nav-item active">
               <a class="nav-link" href="category.php" style="font-family: 'Bilbo', cursive;font-weight: bold;font-size: 30px;">Catégories <span class="sr-only">(current)</span></a>
             </li>

             <li class="nav-item active">
               <a class="nav-link" href="#about" style="font-family: 'Bilbo', cursive;font-weight: bold;font-size: 30px;">About Me <span class="sr-only">(current)</span></a>
             </li>

           </ul>

           <ul class='interwebz aligncenter border-top-0'>
             <li class='icon-twitter'  >
               <a href='https://twitter.com/?lang=fr' target='_blank'>
                 <i class="fa fa-twitter" aria-hidden="true"></i>
               </a>
             </li>
             <li class='icon-facebook'>
               <a href='https://fr-fr.facebook.com/' target='_blank'>
                 <i class="fa fa-facebook" aria-hidden="true"></i>
               </a>
             </li>
             <li class='icon-youtube'>
               <a href='https://www.youtube.com/?gl=FR&hl=fr' target='_blank'>
                 <i class="fa fa-youtube" aria-hidden="true"></i>
               </a>
             </li>
             <li class='icon-instagram'>
               <a href='https://www.instagram.com/?hl=f' target='_blank'>
                 <i class="fa fa-instagram" aria-hidden="true"></i>
               </a>
             </li>
             <li class='icon-pinterest'>
               <a href='https://fr.pinterest.com/' target='_blank'>
                 <i class="fa fa-pinterest-p" aria-hidden="true"></i>
               </a>
             </li>
           </ul>

           <form class="form-inline my-2 my-lg-0 mr-5 search">
             <input class="form-control mr-sm-2" type="text" placeholder="Rechercher">
             <input type="submit" value="">
           </form>
         </div>
       </nav>

       <div class="container-fluid welcome" id="welcome">
         <h1 class="ml-5">WELCOME</h1>
         <div class="arrow-down ml-5">
           <a href="#articles"><i class="fa fa-angle-down fa-2x"></i></a>
         </div>
       </header>

       <!--================= HEADER FIN ======================-->


       <!--================= ARTICLES CARDS ======================-->
       <div class="ml-5 mt-5" id='seconds-counter'>

       </div>

       <main class="container" id="articles">
         <div class="card-deck mt-5 row">
           <div class="card ml-5">
             <a href="category.php"><img class="card-img-top" style="width: 95%; height: 190px;" src="<?php echo esc_url (get_template_directory_uri() );?>/img/expo.jpg" alt="Exposition au soleil" id="myImg2" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)" >
               <p id="demo2" class="alt"></p></a>
             <div class="card-block">
               <h4 class="card-title">L’Oréal lance le Patch UV connecté qui prendra soin de vous</h4>
               <p class="card-text">L’entreprise française mondialement reconnue pour ses cosmétiques, se lance dans...</p>
               <small class="text-muted">06/06/17, Laura Merciere.</small>
               <a href="category.php" class="btn btn-success pull-right">En savoir plus ></a>
             </div>
           </div>
           <div class="card">
             <img class="card-img-top" style="width: 95%; height: 190px;" src="<?php echo esc_url (get_template_directory_uri() );?>/img/mapo.jpg" alt="Masque connecté" id="myImg3" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
             <p id="demo3" class="alt"></p>
             <div class="card-block">
               <h4 class="card-title">Mapo le premier masque de beauté connecté</h4>
               <p class="card-text">Et si votre peau n’avait plus aucun secret pour vous? C’est ce que propose Mapo</p>
               <small class="text-muted">05/04/17, Nathalie Dessable</small>
               <a href="#" class="btn btn-success pull-right mt-4">En savoir plus ></a>
             </div>
           </div>
           <div class="card mr-5">
             <img class="card-img-top" style="width: 95%; height: 190px;" src="<?php echo esc_url (get_template_directory_uri() );?>/img/bracelet.jpg" alt="Bracelet connecté" id="myImg4" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
             <p id="demo4" class="alt"></p>
             <div class="card-block">
               <h4 class="card-title">June ou l’histoire d’un bracelet connecté de santé publique</h4>
               <p class="card-text">L’été, il y a le ciel, le soleil et la mer c’est connu ! Mais il y a aussi depuis...</p>
               <small class="text-muted">MaJ il y a 3h par Sandrine Demuyter.</small>
               <a href="#" class="btn btn-success pull-right mt-3">En savoir plus ></a>
             </div>
           </div>
         </div>

         <!--================= BLOG ======================-->

         <section class="container">
           <div class="row">
             <div class="card mt-5 blog col-lg-7">
               <h4>HiMirror, le premier miroir connecté au service de la beauté des femmes</h4>
               <p>by <span>Charlie.C</span> | 16 Juin 2017 |</p>
               <img class="card-img-top" style="width: 95%;" src="<?php echo esc_url (get_template_directory_uri() );?>/img/mirror.jpg" alt="Miroir connecté" id="myImg5" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
               <p id="demo5" class="alt"></p>
               <div class="card-block">
                 <p class="card-text">Les miroirs connectés commencent à arriver sur le marché. Peu nombreux à l’heure actuelle, ces nouveaux produits vont faire le bonheur de ceux et celles qui aiment passer du temps dans leur salle de bain. Le HiMirror, lui, s’adresse aux femmes. Il saura analyser leur peau et leur prodiguer des conseils de beauté.</p>
                 <a href="#" class="btn btn-success pull-left mt-3">En savoir plus ></a>
               </div>

               <div class="card mt-5 blog " >
                 <h4>Naked Labs : le coach connecté auquel vous ne pourrez pas mentir !</h4>
                 <p>by <span>Jeanne.D</span> | 02 Juin 2017 |</p>
                 <img class="card-img-top" style="width: 95%;" src="<?php echo esc_url (get_template_directory_uri() );?>/img/naked.jpg" alt="Coach minceur" id="myImg6" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
                 <p id="demo6" class="alt"></p>
                 <div class="card-block">
                   <p class="card-text">Naked Labs. Que l’on souffre de troubles alimentaires, de la personnalité, ou que l’on soit tout simplement très complexé par son physique, nous nous faisons souvent avoir par nos yeux. Il pensent voir de la graisse ou inversement, dans le miroir… Alors qui croire ? Maintenant, Naked Labs, le premier coach minceur qui ne vous fera pas de cadeau et qui vous montrera tel que vous êtes !</p>
                   <a href="#" class="btn btn-success pull-left mt-3">En savoir plus ></a>
                 </div>
               </div>

             </div>

             <!--================= ASIDE ======================-->

             <div class="card text-center navigation mt-5 ml-5 col-lg-4" id="cote">
               <div class="card-header">
                 <ul class="nav nav-pills card-header-pills">
                   <li class="nav-item">
                     <a class="nav-link active" id="aside" href="#">Populaire</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" href="#">Récent</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" href="#">Commentaires</a>
                   </li>
                 </ul>
               </div>

               <p id="time">
                 <script language="JavaScript">
                 var today=new Date();
                 var jour=today.getDate();
                 var mois=today.getMonth()+1;
                 var an=today.getFullYear();
                 var heure = today.getHours();
                 var minutes = today.getMinutes();
                 document.write("Nous sommes le ",jour,"/",mois,"/",an," ","il est"," ",heure,":",minutes);
                 </script>
               </p>

               <div class="card-block cote" style="margin-bottom:-364px">
                 <a href="#"><img class="pull-left" src="<?php echo esc_url (get_template_directory_uri() );?>/img/geto.png" alt="Scanner peau" id="myImg7" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)" >
                   <p id="demo7" class="alt"></p></a>
                   <h6>Oku</h6>
                   <p class="card-text">[CES 2015] Oku, scannez votre peau pour un monde plus beau</p>
                   <p><cite>28 Mai 2017</cite></p>
                 </div>

                 <div class="card-block cote" style="margin-bottom:-364px">
                   <a href="#"><img class="pull-left" src="<?php echo esc_url (get_template_directory_uri() );?>/img/map.jpg" alt="Masque connecté" id="myImg8" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
                     <p id="demo8" class="alt"></p></a>
                     <h6>Mapo</h6>
                     <p class="card-text"> Mapo connecte votre beauté</p>
                     <p><cite>15 Avril 2017</cite></p>
                   </div>

                   <div class="card-block cote" style="margin-bottom:-364px">
                     <a href="#"><img class="pull-left" src="<?php echo esc_url (get_template_directory_uri() );?>/img/feel.jpg" alt="Cosmétique connectée" id="myImg9" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
                       <p id="demo9" class="alt"></p></a>
                       <h6>FeeliGreen</h6>
                       <p class="card-text"> La cosmétique connectée par FeeliGreen</p>
                       <p><cite>01 Mai 2017</cite></p>
                     </div>

                     <div class="card-block cote">
                       <a href="#"><img class="pull-left" src="<?php echo esc_url (get_template_directory_uri() );?>/img/secret.png" alt="Soin du visage" id="myImg10" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
                         <p id="demo10" class="alt"></p></a>
                         <h6>Secret 810</h6>
                         <p class="card-text"> Secret 810 : le soin du visage qui va vous faire rajeunir</p>
                         <p><cite>18 Avril 2017</cite></p>
                       </div>

                       <div class="newsletter ">
                         <h3>Subscribe To Our Newsletter</h3>
                         <form>
                           <div class="input-group margin-bottom-sm">
                             <span class="input-group-addon" style="height:40px"><i class="fa fa-envelope-o fa-fw"></i></span>
                             <input class="form-control" type="text" placeholder="Email address">
                           </div>
                           <input type="submit" value="Send" onClick="Message()">
                         </form>
                       </div>
                     </div>

                     <!--================= ASIDE FIN - CONTINU BLOG ======================-->

                   </div>
                 </section>

                 <!--=============== CAROUSEL ==================-->
                 <section class="autres mt-5">

                   <div class="carousel">
                     <div class="carouselslide">

                       <img src="<?php echo esc_url (get_template_directory_uri() );?>/img/romy.jpg" alt="Test de figure" id="myImg11" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
                       <p id="demo11" class="alt"></p>
                       <p>
                         <span>ROMY Paris</span> <br>
                         Test de Figure, la cosmétique connectée <br>
                       </p>

                       <img src="<?php echo esc_url (get_template_directory_uri() );?>/img/hair.jpg" alt="Hair coach" id="myImg12" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
                       <p id="demo12" class="alt"></p>
                       <p>
                         <span>CES 2017</span> <br>
                         L’Oréal et Withings de mèche pour lancer le Hair Coach Powered <br>
                       </p>

                       <img src="<?php echo esc_url (get_template_directory_uri() );?>/img/bloom.jpg" alt="Vernis à ongles connecté" id="myImg13" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
                       <p id="demo13" class="alt"></p>
                       <p>
                         <span>Undercover Colors</span> <br>
                         Connectées jusqu’au bout des ongles !<br>
                       </p>

                       <img src="<?php echo esc_url (get_template_directory_uri() );?>/img/alergy.jpg" alt="Pendentif connecté" id="myImg14" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
                       <p id="demo14" class="alt"></p>
                       <p>
                         <span>Allergy Amulet</span> <br>
                         le bijou pour lutter contre les allergies alimentaires !<br>
                       </p>

                       <img src="<?php echo esc_url (get_template_directory_uri() );?>/img/brush.jpg" alt="Brosse à dent connecté" id="myImg15" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
                       <p id="demo15" class="alt"></p>
                       <p>
                         <span>Philips</span> <br>
                         On vous dit tout sur la brosse à dents connectée<br>
                       </p>

                       <img src="<?php echo esc_url (get_template_directory_uri() );?>/img/chaussure.jpg" alt="Semelles connectées" id="myImg16" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
                       <p id="demo16" class="alt"></p>
                       <p>
                         <span>Semelles connectées</span> <br>
                         Les meilleures du moment<br>
                       </p>

                       <img src="<?php echo esc_url (get_template_directory_uri() );?>/img/medecine.jpeg" alt="Innovations santé" id="myImg17" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
                       <p id="demo17" class="alt"></p>
                       <p>
                         <span>Santé connectée</span> <br>
                         Le top des innovations santé à suivre en 2017<br>
                       </p>

                       <img src="<?php echo esc_url (get_template_directory_uri() );?>/img/soni.jpeg" alt="Application dentiste" id="myImg18" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
                       <p id="demo18" class="alt"></p>
                       <p>
                         <span>Sonicare</span> <br>
                         Elle vous servira de dentiste<br>
                       </p>

                       <img src="<?php echo esc_url (get_template_directory_uri() );?>/img/tech.jpg" alt="Tatouage connecté" id="myImg19" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
                       <p id="demo19" class="alt"></p>
                       <p>
                         <span>Tech Tats</span> <br>
                         Chaotic Moon invente le tatouage connecté du futur<br>
                       </p>

                       <img src="<?php echo esc_url (get_template_directory_uri() );?>/img/peau.jpg" alt="Peau artificielle" id="myImg20" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
                       <p id="demo20" class="alt"></p>
                       <p>
                         <span>Problèmes de peau ?</span> <br>
                         Voici la première peau artificielle !<br>
                       </p>

                       <img src="<?php echo esc_url (get_template_directory_uri() );?>/img/rd.png" alt="Pese personne" id="myImg21" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
                       <p id="demo21" class="alt"></p>
                       <p>
                         <span>Tanita</span> <br>
                         La balance RD-953 vous dit tout sur votre corps<br>
                       </p>

                       <img src="<?php echo esc_url (get_template_directory_uri() );?>/img/salle.jpg" alt="Salle de bain connectée" id="myImg22" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
                       <p id="demo22" class="alt"></p>
                       <p>
                         <span>Google</span> <br>
                         veut créer une salle de bain connectée révolutionnaire !<br>
                       </p>

                     </div>
                   </div>

                 </section>

                 <!--=============== ABOUT ==================-->

                 <div id="about" class="container mx-auto mt-5 mb-5">
                   <div class="row">
                     <div class="col-sm-12 about">
                       <h1 class="mb-5 text-center" style="font-family: 'Bilbo', cursive;font-weight: bold;font-size: 50px;">About Me</h1>
                       <img src="<?php echo esc_url (get_template_directory_uri() );?>/img/portrait.jpg" class="img-responsive pull-left" alt="portrait" id="myImg23" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
                       <p id="demo23" class="alt"></p>
                       <h2>Hi,</h2>
                       <div class="col-lg-10 pull-right">
                         <p >My name is Leila, I am an aspiring web developer. I love developing clean and elegant dynamic websites and web applications. I've learned languages such as HTML, CSS, JavaScript and continually learn much more. </p>
                         <p>I have worked with popular frameworks such as Bootstrap and libraries such as jQuery. Check out my portfolio and if you're interested, send me an email. </p>
                         <p>Enjoy your visit !</p>
                       </div>
                     </div>
                   </div>
                 </div>



               </main>


               <!--============== FOOTER =======================-->

               <footer class="text-center">
                 <div class="footer-below">
                   <div class="container">
                     <div class="row">
                       <div class="col-lg-12">
                         <p>  © 2017 Beauty &amp; Tech. All Rights Reserved | Coded by LEILA </p>
                       </div>
                     </div>
                   </div>
                 </div>
               </footer>


               <script src="<?php echo get_bloginfo('template_directory'); ?>/js/plugins.js"></script>
               <script src="<?php echo get_bloginfo('template_directory'); ?>/js/main.js"></script>
               <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery-3.2.1.js"></script>
               <script src="<?php echo get_bloginfo('template_directory'); ?>/js/tether.min.js"></script>
               <script src="<?php echo get_bloginfo('template_directory'); ?>/js/bootstrap.js"></script>

               <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
             </body>
             </html>
