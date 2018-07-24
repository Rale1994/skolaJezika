<?php 
	include "konekcija.php";

	if (empty($_POST['brojtelefona'])){

		echo "Parametri nisu prosledjeni!";
		header ("Refresh:3; url=upis.php");
	} else {

		$brojtelefona = $_POST['brojtelefona'];

		$sql="DELETE FROM clanovi WHERE brojtelefona='$brojtelefona'";

		if($q=$mysqli->query($sql)) {

			echo "Član je uspesno izbrisan"; 
			header ("Refresh:3; url=index.php");
		} else {
			echo "GRESKA SA BAZOM";
			header ("Refresh:3; url=upis.php");
		}
	}



 ?>