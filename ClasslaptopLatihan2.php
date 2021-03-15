<?php
 
// buat class laptop
class laptop {
 
   // buat protected property
   protected function hidupkan_laptop() {
      return "Hidupkan Laptop";
   }
   public function paksa_hidup() {
      return $this->hidupkan_laptop();
   }
   protected function merek_laptop(){
	   return "Asus";
	}
	public function tipe_laptop(){
		return $this -> merek_laptop();
	}
	protected function matikan_laptop() {
      return "Matikankan Laptop";
   }
   public function paksa_mati() {
      return $this->matikan_laptop();
   }   
   protected $pemilik="Anto";
 
   public function akses_pemilik() {
      return $this->pemilik;
   }
}
  
// buat objek dari class laptop (instansiasi)
$laptop_anto = new laptop();

// jalankan method paksa_hidup()
echo $laptop_anto->paksa_hidup(); // "Hidupkan Laptop"

//jalankan method merek_laptop
echo $laptop_anto->tipe_laptop(); // "Asus"
  
// jalankan method akses_pemilik()
echo $laptop_anto->akses_pemilik(); // "Anto"
echo "<hr />";

// jalankan method paksa_hidup()
echo $laptop_anto->paksa_mati(); // "Matikankan Laptop"

//jalankan method merek_laptop
echo $laptop_anto->tipe_laptop(); // "Asus"
  
// jalankan method akses_pemilik()
echo $laptop_anto->akses_pemilik(); // "Anto"
echo "<hr />";

// jalankan method paksa_hidup()
echo $laptop_anto->paksa_mati(); // "Matikan Laptop"

//jalankan method merek_laptop
echo $laptop_anto->tipe_laptop(); // "Asus"
  
// jalankan method akses_pemilik()
echo $laptop_anto->akses_pemilik(); // "Anto"
echo "<br />";

// jalankan method paksa_hidup()
echo $laptop_anto->paksa_hidup(); // "Hidupkan Laptop"

//jalankan method merek_laptop
echo $laptop_anto->tipe_laptop(); // "Asus"
  
// jalankan method akses_pemilik()
echo $laptop_anto->akses_pemilik(); // "Anto"
echo "<hr />";
  

?>