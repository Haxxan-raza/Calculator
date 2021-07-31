<?php
function longstring($a ,$b)
{
    if(strlen($a)>strlen($b))
{
    return $a;
}elseif(strlen($a)<strlen($b)){
    return $b;
} else {
    return "equal";
}
}
echo longstring("qwqw","qqqql");


?>