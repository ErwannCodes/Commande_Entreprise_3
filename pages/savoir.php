<?php require_once(__DIR__ . "/header.php"); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notre Savoir Faire</title>
    <link rel="stylesheet" href="/css/savoirFaire.css">
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
        <h1>Notre Savoir Faire</h1>
        <p>Découvrez les initiatives et projets portés par notre association.</p>
    </header>

    <section class="intro-section">
        <div class="intro-container">
            <div class="intro-text">
                <h2>Trame Verte et Bleue : Préservation des Continuités Écologiques</h2>
                <p>
                    L’association Pêche Rivières Environnement (PRÉ) a piloté un programme ambitieux 
                    "Trame Verte et Bleue" à l’échelle locale, soutenu par la Région Bretagne et 
                    l’Union Européenne via les fonds FEADER.
                </p>
                <p>
                    Ce projet a permis de restaurer les continuités écologiques sur le bassin 
                    versant de l’Elorn et de préserver des habitats naturels majeurs.
                </p>
            </div>
            <div class="intro-image">
                <img src="/assets/images/maison-riviere-6.jpg" alt="Image de la biodiversité">
            </div>
        </div>
    </section>

    <section class="project-section">
        <h2 class="section-title">Projets Anciens</h2>
        <div class="project-container">
            <div class="project-card">
                <h3>Restauration de l’Elorn</h3>
                <p>
                    Déployé sur trois ans (2020-2022), ce projet phare a inclus 23 actions concrètes 
                    visant à préserver 40 hectares de propriétés de l’AAPPMA de l’Elorn.
                </p>
                <p>
                    Il contribue activement à la conservation de la biodiversité locale tout en servant de modèle 
                    pour d'autres initiatives à l’échelle régionale.
                </p>
            </div>
            <div class="project-card">
                <h3>Actions pour la Biodiversité</h3>
                <p>
                    Nettoyage de rivières, restauration de berges, et protection d’espèces sensibles, 
                    autant d'actions concrètes menées pour améliorer les habitats aquatiques.
                </p>
                <p>
                    Ces travaux ont permis de reconnecter des habitats fragmentés et de favoriser 
                    la résilience des écosystèmes locaux.
                </p>
            </div>
        </div>
    </section>

    <footer>
        <?php require_once(__DIR__ . "/footer.php"); ?>
    </footer>

</body>

</html>
