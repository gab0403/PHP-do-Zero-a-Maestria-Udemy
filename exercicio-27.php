<?php
 
 $arr = [2.99, "batata", 450, "galinha", "boi", 88, 0.9, 500, "tartaruga", 345];
 $a = count($arr);
 $b = 0;
 
 while($b <= $a) {
        if (is_string($arr[$b])) {
                echo $arr[$b];
        }
        
        $b++;
 }

?>
