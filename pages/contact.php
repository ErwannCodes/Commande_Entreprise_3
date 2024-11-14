
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Contact</title>
    <link rel="stylesheet" href="../css/styles.css"> <!-- Lien relatif au CSS -->
</head>

<header>
    <?php require_once(__DIR__.'/header.php'); ?>  <!-- Pas sécur -->
</header>

<body>

    <section class="hero-section">
        <div class="hero-content">
            <div class="form-container">
                
                <!-- Affichage de l'adresse et du numéro de téléphone de l'association -->
                <div class="contact-info">
                    <p><strong>Adresse :</strong> Moulin Vergraon, 29450 Sizun</p>
                    <p><strong>Numéro de l'association :</strong> 02 98 68 86 33</p>
                </div>
    
                <h2>Formulaire de Contact</h2>
                
                <form action="submit-contact.php" method="post" enctype="application/x-www-form-urlencoded">
  
                    <div class="prenomdiv">           <!-- Prénom -->
                        <label for="prenom" class="form-label">Prénom :</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" required> 
                    </div> 
                    
                    <div class="nomdiv">           <!-- Nom -->
                        <label for="nom" class="form-label">Nom :</label> 
                        <input type="text" class="form-control" id="nom" name="nom" required> 
                    </div>

                    <div class="emaildiv">              <!-- l'email -->
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help" required>
                    </div>
           
                    <div class="messagediv">            <!-- le messsage -->
                        <label for="message" class="form-label">Votre message (500 caractères max )</label>
                        <textarea class="form-control" placeholder="Exprimez vous" id="message" name="message" required></textarea>
                    </div>

                    <div class="buttondiv">  
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </div>
                </form>

            </div>
        </div>
    </section>

</body>

<footer>
    <?php require_once(__DIR__.'/footer.php'); ?>
</footer>

</html>
