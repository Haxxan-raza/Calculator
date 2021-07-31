<?php
function greater($a,$b)
{
     if($a >$b ){
           return $a;
      }elseif ($a<$b){
        return $b;
    }else {
        return "equal";
    }
    
    
}

echo greater(2,8);

?>