<?php
   

    echo (isset($_POST['submit']) && isset($messageError['nom'])) ? $messageError['nom'] : '';
    echo (isset($_POST['submit']) && isset($messageError['prenom'])) ? $messageError['prenom'] : '';
    echo (isset($_POST['submit']) && isset($messageError['mail'])) ? $messageError['mail'] : '';
    echo (isset($_POST['submit']) && isset($messageError['balise'])) ? $messageError['balise'] : '';
    echo (isset($_POST['submit']) && isset($messageError['niveau'])) ? $messageError['niveau'] : '';
    echo (isset($_POST['submit']) && isset($messageError['textarea'])) ? $messageError['textarea'] : '';

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