<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>TD - BALISE POWA - Présentation des balises HTML</title>
    </head>
    <body>
        <?php include('header.php'); ?>
        <main class="w1120 center">  
        <?php include('menu.php'); ?><!--
            --><section class="w848 i-block v-top">
                <h2 class="t-left active v-marg"><code>&lt;td&gt;</code></h2>
                    <p class="t-left v-marg">La balise <code class="ft-size-2em">&lt;td&gt;</code> définit une cellule d'un tableau qui contient des données. Cet élément fait partie du modèle de tableau.
                    </p>
                <h3 class="t-left v-marg t-align">Attributs spécifiques</h3>
                <div class="l-attribut">    
                    <ul>
                        <li>align="top|middle|bottom|left|right": aligner l'image en haut|au milieu|en bas|à gauche|à droite.</li>
                        <li>wwidth=x: largeur de x pixels.</li>
                        <li>rowspan: Cet attribut définit le nombre de lignes sur lesquelles une cellule doit s'étendre.</li>
                        <li>colspan: Cet attribut définit le nombre de colonnes sur lequel une cellule doit s'étendre.</li>
                        <li>bgcolor="couleur": Couleur qui sera utilisé pour l'arrière plan.</li>
                    </ul>
                </div>
            </section>
        </main>
        <?php include('footer.php'); ?>
    </body>
</html>