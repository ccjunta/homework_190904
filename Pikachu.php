<?php

//ポケモンを読み込む
require_once('Pokemon.php');

//ポケモンクラスを継承したピカチュウを作成

class Pikachu extends Pokemon
{
    //オーバーライド（親クラスが持つメソッドの上書き）cry()を上書き
    public function cry()
    {
        echo 'ピカチュー！';
        echo '<br>';
    }
}