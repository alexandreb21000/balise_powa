<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>SELECT - BALISE POWA - Présentation des balises HTML</title>
    </head>
    <body>
        <?php include('header.php'); ?>
        <main class="w1120 center">  
        <?php include('menu.php'); ?><!--
            --><section class="w848 i-block v-top">
                <h2 class="t-left active v-marg"><code>&lt;select&gt;</code></h2>
                    <p class="t-left v-marg">La balise <code class="ft-size-2em">&lt;select&gt;</code> représente un contrôle qui 
                    fournit une liste d'options parmi lesquelles l'utilisateur pourra choisir.
                    </p>
                <h3 class="t-left v-marg t-align">Attributs spécifiques</h3>
                <div class="l-attribut">    
                    <ul>
                        <li>autofocus : Cet attribut indique que l'élément doit recevoir le focus automatiquement une fois que la page est chargée.</li>
                        <li>disabled : Cet attribut indique si l'utilisateur peut interagir avec l'élément.</li>
                        <li>form : Cet attribut indique le formulaire auquel l'élément se rapporte.</li>
                        <li>multiple : Cet attribut indique si plusieurs valeurs peuvent être saisies pour des entrées de type email ou file.</li>
                        <li>name : Le nom de l'élément qui peut être utilisé par le serveur pour identifier le champ d'un formulaire.</li>
                        <li>required : Cet attribut indique si l'élément doit obligatoirement être renseigné dans le formulaire.</li>
                        <li>size : Cet attribut définit la largeur de l'élément en pixels, si l'attribut type de l'élément vaut text ou password, 
                        cela correspond au nombre de caractères du champ.</li>
                    </ul>
                </div>
            </section>
        </main>
        <?php include('footer.php'); ?>
    </body>
</html>