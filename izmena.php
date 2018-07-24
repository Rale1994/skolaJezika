
<?php 
	include "konekcija.php";
	if (empty($_POST['komentar']) || empty($_POST['imeprezime']) || empty($_POST['kurs']) || empty($_POST['imeprezime'])){
		echo "Parametri nisu prosledjeni!";
		header ("Refresh:3; url=komentari.php");
	} else {
		$komentar = $_POST['komentar'];
		$imeprezime = $_POST['imeprezime'];
		$kurs = $_POST['kurs'];
		$sifra = $_POST['sifra'];

		$sql="UPDATE komentari SET komentar='$komentar'WHERE sifra='$sifra' and imeprezime = '$imeprezime'";
		if($q=$mysqli->query($sql)) {
			echo "Komentar izmenjen"; 
			header ("Refresh:3; url=komentari.php");
		} else {
			echo "GRESKA SA BAZOM";
			header ("Refresh:3; url=index.php");
		}
	}



 ?>