<?php
function palindrom($a)
{   

    if(strrev($a) == $a)
    {
        return 'true';
     }else{
    return 'false';
    }
} 
echo palindrom('abc');

?>