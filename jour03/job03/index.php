<?php
$str1 = "I'm sorry Dave I'm afraid I can't do that";
for ($i=0;$i<=1337;$i++){
    $lettre = $str1[$i];
    if ($lettre=="a" or $lettre== "e" or $lettre=="i" or $lettre=="o" or $lettre=="u" or $lettre=="y" or $lettre=="I"){
        echo "$lettre";
    }
    else {
        echo "";
    }
}
?>