<?php

        $connexion = null;
        $serveur="localhost";
        $user="root";
        $pass="";

        $Nom="";
        $Prenom="";
        $Email="";
        $Matricule="";
        $Contact='';
        $Email=""; 
        $Mpasse=""; 
        $CoMpasse="";
        $Messag="";

        try{
            $connexion = new PDO("mysql:host=$serveur;dbname=inscription" , $user, $pass);
            $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'votre base de donnee a ete bien connecte';
        }
        catch(PDOException $e){
            echo 'Echec de la connexion' .$e->getMessage();
            return $connexion;
        }

        ?>