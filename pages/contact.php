<?php 

require_once(__DIR__.'/header.php');

session_start();                                     // Lancement d'une session afin de récupérer les éventuelles erreurs levées dans le fichier de vérification "submit-support.php" 
                                                    // ainsi que les informations entrées par l'utilisateur pour lui éviter de les retaper.
$errors = $_SESSION['errorsContact'] ?? [];
$postedDataContact = $_SESSION['postedDataContact'] ?? [];
unset($_SESSION['errorsContact'], $_SESSION['postedDataContact']);   

if(empty($_SESSION["csrf_token_contact"])){                  // Création d'un token csrf afin de se protéger des attaques csrf
    $_SESSION["csrf_token_contact"] = bin2hex(random_bytes(32));
}

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css"> <!-- Lien relatif au CSS -->
</head>

<body>

    <section class="hero-section">
    
        <!-- Affichage de l'adresse et du numéro de téléphone de l'association -->
        <div class="contact-info">
            <p><strong>Adresse :</strong> Moulin Vergraon, 29450 Sizun</p>
            <p><strong>Numéro de l'association :</strong> 02 98 68 86 33</p>
        </div>

        <h2>Formulaire de Contact</h2>
        
        <form action="submit-contact.php" method="post" enctype="application/x-www-form-urlencoded">
            <input type="hidden" name="csrf_token_contact" value="<?= htmlspecialchars($_SESSION['csrf_token_contact']) ?>">

            <div class="field_div">          

                 <!-- Prénom -->
                <label for="first_name" class="form-label">Prénom :</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="<?= htmlspecialchars($postedDataContact['first_name'] ?? '') ?>" required>
                <?php if (isset($errors['first_name'])): ?>
                    <p class="error-message"><?= htmlspecialchars($errors['first_name']) ?></p>
                <?php endif; ?>
            
                <!-- Nom -->
                <label for="last_name" class="form-label">Nom :</label> 
                <input type="text" class="form-control" id="last_name" name="last_name" value="<?= htmlspecialchars($postedDataContact['last_name'] ?? '') ?>" required>
                <?php if (isset($errors['last_name'])): ?>
                    <p class="error-message"><?= htmlspecialchars($errors['last_name']) ?></p>
                <?php endif; ?> 
            

                <!-- L'email -->
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($postedDataContact['email'] ?? '') ?>" required>
                <?php if (isset($errors['email'])): ?>
                    <p class="error-message"><?= htmlspecialchars($errors['email']) ?></p>
                <?php endif; ?>
    
                <!-- Le messsage -->
                <label for="message" class="form-label">Votre message</label>
                <textarea class="form-control" id="message" name="message" value="<?= htmlspecialchars($postedDataContact['message'] ?? '') ?>" required></textarea>
                <?php if (isset($errors['message'])): ?>
                    <p class="error-message"><?= htmlspecialchars($errors['message']) ?></p>
                <?php endif; ?>

            </div>

            <div class="button_div">  
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>
        </form>

    </section>

</body>

<footer>
    <?php require_once(__DIR__.'/footer.php'); ?>
</footer>

</html>
