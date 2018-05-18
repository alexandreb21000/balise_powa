<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>META- BALISE POWA - Présentation des balises HTML</title>
    </head>
    <body class="bgcolor-white font-arial">
        <?php include('header.php'); ?>
        <main class="w1120 center">  
        <?php include('menu.php'); ?><!--
            --><section class="w848 i-block v-top">
                <h2 class="t-left ft-color-org v-marg fs-1-8em"><code>&lt;meta&gt;</code></h2>
                    <p class="t-left v-marg">La balise <code class="ft-size-2em">&lt;meta&gt;</code> représente toute information de métadonnées qui ne peut pas être 
                    représentée par un des éléments ( base , link , script , style ou title ).
                    </p>
                <h3 class="t-left v-marg t-align fs-1-5em">Attributs spécifiques</h3>
                <div class="l-attribut">    
                    <ul>
                        <li>name="description|keywords|author" : la description|les mots-clés|l'auteur seront indiqués dans l'attribut content.</li>
                        <li>http-equiv="refresh" : provoque le chargement de la page indiqué dans l'attribut url après x secondes indiqués dans 
                        l'attribut content. Si url est omis, la même page est rechargée.
                        </li>
                        <li>content="nombre ou texte": nombre de secondes.</li>
                        <li>url="fichier": voir l'attribut http-equiv.</li>
                    </ul>
                </div>
            </section>
        </main>
        <?php include('footer.php'); ?>
    </body>
</html>