<?php get_header(); ?>

<!--================= ARTICLE ======================-->
<div class="single mt-5" id="articles">
  <div class="container loreal">
    <div class="single-top col-lg-11 text-center">
      <img class="img-responsive uv" src="../img/expo.jpg" alt="Exposition au soleil" id="myImg2" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
      <p id="demo2" class="alt"></p>
      <div class=" single-grid mt-4">
        <h4 style="font-family: 'Bilbo', cursive;font-weight: bold;font-size: 30px;">L’Oréal lance le Patch UV connecté qui prendra soin de vous</h4>
        <ul class="blog-ic text-muted" id="list">
          <li class="mr-3"><span> <i class="fa fa-user mr-2" aria-hidden="true"> </i> Laura Merciere</span>  </li>
          <li class="mr-3"><span><i class="fa fa-clock-o mr-2" aria-hidden="true"> </i> 06 Juin 2017</span></li>
          <li><span><i class="fa fa-eye mr-2" aria-hidden="true"> </i> Views: 145</span></li>
        </ul>
        <p><strong>L’entreprise française mondialement reconnue pour ses cosmétiques, se lance parallèlement depuis quelques années dans les innovations technologiques. Et on peut dire qu’elle n’a pas fait les choses à moitié en lançant son patch UV connecté. Puisque vous le valez bien, objetconnecte.net est parti dénicher pour vous cette petite nouveauté.</strong></p><br>
        <p>La nouveauté a été annoncé au CES de Las Vegas, il s’agit d’un « skin patch ».</p><br>
        <p>Ce dernier s’applique sur la peau et <strong>change de couleurs lorsqu’il est en contact avec des rayons UV.</strong></p>
        <img src="../img/skin.jpg" alt="Patch connecté" id="myImg3" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)">
        <p id="demo3" class="alt"></p>
        <p class="mt-3">L’application, iOS ou Android, permet de connaitre le niveau d’exposition de la peau au soleil au fil du temps. En le prenant en photo, l’application est capable de vous dire, suivant sa couleur, <strong>si le rayonnement du soleil a endommagé votre peau, ou s’il accélère son vieillissement</strong>. Ainsi, il va vous permettre de savoir quand votre peau sera le plus exposée au risque de subir un cancer de la peau, ou d’attraper un méchant coup de soleil.</p><br>
        <p>Si ce patch sera très utile pour celles et ceux qui lézardent durant les deux mois d’été au soleil, il le sera d’autant plus pour toutes personnes s’exposant de façons courtes mais répétées, afin de savoir si la peau subit des dommages ou pas.</p><br>
        <p>Sa commercialisation se fera dans le courant de l’année 2016 et sous la marque La-Roche-Posay (L’Oréal), mais son prix n’a pas encore été fixé.</p><br>
        <p><strong>Le but premier reste de sensibiliser la population sur les risques d’une exposition directe et prolongée au soleil, et de promouvoir la protection de la peau.</strong></p>
        <iframe src="../img/uv.mp4" class="img-responsive" allowfullscreen="" width="560" height="315"></iframe>
        <p class="mt-3">Nous vous avions déjà parlé <strong>des autres moyens connectés pour connaître le niveau d’exposition de sa peau au soleil</strong>. Pour pouvoir revenir dessus, suivez ses liens !</p><br>
        <p class="text-center">Voir aussi : <a href="#">Le maillot de bain connecté </a>et<a href="#"> Le bracelet connecté June, par Netatmo</a></p><br>
        <p class="text-center">Vous avez aimé cet article : Partagez et Commentez!</p>


        <!-- Start - Social Links -->
        <ul class='interwebz aligncenter'>
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
      </div>
    </div>
  </div>
</div>

<!-- End - Social Links -->

<!-- Start - Comments -->
<section class="container">
  <div class="row">
    <div class="comment-bottom mt-5 mb-5 mr-5 text-center col-lg-4">
      <h3 class="mb-3 ml-5" style="font-family: 'Bilbo', cursive;font-weight: bold;font-size: 40px;">Commentaires</h3>
      <form>
        <input type="text" name="" value="Pseudo">
        <input type="text" name="" value="Email">
        <input type="text" name="" value="Sujet">
        <textarea name="name" rows="4" cols="80">Message</textarea>
        <input class="ml-4" type="submit" name="" value="Envoyer" onClick="Message()">
      </form>
    </div>
    <!-- End - Comments -->

    <!-- Start - Categories -->
    <div class="col-lg-7 mb-5" id="categorie">
      <div class="tab text-center">
        <button class="tablinks" onclick="openCategorie(event, 'santé')" style="font-family: 'Bilbo', cursive;font-weight: bold;font-size: 30px;">Santé</button>
        <button class="tablinks" onclick="openCategorie(event, 'bienEtre')" style="font-family: 'Bilbo', cursive;font-weight: bold;font-size: 30px;">Bien Etre</button>
        <button class="tablinks" onclick="openCategorie(event, 'beauté')" style="font-family: 'Bilbo', cursive;font-weight: bold;font-size: 30px;">Beauté</button>
      </div>

      <div id="santé" class="tabcontent text-center">
        <figure class="mx-auto">
          <a href="#"><img src="../img/sante.jpg" alt="la santé connectée" style="width: 55%;" class="mb-3" id="myImg4" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)"></a>
          <p id="demo4" class="alt"></p>
          <figcaption>Par définition, la santé connectée ou e-santé est un ensemble de systèmes technologiques visant à préserver durablement la santé.<br>À l’écoute du corps, le dispositif va enregistrer toutes ses activités afin d’en faire un compte-rendu détaillé sur le smartphone, la tablette ou l’ordinateur de son utilisateur.</figcaption>
          <button type="button" name="button" class="mt-3">Voir la rubrique Santé</button>
        </figure>
      </div>

      <div id="bienEtre" class="tabcontent text-center">
        <figure class="mx-auto">
          <a href="#"><img src="../img/bien.jpg" alt="le bien etre connecté" style="width: 55%;" class="mb-3" id="myImg5" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)"></a>
          <p id="demo5" class="alt"></p>
          <figcaption>Le bien-être connecté correspond à tous les produits tels que les balances connectées, les bracelets et montres connectés qui sont d’ores et déjà plébiscités par les français. Ce type de produits nous fournit des informations sur notre « santé » (notre poids, le nombre de pas effectué au quotidien…) et peuvent être mis dans la catégorie de produits « loisirs ».</figcaption>
          <button type="button" name="button" class="mt-3">Voir la rubrique Bien être</button>
        </figure></div>

        <div id="beauté" class="tabcontent text-center">
          <figure class="mx-auto">
            <a href="#"><img src="../img/beauté.jpg" alt="la beauté connectée" style="width: 55%;" class="mb-3" id="myImg6" onmouseover="myFunction(this, 1)" onmouseout="myFunction(this, 0)"></a>
            <p id="demo6" class="alt"></p>
            <figcaption>La beauté connectée est, incontestablement, l’avenir de notre cosmétique. Cependant, au regard de tous les objets connectées et les applications dans tous les domaines mis sur le marché, ce secteur est sans doute l’un des moins exploité. Objetconnecte.net a donc décidé de répertorié ce qui pouvait se faire actuellement dans le domaine de la beauté connectée. </figcaption>
            <button type="button" name="button" class="mt-3">Voir la rubrique Beauté</button>
          </figure></div>

        </div>
        <!-- End - Categories -->
      </div>
    </section>

<?php get_footer(); ?>
