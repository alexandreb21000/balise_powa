<?php
    if(isset($_POST)){
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
    }

    if($insterIsOk){
        $message = 'Le contact a bien été ajouté dans la bdd.';
    }
    else {
        $message = 'Echec';
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

