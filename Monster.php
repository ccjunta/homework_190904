<?php
//継承 上書きが可能
//全ポケモンが持つ、プロパティやメソッドを持った設計図

class Monster
{
    //プロパティ
    public $name;
    public $hp;
    public $mp;
    public $level; 

    //コンストラクタ
    public function __construct($name,$hp,$mp,$power,$level)
    {
        $this->name = $name;
        $this->hp = $hp;
        $this->mp = $mp;
        $this->power = $power;
        $this->level = $level;
    }

    public function escape()
    {
     echo '逃げる';
    }

    //テンションをためる
    public function tenshon()
    {
      $this->power +=10;   
    }

    //攻撃メソッド
    public function attack()
    {
        echo 'どん！';
    }

    public function levelUp()
    {
        $this->level +=1;
    }

}