<?php
function isEven($a){
    if ($a % 2 == 0) {
        return 'true';
    } else {
        return 'false';
    }
}    

echo isEven(401);
?>
