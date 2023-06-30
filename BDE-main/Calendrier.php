<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=Chrome">
  <meta name="robots" content="index,follow">
  <meta name="robots" content="max-image-preview:large" />
  <meta name= “keywords” content= “search engine optimization”>
  <meta name="keywords" content="BDE étudiant, bureau des étudiants de EPSI WIS, soirées étudiantes, Association facultaire, activités culturelles étudiant" />
  <meta name="description" content="L'association des étudiants d'EPSI WIS sert de relai entre les étudiants, ainsi avec nos différantes activitées nous voulons épanouir les étudiants">
  <meta property="og:locale" content="fr_FR">
  <meta property="og:url" content="http://46.105.124.159/BDE/home.html/">
  <meta property="og:site_name" content="CityFitness">
  <meta name="twitter:site" content="@YannOlimbo">
  <meta property="og:type" content="site vitrine">
  <meta name="twitter:label1" content="Écrit par">
  <meta name="twitter:data1" content="Olimbo Yann André"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.4/dist/css/bulma-carousel.min.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.4/dist/js/bulma-carousel.min.js"></script>
    <script defer src="scripts.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="style0.css" />
    <!--<link rel="stylesheet" href="debug.css"-->
    
  <!--les riches nippes-->
  <title>Le site web du DBE de EPSI WIS</title>
    <script type="application/ld+json">
          {
            "@context": "https://schema.org",
            "@type": "Course",
            "name": "Présentation du BDE de EPSI WIS de Lyon",
            "description": "Présentation du BDE, calendrier, Nos évènements, le MyDil,la Galerie photo.",
            "provider": {
              "@type": "Organization",
              "name": "BDE EPSI WIS - Lyon ",
              "sameAs": "https://www.example.com"
            }
          }
    </script>
  <!--les riches nippes-->  
</head>
<body>

    <!-- .hero -->
		<section class="hero  has-background-black-ter">
			<div class="hero-body">
				<div class="container">
					<figure class="image left">
						<img src="images/welbdefdn-White.png" style="max-width: 198px;">
					</figure>
          <div class="wrap">
            <div class="search">
              <input type="text" class="searchTerm" placeholder="Vous cherchez autre chose..." required/>
              <button type="submit" class="searchButton">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </div>
				</div>
        
			</div>
		</section>
    
	<!-- /.hero -->

 <!--navbar-->
 <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a 
      class="navbar-item" href="https://bulma.io">
      </a>
  
      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>
    
    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">
        
        <a class="navbar-item">
          <a href="home.html">Accueil</a> 
        </a>
  
        <a class="navbar-item">
         <a href="#1">Présentation du BDE</a>
        </a>
  
        <a class="navbar-item">
          <a href="#2">Evènements</a>
        </a>

        <a class="navbar-item">
         <a href="#3"> Le MyDil</a>
        </a>

        <a class="navbar-item">
         <a href="#4"> Galerie Photo</a>
        </a>

        <a class="navbar-item">
            <a href="Calendrier.php">Calendrier des évènements</a>
        </a>
            
            
          </div>
        </div>
      </div>
  
      <!--<div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            <a class="button is-primary">
              <strong>Sign up</strong>
            </a>
            <a class="button is-light">
              Log in
            </a>
          </div>
        </div>
      </div>
    </div>-->
  </nav>
       <!--navbar-->


       <!--Lien réseaux-->
       <p class="buttons">
        <button class="button is-danger is-outlined">
        <span class="icon is-large">
            <i class="fab fa-instagram"></i>
        </span>
        <span><a href="https://www.instagram.com/welbde/">instagram</a></span>
        </button>

        <button class="button is-info is-outlined">
        <span class="icon is-medium">
            <i class="fab fa-linkedin"></i>
        </span>
        <span><a href="https://www.linkedin.com/in/bde-epsi-wis-lyon-982a2a171/">Linkedin</a></span>
        </button>
        <button class="button is-link is-outlined">
            <span class="icon is-medium">
                <i class="fab fa-discord"></i>
            </span>
            <span><a href="https://discord.com/channels/813893578702716928/813893578752655438">discord</a></span>
            </button>
    </p>
        <!--Lien réseaux-->

  <div class="container">
                
    <section class="center">
     <h1 class="title">Agenda du BDE ESPI_WIS</h1>
      </section>
    <hr>  
  <section class="center">   
 <table border="1">
   <thead>
     <tr>
       <th>ID</th>
       <th>Lieu</th>
       <th>Date</th>
       <th>description</th>
     </tr>
   </thead>
   <tbody>
     <?php
     include("conectDB.php");
     while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
     <tr>
       <td><?php echo htmlspecialchars($row['idEvent']); ?></td>
       <td><?php echo htmlspecialchars($row['Lieu']); ?></td>
       <td><?php echo htmlspecialchars($row['DateEvent']); ?></td>
       <td><?php echo htmlspecialchars($row['event']); ?></td>
     </tr>
     <?php endwhile; ?>
   </tbody>
 </table>
     </section>
</body>
<hr>
<!--Le bas de page-->
<footer class="footer ">
  <div class="content has-text-centered">
    
   
    <p>
        
      <p>
      BDE d'EPSI WIS-7 Rue Jean-Marie Leclair 69009 Lyon
      </p>
      <img
        src="images/welbdefdn-White.png"
        style="max-width: 198px"
        alt=" logo du BDE EPSI WIS"
      />
      <p>
      © 2023 Copyright 2023 DBE EPSI_WIS.
      </p>
      
      <strong>Réalisé avec Bulma</strong>.The source code is licensed
      <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. 
      <p>D'autres lien utiles:
      <li><a href="RGB.html">Mention légale</a></li>
      <li><a href="donnéesPerso.html">Charte données personnelles</a></li>
     <li><a href="Partenaires.html">Nos partenaires</a></li>
    </p>
    
    </p>
    
  </div>
</footer>
  <!--Le bas de page-->
</html>

