<!DOCTYPE html>
<html lang="fr" xmlns:og="http://ogp.me/ns#">
<head>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="description" content="Léo Essomba: étudiant à Bordeaux. Consultez mon CV, découvrez mes réalisations et contactez moi." />

<!-- Title -->
<title>Léo Essomba | CV Web</title>

<!-- Balises Open Graph -->
<meta property="og:title" content="Léo Essomba | CV Web" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://www.leoessomba.fr" />
<meta property="og:description" content="Développeur web et création de sites web" />

<!-- Google Web Fonts -->
<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,500,300,100' rel='stylesheet' type='text/css'>

<!-- CSS Styles -->
<link rel="stylesheet" href="assets/css/styles.css" />
<link rel="stylesheet" href="assets/css/style.css" />

<!-- CSS Template -->
<link rel="stylesheet" href="assets/css/theme.min.css" />
<link rel="stylesheet" href="assets/css/color/orange-green.css" id="color" />

</head>

<body class="header-vertical">

<!-- Loader -->
 <div id="page-loader" class="bg-white"></div> 
<!-- Loader / End -->

<!-- Header -->
<header id="header" class="bg-white hidden-sm hidden-xs">

    <!-- Logo -->
    <div class="logo bg-primary">
        <h1 class="name">Leo <strong>Essomba</strong></h1>
        <p class="caption text-secondary">Développeur web</p><br>
    </div>

    <!-- Navigation -->
    <nav id="main-menu">
        <ul class="nav nav-vertical">
            <li><a href="#" onclick="goTo('start')"><span>Home</span></a></li>
            <li><a href="#" title="Mon CV" onclick="goTo('resume')"><span>CV</span></a></li>
            <li><a href="#" title="Mes réalisations" onclick="goTo('portfolio')"><span>Portfolio</span></a></li>
            <li><a href="#" title="Me contacter" onclick="goTo('contact')"><span>Contact</span></a></li>
            <li><a href="connexion.php" title="Administrateur"><span>Connexion</span></a></li>
        </ul>
    </nav>

</header>
<!-- Header / End -->

