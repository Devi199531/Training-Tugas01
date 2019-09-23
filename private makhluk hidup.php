<?php
class Makhluk_Hidup{
 var $berat;
 var $tinggi;
 
 function __construct(){
  
 }
 
 public function bernafas($nama,$alat){
  echo $nama." bernafas dengan ".$alat;
 }
 
 private function makan($makanan){
  echo "makan ".$makanan;
 }
 
}

class Manusia extends Makhluk_Hidup{
 
 function __construct(){
  echo "loading bernafas <br/>";
 }
 function makan($makanan){
  $this->makan($makanan);
 }
 
}
$adi = new Manusia();
$adi->bernafas('adi','paru-paru'); // work
$adi->makan('nasi');// not work
?>