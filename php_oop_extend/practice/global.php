<?php

include 'RiceBox.php';

class Minuman extends RiceBox 
{
   public function Es(){
       echo "Ditambah dengan minuman segar";
   }
   public function Property(){
       echo $this->color;
    //    echo $this->rice;
       echo $this->tablespon;
   }
}
$kotak=new Minuman("biru","Goreng");
$kotak->Property();
