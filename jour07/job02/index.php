<form method='POST' action=''>
    appuyez pour un mode nuit
    <input type='checkbox' name='case' value='on'>
    <br>
    <input type="submit" value="envoyer"><br>
</form>

<?php

function bgcol(){
   ?> <style>
    body{
        background-color:black;
        color:white;
    }
    </style>
<?php
}

function Bonjour($jour){
    if ($jour===true){
        echo "Bonsoir"; 
        bgcol();
    }
       
    else {
        echo "Bonjour";}
    return;
}

$case = $_POST["case"];
if(isset($case)){
    $jour=true;
}
else{
    $jour=false;
}

Bonjour($jour);
?>