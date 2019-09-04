<?php
require_once('Monster.php');

class  Mimic extends Monster
{   
    

        //上書き
        public function attack()
        {
            $this->bite();
        }
    
        
        private function bite(){
            echo 'ガブリ！';
            echo '<br>';
        }
    }