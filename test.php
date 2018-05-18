<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ma page web</title>
    </head>
    <body>
        <h1>Ma page web</h1>
        
        <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>  <!-- Permet d'indiquer l'heure et la date actuelle -->


    <?php

    $age_du_visiteur = 17;
    $age_du_visiteur = 23;
    $nom_du_visiteur = "Bouhand";
    echo "Salut à toi" . ' ' . $nom_du_visiteur . ' ' . "de" . ' ' . $age_du_visiteur . ' ' . 'ans' ; 

    ?>





    <?php
    $age = 13;
    
    if ($age <= 12) // SI l'âge est inférieur ou égal à 12
    {
        echo "Salut gamin ! Bienvenue sur mon site !<br />";
        $autorisation_entrer = "Oui";
    }
    else // SINON
    {
        echo "Ceci est un site pour enfants, vous êtes trop vieux pour pouvoir  entrer. Au revoir !<br />";
        $autorisation_entrer = "Non";
    }
    
    echo "Avez-vous l'autorisation d'entrer ? La réponse est : $autorisation_entrer";
    ?>

       

    </body>
</html>
