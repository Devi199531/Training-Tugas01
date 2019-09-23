<?php
class Makhluk_Hidup{
  var $berat;
  public $tinggi;
 
  function __construct(){
 
  }
  function bernafas($nama,$alat){
    echo $nama." bernafas dengan ".$alat;
  }
  public function makan($makanan){
    echo "makan ".$makanan;
  }
  
}
?>