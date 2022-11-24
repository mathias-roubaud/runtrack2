<form action="" method="post">
    
    <label for="prenom">Prénom :</label><br>
    <input type="text" name="prenom" id="prenom"><br>
    <br>
    <label for="name">Nom :</label><br>
    <input type="text" name="name" id="nom"><br>
    <br>
    <label for="mail">E-mail :</label><br>
    <input type="text" name="mail" id="user_mail"><br>
    <br>
    <input type="submit" value="envoyer"><br>
    <br>

</form>

<?php

    $count=0;

    foreach ($_POST as $args => $value) {
            $len=0;
            for ($i = 0; (isset($value[$i])); $i++) {
                    $len++; 
            }
            if ($len > 0) {
                    $count++;
            }
    }
    
    echo 'Nombre d’argument(s) POST envoyé(s) : ' , $count;

?>