<!-- Content -->
<div id="content" class="bg-white">

    <!-- Section - Home -->
    <section id="start" class="section fullheight bg-secondary dark padding-v-60">

        <!-- BG Image -->
        <div class="bg-image animated infinite zooming"><img src="assets/img/photos/bg-min.jpg" alt="Fond d'écran"></div>

        <!-- Middle -->
        <div class="container container-wide v-bottom padding-v-80">
            <h2 class="text-lg margin-b-0" style="font-size:5rem"><strong>Leo Essomba</strong></h2>
            <h3 class="text-tertiary margin-b-40"><strong>Développeur web</strong></h3>
            <span data-target="local-scroll"><a href="#" onclick="goTo('resume')" class="btn btn-lg btn-primary animated" data-animation="bounceIn" title="Voir mon CV"><span>Voir mon CV</span><img src="assets/img/bottom.png" class="bottom"/></a></span>       
            <!-- script dynamique -->
            <div id="myself">
                <pre id="typewriter">
                    <span class="var-highlight">var</span> bonjour = {
                        name: <span class="string-highlight">'Essomba'</span>,
                        first_name: <span class="string-highlight">'Leo'</span>,
                        location: <span class="string-highlight">'Bordeaux'</span>,
                        available: <span class="string-highlight">'true'</span>,
                        properties:[<span class="string-highlight">'Javascript'</span>,
                                    <span class="string-highlight">'HTML'</span>,
                                    <span class="string-highlight">'CSS'</span>,
                                    <span class="string-highlight">'PHP'</span>];
                    }; </pre>
            </div>
        </div>
        
    </section>
    <!-- Section - Home / End -->

    <!-- Section - Resume -->
    <section id="resume" class="section padding-v-60">

        <!-- Content -->
        <div class="container container-wide">

            <h3 class="margin-b-50">Mon CV</h3>
            
            <div class="row padding-lg">
                <div class="col-md-4 col-sm-6 col-xs-12">

                    <!-- Resume Box / About -->
                    <div class="resume-box">
                        <span><img class="size" src="assets/img/message.png"></span>
                        <h4><strong>A propos de</strong> Moi</h4>
                        <p class="lead">19 ans, permis B, vivant à Bordeaux.</p>   
                        <p>
                           <?php
                            $bdd = new PDO('mysql:host=leoessomnkroot.mysql.db;dbname=leoessomnkroot;charset=utf8', 'leoessomnkroot', 'Ilajat79');
                            $reponse = $bdd->query('SELECT * FROM moncv');
                            while ($donnees = $reponse->fetch()){
                                     echo $donnees['propos'];}
                            ?>
                        </p>
                    </div>

                    <!-- Resume Box / Skills -->
                    <div class="resume-box">
                        <img class="size" src="assets/img/trophies.png">
                        <h4><strong>Compétences</strong> techniques</h4>
                        <!-- Skill -->
                        <div class="skill">
                            <div class="progress progress-animated">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                    <span></span>
                                </div>
                            </div>
                            <strong>HTML / CSS / Materialize / Bootstrap</strong>
                        </div>
                        <!-- Skill -->
                        <div class="skill">
                            <div class="progress progress-animated">
                                <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                    <span></span>
                                </div>
                            </div>
                            <strong>JavaScript / JQuery</strong>
                        </div>
                        <!-- Skill -->
                        <div class="skill">
                            <div class="progress progress-animated">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                    <span></span>
                                </div>
                            </div>
                            <strong>PHP / SQL</strong>
                        </div>
                        <!-- Skill -->
                        <div class="skill">
                            <div class="progress progress-animated">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                    <span></span>
                                </div>
                            </div>
                            <strong>Python</strong>
                        </div>
                        <!-- Skill -->
                        <div class="skill">
                            <div class="progress progress-animated">
                                <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                    <span></span>
                                </div>
                            </div>
                            <strong>Langage C </strong>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">

                    <!-- Resume Box / Specilities -->
                    <div class="resume-box">
                        <img class="size" src="assets/img/mouse.png">
                        <h4>Mes <strong>Capacités</strong></h4>
                        <!-- Speciality -->
                        <div class="speciality">
                            <img class="sizesmall" src="assets/img/computer.png">
                            <div class="speciality-content">
                                <h5 class="margin-b-0">Développement front-end</h5>
                                <p class="speciaity-description">Sites web modernes.</p>
                            </div>
                        </div>
                        <!-- Speciality -->
                        <div class="speciality">
                            <img class="sizesmall" src="assets/img/files.png">
                            <div class="speciality-content">
                                <h5 class="margin-b-0">Développement back-end</h5>
                                <p class="speciaity-description">Interfaces CRUD (Create, Read, Update, Delete).</p>
                            </div>
                        </div>
                        <!-- Speciality -->
                        <div class="speciality">
                            <img class="sizesmall" src="assets/img/phone.png">
                            <div class="speciality-content">
                                <h5 class="margin-b-0">Responsive design</h5>
                                <p class="speciaity-description">Sites web mobile.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Resume Box / Languages -->
                    <div class="resume-box">
                        <img class="size" src="assets/img/trophies.png">
                        <h4><strong>Langues</strong> (écrit &amp; parlé)</h4>
                        <!-- Skill -->
                            <div class="chart" data-bar-color="#85B448" data-track-color="#E5E5E5" data-size="120" data-line-width="4" data-value="100"><span class="percent"></span>
                            Français</div><br><hr>
                        <!-- Skill -->
                            <div class="chart" data-bar-color="#D86A39" data-track-color="#E5E5E5" data-size="120" data-line-width="4" data-value="45"><span class="percent"></span>
                            Anglais</div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">

                   <!-- Resume Box / Education and Jobs -->
                    <div class="resume-box">
                        <img class="size" src="assets/img/bag.png">
                        <h4><strong>Formation</strong> &amp; expériences professionnelles</h4>
                        <div class="timeline">
                            <!-- Single event -->
                            <div class="timeline-event te-primary">
                                <span class="event-date"><?php
                            $bdd = new PDO('mysql:host=leoessomnkroot.mysql.db;dbname=leoessomnkroot;charset=utf8', 'leoessomnkroot', 'Ilajat79');
                            $reponse = $bdd->query('SELECT date FROM formation');
                            while ($donnees = $reponse->fetch()){
                                     echo $donnees['date'];}

                            ?></span>
                                <span class="event-name text-green">Formation</span> <br>                
                                <span><?php
                            $bdd = new PDO('mysql:host=leoessomnkroot.mysql.db;dbname=leoessomnkroot;charset=utf8', 'leoessomnkroot', 'Ilajat79');
                            $reponse = $bdd->query('SELECT parcours FROM formation');
                            while ($donnees = $reponse->fetch()){
                                     echo $donnees['parcours'];}

                            ?></span>
                               
                            </div>
                            <!-- Single event -->
                            <div class="timeline-event te-primary">
                                <span class="event-date">2019 à 2019</span>
                                <span class="event-name text-orange">Lorem ipsum.</span>
                                <span class="event-description"><a href="http://www.flightwatching.com" target="_blank">Lorem</a>, Ipsum</span>
                                <span>Lorem ipsum dolor sit amet. &amp; Lorem ipsum dolor sit amet..<br>Lorem ipsum dolor sit amet. <a href="http://www.cite-espace.com" target="_blank">Lorem ipsum dolor sit amet.</a> Lorem ipsum dolor sit amet. <a href="https://twitter.com/Thom_astro" target="_blank">Lorem</a> Ipsum</span>
                            </div>
                            <!-- Single event -->
                            <div class="timeline-event te-primary">
                                <span class="event-date">2019 à 2019</span>
                                <span class="event-name text-green">Lorem ipsum dolor sit amet.</span>
                                <span class="event-description"><a href="http://www.apformation.com" target="_blank">Lorem</a>, Ipsum</span>
                                <span>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet..<br>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.</span>
                            </div>
                            <!-- Single event -->
                            <div class="timeline-event te-primary">
                                <span class="event-date">2019 à 2019</span>
                                <span class="event-name text-orange">Lorem ipsum dolor sit amet. &amp; Lorem ipsum dolor sit amet.</span>
                                <span class="event-description">Lorem ipsum dolor sit amet. &amp; Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.</span>
                                <span>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum. &amp; Lorem ipsum dolor sit amet.</span>
                            </div>

                            <!-- Single event -->
                            <div class="timeline-event te-primary">
                                    <span class="event-date">2019 à 2019</span>
                                    <span class="event-name text-orange">Lorem ipsum dolor sit amet. &amp; Lorem ipsum dolor sit amet.</span>
                                    <span class="event-description">Lorem ipsum dolor sit amet. &amp; Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.</span>
                                    <span>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum. &amp; Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.</span>
                                </div>
                            
                        </div>
                    </div>                   
                </div> 
            </div>
                     
                <div class="col-md-8 col-sm-6 col-xs-12">
       <!-- Resume Box / Hobbies -->
                    <div class="resume-box-hobbies">
                        <img class="sizesmall" src="assets/img/hobbies.png">
                        <h4><strong>Sports</strong> &amp; Loisirs</h4>
                            <ul class="list-inline">
                            <li>
                                <div class="icon-box text-center">
                                    <img class="sizebig" src="assets/img/tennis.png">
                                    <strong><span class="title">Tennis</span></strong>
                                    <br><span>15/2</span>
                                </div> 
                            </li> 
                            <li>
                                <div class="icon-box text-center">
                                    <img class="sizebig" src="assets/img/basket.png">
                                    <strong><span class="title">BasketBall</span></strong>
                                    <br><span>Street</span>
                                </div> 
                            </li> 
                            <li>
                                <div class="icon-box text-center">
                                    <img class="sizebig" src="assets/img/pingpong.png">
                                    <strong><span class="title">Ping Pong</span></strong>
                                    <br><span>Loisir</span>
                                </div> 
                            </li> 
                            <li>
                                <div class="icon-box text-center">
                                    <img class="sizebig" src="assets/img/games.png">
                                    <strong><span class="title">Médias</span></strong>
                                    <br><span>Jeux vidéos</span>
                                </div> 
                            </li> 
                        </ul>
                    </div>
                </div>
            
                    
                </div>
                
        
    </section>
    <!-- Section - Resume / End -->
    
    <!-- Section - Portfolio -->
    <section id="portfolio" class="section bg-grey padding-v-60">

        <!-- Content -->
        <div class="container container-wide">

            <h3 class="margin-b-50">Portfolio</h3>

            <!-- Filters -->
            <nav class="text-center">
                <ul class="nav nav-filter nav-pills margin-b-40" data-filter-grid="#portfolio-list">
                    <li class="active"><a href="#" data-filter="*" title="Toutes mes réalistaions">Tous</a></li>
                    <li><a href="#" data-filter=".webdesign" title="Sites web">Site web</a></li>
                    <li><a href="#" data-filter=".development" title="Blogs">Blog</a></li>
                    <li><a href="#" data-filter=".graphic" title="Divers">Divers</a></li>
                </ul>
            </nav>
            
            <div id="portfolio-list" class="row masonry">
                <!-- Masonry Sizer -->
                <div class="masonry-sizer col-lg-3 col-sm-6 col-xs-12"></div>    

                <!-- Masonry Element -->
                <div class="webdesign masonry-item margin-b-30 col-lg-6 col-sm-12 col-xs-12">
                    <div class="gallery-item">
                        <div class="item-photo">
                            <a data-target="ajax-modal" title="Loreum"></a>
                            
                        </div>
                        <div class="item-title">
                            <h4>Lorem ipsum dolor sit amet.</h4>
                            <span class="caption text-muted">Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.
                                    Lorem ipsum dolor sit amet.vLorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Masonry Element -->
                <div class="webdesign masonry-item margin-b-30 col-lg-6 col-sm-12 col-xs-12">
                    <div class="gallery-item">
                        <div class="item-photo">
                        </div>
                        <div class="item-title">
                            <h4>Lorem ipsum.</h4>
                            <span class="caption text-muted">Lorem ipsum dolor sit amet.</span><br>
                            <span class="caption text-muted">Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Masonry Element -->
                <div class="webdesign masonry-item margin-b-30 col-lg-6 col-sm-12 col-xs-12">
                    <div class="gallery-item">
                        <div class="item-photo">
                            <a  data-target="ajax-modal" title="Loreum"></a>                   
                                <div class="item-hover-content">
                                    <a target="_blank" title="Loreum"></a>
                                </div>                           
                        </div>
                        <div class="item-title">
                            <h4><a class="title" title="Météo vigilance" target="_blank">Lorem ipsum dolor </a></h4>
                            <span class="caption text-muted"><a target="_blank">Lorem ipsum dolor sit amet.</a></span><br>
                            <span class="caption text-muted">Lorem ipsum dolor sit <a target="_blank">Lorem ipsum do</a>. Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Masonry Element -->
                <div class="development masonry-item margin-b-30 col-lg-3 col-sm-6 col-xs-12">
                    <div class="gallery-item">
                        <div class="item-photo">
                            <a data-target="ajax-modal" title="Loreum"></a>                    
                                <div class="item-hover-content">
                                    <a target="_blank" title="Loreum"></a>
                                </div>                          
                        </div>
                        <div class="item-title">
                            <h4><a hclass="title" title="Flightwatching" target="_blank">Lorem ipsum </a></h4>
                            <span class="caption text-muted"><a target="_blank">Lorem ipsum dolor sit amet.</a></span><br>
                            <span class="caption text-muted">Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet. <a target="_blank">Lorem ipsum dolor sit amet.</a> Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet.
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Masonry Element -->
                <div class="graphic masonry-item margin-b-30 col-lg-3 col-sm-6 col-xs-12">
                    <div class="gallery-item">
                        <div class="item-title">
                            <h4><a class="title" title="Loreum">Lorem ipsum.</a></h4>
                            <span class="caption text-muted">Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.</span><br>
                            <span class="caption text-muted">Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.
                                    Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.
                                    Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.
                            </span>
                        </div>
                    </div>
                </div>
            </div>    

        </div>
        
    </section>

    <!-- Section - Contact -->
    <section id="contact" class="section padding-v-60 min-fullheight">

        <!-- BG Map -->
        <div id="google-map" class="bg-image" data-latitude="44.8687" data-longitude="-0.5530229999999392" ></div>

        <!-- Contact Box -->
        <div class="contact-box bg-secondary dark animated" data-animation="flipInY">
            <h2>N'hésitez pas <strong>contactez moi</strong>!</h2>
            <!-- Contact List -->
            <ul class="list-unstyled list-unstyled-icons">
                <li><img class="contact" src="assets/img/call.png">Bordeaux, France</li>
                <li><img class="contact" src="assets/img/message.png"></i><a href="mailto:leo.essomba@ynov.com" title="Mon e-mail">leo.essomba@ynov.com</a></li>
                <li><img class="contact" src="assets/img/phone2.png"><a href="tel:[+33]0652372166" title="Mon numéro de téléphone">+(33)06 52 37 21 66</a></li>
            </ul>
            <a href="#" class="btn btn-secondary" data-target="messenger" title="Formulaire de contact"><span>Utiliser le formulaire de contact</span><img class="bottom" src="assets/img/lettre.png"></i></a>

    </section>
    <!-- Section - Contact / End -->

