<?php 

require_once(__DIR__."/header.php"); 
session_start();
$errors = $_SESSION["errors"] ?? [];
$postData = $_SESSION['postData'] ?? [];
unset($_SESSION['errors'], $_SESSION['postData']); // Permet de supprimer les données dans ces champs une fois qu'elles

?>

<style>
    #form1 {
        display: none;
    }
    #form2 {
        display:block;
    }
</style>


<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="UTF-8">
        <title>Formulaire d'adhésion</title>
    </head>


<body>
    <div class="">
        <p> En adhérant à Pêche Rivière Environnement, La Maison de la Rivière et de la Biodiversité vous : </p>
        <ul> <p> rejoignez notre équipe salarié et bénévoles investi·es pour mener des actions de médiation et d’animation de protection de l’environnement </p> </ul>
        <ul> <p> participez à la vie de notre association  </p></ul>
        <ul> <p> prenez part aux décisions lors de notre assemblée générale annuelle</p></ul>

        <h1> Formules d'adhésion</h1>
        <input type="radio" id="option1" name="formOption" value="form1"> 
        <label for="option1">Adhésion simple personne morale :       25 €</label> 
        
        <input type="radio" id="option2" name="formOption" value="form2"> 
        <label for="option2">Adhésion association de soutien :       50 €</label> 

        <input type="radio" id="option3" name="formOption" value="form2"> 
        <label for="option1">Adhésion association de partenariat :   100 €</label> 
        
        <input type="radio" id="option4" name="formOption" value="form2"> 
        <label for="option2">Adhésion entreprise :                   200€ </label>

    </div>


    <!-- Formulaire pour les personnes morales -->

    <form id="form1" action="submit-support.php" method="post" enctype="application/x-www-form-urlencoded">
        <input type="hidden" name="type" value="Adhésion simple personne morale">

        <input id="structure_name" type="hidden" name="structure_name" value="null">

        <div class="first_namediv">                 <!-- Prénom -->
            <label for="first_name" class="form-label">Prénom :</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="<?= htmlspecialchars($postData['first_name'] ?? '') ?>" required>
            <?php if (isset($errors['first_name'])): ?>
                <p class="error-message"><?= htmlspecialchars($errors['first_name']) ?></p>
            <?php endif; ?>
        </div>

        </div> 
        
        <div class="last_namediv">                  <!-- Nom -->
            <label for="last_name" class="form-label">Nom de famille :</label> 
            <input type="text" class="form-control" id="last_name" name="last_name" value="<?= htmlspecialchars($postData['last_name'] ?? '') ?>" required>
            <?php if (isset($errors['last_name'])): ?>
                <p class="error-message"><?= htmlspecialchars($errors['last_name']) ?></p>
            <?php endif; ?>
        </div>

        <div class="adressdiv">                     <!-- L'adresse -->
            <label for="adress" class="form-label">Adresse postale :</label>
            <input type="text" class="form-control" id="adress" name="adress" value="<?= htmlspecialchars($postData['adress'] ?? '') ?>" required>
            <?php if (isset($errors['adress'])): ?>
                <p class="error-message"><?= htmlspecialchars($errors['adress']) ?></p>
            <?php endif; ?>
        </div>

        <div class="postal_codediv">                <!-- Code postal -->
            <label for="postal_code" class="form-label">Code postal :</label>
            <input type="text" class="form-control" id="postal_code" name="postal_code" value="<?= htmlspecialchars($postData['postal_code'] ?? '') ?>" required>
            <?php if (isset($errors['postal_code'])): ?>
                <p class="error-message"><?= htmlspecialchars($errors['postal_code']) ?></p>
            <?php endif; ?>
        </div>

        <div class="citydiv">                       <!-- Commune -->
            <label for="city" class="form-label">Commune :</label>
            <input type="text" class="form-control" id="city" name="city" value="<?= htmlspecialchars($postData['city'] ?? '') ?>" required>
            <?php if (isset($errors['city'])): ?>
                <p class="error-message"><?= htmlspecialchars($errors['city']) ?></p>
            <?php endif; ?>
        </div>

        <div class="phonediv">                      <!-- Téléphone -->
            <label for="phone" class="form-label">Téléphone :</label>
            <input type="tel" class="form-control" id="phone" name="phone" value="<?= htmlspecialchars($postData['phone'] ?? '') ?>" required>
            <?php if (isset($errors['phone'])): ?>
                <p class="error-message"><?= htmlspecialchars($errors['phone']) ?></p>
            <?php endif; ?>
        </div>

        <div class="emaildiv">                      <!-- L'email -->
            <label for="email" class="form-label">Email :</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($postData['email'] ?? '') ?>" required>
            <?php if (isset($errors['email'])): ?>
                <p class="error-message"><?= htmlspecialchars($errors['email']) ?></p>
            <?php endif; ?>        
        </div>

        <div class="occupationdiv">                 <!-- Profession / Compétences -->
            <label for="occupation" class="form-label">Profession / Compétences :</label>
            <input type="text" class="form-control" id="occupation" name="occupation" value="<?= htmlspecialchars($postData['occupation'] ?? '') ?>" required>
            <?php if (isset($errors['occupation'])): ?>
                <p class="error-message"><?= htmlspecialchars($errors['occupation']) ?></p>
            <?php endif; ?>         
        </div>

        <div class="buttondiv">                     <!-- Bouton d'envoi -->
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>

    </form>

    <!-- Formulaire pour les associations / entreprises -->

    <form id="form2" action="submit-support.php" method="post" enctype="application/x-www-form-urlencoded">
        <input id="type" type="hidden" name="type" value="">

        <input id="occupation" type="hidden" name="occupation" value="null">

        <div class="structure_namediv">                  <!-- Nom de la structure -->
            <label for="structure_name" class="form-label">Nom de la structure :</label>
            <input type="text" class="form-control" id="structure_name" name="structure_name" value="<?= htmlspecialchars($postData['structure_name'] ?? '') ?>" required>
            <?php if (isset($errors['structure_name'])): ?>
                <p class="error-message"><?= htmlspecialchars($errors['structure_name']) ?></p>
            <?php endif; ?>        
        </div>

        <div class="first_namediv">                     <!-- Prénom du président(e)-->
            <label for="first_name" class="form-label">Prénom du président(e):</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="<?= htmlspecialchars($postData['first_name'] ?? '') ?>" required>
            <?php if (isset($errors['first_name'])): ?>
                <p class="error-message"><?= htmlspecialchars($errors['first_name']) ?></p>
            <?php endif; ?>        
        </div>
        
        <div class="last_namediv">                      <!-- Nom du president(e)-->
            <label for="last_name" class="form-label">Nom du président(e) :</label> 
            <input type="text" class="form-control" id="last_name" name="last_name" value="<?= htmlspecialchars($postData['last_name'] ?? '') ?>" required>
            <?php if (isset($errors['last_name'])): ?>
                <p class="error-message"><?= htmlspecialchars($errors['last_name']) ?></p>
            <?php endif; ?> 
        </div>

        <div class="adressdiv">                         <!-- L'adresse de la structure -->
            <label for="adress" class="form-label">Adresse postale de la structure :</label>
            <input type="text" class="form-control" id="adress" name="adress" value="<?= htmlspecialchars($postData['adress'] ?? '') ?>" required>
            <?php if (isset($errors['adress'])): ?>
                <p class="error-message"><?= htmlspecialchars($errors['adress']) ?></p>
            <?php endif; ?>        </div>

        <div class="postal_codediv">                    <!-- Code postal -->
            <label for="postal_code" class="form-label">Code postal :</label>
            <input type="text" class="form-control" id="postal_code" name="postal_code" value="<?= htmlspecialchars($postData['postal_code'] ?? '') ?>" required>
            <?php if (isset($errors['postal_code'])): ?>
                <p class="error-message"><?= htmlspecialchars($errors['postal_code']) ?></p>
            <?php endif; ?>        </div>

        <div class="citydiv">                           <!-- Commune  -->
            <label for="city" class="form-label">Commune :</label>
            <input type="text" class="form-control" id="city" name="city" value="<?= htmlspecialchars($postData['city'] ?? '') ?>" required>
            <?php if (isset($errors['city'])): ?>
                <p class="error-message"><?= htmlspecialchars($errors['city']) ?></p>
            <?php endif; ?>        </div>

        <div class="phonediv">                          <!-- Téléphone -->
            <label for="phone" class="form-label">Téléphone :</label>
            <input type="tel" class="form-control" id="phone" name="phone" value="<?= htmlspecialchars($postData['phone'] ?? '') ?>" required>
            <?php if (isset($errors['phone'])): ?>
                <p class="error-message"><?= htmlspecialchars($errors['phone']) ?></p>
            <?php endif; ?>        </div>

        <div class="emaildiv">                         <!-- L'email -->
            <label for="email" class="form-label">Email :</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($postData['email'] ?? '') ?>" required>
            <?php if (isset($errors['email'])): ?>
                <p class="error-message"><?= htmlspecialchars($errors['email']) ?></p>
            <?php endif; ?>        </div>

        <div class="buttondiv">                        <!-- Bouton d'envoi -->
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>

    </form>

    <script src="js/functions.js"></script>

</body>

</html>
