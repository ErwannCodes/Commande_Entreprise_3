<?php require_once(__DIR__."/header.php"); ?>


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
        <label for="option2">Adhésion association de partenariat</label> 
        
        <input type="radio" id="option4" name="formOption" value="form2"> 
        <label for="option2">Adhésion entreprise</label> 
    </div>


    <!-- Formulaire pour les personnes morales -->

    <form id="form1" action="submit-support.php" method="post" enctype="application/x-www-form-urlencoded">
        
        <div class="prenomdiv">           <!-- Prénom -->
            <label for="prenom" class="form-label">Prénom :</label>
            <input type="text" class="form-control" id="prenom" name="prenom" required> 
        </div> 
        
        <div class="nomdiv">           <!-- Nom -->
            <label for="nom" class="form-label">Nom :</label> 
            <input type="text" class="form-control" id="nom" name="nom" required> 
        </div>

        <div class="adress">              <!-- l'adresse -->
            <label for="adress" class="form-label">Adresse postale</label>
            <input type="text" class="form-control" id="adress" name="adress" required>
        </div>

        <div class="codepostal">              <!-- code postal -->
            <label for="code" class="form-label">Adresse postale</label>
            <input type="text" class="form-control" id="adress" name="adress" required>
        </div>

        <div class="commune">              <!-- Commune -->
            <label for="commune" class="form-label">Commune :</label>
            <input type="text" class="form-control" id="commune" name="commune" required>
        </div>

        <div class="telephone">              <!-- Téléphone -->
            <label for="telephone" class="form-label">Téléphone :</label>
            <input type="tel" class="form-control" id="telephone" name="telephone" required>
        </div>

        <div class="emaildiv">              <!-- l'email -->
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help" required>
        </div>

        <div class="profession">              <!-- Profession, compétence -->
            <label for="profession" class="form-label">Profession, compétence :</label>
            <input type="text" class="form-control" id="profession" name="profession" required>
        </div>

        <div class="buttondiv">  
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>

    </form>

    <!-- Formulaire pour les associations / entreprises -->

    <form id="form2" action="submit-support.php" method="post" enctype="application/x-www-form-urlencoded">
        
        <div class="nomstructure">        <!-- Nom de la structure -->
            <label for="nomstructure" class="form-label">Nom de la structure :</label>
            <input type="text" class="form-control" id="nomstructure" name="nomstructure" required>
        </div>

        <div class="prenomdiv">           <!-- Prénom du président(e)-->
            <label for="prenom" class="form-label">Prénom du président(e):</label>
            <input type="text" class="form-control" id="prenom" name="prenom" required> 
        </div>
        
        <div class="nomdiv">             <!-- Nom du president(e)-->
            <label for="nom" class="form-label">Nom du président(e) :</label> 
            <input type="text" class="form-control" id="nom" name="nom" required> 
        </div>

        <div class="adress">              <!-- L'adresse -->
            <label for="adress" class="form-label">Adresse postale</label>
            <input type="text" class="form-control" id="adress" name="adress" required>
        </div>

        <div class="codepostal">              <!-- Code postal -->
            <label for="code" class="form-label">Adresse postale</label>
            <input type="text" class="form-control" id="adress" name="adress" required>
        </div>

        <div class="commune">              <!-- Commune -->
            <label for="commune" class="form-label">Commune :</label>
            <input type="text" class="form-control" id="commune" name="commune" required>
        </div>

        <div class="telephone">              <!-- Téléphone -->
            <label for="telephone" class="form-label">Téléphone :</label>
            <input type="tel" class="form-control" id="telephone" name="telephone" required>
        </div>

        <div class="emaildiv">           <!-- l'email -->
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help" required>
        </div>

        <div class="buttondiv">  
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>

    </form>

    <script src="/js/functions.js"></script>

</body>

</html>
