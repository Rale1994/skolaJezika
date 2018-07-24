<?php 
	include "konekcija.php";
	if (empty($_POST['imeprezime']) || empty($_POST['brojtelefona']) || empty($_POST['email']) || empty($_POST['stranijezik']) || empty($_POST['napomena'])){
		echo "Parametri nisu prosledjeni!";
		header ("Refresh:3; url=upis.php");
	} else {
		$imeprezime = $_POST['imeprezime'];
		$brojtelefona = $_POST['brojtelefona'];
		$email = $_POST['email'];
		$stranijezik = $_POST['stranijezik'];
		$napomena = $_POST['napomena'];

		$sql="INSERT INTO clanovi (imeprezime, brojtelefona, email, stranijezik, napomena) VALUES ('".$imeprezime."', '".$brojtelefona."', '".$email."', '".$stranijezik."', '".$napomena."')";

		if($q=$mysqli->query($sql)) {
			echo "Uspešan upis"; 
			header ("Refresh:3; url=index.php");
		} else {
			echo "GRESKA SA BAZOM";
			header ("Refresh:3; url=unosclana.php");
		}
	}


 ?>