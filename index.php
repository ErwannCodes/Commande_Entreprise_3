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
                <p class="hero-title">Plongez au cœur de <br> la biodiversité bretonne</p>
                <p class="hero-subtitle">Venez découvrir le <span>patrimoine naturel des rivières bretonnes</span></p>
                <div class="hero-buttons">
                    <a href="/pages/contact.php" class="btn reserve-btn">Réserver ma visite</a>
                    <a href="/pages/activities.php" class="btn donate-btn">Explorer les activités</a>
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
        <img src="assets/images/door.png" height="600" width="600" alt="door image">
            <div class="about-section-content">
                <h2 class="about-headline">
                <span class="fluo">La Maison de la Rivière</span><br>vous ouvre ses portes
                </h2>
                <p>La Maison de la Rivière, de la Biodiversité <br>et du Climat de Sizun vous invite à découvrir <br> "en immersion" les écosystèmes aquatiques du Finistère. <br> Située au bord de l’Élorn, au cœur du Parc Naturel <br> Régional d’Armorique, notre centre propose un voyage <br> éducatif et ludique adapté à tous les âges.</p>
                <a href="/pages/presentation.php" class="alternate-btn">En Savoir Plus</a>
            </div>
        </div>
    </section>


    <section class="showOff-section">
        <div class="showOff-container">
            <div class="showOff-content">
                <p class="showOff-title">Une faune et<br><span style="color:rgb(126, 159, 54)">une flore captivantes.</span></p>
                <p class="showOff-subtitle">+20 espèces différentes à découvrir ...</p>
                <div class="showOff-buttons">
                    <a href="/pages/contact.php" class="btn reserve-btn">Réserver ma visite</a>
                    <a href="/pages/activities.php" class="btn donate-btn">Voir la galerie</a>
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
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="#FFFFFF"><rect fill="#2A5B1F" width="100%" height="100%"/><path d="M0 0v100S0 4 500 4s500 96 500 96V0H0Z"></path></svg>
        <div class="topAct-title-container">
        <h2 class="top-activities-title">Le top des <span style="color:rgb(115, 137, 108);">activités</span> <br>à faire sur place:
        </h2>
        </div>
        
        <div class="flex-container">
            <div class="left-column">
                <div class="activity-card">
                    <div class="text-content">
                        <h3>Des expériences pour petits et grands</h3>
                        <p>Découvrez un éventail d'expériences immersives adaptées à tous les âges et intérêts :
                            Explorez les rivières en famille grâce à des ateliers ludiques et éducatifs qui éveilleront votre curiosité.
                            Sensibilisez-vous aux enjeux environnementaux actuels avec des activités engageantes comme la Fresque du Climat.
                            Partez en randonnée guidée pour admirer la faune et la flore locales tout en apprenant à protéger ces écosystèmes précieux.
                        </p>
                    </div>
                </div>
                <a href="/pages/activities.php" class="btn reserve-btn2">Voir plus en détail</a>
            </div>
            <div class="right-column">
                <img id="activity-image" src="assets/images/aquarium.jpg" alt="Activity Image">
            </div>
        </div>
        
    </section>
    <section class="expositions-section">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="#2A5B1F"><rect fill="#E9F5E4" width="100%" height="100%"/><path d="M0 0v4s250 96 500 96 500-96 500-96V0H0Z"></path></svg>
        <div class="expoSect-title-container">
            <h2 class="expoSect-title">Expositions Permanentes<br><span style="color:rgb(115, 137, 108);">et Programme Annuel</span>
            </h2>
        </div>
        <div class="flex-container">
            <div class="twoStrandContent">
                    <div class="imgToLeft">
                    <img id="activity-image" src="assets/images/Conférences-Climat.png" alt="Activity Image">
                    </div>
                    <div class="textToRight">
                        <p>
                            Découvrez l'histoire et les trésors aquatiques à travers nos expositions exclusives, notamment les dessins uniques de Paul Troël. Un voyage artistique et éducatif dans le patrimoine des rivières bretonnes.  
                        </p>
                        <a href="/pages/expos.php" class="btn  reserve-btn2" style="background-color:#73896C">Voir les expos
                        </a>
                    </div>  
            </div>      
        </div>
            
    </section>
    <section class="tiers-lieu-section">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="#E9F5E4"><rect fill="#FFFFFF" width="100%" height="100%"/><path d="M0 0v99.7C62 69 122.4 48.7 205 66c83.8 17.6 160.5 20.4 240-12 54-22 110-26 173-10a392.2 392.2 0 0 0 222-5c55-17 110.3-36.9 160-27.2V0H0Z" opacity=".5"></path><path d="M0 0v74.7C62 44 122.4 28.7 205 46c83.8 17.6 160.5 25.4 240-7 54-22 110-21 173-5 76.5 19.4 146.5 23.3 222 0 55-17 110.3-31.9 160-22.2V0H0Z"></path></svg>
    <div class="tiersLieu-title-container">
                <h2 class="tiersLieu-title">Le Tiers-Lieu de<br><span style="color:rgb(115, 137, 108);">Maison de la Rivière</span>
                </h2>
    </div>
    <div class="flex-container">
            <div class="left-column" >
                <div class="activity-card" style="background-color:#80A88E">
                    <div class="text-content" >
                        <h3 style="color: white">Un lieu, mille possibilités</h3>
                        <p style="color: #F3F9F1">Un véritable havre de collaboration et de créativité, idéal pour accueillir vos réunions, conférences, ateliers ou événements divers. Le tiers-lieu de la Maison de la Rivière offre un cadre inspirant, mêlant sérénité et innovation, où chaque échange devient une opportunité d'apprendre, de partager et de donner vie à des projets ambitieux, quel que soit le domaine. Un espace modulable et convivial pour répondre à toutes vos envies.
                        </p>
                    </div>
                </div>
                <a href="/pages/tiersLieu.php" style="background-color: #1E3A2B; color: white" class="btn reserve-btn2">Découvrir le tiers-lieu</a>
            </div>
            <div class="right-column">
                <img id="activity-image" src="assets/images/reunion.jpg" alt="Activity Image">
            </div>
    </div>
        
