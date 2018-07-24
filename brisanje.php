<?php 
	include "konekcija.php";
	if (empty($_POST['sifra'])){
		echo "Parametri nisu prosledjeni!";
		header ("Refresh:3; url=index.php");
	} else {
		$sifra = $_POST['sifra'];

		$sql="DELETE FROM komentari WHERE sifra='$sifra'";
		
		if($q=$mysqli->query($sql)) {
			echo "Eksponat je uspjesno izbrisan"; 
			header ("Refresh:3; url=index.php");
		} else {
			echo "GRESKA SA BAZOM";
			header ("Refresh:3; url=index.php");
		}
	}



 ?>