<?php get_header(); ?> <!-- ouvrir header,php -->
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>

<!--================= ARTICLES CARDS ======================-->
<div class="ml-5 mt-5" id='seconds-counter'>

</div>

<main class="container" id="articles">
  <div class="card-deck mt-5 row">
    <div class="card ml-5">
      <a href="html/single.html"><img class="card-img-top" style="width: 95%; height: 190px;" src="img/expo.jpg" alt="Exposition au soleil" id="myImg2" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)" >
        <p id="demo2" class="alt"></p></a>
      <div class="card-block">
        <h4 class="card-title">L’Oréal lance le Patch UV connecté qui prendra soin de vous</h4>
        <p class="card-text">L’entreprise française mondialement reconnue pour ses cosmétiques, se lance dans...</p>
        <small class="text-muted">06/06/17, Laura Merciere.</small>
        <a href="html/single.html" class="btn btn-success pull-right">En savoir plus ></a>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" style="width: 95%; height: 190px;" src="img/mapo.jpg" alt="Masque connecté" id="myImg3" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
      <p id="demo3" class="alt"></p>
      <div class="card-block">
        <h4 class="card-title">Mapo le premier masque de beauté connecté</h4>
        <p class="card-text">Et si votre peau n’avait plus aucun secret pour vous? C’est ce que propose Mapo</p>
        <small class="text-muted">05/04/17, Nathalie Dessable</small>
        <a href="#" class="btn btn-success pull-right mt-4">En savoir plus ></a>
      </div>
    </div>
    <div class="card mr-5">
      <img class="card-img-top" style="width: 95%; height: 190px;" src="img/bracelet.jpg" alt="Bracelet connecté" id="myImg4" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
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
        <img class="card-img-top" style="width: 95%;" src="img/mirror.jpg" alt="Miroir connecté" id="myImg5" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
        <p id="demo5" class="alt"></p>
        <div class="card-block">
          <p class="card-text">Les miroirs connectés commencent à arriver sur le marché. Peu nombreux à l’heure actuelle, ces nouveaux produits vont faire le bonheur de ceux et celles qui aiment passer du temps dans leur salle de bain. Le HiMirror, lui, s’adresse aux femmes. Il saura analyser leur peau et leur prodiguer des conseils de beauté.</p>
          <a href="#" class="btn btn-success pull-left mt-3">En savoir plus ></a>
        </div>

        <div class="card mt-5 blog " >
          <h4>Naked Labs : le coach connecté auquel vous ne pourrez pas mentir !</h4>
          <p>by <span>Jeanne.D</span> | 02 Juin 2017 |</p>
          <img class="card-img-top" style="width: 95%;" src="img/naked.jpg" alt="Coach minceur" id="myImg6" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
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
          <a href="#"><img class="pull-left" src="img/geto.png" alt="Scanner peau" id="myImg7" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)" >
            <p id="demo7" class="alt"></p></a>
            <h6>Oku</h6>
            <p class="card-text">[CES 2015] Oku, scannez votre peau pour un monde plus beau</p>
            <p><cite>28 Mai 2017</cite></p>
          </div>

          <div class="card-block cote" style="margin-bottom:-364px">
            <a href="#"><img class="pull-left" src="img/map.jpg" alt="Masque connecté" id="myImg8" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
              <p id="demo8" class="alt"></p></a>
              <h6>Mapo</h6>
              <p class="card-text"> Mapo connecte votre beauté</p>
              <p><cite>15 Avril 2017</cite></p>
            </div>

            <div class="card-block cote" style="margin-bottom:-364px">
              <a href="#"><img class="pull-left" src="img/feel.jpg" alt="Cosmétique connectée" id="myImg9" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
                <p id="demo9" class="alt"></p></a>
                <h6>FeeliGreen</h6>
                <p class="card-text"> La cosmétique connectée par FeeliGreen</p>
                <p><cite>01 Mai 2017</cite></p>
              </div>

              <div class="card-block cote">
                <a href="#"><img class="pull-left" src="img/secret.png" alt="Soin du visage" id="myImg10" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
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

                <img src="img/romy.jpg" alt="Test de figure" id="myImg11" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
                <p id="demo11" class="alt"></p>
                <p>
                  <span>ROMY Paris</span> <br>
                  Test de Figure, la cosmétique connectée <br>
                </p>

                <img src="img/hair.jpg" alt="Hair coach" id="myImg12" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
                <p id="demo12" class="alt"></p>
                <p>
                  <span>CES 2017</span> <br>
                  L’Oréal et Withings de mèche pour lancer le Hair Coach Powered <br>
                </p>

                <img src="img/bloom.jpg" alt="Vernis à ongles connecté" id="myImg13" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
                <p id="demo13" class="alt"></p>
                <p>
                  <span>Undercover Colors</span> <br>
                  Connectées jusqu’au bout des ongles !<br>
                </p>

                <img src="img/alergy.jpg" alt="Pendentif connecté" id="myImg14" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
                <p id="demo14" class="alt"></p>
                <p>
                  <span>Allergy Amulet</span> <br>
                  le bijou pour lutter contre les allergies alimentaires !<br>
                </p>

                <img src="img/brush.jpg" alt="Brosse à dent connecté" id="myImg15" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
                <p id="demo15" class="alt"></p>
                <p>
                  <span>Philips</span> <br>
                  On vous dit tout sur la brosse à dents connectée<br>
                </p>

                <img src="img/chaussure.jpg" alt="Semelles connectées" id="myImg16" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
                <p id="demo16" class="alt"></p>
                <p>
                  <span>Semelles connectées</span> <br>
                  Les meilleures du moment<br>
                </p>

                <img src="img/medecine.jpeg" alt="Innovations santé" id="myImg17" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
                <p id="demo17" class="alt"></p>
                <p>
                  <span>Santé connectée</span> <br>
                  Le top des innovations santé à suivre en 2017<br>
                </p>

                <img src="img/soni.jpeg" alt="Application dentiste" id="myImg18" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
                <p id="demo18" class="alt"></p>
                <p>
                  <span>Sonicare</span> <br>
                  Elle vous servira de dentiste<br>
                </p>

                <img src="img/tech.jpg" alt="Tatouage connecté" id="myImg19" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
                <p id="demo19" class="alt"></p>
                <p>
                  <span>Tech Tats</span> <br>
                  Chaotic Moon invente le tatouage connecté du futur<br>
                </p>

                <img src="img/peau.jpg" alt="Peau artificielle" id="myImg20" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
                <p id="demo20" class="alt"></p>
                <p>
                  <span>Problèmes de peau ?</span> <br>
                  Voici la première peau artificielle !<br>
                </p>

                <img src="img/rd.png" alt="Pese personne" id="myImg21" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
                <p id="demo21" class="alt"></p>
                <p>
                  <span>Tanita</span> <br>
                  La balance RD-953 vous dit tout sur votre corps<br>
                </p>

                <img src="img/salle.jpg" alt="Salle de bain connectée" id="myImg22" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
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
                <img src="img/portrait.jpg" class="img-responsive pull-left" alt="portrait" id="myImg23" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
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

<?php get_footer(); ?>
