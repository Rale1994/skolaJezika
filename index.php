<!DOCTYPE html>
<html>
<head>
<title>Škola</title>

<script type="text/javascript" src="jquery-1.10.2.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<script type="text/javascript" src="jquery.easing.1.3.js"></script>
<script type="text/javascript" src="meni.js"></script>

<script src="jssor.slider-21.1.6.mini.js" type="text/javascript"></script>
<script src="slide.js" type="text/javascript"></script>

<script>
function showResult(str) {
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  //Da bi se poslao zahtev serveru koristi se metoda open
  xmlhttp.open("GET","pretraga.php?q="+str,true);
  xmlhttp.send();
}
</script>
<!-- Css -->
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
				font-size:25px;

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

			#livesearch {
			background-color: white;
			text-decoration: none;
			width: 300px;
			padding: 0;
			font-family:"Myriad Pro", "Trebuchet MS", sans-serif;
			font-size: 20px;
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
    <form>
		<h3 id="pretraga"> Testiraj znanje stranog jezika online  <input type="text" size="30" onkeyup="showResult(this.value)" value="Unesi strani jezik" onblur="if (this.value == '') {this.value = 'Unesi strani jezik';}"onfocus="if (this.value == 'Unesi strani jezik') {this.value = '';}">
		<br>
		<div id="livesearch"></div> </h3>
		
	</form>
    
    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 50px; right: 100px; width: 5000px; height: 2500px; overflow: hidden; visibility: hidden; border: 10px solid #4680b9">
        
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 5000px; height: 2500px; overflow: hidden;">

            <div data-p="112.50">
                <img data-u="image" src="images/slide1.jpg" />   
            </div>

            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="images/slide2.jpg" />
            </div>

            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="images/slide3.jpg" />
            </div>

            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="images/slide4.jpg" />
            </div>

            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="images/slide5.jpg" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="images/slide6.jpg" />
            </div>
            
        </div>
        
        
    </div>




</body>
</html>