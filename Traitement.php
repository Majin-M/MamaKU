<?php
    require_once 'Config.php';
    require_once 'menu.php';
    if(isset($_POST)){
        mysqli_query($db,"INSERT INTO note( idP, idM, idE, Note, Commentaire) VALUES (".$_POST["Professeur"].",".$_POST["Matiere"].",".$_POST["Etudiant"].",".$_POST["Note"].",'".$_POST["Commentaire"]."')");
        //print_r("INSERT INTO note( idP, idM, idE, Note, Commentaire) VALUES (".$_POST["Professeur"].",".$_POST["Matiere"].",".$_POST["Etudiant"].",".$_POST["Note"].",".$_POST["Commentaire"].")");
        echo'Soyez sans craintes , votre note a été enregistrée.';
    }
?>