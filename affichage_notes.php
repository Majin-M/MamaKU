<DOCTYPE HTML>
<html>
    <head>
	<title>Notes Attribuées</title>
   </head>
   <body>
   
    <?php
        require_once 'Config.php';
        require_once 'menu.php';
        $req=$db->query("SELECT professeur.Nom,professeur.Prenom,Note,Commentaire,Libellé FROM `note` NATURAL JOIN professeur,matiere where professeur.idP=note.idP AND  matiere.idM=note.idM");
        echo"<table>
        <h3>VOTRE EVALUATION DES ENSEINEMENTS</h3><br/>

            <thead>
                <tr>
                    <td>PROFESSEUR</td>
                    <td>MATIERE</td>
                    <td>NOTE</td>
                    <td>COMMENTAIRE</td>
                </tr>
            </thead>
            <tbody>

        ";

            while($elm=$req->fetch()){
                echo'<tr>
                    <td>'.$elm["Nom"].' '.$elm["Prenom"].'</td>
                    <td>'.$elm["Libellé"].'</td>
                    <td>'.$elm["Note"].'</td>
                    <td>'.$elm["Commentaire"].'</td>
                </tr>';
            }
            

        echo"<tbody>
        </table>";
    ?>
    <style>
        h3 {
            width: fit-content;
            margin: 0 auto;
            border-radius: 10px;
        }
        table {
            width: fit-content;
            margin: 0 auto;
            border: 1px solid;
            border-radius: 10px;
            background-color:black;
        }
        td{
            border: 1px solid;
            border-radius: 5px;
            padding:5px;
        }
        thead{
            background-color:#ececec;
        }
        tbody{
            background-color:white;
        }
    </style>
</body>
</html>