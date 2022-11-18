<?php
$array = array (200, 204, 173, 98, 171, 404, 459);
for ($i=0;$i<=6;$i++){
    if ($array[$i] % 2==0){
        echo "$array[$i] est paire<br>";
    }
    else {
        echo "$array[$i] est impaire<br>";
    }
}
?>