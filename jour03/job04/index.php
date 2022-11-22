<?php
$str = "Dans L'espace, Personne ne vous entend crier";
echo "$str<br>";
$nbcar=0;

for ($i = 0; $i <= 100; $i++) {
    $lettre = $str[$i];
    
    if (empty($lettre)){
       
        break;
        
    }
    else{
         $nbcar++;
    }
}
echo "<br>Dans cette phrase, il y a $nbcar caractères";
?>