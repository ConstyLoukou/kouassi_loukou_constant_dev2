<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>INSCRIPTION</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <section class="section_form">
        
        <form method="POST" action="index.php" id="form">
            <fieldset>
            <legend>FORMULAIRE D'INSCRIPTION</legend>
              <input size="40" type="text" name="Nom" id="nom" class="form" placeholder="Votre Nom"><hr><br>
              <input size="40" type="text" name="Prenom" id="prenom" class="form" placeholder="Votre Prenom"><hr><br>
              <input size="40" type="text" name="Matricule" id="matricule" class="form" placeholder="Votre Matricule"><hr><br>
              <input size="40" type="text" name="Contact" id="contact" class="form" placeholder="Votre Contact"><hr><br>
              <input size="40" type="email" name="Email" id="email" class="form" placeholder="Votre Email"><hr><br>
              <input size="40" type="password" name="Mpasse" id="mdp" class="form" placeholder="Votre Mot de Passe"><hr><br>
              <input size="40" type="password" name="CoMpasse" id="confmdp" class="form" placeholder="Confirmer Votre Mot de Passe"><hr><br>
              <textarea name="Messag" id="Messag" cols="50" rows="8" class="form1" placeholder="Votre Message"></textarea>
              <button type="submit" value="S'inscrire" name="submit" id="btn" onclick="myform()"> S'inscrire</button>
              </fieldset> 
        </form>
       
        <?php
        

         require('connect.php');

        if(isset($_POST['submit'])){                                        //si le bouton s'inscrire a ete enclenche
            if(isset($_POST['Nom'], $_POST['Prenom'], $_POST['Email'])){
                if($_POST['Nom'] !="" && $_POST['Prenom'] !="" && $_POST['Matricule'] !="" && $_POST['Contact'] !="" && $_POST['Email'] !="" && 
                    $_POST['Mpasse'] !="" && $_POST['CoMpasse'] !="" ){  //enregistrement en base de donnee
                    $insertion = "INSERT INTO etudiant (Nom, Prenom, Matricule, Contact, Email, Mpasse, CoMpasse) VALUES('$Nom', '$Prenom', '$Matricule',
                     '$Contact', '$Email', '$Mpasse', '$CoMpasse' )";
                    $execute = $connexion->query($insertion);

                    if($execute == true){
                      $msgSuccess = "Information enregistre avec succes" ; 
                    }else{
                        $msgError = "l'enregistrement n'a pas pu etre effectue";
                    }
                }
            }

        }
            
        ?>
 
 <p class="section_connect">
     <?php
         if(isset($msgError)){ echo $msgError; }elseif (isset($msgSuccess)){
            echo $msgSuccess;
     }
  ?>
 </p>
 </section>
</body>
</html>