<?php

require_once('Slime.php');
require_once('Mimic.php');



$slime = new Slime('スライム',100,100,10,10);


$slime->attack();
$slime->levelUp();
$slime->evolution();



echo '<br>';
echo '<br>';



$mimic = new Mimic('ミミック',100,100,10,20);
echo 'レベルを表示.<br>';
echo $mimic->level;

echo '<br>';


