<?php 

class Kucing {

     
     public $jumlahKaki;
     public $warna;
     
     public function warna($warna) {    
          $this->warna = $warna;
     }

     public function jumlahKursi($jumlahKursi) {    
          $this->jumlahKursi = $jumlahKursi;
     }

     public function tampilkan() {    
          echo "Kucing dengan warna " . $this->warna . " memiliki " . $this->jumlahKursi . " kursi";
     }

}
/>