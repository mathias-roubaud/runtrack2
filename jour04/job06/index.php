<form action="" method="post">
    
        <label for="nombre">Nombre :</label><br>
        <input type="text" name="nombre" id="nombre"><br>
        <br>
        <input type="submit" value="Submit"><br>
    
</form>

<?php

$nombre = $_POST["nombre"];
    if (isset($nombre)){
        if ($nombre % 2 == 0){
            echo "$nombre est pair<br>";
        }
        else {
            echo "$nombre est impair<br>";
        }
    }
?>