</section>
<section class="savoir-faire-section">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="#FFFFFF"><rect fill="#E9F5E4" width="100%" height="100%"/><path d="M0 0v4c136 143.8 183.8-73.2 297 26.6 72.2 63.7 97 99 184.7 33.2a30.5 30.5 0 0 1 36.6 0c87.6 65.8 112.5 30.5 184.7-33.2C816.2-69.2 864 147.7 1000 4V0H0Z"></path></svg>
<div class="savoirFaire-title-container">
            <h2 class="savoirFaire-title" style="margin-bottom: 5rem">Notre Savoir-faire
            </h2>
        </div>
        <div class="flex-container">
            <div class="twoStrandContent">
                    <div class="imgToLeft">
                    <img id="activity-image" src="assets/images/MDR.jpg" alt="savoirFaire Image">
                    </div>
                    <div class="textToRight">
                        <p>
                        Engagée dans la préservation des continuités écologiques, la Maison de la Rivière a piloté des projets phares comme "Trame Verte et Bleue", contribuant activement à la conservation de la biodiversité locale.
                        </p>
                        <a href="/pages/savoir.php" class="btn  reserve-btn2" style="background-color:#73896C">En savoir plus
                        </a>
                    </div>  
            </div>      
        </div>
</section>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="#E9F5E4"><rect fill="#FFFFFF" width="100%" height="100%"/><path d="M1000 100C500 100 500 4 0 4V0h1000v100Z"></path></svg>
<section class="contactCTA">
    <div class="contact-content">
    <h3>Nous Contacter</h3>
    <p>Une question ou envie de visiter ? Notre équipe est à votre disposition pour vous guider <br>  dans votre expérience immersive à la Maison de la Rivière.</p>
    <a href="/pages/contact.php" class="btn donate-btn">Contactez-nous</a>
    </div>
    
</section>
    <?php include 'pages/footer.php'; ?>
    <script src="pages/js/functions.js"></script>
    
</body>
</html>