<?php
// buat class induk: handphone
class handphone {
  
   private $merk;
   private $camera;
   private $memory;
  
   public function handphone_baru() {
     return "Beli Handphone baru";
   }
}
  
// turunkan class handphone ke tablet
class tablet extends handphone {
  
   public function lihat_spec() {
     return "merk: $this->merk, camera: $this->camera, 
     memory: $this->memory";
   }
}
  
// buat objek dari class tablet (instansiasi)
$beli_handphone = new tablet();
  
// isi property objek
$beli_handphone->merk = "samsung";
$beli_handphone->camera ="2 px";
$beli_handphone->memory = "2 GB";
  
//panggil method objek
echo $beli_handphone-> handphone_baru();
echo "<br />";
echo $beli_handphone->lihat_spec();
?>