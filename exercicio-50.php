<?php

$arr = ["tartaruga" => 100, "gaivota" => 15];


?>
    
       <table>
       <tr>  
           <th>Nome</th>
           <th>Idade</th>
       </tr>
       <?php foreach($arr as $bichos => $idade): ?>
        <tr>
            <td><?= $bichos?></td>
            <td><?= $idade?></td>
        </tr>
        <?php endforeach; ?>
       </table>
    
