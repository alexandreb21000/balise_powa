<?php // Permet d'envoyer par mail les informations que le client aura rempli = destination : NOUS // 
$to  = 'alexandre.b@codeur.online'; // adresse du destinataire pour l'envoie des informations // 

$subject = 'Formulaire de contact - BalisePowa'; // Sujet du message // 


// print_r($_POST); // affiche le contenu des $_POST sous forme de tableau.      
// Variables (1ere protection) // 

$error = 0; // Cela veut dire qu'il n'y a pas d'erreur par la valeur 0 
$messageError = array(); // On crée un tableau vide qui contiendra les différentes erreurs

if(isset($_POST['submit'])) { // Si le bontou "Submit" existe alors ...
    if(isset($_POST['nom']) && ($_POST['nom'] != '')){   // Le point d'excamation veut dire 'différent' + "Si "nom" n'est pas vide alors... 
        $nom = htmlentities(trim(htmlspecialchars($_POST['nom']))); // Protection pour les chaines de caractère saisis par le client. Ici Espace et C.S
    } else {
        $messageError['nom'] = "Veuillez saisir votre nom !"; // J'affiche le message ...
        $error++; // Ici error est considéré comme +1 donc une erreur est créée
    }

    if(isset($_POST['prenom']) && ($_POST['prenom'] != '')){   
        $prenom = htmlentities(trim(htmlspecialchars($_POST['prenom'])));
    } else {
        $messageError['prenom'] = "Veuillez saisir votre prénom !";
        $error++;
    }

    if(isset($_POST['mail']) && ($_POST['mail'] != '')){   
        $mail = htmlentities(trim(htmlspecialchars($_POST['mail'])));
    } else {
        $messageError['mail'] = "Veuillez saisir votre mail !";
        $error++;
    }

    if(isset($_POST['balise']) && ($_POST['balise'] != '')){   
        $balise = ($_POST['balise']);
    } else {
        $messageError['balise'] = "Veuillez sélectionner votre balise !";
        $error++;
    }

    if(isset($_POST['niveau']) && ($_POST['niveau'] != '')){   
        $niveau = ($_POST['niveau']);
    } else {
        $messageError['niveau'] = "Veuillez sélectionner votre niveau !";
        $error++;
    }

    if(isset($_POST['newsletter']) && ($_POST['newsletter'] != '')){   
        $newsletter = ($_POST['newsletter']);
    } else {
        $messageError['newsletter'] = "Veuillez cocher pour vous inscrire à la newsletter !";
        $error++;
    }

    if(isset($_POST['textarea']) && ($_POST['textarea'] != '')){   // 
        $textarea = htmlentities(trim(htmlspecialchars($_POST['textarea'])));
    } else {
        $messageError['textarea'] = "Veuillez écrire du texte !";
        $error++;
    }
    

    if($error == 0){ // Si il n'y a pas de problème alors je peux envoyer mon message
        //Contenu du message
        $message = // Contenue de mon message 

        "Notre client" . ' ' . $nom . ' ' . $prenom . ' ' . "est" . ' ' . $niveau . ' ' . "dans le d&eacute;veloppement web" . "<br />" .
        "Il aurait besoin d&rsquo;informations sur la balise" . ' ' . $balise . '.' . "<br />" .
        "Voici ses informations compl&eacute;mentaires :" . ' ' . $textarea . '.' . "<br />" . 
        "Newsletter ?" . ' ' . $balise . "<br />" .
        "Cette personne est &agrave; contacter via l'adresse mail suivante :" . ' ' . $mail ;


        $headers  = 'MIME-Version: 1.0' . "\r\n"; // Présence pour le headers de la messagerie
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; // Contenu et Font

        $headers .= 'To: Alexandre.b <alexandre.b@codeur.online>' . "\r\n"; // Destination

        mail($to, $subject, $message, $headers); // Je choisi ce que je place dans le contenu de mon mail
    } 
}



?>
    
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <title>CONTACT - BALISE POWA - Présentation des balises HTML</title>
    </head>
    <body>
        <header class="bg-black pad-v20">
            <div class="w1120 center">
                <a class="w250 i-block t-center v-middle" href="menu.php"> <img src="logo.png" alt="logo"></a><!-- 
                --><h1 class="ft-color-wht mrg0 i-block w848 t-right v-middle">BALISE POWA<br>
                    <span>Le lexique pour les nuls</span>
                </h1>
            </div>
        </header>
        <main class="w1120 center">  
        <?php include('menu.php'); ?><!--
            --><section class="w848 i-block v-top s-section">
                <h2 class="pad-v20 w80 center">CONTACT US</h2>
        <?php include('formulaire.php');?>
           
            </section>
        </main>
        <footer class="bg-black t-center">Copyright :Emmanuelle - Ludovic - Jérome - Alexandre
        </footer>
        <script src="contact.js"></script>
    </body>
</html>