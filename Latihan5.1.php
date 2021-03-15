<?php 
	
	
	function luas_segitiga($alas,$tinggi)
	{
		$luas = ($alas)/2 * $tinggi;
		return $luas;
	}
	function luas_persegi($sisi)
	{
		$luas = $sisi * $sisi;
		return $luas;
	}
	function luas_lingkaran($phie,$jari)
	{
		$luas = ($phie) * (($jari * $jari) );
		return $luas;
	}
echo "Luas Segitiga dengan alas 6 dan tinggi 15 = ".luas_segitiga(6,15);
echo "<br>";
echo "Luas Pesegi dengan sisi 4 = ".luas_persegi(4);
echo "<br>";
echo "Luas Segitiga dengan phie 22/7 dan jari 14 = ".luas_lingkaran(22/7,14);
?>