    document.getElementById('bouton').addEventListener ('click', Valider);

    function Valider(event){
        
        var error = 0;
        var missNom = document.getElementById("missNom");
        var missPrenom = document.getElementById("missPrenom");
        var missMail = document.getElementById("missMail");
        var missNiveau = document.getElementById("missNiveau");
        var missBalise = document.getElementById("missBalise");
        var missNews = document.getElementById("missNews") ;
       
        
        if (document.getElementById("nom").value == ''){
            error++;
            missNom.textContent = 'Nom manquant';
        } else {
            missNom.innerHTML = '';
        }

        if(document.getElementById("prenom").value == ''){
            error++;
            missPrenom.textContent = 'Prénom manquant';
        } else {
            missPrenom.textContent = '';
        }

        if(document.getElementById("mail").value == ''){
            error++;
            missMail.textContent = 'Mail manquant';
        } else {
            missMail.textContent = '';
        }


        if (document.form.niveau.value == '') {
            error++;
            missNiveau.textContent = 'Niveau manquant';
        } else {
            missNiveau.textContent = '' ;
        }
     


        if (document.getElementById("balise").value == '0'){
            error++;
            missBalise.textContent = 'Sélectionner votre balise';
        } else {
            missBalise.textContent = '' ;
    
        }
        
        if (eval (document.getElementById("news")).checked == ''){
            error++;
            missNews.textContent = 'Veuillez cocher la case';
        } else {
            missNews.textContent = '' ;
    
        }
        


        if(document.getElementById("texte").value == ''){
            error++;
            missTexte.textContent = 'Texte manquant';
        } else {
            missTexte.textContent = '';
        }


        if(error > 0){
            event.preventDefault();
        } else {
            echo('');
        }


    }
