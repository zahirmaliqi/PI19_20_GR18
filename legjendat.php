<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="style1.css">
	 <link rel="stylesheet" href="titulli.css">
	<link rel="stylesheet" type="text/css" href="zahirmaliqi.css">
	<link rel="stylesheet" href="stylmac.css">
	<link rel="stylesheet" href="legjendastyle.css">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
	<title>Document</title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(".perkthimi").click(function(){
    $(".trans").text("Jep pelqime  ");
  });
});
</script>

	</script>
    <script>
		function clickCounter() {
		  if(typeof(Storage) !== "undefined") {
			if (localStorage.clickcount) {
			  localStorage.clickcount = Number(localStorage.clickcount)+1;
			} else {
			  localStorage.clickcount = 1;
			}
			document.getElementById("result").innerHTML = "Numri i pelqimeve  " + localStorage.clickcount ;
		  } else {
			document.getElementById("result").innerHTML = "error";
		  }
		}
	</script>	
  </head>

  <body>
   <header style="width: 100%">

<div class="ikonat" style="float: left;">
		
		<a href="https://www.linkedin.com/" class="fa fa-linkedin"></a>
		<a href="http://twitter.com" class="fa fa-twitter"></a>
		<a href="http://pinterest.com" class="fa fa-pinterest"></a>
		<a href="http://google.com" class="fa fa-google"></a>
		<a href="https://rss.com/" class="fa fa-rss"></a>

  </div>
  <div style="float: right">
    <form>
	     
           <input type="text" name="text" class="search" placeholder="Search Our Website..."  >
          
           <input type="submit" name="submit" class="submit" value="SEARCH">
       </form>
   </div>
   <br>
   <br>
     </header>

	 <section class="faqja" >
		<nav id="mainMenu">
	   <div class="h6">
		<p id="fresh"><b><big>M</big>ANCHESTER<big>U</big>NITED</b></p>
		<p id="minfont">The best team!</p>
      
       </div>
       <div >
       <img src="mmm.png" alt="Trulli" id="man" style="width:70px; height: 70px; border-radius:50%; " >
       </div>
		
		

                       <ul>
                            <li><a href="Faqja1.html" >HOMEPAGE</a></li>
                            <li><a href="#">PLAYERS</a>  </li>
                            <li> <a href="#">FULL WIDTH</a> </li>
                            <li>  <a href="#">PORTOFOLIO</a></li>
                            <li> <a href="pic.html">GALLERY</a> </li>
                            <li> <a href="Game.html">GAME</a> </li>
                       </ul> 
          </nav>

<div class="ekipet">
<ul>
	<li><a href="pic.html" style="color: white;" >First team</a></li>
	<li><a href="women.html" style="color:white;" >Women</a>  </li>
	<li> <a href="rinia.html" style="color:white;" >Under 23s and 18s</a> </li>
	
	<li> <a href="legjendat.html" style="color:white;" >Legends</a> </li>
	
</ul>
 </div>
 <canvas id="myCanvas" width="170" height="60"
 style="border:4px solid black;border-radius:20px;background-color:rgb(238, 224, 28);
 padding-bottom:5px">
 
 </canvas>
 
 <script>
 var canvas = document.getElementById("myCanvas");
 var ctx = canvas.getContext("2d");
 ctx.font = "30px Arial";
 ctx.strokeText("LEGENDS" ,10,50);
 </script>



	<div class="grid-container">
		<div class="grid-item"><img src="1ryan.jpg" alt="lojtar" style="width:300px;height:300px;border-radius: 50%;"></div>
		<div class="grid-item"><img src="2sir.jpg" alt="lojtar" style="width:300px;height:300px;border-radius: 50%;"></div>
		<div class="grid-item"><img src="3paul.png" alt="lojtar" style="width:300px;height:300px;border-radius: 50%;">
			</div>  
		<div class="grid-item"><img src="4bill.jpg" alt="lojtar" style="width:300px;height:300px;border-radius: 50%;"></div>
		
		<div class="grid-item">
			<p id="demo" ></p>

