<?php require_once(__DIR__ . "/header.php"); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Activités et Animations</title>
    <link rel="stylesheet" href="/css/activities.css">
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
        <h1>Nos Activités et Animations</h1>
        <p>Des expériences immersives adaptées à tous les publics.</p>
    </header>

    <section class="activities-section">
        <h2 class="section-title">Découvrez nos activités</h2>
        <div class="activity-list">
            <!-- Activité 1 -->
            <div class="activity-card" data-expand="false">
                <img src="/assets/images/maison-riviere-7.jpg" alt="Écoles Primaires" class="activity-image">
                <div class="activity-info">
                    <h3>Écoles Primaires</h3>
                    <p class="short-description">Ateliers ludiques pour sensibiliser les plus jeunes à l’écologie aquatique.</p>
                    <div class="details hidden">
                        <p><strong>Âges :</strong> 6-11 ans</p>
                        <p><strong>Durée :</strong> 2 heures</p>
                        <p><strong>Tarif :</strong> 5€/élève</p>
                        <p><strong>Période :</strong> Toute l’année</p>
                    </div>
                    <button class="btn details-btn">Voir les détails</button>
                </div>
            </div>

            <!-- Activité 2 -->
            <div class="activity-card" data-expand="false">
                <img src="/assets/images/photo_section-3_Livre-2.JPG" alt="Collèges et Lycées" class="activity-image">
                <div class="activity-info">
                    <h3>Collèges et Lycées</h3>
                    <p class="short-description">Projets pédagogiques pour approfondir les enjeux environnementaux.</p>
                    <div class="details hidden">
                        <p><strong>Âges :</strong> 12-18 ans</p>
                        <p><strong>Durée :</strong> 3 heures</p>
                        <p><strong>Tarif :</strong> 7€/élève</p>
                        <p><strong>Période :</strong> Septembre à Juin</p>
                    </div>
                    <button class="btn details-btn">Voir les détails</button>
                </div>
            </div>

            <!-- Activité 3 -->
            <div class="activity-card" data-expand="false">
                <img src="/assets/images/photo_section-3_Livre-3.JPG" alt="Pass'Culture" class="activity-image">
                <div class="activity-info">
                    <h3>Pass'Culture</h3>
                    <p class="short-description">Activités culturelles pour les jeunes adultes en quête de découvertes.</p>
                    <div class="details hidden">
                        <p><strong>Âges :</strong> 16-25 ans</p>
                        <p><strong>Durée :</strong> 2h30</p>
                        <p><strong>Tarif :</strong> 10€/participant</p>
                        <p><strong>Période :</strong> Toute l’année</p>
                    </div>
                    <button class="btn details-btn">Voir les détails</button>
                </div>
            </div>

            <!-- Activité 4 -->
            <div class="activity-card" data-expand="false">
                <img src="/assets/images/photo_section-3_Livre-4.JPG" alt="Fresque du Climat" class="activity-image">
                <div class="activity-info">
                    <h3>Fresque du Climat</h3>
                    <p class="short-description">Atelier participatif pour comprendre les impacts du changement climatique.</p>
                    <div class="details hidden">
                        <p><strong>Âges :</strong> Tout public</p>
                        <p><strong>Durée :</strong> 4 heures</p>
                        <p><strong>Tarif :</strong> Gratuit</p>
                        <p><strong>Période :</strong> Mars à Novembre</p>
                    </div>
                    <button class="btn details-btn">Voir les détails</button>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <?php require_once(__DIR__ . "/footer.php"); ?>
    </footer>

    <script src="/pages/js/modal.js"></script>
</body>

</html>
