<?php 
	include "konekcija.php";
	if (empty($_POST['komentar']) || empty($_POST['imeprezime']) || empty($_POST['kurs']) || empty($_POST['sifra'])){
		echo "Parametri nisu prosledjeni!";
		header ("Refresh:3; url=unoskomentara.php");
	} else {
		$komentar = $_POST['komentar'];
		$imeprezime = $_POST['imeprezime'];
		$kurs = $_POST['kurs'];
		$sifra = $_POST['sifra'];

		$sql="INSERT INTO komentari (komentar, imeprezime, kurs, sifra) VALUES ('".$komentar."', '".$imeprezime."', '".$kurs."', '".$sifra."')";

		if($q=$mysqli->query($sql)) {
			echo "Uspešan upis"; 
			header ("Refresh:3; url=index.php");
		} else {
			echo "GRESKA SA BAZOM";
			header ("Refresh:3; url=index.php");
		}
	}


 ?>