<script>
var txt1 = "Ryan ";
var txt2 = "Giggs";
document.getElementById("demo").innerHTML = txt1 + " " + txt2;
</script>
		</div>
		<div class="grid-item"><p id="dem2"></p>

			<script>
			var txt1 = "Bobby ";
			var txt2 = "Charlton";
			document.getElementById("dem2").innerHTML = txt1 + " " + txt2;
			</script>

		</div>  
		<div class="grid-item"><p id="dem1" ></p>

			<script>
			var txt1 = "Paul ";
			var txt2 = "Scholes";
			document.getElementById("dem1").innerHTML = txt1 + " " + txt2;
			</script> </div>
		<div class="grid-item">
			<p id="dem3" ></p>

<script>
var txt1 = "Bill ";
var txt2 = "Foulkes";
document.getElementById("dem3").innerHTML = txt1 + " " + txt2;
</script>

		</div>
		
	  </div>
			  	</div>
			<button class="perkthimi" >Perkthe</button>

			<p class="trans">GIVE US A LIKE </p>
			
		<p>	<button class="button19" onclick="clickCounter()">
			like
			</button></p>
			<div id="result">
				<?php
			//for loop inside another for loop to get the elements of the $motivation array
				$motivation = array
				(
				array("Ryan Giggs closed one chapter of his football career - the epic, decades-spanning story of him as a player - on the same day he started a new one, as Manchester United’s new assistant manager.",
				"Nobody embodies the values of Manchester United better than Sir Bobby Charlton. Having survived the trauma of the Munich Air Disaster when aged just 20, he played as if every game was for his fallen colleagues."
				,"You must have a rare and special football talent to impress the great Sir Bobby Charlton.",
				"Bill Foulkes will always be remembered as a loyal and legendary servant of Manchester United, after an epic playing career which spanned a remarkable 18 seasons."),
				
				);
					
				for ($row = 0; $row < 1; $row++) {
				echo "<p><b></b></p>";
				echo "<ol>";
				for ($col = 0; $col < 4; $col++) {
					echo "<li>".$motivation[$row][$col]."</li>";
				}
				echo "</ol>";
				}
				?>
	                 </div>
			


			</div>
				
									   
<br/>
<hr>
</section>

<footer>

	<div >
		<div class="row">

		 
			<div class="col">
        <br>
				<p >CONTACT DETAILS</p>
        
				
				<p >The official Manchester United website with news,<br> fixtures, images, tickets, live match coverage,<br> match highlights, player profiles, transfers, shop <br> and more."The Red Devils"-The best sites. <br>Location: Manchester, United Kingdom<br>Arena/Stadium: Old Trafford<br>Tel: +44 161 868 8000<br>
					Email: info@sportmanutdsoffice.com
				</p>
			</div>

			<div class="col" >
           <br>
				<p  >QUICK LINKS</p>
              
				
				<nav  >
				<a  href="https://www.manutd.com/en/matches/first-team/2019-20/europa-league">Europa League</a><br>
				<hr>
				<a  href="https://store.manutd.com/stores/manutd/en?portal=QYTMF8KF&CMP=PSC-QYTMF8KF">UnitedDirect</a><br>
				<hr>
				<a  href="https://www.espn.com/soccer/team/_/id/360/manchester-united">2019-20 Prem Standings </a><br>
				<hr>
				<a  href="https://www.manchestereveningnews.co.uk/all-about/manchester-united-fc">Manchester Evening news</a>
				<hr>
				</nav>
			</div>


			<div  class="col">
           <br>
				<p >FROM THE BLOG </p>
			
				<p><strong>Post By Admin</strong><br>
				Manchester United Football Club is a professional 
				football club based in Old Trafford, Greater 
				Manchester, England, <br>that competes in the Premier<br>
				 League, the top flight of English football.Nicknamed "the Red Devils"<br></p>
				<span id="readmore"><a  href="https://en.wikipedia.org/wiki/Manchester_United_F.C.">Read More&raquo;</a></span>
			</div>

			<div class="col">
           <br>
				<p>&nbsp;&nbsp;   GRAB OUR NEWSLETTER</p>
				
				<form >
					<input type="text" name="Emri" placeholder="Name"><br>
					<input type="text" name="Email" placeholder="Email"><br>
					<input type="submit" name="Ruaj" value="SUBMIT" id="submit"> 
				</form>


			</div>
		</div>
		<br>
		<hr  >
		<div class="end">
		<div id="cright" > Copyright &copy; 2013 - All Rights Reserved -Part Shop</div>
    <div id="temp" >Template by OS Templates</div>
    </div>
		<br>
		<br>


    </div>
</footer>
	
</body>




</html>