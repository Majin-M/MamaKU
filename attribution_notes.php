<DOCTYPE HTML>
<html>
    <?php
        require_once 'Config.php';
    ?>
    <script src='verif.js'></script>
    <head>
        <title>Attribution de notes</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
    <?php
        require_once 'menu.php';
    ?>
    <form id="formu" method = "POST" action="Traitement.php">
    <fieldset>
    <p>
    <label> Etudiant: </label>   <select class="required" name='Etudiant'>
            <option value="">Votre nom</option>
            <?php
                $req= "SELECT * FROM Etudiant";    
                $result= $db->query($req);
                while($nom=$result->fetch()){
                    echo'<option value="'.$nom['idE'].'">'.$nom['Prenom'].' '.$nom['Nom'].'</option>';
                }
            ?>
        </select>
    </p>    
 
    <p>                        
    <label>Professeur : </label>  <select class="required" name='Professeur'>
            <option value="">Choisissez un professeur</option>
            <?php
                $req= "SELECT * FROM Professeur";    
                $result= $db->query($req);
                while($nom=$result->fetch()){
                    echo'<option value="'.$nom['idP'].'">'.$nom['Prenom'].' '.$nom['Nom'].'</option>';
                }
            ?>
        </select>
    </p>

    <p>    
    <label> Matière: </label>  <select class="required" name='Matiere'>
            <option value="">Choisissez une matière</option>
            <?php
                $req= "SELECT * FROM matiere";    
                $result= $db->query($req);
                while($nom=$result->fetch()){
                    echo'<option value="'.$nom['idM'].'">'.$nom['Libellé'].'</option>';
                }
            ?>
        </select>
    </p>
    <p>
        <label>Note:</label> <input type='number' id='note' class="required" name="Note" min="0" step ="0.5" max="10" placeholder="Notez le professeur sur 10"/>
    </p>
    <p><label>Commentaire</label>
        <textarea class="required" name="Commentaire" placeholder="Ajouez un commentaire"></textarea></p>       
    <p>
        <div onclick="isEmpty()" class="btn">Ajouter</div>
        <style> 
            
            form {
                width: fit-content;
                margin: 0 auto;
            }
            p{
                display:block;
                margin:10px 0;
            }
            input,select,textarea{
                width:100%;
                border-radius:5px;
            }
            textarea{
                resize:none;
                height:200px;
            }
            input,select{
                padding:5px 20px;
            }

            .btn{
                cursor:pointer; 
                border-radius:5px;
                width:fit-content;
                margin:0 auto;
                border:1px solid black;
                padding:4px 10px;
            }
            .btn:hover{
                background-color:#ececec;
            }
        </style>
    </p>
    </form>
    </fieldset>
    </body>
</html>
<?php
 
?>