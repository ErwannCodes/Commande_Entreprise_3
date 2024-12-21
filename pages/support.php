<?php 

require_once(__DIR__."/header.php");

session_start();                                     // Lancement d'une session afin de récupérer les éventuelles erreurs levées dans le fichier de vérification "submit-support.php" 
                                                    // ainsi que les informations entrées par l'utilisateur pour lui éviter de les retaper.
$errors = $_SESSION['errorsSupport'] ?? [];
$postedData = $_SESSION['postedDataSupport'] ?? [];
unset($_SESSION['errorsSupport'], $_SESSION['postedDataSupport']);   

if(empty($_SESSION["csrf_token_support"])){                  // Création d'un token csrf afin de se protéger des attaques csrf
    $_SESSION["csrf_token_support"] = bin2hex(random_bytes(32));
}

?>


<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="UTF-8">
    <title>Nous soutenir</title>
    <title>Notre Savoir Faire</title>
    <link rel="stylesheet" href="/css/support.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/footer.css">
            <!-- External Fonts and Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Host+Grotesk:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>


<body>
    <header class="header2">
        <h1>Soutenir la Maison De La Rivière</h1>
        <p>Devenez acteur dans la protection de notre environnement</p>
    </header>

    <div class="description">
    <p>En adhérant à Pêche Rivière Environnement, La Maison de la Rivière et de la Biodiversité vous :</p>
    <ul>
        <li>Rejoignez notre équipe salariée et bénévoles investi·es pour mener des actions de médiation et d’animation de protection de l’environnement.</li>
        <li>Participez à la vie de notre association.</li>
        <li>Prenez part aux décisions lors de notre assemblée générale annuelle.</li>
    </ul>
</div>

    <div class="buttons">
        <h1> Formules d'adhésion</h1>
        
        <!--
        <input type="radio" id="option1" name="formOption" value="type1"> 
        <label for="option1">Adhésion simple personne morale :       25 €</label> 
        
        <input type="radio" id="option2" name="formOption" value="type2"> 
        <label for="option2">Adhésion association de soutien :       50 €</label> 

        <input type="radio" id="option3" name="formOption" value="type3"> 
        <label for="option1">Adhésion association de partenariat :   100 €</label> 
        
        <input type="radio" id="option4" name="formOption" value="type4"> 
        <label for="option2">Adhésion entreprise :                   200€</label>
        -->

        <label>
            <input type="radio" id="option1" name="formOption" value="type1">
            Adhésion simple personne morale :       25 €
        </label>
        <br>
        <label>
            <input type="radio" id="option2" name="formOption" value="type2">
            Adhésion association de soutien :       50 €
        </label>
        <br>
        <label>
            <input type="radio" id="option3" name="formOption" value="type3">
            Adhésion association de partenariat :   100 €
        </label>
        <br>
        <label>
            <input type="radio" id="option4" name="formOption" value="type4">
            Adhésion entreprise :                   200€        
        </label>

    </div>

    <form action="submit-support.php" method="post" enctype="application/x-www-form-urlencoded">
        <input type="hidden" name="type" value="">
        <input type="hidden" name="csrf_token_support" value="<?= htmlspecialchars($_SESSION['csrf_token_support']) ?>">

        <div id="dynamicField1">
            <div class="field_div">                  <!-- Nom de la structure -->
                <label for="structure_name" class="form-label">Nom de la structure :</label>
                <input type="text" class="form-control" id="structure_name" name="structure_name" value="<?php echo isset($postedDataSupport['structure_name']) ? htmlspecialchars($postedDataSupport['structure_name']) : ''; ?>" required>
                <?php if (isset($errors['structure_name'])): ?>
                    <p class="error-message"><?= htmlspecialchars($errors['structure_name']) ?></p>
                <?php endif; ?>        
            </div>
        </div>
        
        <div class="field_div">                 
            
            <!-- Prénom -->
            <label for="first_name" class="form-label">Prénom :</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="<?= htmlspecialchars($postedDataSupport['first_name'] ?? '') ?>" required>
            <?php if (isset($errors['first_name'])): ?>
                <p class="error-message"><?= htmlspecialchars($errors['first_name']) ?></p>
            <?php endif; ?>
        
            <!-- Nom -->
            <label for="last_name" class="form-label">Nom de famille :</label> 
            <input type="text" class="form-control" id="last_name" name="last_name" value="<?= htmlspecialchars($postedDataSupport['last_name'] ?? '') ?>" required>
            <?php if (isset($errors['last_name'])): ?>
                <p class="error-message"><?= htmlspecialchars($errors['last_name']) ?></p>
            <?php endif; ?>

            <!-- L'adresse -->
            <label for="adress" class="form-label">Adresse postale :</label>
            <input type="text" class="form-control" id="adress" name="adress" value="<?= htmlspecialchars($postedDataSupport['adress'] ?? '') ?>" required>
            <?php if (isset($errors['adress'])): ?>
                <p class="error-message"><?= htmlspecialchars($errors['adress']) ?></p>
            <?php endif; ?>

            <!-- Code postal -->
            <label for="postal_code" class="form-label">Code postal :</label>
            <input type="text" class="form-control" id="postal_code" name="postal_code" value="<?= htmlspecialchars($postedDataSupport['postal_code'] ?? '') ?>" required>
            <?php if (isset($errors['postal_code'])): ?>
                <p class="error-message"><?= htmlspecialchars($errors['postal_code']) ?></p>
            <?php endif; ?>

            <!-- Commune -->
            <label for="city" class="form-label">Commune :</label>
            <input type="text" class="form-control" id="city" name="city" value="<?= htmlspecialchars($postedDataSupport['city'] ?? '') ?>" required>
            <?php if (isset($errors['city'])): ?>
                <p class="error-message"><?= htmlspecialchars($errors['city']) ?></p>
            <?php endif; ?>

            <!-- Téléphone -->
            <label for="phone" class="form-label">Téléphone :</label>
            <input type="tel" class="form-control" id="phone" name="phone" value="<?= htmlspecialchars($postedDataSupport['phone'] ?? '') ?>" required>
            <?php if (isset($errors['phone'])): ?>
                <p class="error-message"><?= htmlspecialchars($errors['phone']) ?></p>
            <?php endif; ?>

            <!-- L'email -->
            <label for="email" class="form-label">Email :</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($postedDataSupport['email'] ?? '') ?>" required>
            <?php if (isset($errors['email'])): ?>
                <p class="error-message"><?= htmlspecialchars($errors['email']) ?></p>
            <?php endif; ?>        
        </div>

        <div id="dynamicField2">
            <div class="field_div">                 <!-- Profession / Compétences -->
                <label for="occupation" class="form-label">Profession / Compétences :</label>
                <input type="text" class="form-control" id="occupation" name="occupation" value="<?= htmlspecialchars($postedDataSupport['occupation'] ?? '') ?>" required>
                <?php if (isset($errors['occupation'])): ?>
                    <p class="error-message"><?= htmlspecialchars($errors['occupation']) ?></p>
                <?php endif; ?>         
            </div>
        </div>
        

        <div class="buttondiv">                     <!-- Bouton d'envoi -->
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>

    </form>

    <script src="js/functions.js"></script>

</body>

</footer>
    <?php require_once(__DIR__ . "/footer.php"); ?>
</footer>

</html>
