<?php 

function is_a_mail($chaine){
    if(preg_match("/^[-a-z0-9\._]+@[-a-z0-9\.]+\.[a-z]{2,4}$/i", $chaine)){
    return true;
    } else {
    return false;
    }
    }

?>