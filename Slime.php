<?php

require_once('Monster.php');

class Slime extends Monster
{

    //上書き
    public function attack()
    {
        $this->slimeAttack();
    }

    private function slimeAttack(){
        echo 'ボーン！';
        echo '<br>';
    }

    
    public function evolution(){
        if($this->level >10 )
        echo 'キングスライムに進化';
    }
}


