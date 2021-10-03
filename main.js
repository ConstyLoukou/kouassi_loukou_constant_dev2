/*document.getElementById("form").addEventListener("submit",myform);*/

function myform()
{

             /*declaration de la variable */
      var myformNom = document.getElementById("nom").value;
      var myformPrenom = document.getElementById("prenom").value;
      var myformMatricule = document.getElementById("matricule").value;
      var myformContact = document.getElementById("contact").value;
      var myformEmail = document.getElementById("email").value;
      var myformMotdePasse = document.getElementById("mdp").value;
      var myformMotdePasseConf = document.getElementById("confmdp").value;
      

      if(myformNom !="" && myformPrenom !="" && myformMatricule !="" && myformContact !=""
      && myformEmail !="" && myformMotdePasse !="" && myformMotdePasseConf !="")
      {
        alert('Bravo ! vous avez correctement rempli le formulaire');
           
      }
      
      else {
    
          alert('attention veuillez verifier que tous les champ sont renseigne');
        }
  
}


/*
alert('bonjour le monde') 



document.getElementById("form").addEventListener("submit",function()){

  alert('je te salue');
};*/