<?php
//継承 上書きが可能
//全ポケモンが持つ、プロパティやメソッドを持った設計図

class Pokemon
{
    //プロパティ
    public $hp;
    public $pp;

    //泣くメソッド
    public function cry()
    {
        echo 'ウェーん';
        echo '<br>';
    }
}