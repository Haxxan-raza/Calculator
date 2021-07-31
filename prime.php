<?php
function isPrime($n)
{
    for ($i=2; $i<$n; $i++)
    {
       if($n % $i==0){
                return "not prime";
            }
                
    }
    return "prime";
}
echo isPrime(16);
?>