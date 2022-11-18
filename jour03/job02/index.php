<?php
$str1 = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie";
for ($i=0;$i<=1337;$i++){
    $lettre = $str1[$i];
    if ($i % 2==0){
        echo "$lettre";
    }
    else {
        echo "";
    }
}
?>