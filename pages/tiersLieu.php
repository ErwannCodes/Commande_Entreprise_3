<?php require_once(__DIR__ . "/header.php"); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Tiers-Lieu</title>
    <link rel="stylesheet" href="/css/tiersLieu.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">
    <!-- External Fonts and Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <header class="page-header">
        <h1>Bienvenue au Tiers-Lieu</h1>
        <p>Un espace collaboratif au service de la communauté et de l'innovation.</p>
    </header>

    <section class="tiers-lieu-intro">
        <div class="content">
            <h2>Un espace pour créer, partager et innover</h2>
            <p>
                Situé au cœur de la Maison de la Rivière, le Tiers-Lieu est un espace dédié à la collaboration, à la créativité et à l’échange.
                Il est conçu pour accueillir tous ceux qui souhaitent participer à des projets éducatifs, environnementaux ou sociaux dans une atmosphère conviviale.
            </p>
            <p>
                Que vous soyez un étudiant, un professionnel, un artiste ou simplement curieux, ce lieu est pensé pour répondre à vos besoins en matière de coworking, d’événements ou d'ateliers participatifs.
            </p>
        </div>
        <div class="image-container">
            <img src="/assets/images/maison-riviere-6.jpg" alt="Tiers-Lieu Image" class="tiers-lieu-image">
        </div>
    </section>

    <section class="tiers-lieu-features">
        <h2>Nos Services et Atouts</h2>
        <div class="features-grid">
            <div class="feature-card">
                <img src="/assets/images/photo_section-3_Livre-1.JPG" alt="Espaces de travail" class="feature-image">
                <h3>Espaces de travail</h3>
                <p>Profitez d’un cadre naturel pour travailler seul ou en équipe, avec tout le nécessaire à disposition.</p>
            </div>
            <div class="feature-card">
                <img src="/assets/images/photo_section-3_Livre-2.JPG" alt="Ateliers et événements" class="feature-image">
                <h3>Ateliers et événements</h3>
                <p>Participez à des ateliers collaboratifs, des conférences ou des séminaires animés par des experts.</p>
            </div>
            <div class="feature-card">
                <img src="/assets/images/photo_section-3_Livre-3.JPG" alt="Accès libre à la créativité" class="feature-image">
                <h3>Accès libre à la créativité</h3>
                <p>Laissez libre cours à vos idées dans un espace inspirant et stimulant pour des projets innovants.</p>
            </div>
        </div>
    </section>

    <section class="tiers-lieu-contact">
        <h2>Rejoignez-nous</h2>
        <p>Pour toute question ou réservation, n'hésitez pas à nous contacter et découvrez comment le Tiers-Lieu peut vous aider à concrétiser vos projets.</p>
        <a href="/pages/contact.php" class="btn contact-btn">Contactez-nous</a>
    </section>

    <footer>
        <?php require_once(__DIR__ . "/footer.php"); ?>
    </footer>
</body>

</html>
