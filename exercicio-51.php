<?php

$arr = ["churrasco" => 2, "batata" => 5, "pizza" => 3, "hamburguer" => 4, "strogonoff" => 1];

arsort($arr);

?>
<h1>Ranking</h1>
<ol>
<?php foreach($arr as $comida => $pontos): ?>
        <li><?= $comida?> : <?= $pontos?></li>
        <?php endforeach; ?>
</ol>