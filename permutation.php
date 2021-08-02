<?php
function permu($items ,$perms){
    if(empty ($items)){
  print join ('',$perms);      
    }else{
for ($i=count($items)-1; $i>=0; --$i){
    $newitems=$items;
    $newperms=$perms;
    list ($foo)=array_splice($newitems,$i ,i);
    array_unshifted($newperms, $boo);
    permu($newitems,$newperms);

}
    }
}




?>