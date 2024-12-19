<?php require_once(__DIR__ . "/header.php"); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expositions et Programme</title>
    <link rel="stylesheet" href="/css/expos.css">
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
        <h1>Expositions et Programme Annuel</h1>
        <p>Découvrez notre collection unique et les expositions qui mettent en lumière le patrimoine aquatique.</p>
    </header>

    <section class="expos-section">
        <h2>Le Patrimoine des Rivières en Dessins</h2>
        <div class="description">
            <p>
                La Maison de la Rivière présente une collection exclusive de quatre volumes réunissant les dessins réalisés par Paul Troël au cours des 25 dernières années. Ces ouvrages offrent un regard artistique unique sur le patrimoine aquatique.
            </p>
            <p>
                Le premier volume propose 91 cartes illustrées des rivières du Massif Armoricain, dont 22 inédites. Les trois autres volumes explorent des thématiques variées : éphémères, mouches artificielles, et illustrations autour des rivières.
            </p>
        </div>

        <div class="books-gallery">
            <img src="/assets/images/photo_section-3_Livre-1.JPG" alt="Livre 1" class="book-image">
            <img src="/assets/images/photo_section-3_Livre-2.JPG" alt="Livre 2" class="book-image">
            <img src="/assets/images/photo_section-3_Livre-3.JPG" alt="Livre 3" class="book-image">
            <img src="/assets/images/photo_section-3_Livre-4.JPG" alt="Livre 4" class="book-image">
        </div>
    </section>

    <section class="about-author">
        <h2>À propos de Paul Troël</h2>
        <div class="author-content">
            <p>
                Paul Troël est un illustrateur spécialisé dans le dessin d'insectes, notamment les éphémères. Ses œuvres combinent précision scientifique et esthétisme, enrichissant de nombreuses publications dédiées à l’entomologie et à la pêche à la mouche.
            </p>
            <p>
                Parmi ses travaux remarquables figure le livre "Les merveilleux éphémères des rivières de France et d'ailleurs", publié en 2011 et réédité en 2016. Ce livre, reconnu pour sa beauté visuelle, explore l'univers fascinant des éphémères.
            </p>
            <p>
                Vous pouvez découvrir davantage de ses œuvres sur son site personnel : 
                <a href="http://troel.free.fr/" target="_blank">http://troel.free.fr/</a>.
            </p>
        </div>
    </section>

    <footer>
        <?php require_once(__DIR__ . "/footer.php"); ?>
    </footer>
</body>

</html>
