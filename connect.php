<?php
    $error = 0;
    $messageError = array();
    $message = '';

    if(isset($_POST['submit'])){

        if(isset($_POST['nom']) && ($_POST['nom'] != '')){
            $nom = htmlentities(trim(htmlspecialchars($_POST['nom'])));
        } else {
            $messageError['nom'] = "Veuillez saisir votre nom !";
            $error++;
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

        if(isset($_POST['textarea']) && ($_POST['textarea'] != '')){
            $textarea = htmlentities(trim(htmlspecialchars($_POST['textarea'])));
        } else {
            $messageError['textarea'] = "Veuillez écrire du texte !";
            $error++;
        }
    }

    echo (isset($_POST['submit']) && isset($messageError['nom'])) ? $messageError['nom'] : '';
    echo (isset($_POST['submit']) && isset($messageError['prenom'])) ? $messageError['prenom'] : '';
    echo (isset($_POST['submit']) && isset($messageError['mail'])) ? $messageError['mail'] : '';
    echo (isset($_POST['submit']) && isset($messageError['balise'])) ? $messageError['balise'] : '';
    echo (isset($_POST['submit']) && isset($messageError['niveau'])) ? $messageError['niveau'] : '';
    echo (isset($_POST['submit']) && isset($messageError['textarea'])) ? $messageError['textarea'] : '';

    if (isset($_POST) && ($error == 0)){

        $objetPdo = new PDO('mysql:host=localhost;dbname=formulaire;','root','');

        $pdoStat = $objetPdo->prepare(
                        "INSERT INTO CONTACT (
                            CON_NOM,
                            CON_PRENOM,
                            CON_MAIL,
                            CON_NIVEAU,
                            CON_NEWSLETTER,
                            CON_QUESTION,
                            ID_BALISE) VALUES (
                            :CON_NOM,
                            :CON_PRENOM,
                            :CON_MAIL,
                            :CON_NIVEAU,
                            :CON_NEWSLETTER,
                            :CON_QUESTION,
                            :ID_BALISE)"
                    );

        $pdoStat->bindValue(':CON_NOM', $_POST['nom'], PDO::PARAM_STR);
        $pdoStat->bindValue(':CON_PRENOM', $_POST['prenom'], PDO::PARAM_STR);
        $pdoStat->bindValue(':CON_MAIL', $_POST['mail'], PDO::PARAM_STR);
        $pdoStat->bindValue(':CON_NIVEAU', $_POST['niveau'], PDO::PARAM_STR);
        $pdoStat->bindValue(':CON_NEWSLETTER', isset($_POST['newsletter']) ? 1 : 0, PDO::PARAM_INT);
        $pdoStat->bindValue(':CON_QUESTION', $_POST['textarea'], PDO::PARAM_STR);
        $pdoStat->bindValue(':ID_BALISE', $_POST['balise'], PDO::PARAM_INT);
        
        $insterIsOk = $pdoStat->execute();

        if($insterIsOk){
            $message = 'Le contact a bien été ajouté dans la bdd.';
        }
        else {
            $message = 'Echec';
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertion contact</title>
</head>
<body>
    <h1>Insertion du contact</h1>
    <p> <?php echo $message ?> </p>
</body>
</html>