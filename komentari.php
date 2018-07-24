<!DOCTYPE html>
<html>
<head>
<title>Škola stranih jezika EQUILIBRIO</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<script type="text/javascript" src="jquery.easing.1.3.js"></script>
<script type="text/javascript" src="meni.js"></script>

<script src="jssor.slider-21.1.6.mini.js" type="text/javascript"></script>
<script src="slide.js" type="text/javascript"></script>

        <style>
			
			body{
				background:#333 url(bg.jpg) repeat top left;
				font-family:"Myriad Pro", "Trebuchet MS", sans-serif;
				font-size: 20px;
				color:#4680b9;
				margin-left: 150px;
			}
			span.reference{
				position:fixed;
				left:100px;
				bottom:10px;
				font-size:30px;

			}
			span.reference a{
				color:#aaa;
				text-transform:uppercase;
				text-decoration:none;
				text-shadow:1px 1px 1px #000;
				margin-right:100px;
			}
			span.reference a:hover{
				color:#ddd;
			}
			ul.sdt_menu{
				margin-top:50px;
			}

			
			td { 
				padding: 15px;
				border-bottom: 1px solid #ddd;
			}
			tr:hover {
				background-color: #4680b9;
    			color: white;
			}

			th{
				background-color: #4680b9;
    			color: white;
			}

		</style>



</head>

<h1>Obrazovni centar - Equilibrio
<a href="index.php"> 
<img src="images/logo.jpg" hspace="150" width="280" height="70"> 
</a>
</h1>

<body>
<div class="content">
			

			<ul id="sdt_menu" class="sdt_menu">
				<li>
					<a href="premiumkursevi.php">
						<img src="images/onama.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Premium kursevi</span>
							
						</span>
					</a>
				</li>
				<li>
					<a href="komentari.php">
						<img src="images/studenti.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Komentari članova</span>
							
						</span>
					</a>
				</li>
				<li>
					<a href="upis.php">
						<img src="images/prijava.png" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Upiši se</span>
							
						</span>
					</a>
				</li>
			
				
			</ul>
		</div>
  

       </div>
	<br>
	<br>
    <br>
    
    </div>

    <h1 style="padding-left: 300px">Komentari članova </h1>

    <form method="post" action="unoskomentara.php" style="width: 500px; float: left;">

		Komentar : <br><br> <textarea name="komentar" style="width: 400px; height: 120px; padding: 12px 20px; box-sizing: border-box; border: 2px solid #ccc; border-radius: 4px; background-color: #f8f8f8;
		    font-size: 16px; resize: none;"/></textarea> <br>
		Ime i prezime : <br> <input type="text" name="imeprezime" /><br>
		Kurs : <br>
    <select id="kurs" name="kurs">
      <option>Engleski</option>
      <option>Francuski</option>
      <option>Nemački</option>
      <option>Španski</option>
      <option>Italijanski</option>
      <option>Norveški</option>
      <option>Ruski</option>
      <option>Arapski</option>
    </select> <br>
    	Password: <br> <input type="text" name="sifra" /><br>

	<input type="submit" name="unos" value="Ubaci" />
</form>
	

    <form method="post" action="izmena.php" style="width: 500px; float: right;">
		Unesite novi komentar : <br><br> <textarea name="komentar" style="width: 400px; height: 120px; padding: 12px 20px; box-sizing: border-box; border: 2px solid #ccc; border-radius: 4px; background-color: #f8f8f8;
		    font-size: 16px; resize: none;"/></textarea> <br>
		Ime i prezime : <br> <input type="text" name="imeprezime" /><br>
		Kurs : <br>
    <select id="kurs" name="kurs">
      <option>Engleski</option>
      <option>Francuski</option>
      <option>Nemački</option>
      <option>Španski</option>
      <option>Italijanski</option>
      <option>Norveški</option>
      <option>Ruski</option>
      <option>Arapski</option>
    </select> <br>
	Password: <br> <input type="text" name="sifra" /><br>

	<input type="submit" name="unos" value="Ubaci" />
</form>

<br>
<br>
<br>
<br>
<br>

	<?php
		include "konekcija.php";
		$sql="SELECT komentar, imeprezime, kurs FROM komentari";
		if (!$q=$mysqli->query($sql)) {
		echo "<p>Nastala je greska pri izvodenju upita</p>" . mysql_query();
		exit();
		}
		if ($q->num_rows==0){
		echo "Nijedan komentar nije upisan u bazu";
		} else {
	?>

	<div name="spisak" style="padding-top: 300px; padding-left: 50px">
			<table style="background-color: white; border: 1px solid #ddd;">
				<tr>
					<th><b>Komentar</b></th>
					<th><b>Član</b></th>
					<th><b>Kurs</b></th>
				</tr>

		<?php
		while ($red=$q->fetch_object()){
		?>
				<tr>
					<td><?php echo $red->komentar; ?></td>
					<td><?php echo $red->imeprezime; ?></td>
					<td><?php echo $red->kurs; ?></td>
					

				</tr>
		<?php
		}
		?>
			</table>
		</div>

		<?php
		}
		$mysqli->close();
		?>
		


</body>
</html>