</div>
<!-- Content / End -->

<!-- Messenger -->
<a href="#" style="background-color:lightgrey" id="messenger-toggle" data-target="messenger" class="icon icon-sm icon-circle animated" data-animation="bounceIn" data-animation-delay="300" title="Formulaire de contact"><img class="contact" src="assets/img/form.png"></i></a>
<div id="messenger" class="dark">
    <div id="messenger-box">
        <div class="messenger-box-content">
            <!-- Close -->
            <img class="close" src="assets/img/cross.png" data-target="messenger" title="Fermer">
            <h3>Remplissez le <strong>formulaire</strong> - Je vous répondrai aussi vite que possible!</h3>
            <!-- Contact Form -->
            <form action="mail.php" method="post" >
                <div class="form-alert"></div>
                <div class="form-error alert alert-default"><ul></ul></div>
                <div class="form-group">
                    <label for="nom">Nom:</label>
                    <input id="name" class="form-control" type="text" name="nom" placeholder="Nom :">
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input id="email" class="form-control" type="text" name="email" placeholder="Adresse mail :">
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" class="form-control" name="message" rows="4" placeholder="Ecrivez votre message ici :"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-secondary" value="Envoyer" />
               </div>
                <!--<button type="submit" class="btn btn-secondary"><span>Envoyer!</span><img class="bottom" src="assets/img/lettre.png"></button>-->
            </form>
        </div>
    </div>
