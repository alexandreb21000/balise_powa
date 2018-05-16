<?php // Permet d'envoyer par mail les informations que le client aura rempli = destination : NOUS // 
     $to  = 'alexandre.b@codeur.online' . ', '; // adresse du destinataire pour l'envoie des informations // 

     $subject = 'Formulaire de contact - BalisePowa'; // Sujet du message // 


     print_r($_POST);           
     // Variables (1ere protection) // 

    $error = 0;
    $messageError = array();

    if(isset($_POST['submit'])) {
        if(isset($_POST['nom']) && ($_POST['nom'] != '')){   // Le point d'explcamation veut dire 'différent'
            $nom = htmlentities(trim(htmlspecialchars($_POST['nom'])));
        } else {
            $messageError['nom'] = "Veuillez saisir votre nom !";
            $error++;
        }

        if(isset($_POST['prenom']) && ($_POST['prenom'] != '')){   
            $prenom = htmlentities(trim(htmlspecialchars($_POST['prenom'])));
        } else {
            $messageError[] = "Veuillez saisir votre prénom !";
            $error++;
        }

        if(isset($_POST['mail']) && ($_POST['mail'] != '')){   
            $mail = htmlentities(trim(htmlspecialchars($_POST['mail'])));
        } else {
            $messageError[] = "Veuillez saisir votre mail !";
            $error++;

        } if(isset($_POST['balise']) && ($_POST['balise'] != '')){   
            $balise = ($_POST['balise']);
        } else {
            $messageError[] = "Veuillez sélectionner votre balise !";
            $error++;

        } if(isset($_POST['niveau']) && ($_POST['niveau'] != '')){   
            $niveau = ($_POST['niveau']);
        } else {
            $messageError[] = "Veuillez sélectionner votre niveau !";
            $error++;

        } if(isset($_POST['newsletter']) && ($_POST['newsletter'] != '')){   
            $newsletter = ($_POST['newsletter']);
        } else {
            $messageError[] = "Veuillez cocher pour vous abonner à la newsletter !";
            $error++;

        } elseif(isset($_POST['textarea']) && ($_POST['textarea'] != '')){   // 
            $textarea = htmlentities(trim(htmlspecialchars($_POST['textarea'])));
        
        }

            /* if($nom&&$prenom&&$mail&&$mail&&$niveau&&$balise&&$newsletter&&$textarea) {

          

            }
    }   */


    if($error == 0){
    //Contenu du message
    $message = 

 "Notre client" . ' ' . $nom . ' ' . $prenom . ' ' . "est" . ' ' . $niveau . ' ' . "dans le d&eacute;veloppement web" . "<br />" .
 "Il aurait besoin d&rsquo;informations sur la balise" . ' ' . $balise . '.' . "<br />" .
 "Voici ses informations compl&eacute;mentaires :" . ' ' . $textarea . '.' . "<br />" . 
 "Newsletter ?" . ' ' . $newsletter . "<br />" .
 "Cette personne est &agrave; contacter via l'adresse mail suivante :" . ' ' . $mail ;


  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

  $headers .= 'To: Alexandre.b <alexandre.b@codeur.online>' . "\r\n";

  mail($to, $subject, $message, $headers);

} else { ?>
    <ul>
<?php   foreach($messageError as $error){ //Affichage de tous les message d'erreur. ?>
            <li><?php echo $error ?></li>        
<?php   } ?>
    </ul>
<?php        
}

echo $nom;

 }


?>
    