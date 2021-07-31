<?php

class  Goodbye{
const Living_Message="yhis is a fruit ";
function byebye(){
    echo self::Livind_Message;
}
}
$goodbye= new Goodbye();
$goodbye->byebye();

trait message1{
    function msg1(){
        echo "this is use wellcome template";
    }
} 
class welcome{
use message1;
    
}
$obj = new welcome();
$obj->msg1();





?>