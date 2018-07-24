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

    <h1 style="padding-left: 350px">Spisak kurseva </h1>

    <?php
		include "konekcija.php";
		$sql="SELECT * FROM premiumkursevi";
		if (!$q=$mysqli->query($sql)) {
		echo "<p>Nastala je greska pri izvodenju upita</p>" . mysql_query();
		exit();
		}
		if ($q->num_rows==0){
		echo "Nijedan kurs nije upisan u bazu";
		} else {
	?>

		<div name="spisak" style="padding-top: 20px; padding-left: 300px">
			<table style="background-color: white; border: 1px solid #ddd;">
				<tr>
					<th><b>Naziv kursa</b></th>
					<th><b>Cena</b></th>
					<th><b>Trajanje</b></th>
				</tr>

		<?php
		while ($red=$q->fetch_object()){
		?>
				<tr>
					<td><?php echo $red->nazivkursa; ?></td>
					<td><?php echo $red->cena; ?></td>
					<td><?php echo $red->trajanje; ?></td>

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