</div>

<!-- Mobile Navigation -->
<a href="#" id="mobile-nav-toggle" class="icon icon-circle icon-sm icon-primary icon-hover visible-xs visible-sm" data-target="mobile-nav" title="Menu">
        <img class="contact" src="assets/img/navbar.png"></i>
</a>
<nav id="mobile-nav" class="bg-white">
    <div class="mobile-nav-wrapper">
        <!-- Nav -->
        <ul class="nav nav-vertical">
                <li><a href="#" onclick="goTo('start')"><span>Home</span></a></li>
                <li><a href="#" title="Mon CV" onclick="goTo('resume')"><span>CV</span></a></li>
                <li><a href="#" title="Mes réalisations" onclick="goTo('portfolio')"><span>Portfolio</span></a></li>
                <li><a href="#" title="Me contacter" onclick="goTo('contact')"><span>Contact</span></a></li>
        </ul>
        <div class='shareaholic-canvas' data-app='share_buttons' data-app-id='26251815'></div>
    </div>
    <a href="#" class="mobile-nav-close icon icon-hover icon-xs icon-circle icon-primary" data-target="mobile-nav" title="Fermer"><img class="contact" src="assets/img/cross.png"></i></a>
</nav>

<!-- JS Libraries -->
<script src="assets/js/jquery-1.11.3.min.js"></script>

<!-- JS Plugins -->
<script>
window.paceOptions = {
    target: '#page-loader',
    ajax: false
};
</script>
<script src="assets/js/plugins.js"></script>

<!-- JS Core -->
<script src="assets/js/core.min.js"></script>

<!-- JS Script -->
<script src="assets/js/script.js"></script>

<!-- Google Map API -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&key=AIzaSyCQzYoGqQAQUsFNn5c3bJZu-UmJWt3po5k"></script>
<!-- Fonction scroll to -->
<script>
function goTo(id){
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#"+id).offset().top
    }, 2000);
}
</script>

</body>

</html>
			