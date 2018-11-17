<?php

//session_start(); 

if(isset($_POST['connexion'])) { // si le bouton "Connexion" est appuyé
    // on vérifie que le champ "Pseudo" n'est pas vide
    // empty vérifie à la fois si le champ est vide et si le champ existe belle et bien (is set)
    if(empty($_POST['login'])) {
        echo "field login is empty !";
    } else {
    
        if(empty($_POST['password'])) {
            echo "field password is empty !";
        } else {
         
            $login = htmlentities($_POST['login'], ENT_QUOTES, "ISO-8859-1"); 
            $password = htmlentities($_POST['password'], ENT_QUOTES, "ISO-8859-1");
      
            $user = 'demba';
            $password = 'password';
            $connect = $db = new PDO('mysql:host=db;dbname=ipssi', $user, $password);

            if(!$db){
                echo "Error to connect databases.";
            } else {
            
                $Req = $connect->query("SELECT id FROM user WHERE login = ':login' AND password = ':password'");//si vous avez enregistré le mot de passe en md5() il vous suffira de faire la vérification en mettant mdp = '".md5($MotDePasse)."' au lieu de mdp = '".$MotDePasse."'
              

                if($Req->rowCount() == 0) {

                    echo "The login or password is wrong, account is not found.";
                } else {
                   
                    $_SESSION['login'] = $login; 
                    echo "You are connected !";
                }
            }
        }
    }
}
?>