<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maison de la Rivière</title>
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Header Stylesheet -->
    <link rel="stylesheet" href="css/header.css">
    
    <!-- External Fonts and Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Host+Grotesk:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

    <?php include 'pages/header.php'; ?>
    
    <section class="hero-section">
        <div class="hero-container">
            <div class="hero-content">
                <p class="hero-title">Explorez la richesse de la biodiversité locale, <br> découvrez le patrimoine naturel des rivières bretonne</p>
                <p class="hero-subtitle">Venez vivre une expérience <span>unique au cœur de la nature</span></p>
                <div class="hero-buttons">
                    <a href="#" class="btn reserve-btn">Réserver ma visite</a>
                    <a href="#" class="btn donate-btn">Explorer les activités</a>
                </div>
            </div>

            
        </div>
        
    </section>

    <div class="partners-section">
        <div class="marquee">
            <div class="marquee-content">
                <!-- Partner logos will scroll here -->
                <img src="assets/images/Académie de rennes.jpg" alt="Académie de rennes" class="partner-logo">
                <img src="assets/images/logo CD 29.png" alt="CD" class="partner-logo">
                <img src="assets/images/logo OFB.png" alt="OFB" class="partner-logo">
                <img src="assets/images/LOGO_PASS_CULTURE_HD (1).png" alt="Pass Culture" class="partner-logo">
                <img src="assets/images/logo_valeurs_PNRA.jpg" alt="PNRA valeurs" class="partner-logo">
                <img src="assets/images/finistere.png" alt="Tout commence en Finistère" class="partner-logo">
                <img src="assets/images/landivisiau.svg" alt="Pays de Landivisiau" class="partner-logo">
                <img src="assets/images/KmYqX8CAkjNlVNQ.png" alt="Mairie de Sizun" class="partner-logo">
                <img src="assets/images/logo-aappam-elorn-encart.png" alt="Syndicat de Bassin de l'Elorn" class="partner-logo">
                <img src="assets/images/abpm.png" alt="Association pour la pêche à la Mouche" class="partner-logo">
                <img src="assets/images/syndicat-de-bassin-elorn.jpg" alt="Syndicat de bassin elorn" class="partner-logo">
                <img src="assets/images/mammologie.png" alt="Groupe Mammalogique Breton" class="partner-logo">
                <img src="assets/images/bretagne_tourisme.png" alt="Tourisme en Bretagne" class="partner-logo">
                <img src="assets/images/roscoff.png" alt="Roscoff-Tourisme" class="partner-logo">
            </div>
        </div>
    </div>

    <section class="about-section">
        <div class="about-section-container">
            <div class="about-section-content">
                <h2 class="about-headline">
                <span class="fluo">La Maison de la Rivière</span><br>vous ouvre ses portes
                </h2>
                <p>La Maison de la Rivière, de la Biodiversité et du Climat de Sizun <br> vous invite à découvrir "en immersion" les écosystèmes aquatiques du Finistère. <br> Située au bord de l’Élorn, au cœur du Parc Naturel Régional d’Armorique, <br> notre centre propose un voyage éducatif et ludique adapté à tous les âges.</p>
                <a href="#" class="alternate-btn">En Savoir Plus</a>
            </div>
        </div>
    </section>


    <section class="showOff-section">
        <div class="showOff-container">
            <div class="showOff-content">
                <p class="showOff-title">Une faune et<br> une flore captivantes.</p>
                <p class="showOff-subtitle">+20 espèces différentes à découvrir ...</p>
                <div class="showOff-buttons">
                    <a href="#" class="btn reserve-btn">Réserver ma visite</a>
                    <a href="#" class="btn donate-btn">Voir la galerie</a>
                </div>
            </div>

            <div class="thumbnail">
                <div class="item">
                    <img src="assets/images/bee.jpg" alt="bee">
                </div>
                <div class="item">
                    <img src="assets/images/frog.jpg" alt="frog">
                </div>
                <div class="item">
                    <img src="assets/images/poisson-ovale.jpg" alt="fish">
                </div>
                <div class="item">
                    <img src="assets/images/oiseau-vert.jpg" alt="bird">
                </div>
            </div>
            <div class="arrows">
                <button id="prev"><</button>
                <button id="next">></button>
            </div>
        </div>
        
    </section>
    <section class="top-activities-section">
        <h2 class="top-activities-title">Le top des <span style="color: #8da486;">activités</span> <br>à faire sur place:
        </h2>
        <div class="flex-container">
            <div class="left-column">
                <div class="activity-card" onclick="displayImage('assets/images/Conférences-Climat.png', this)">
                    <div class="icon-circle" style="background-color: #3E5D22;">
                        <i class="fa-solid fa-person-hiking"></i>
                    </div>
                    <div class="text-content">
                        <h3>Expositions permanentes et programme annuel</h3>
                        <p>Explorez le musée de la Maison de la Rivière et découvrez l’histoire fascinante de la rivière et de ses écosystèmes. De la biodiversité à l’évolution de notre environnement, plongez dans un univers interactif qui vous connecte à la nature.</p>
                    </div>
                </div>
                <div class="activity-card" onclick="displayImage('assets/images/classeverte.jpg', this)">
                    <div class="icon-circle" style="background-color: #3E5D22;">
                        <i class="fa-solid fa-fish"></i>
                    </div>
                    <div class="text-content">
                        <h3>Classes scolaires et classes vertes</h3>
                        <p>Confiez-nous vos classes pour une expérience éducative inoubliable en pleine nature. Nos classes vertes sont conçues pour éveiller la curiosité des élèves et les sensibiliser à la biodiversité et à la protection de l’environnement. Une façon unique d’apprendre tout en explorant !</p>
                    </div>
                </div>
                <div class="activity-card" onclick="displayImage('assets/images/reunion.jpg', this)">
                    <div class="icon-circle" style="background-color: #E9F2F3; color: rgb(112, 112, 124);">
                        <i class="fa-solid fa-briefcase"></i>
                    </div>
                    <div class="text-content">
                        <h3>Réunions et conférences au tiers-lieu</h3>
                        <p>Profitez de notre tiers lieu pour organiser vos réunions, séminaires ou conférences. Offrez à vos participants un cadre inspirant, entre nature et modernité, pour des échanges fructueux et un ressourcement au vert.</p>
                    </div>
                </div>
            </div>
    
            <div class="right-column">
                <img id="activity-image" src="assets/images/aquarium.jpg" alt="Activity Image">
            </div>
        </div>
        
    </section>

    <?php include 'pages/footer.php'; ?>
    <script src="pages/js/functions.js"></script>
    
</body>
</html>