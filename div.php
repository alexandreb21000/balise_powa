<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>DIV - BALISE POWA - Présentation des balises HTML</title>
    </head>
    <body class="bgcolor-white font-arial">
        <?php include('header.php'); ?>
        <main class="w1120 center">  
        <?php include('menu.php'); ?><!--
            --><section class="w848 i-block v-top">
                <h2 class="t-left ft-color-org v-marg fs-1-8em"><code>&lt;div&gt;</code></h2>
                    <p class="t-left v-marg">La balise <code class="ft-size-2em">&lt;div&gt;</code> est un conteneur générique qui permet d'organiser le contenu. 
                    Il peut être utilisé afin de grouper d'autres éléments pour leur appliquer un style.
                    </p>
                <h3 class="t-left v-marg t-align fs-1-5em">Attributs spécifiques</h3>
                <div class="l-attribut">    
                    <ul>
                        <li>class: Cet attribut permet de définir la ou les classes auxquelles appartient un élément afin de le manipuler en script ou de le mettre en forme avec CSS.
                        </li>
                        <li>id: Cet attribut permet d'identifier un élément d'un document de façon unique. Il est généralement utilisé pour manipuler l'élément avec des scripts ou pour le mettre en forme avec CSS.
                        </li>
                    </ul>
                </div>
            </section>
        </main>
        <?php include('footer.php'); ?>
    </body>
</html>