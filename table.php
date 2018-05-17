<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>TABLE - BALISE POWA - Présentation des balises HTML</title>
    </head>
    <body>
        <?php include('header.php'); ?>
        <main class="w1120 center">  
        <?php include('menu.php'); ?><!--
            --><section class="w848 i-block v-top">
                <h2 class="t-left active v-marg"><code>&lt;table&gt;</code></h2>
                    <p class="t-left v-marg">La balise <code class="ft-size-2em">&lt;table&gt;</code> permet de représenter un tableau de données, 
                    c'est-à-dire des informations exprimées sur un tableau en deux dimensions.
                    </p>
                <h3 class="t-left v-marg t-align">Attributs spécifiques</h3>
                <div class="l-attribut">    
                    <ul>
                        <li>cols=x: Tableau composé de x colonnes.</li>
                        <li>width=x: largeur de x pixels.</li>
                        <li>border=x: bordure de x pixels.</li>
                        <li>cellpadding=x: Espacement entre bordure et texte.</li>
                        <li>cellspacing=x: Espacement entre les cellules.</li>
                    </ul>
                </div>
            </section>
        </main>
        <?php include('footer.php'); ?>
    </body>
</html>