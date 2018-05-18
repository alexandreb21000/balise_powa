<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>BODY - BALISE POWA - Présentation des balises HTML</title>
    </head>
    <body>
        <?php include('header.php'); ?>
        <main class="w1120 center">
        <?php include('menu.php'); ?><!--
            --><section class="w848 i-block v-top">
                <h2 class="t-left active v-marg"><code>&lt;body&gt;</code></h2>
                    <p class="t-left v-marg">La balise <code class="ft-size-2em">&lt;body&gt;</code> permet de représenter une image dans un document.
                    </p>
                <h3 class="t-left t-align v-marg">Attributs spécifiques</h3>
                <div class="l-attribut"> 
                    <ul>
                        <li>href="http://...":  Hyperlien vers une page Web.</li>
                        <li>href="mailto:nom@domaine.com":  Hyperlien vers l'e-mail de nom@domaine.com.</li>
                        <li>href="nomdefichier":  Hyperlien vers un fichier local, si le fichier ne peut pas être affiché dans le navigateur, le fichier sera téléchargé.</li> 
                    </ul>
                </div> 
            </section>
        </main>
        <?php include('footer.php'); ?>
    </body>
</html>