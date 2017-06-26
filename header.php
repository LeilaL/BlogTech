<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="no-js" lang="fr">
<head profile="http://gmpg.org/xfn/11">
   <title><?php bloginfo('name') ?><?php if ( is_404() ) : ?> &raquo; <?php _e('Not Found') ?><?php elseif ( is_home() ) : ?> &raquo; <?php bloginfo('description') ?><?php else : ?><?php wp_title() ?><?php endif ?></title>
      <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
      <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
      <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>/css/style.css" type="text/css" media="screen" />
      <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');/css/ ?>/css/style.css" type="text/css" media="screen" />

      <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>/css/bootstrap.css" type="text/css" media="screen" />
      <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>/css/bootstrap.min.css" type="text/css" media="screen" />
      <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
      <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
      <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
      <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /><?php wp_head(); ?>   <?php wp_get_archives('type=monthly&format=link'); ?> <?php //comments_popup_script(); <?php wp_head(); ?>

      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Beauty &amp; Tech</title>

      <link href="https://fonts.googleapis.com/css?family=Bilbo" rel="stylesheet">
      <link rel="icon" href="img/favicon.jpg">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/normalize.css">
      <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/bootstrap.css">

      <script src="js/vendor/modernizr-2.8.3.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="js/vendor/modernizr-2.8.3.min.js"></script>
      <script src="js/bootstrap.js"></script>
</head>
<body>

  <!--[if lt IE 8]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->


  <!--================= HEADER ======================-->

  <div class="header-top" id="headTop">
    <div class="container">
      <div class="head-main">
        <a href="index.html"><img src="img/final.png" alt="logo beauty and the tech" id="myImg1" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)" />
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
