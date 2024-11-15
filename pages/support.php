<?php require_once(__DIR__."/header.php"); ?>

<style>
    #form1, #form2 {
        display: none;
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
        <ul><p> Adhésion simple personne morale :       25 €   </p></ul>
        <ul><p> Adhésion association de soutien :       50 €   </p></ul>
        <ul><p> Adhésion association de partenariat :   100 €  </p></ul>
        <ul><p> Adhésion entreprise :                   200€   </p></ul>

    </div>
 
    <div class=""> 
        <input type="radio" id="option1" name="formOption" value="form1"> 
        <label for="option1">Adhésion simple personne moral</label> 
        
        <input type="radio" id="option2" name="formOption" value="form2"> 
        <label for="option2">Adhésion association de soutien</label> 

        <input type="radio" id="option3" name="formOption" value="form2"> 
        <label for="option1">Adhésion association de partenariat</label> 
        
        <input type="radio" id="option4" name="formOption" value="form2"> 
        <label for="option2">Adhésion entreprise </label>

    </div>


    <!-- Formulaire pour les personnes morales -->

    <form id="form1" action="submit-support.php" method="post" enctype="application/x-www-form-urlencoded">
        <input type="hidden" name="type" value="Adhésion simple personne morale">

        <input id="structure_name" type="hidden" name="structure_name" value="null">

        <div class="first_namediv">                 <!-- Prénom -->
            <label for="first_name" class="form-label">Prénom :</label>
            <input type="text" class="form-control" id="first_name" name="first_name" required> 
        </div> 
        
        <div class="last_namediv">                  <!-- Nom -->
            <label for="last_name" class="form-label">Nom de famille :</label> 
            <input type="text" class="form-control" id="last_name" name="last_name" required> 
        </div>

        <div class="adressdiv">                     <!-- L'adresse -->
            <label for="adress" class="form-label">Adresse postale :</label>
            <input type="text" class="form-control" id="adress" name="adress" required>
        </div>

        <div class="postal_codediv">                <!-- Code postal -->
            <label for="postal_code" class="form-label">Code postal :</label>
            <input type="text" class="form-control" id="postal_code" name="postal_code" required>
        </div>

        <div class="citydiv">                       <!-- Commune -->
            <label for="city" class="form-label">Commune :</label>
            <input type="text" class="form-control" id="city" name="city" required>
        </div>

        <div class="phonediv">                      <!-- Téléphone -->
            <label for="phone" class="form-label">Téléphone :</label>
            <input type="tel" class="form-control" id="phone" name="phone" required>
        </div>

        <div class="emaildiv">                      <!-- L'email -->
            <label for="email" class="form-label">Email :</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help" required>
        </div>

        <div class="occupationdiv">                 <!-- Profession / Compétences -->
            <label for="occupation" class="form-label">Profession / Compétences :</label>
            <input type="text" class="form-control" id="occupation" name="occupation" required>
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
            <input type="text" class="form-control" id="structure_name" name="structure_name" required>
        </div>

        <div class="first_namediv">                     <!-- Prénom du président(e)-->
            <label for="first_name" class="form-label">Prénom du président(e):</label>
            <input type="text" class="form-control" id="first_name" name="first_name" required> 
        </div>
        
        <div class="last_namediv">                      <!-- Nom du president(e)-->
            <label for="last_name" class="form-label">Nom du président(e) :</label> 
            <input type="text" class="form-control" id="last_name" name="last_name" required> 
        </div>

        <div class="adressdiv">                         <!-- L'adresse de la structure -->
            <label for="adress" class="form-label">Adresse postale de la structure :</label>
            <input type="text" class="form-control" id="adress" name="adress" required>
        </div>

        <div class="postal_codediv">                    <!-- Code postal -->
            <label for="postal_code" class="form-label">Code postal :</label>
            <input type="text" class="form-control" id="postal_code" name="postal_code" required>
        </div>

        <div class="citydiv">                           <!-- Commune  -->
            <label for="city" class="form-label">Commune :</label>
            <input type="text" class="form-control" id="city" name="city" required>
        </div>

        <div class="phonediv">                          <!-- Téléphone -->
            <label for="phone" class="form-label">Téléphone :</label>
            <input type="tel" class="form-control" id="phone" name="phone" required>
        </div>

        <div class="emaildiv">                         <!-- L'email -->
            <label for="email" class="form-label">Email :</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help" required>
        </div>

        <div class="buttondiv">                        <!-- Bouton d'envoi -->
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>

    </form>

    <script src="js/functions.js"></script>

</body>

</html>
