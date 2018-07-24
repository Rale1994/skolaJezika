<!DOCTYPE html>
<html>
<head>
<title>Škola stranih jezika EQUILIBRIO</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<script type="text/javascript" src="jquery.easing.1.3.js"></script>
<script type="text/javascript" src="meni.js"></script>

<?php include "konekcija.php";
    $sql="SELECT * FROM clanovi";
    $q=$mysqli->query($sql);

     ?>

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
	<br>
	<br>
    <br>
   <br>

	<form method="post" action="unosclana.php" style="padding-left: 300px; padding-bottom: 20px; padding-top: 50px">
			Ime prezime : <input type="text" name="imeprezime" /><br/>
			Broj telefona : <input type="text" name="brojtelefona" /><br/>
			E-mail : <input type="text" name="email" /><br/>
			Strani jezik: <input type="text" name="stranijezik" /><br/><br/>
			Napomena : <textarea name="napomena"></textarea><br/>

		<input type="submit" name="unos" value="Ubaci" />
		
	</form>

<br>
		
	<form action="Izbrisi.php" method="POST" style="padding-left: 500px; padding-bottom: 20px; ">
        <select name="brojtelefona">
        
            <option value="">Izbrišite člana</option>
            <?php 
                while($red=$q->fetch_object()){
                    ?>
                        <option value="<?php echo $red->brojtelefona; ?>"><?php echo $red->imeprezime; ?></option>
                    <?php
                }
             ?>
        </select>   
        <input type="submit" value="Obrisi">
    </form> 


</body>
</html>