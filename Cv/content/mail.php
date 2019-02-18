<?php
    if(isset ($_POST["User_name"],$_POST["User_email"],$_POST["User_message"]))
    {
        if (!empty($_POST["User_name"]) AND !empty($_POST["User_message"]) AND !empty($_POST["User_email"]))
        {
            $user_name = strip_tags($_POST["User_name"]);  
            $user_email = strip_tags($_POST["User_email"]);
            $user_message = strip_tags($_POST["User_message"]);
            mail("fabfournier11@gmail.com","message de".$user_name,$user_message."\n".$user_name);
            echo "Votre message a bien été envoyé";
        }
        else
        {
            echo "Veuillez remplir tous les champs Svp!";
        }
    
    }
    else
    {
    	echo "Erreur le mail n'a pas été envoyé veuillez recommencer!";
	}
?>    
