

<?php
$n1 = 0;  
$n2 = 1;  
$n = 10; 


for($i = 2; $i < $n; $i++) {  
    $n3 = $n1 + $n2;  
    echo ", $n3";  
    $n1 = $n2;  
    $n2 = $n3;  
}  

echo " $n1, $n2"; 
?>