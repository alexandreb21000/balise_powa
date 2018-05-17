<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>TEXTAREA - BALISE POWA - Présentation des balises HTML</title>
    </head>
    <body>
        <?php include('header.php'); ?>
        <main class="w1120 center">  
        <?php include('menu.php'); ?><!--
            --><section class="w848 i-block v-top">
                <h2 class="t-left active v-marg"><code>&lt;textarea&gt;</code></h2>
                    <p class="t-left v-marg">La balise <code class="ft-size-2em">&lt;textarea&gt;</code> représente un contrôle qui permet d'éditer du texte sur plusieurs lignes.
                    </p>
                <h3 class="t-left v-marg t-align">Attributs spécifiques</h3>
                <div class="l-attribut">    
                    <ul>
                        <li>name="nom" : Nom donné à la zone de texte.</li>
                        <li>backward : la sélection se fait dans le sens inverse du sens d'écriture.</li>
                        <li>none : le sens de la sélection est inconnu.</li>
                    </ul>
                </div>
            </section>
        </main>
        <?php include('footer.php'); ?>
    </body>
</html>