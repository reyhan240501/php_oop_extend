<?php

class RiceBox {
    public $color="biru";
    public $rice="goreng";
    private $tablespon="sendok makan";
    protected $tisu="tisu";


    public function __construct($tablespon,$tisu)
    {
        $this->tablespon=$tablespon;
        $this->tisu=$tisu;
    }

    public function setAdd()
    {
        echo "Kotak nasi ini berwarna ".$this->color." berisikan "." nasi ".$this->rice;

    }
}