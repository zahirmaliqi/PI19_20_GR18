<!DOCTYPE html>
<html lang="en" manifest="example.appcache">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="titulli.css">
    <link rel="stylesheet" type="text/css" href="zahirmaliqi.css">
    <link rel="stylesheet" href="stylmac.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <title>Gallery</title>

   <style type="text/css">
    	@font-face {
                font-family: clock;
                src: url(digital-7.ttf);
                    }

       #time{
	width: 100%;
	margin: 0 auto;
	font-family: clock;
	font-size: 20px;
                }

</style>
    
  </head>

  <body>
  
	  <?php include("menuu.php"); ?>
      <?php
$host_name = 'www.google.com';
$port_no = '80';

$st = (bool)@fsockopen($host_name, $port_no, $err_no, $err_str, 10);
if ($st) {
    echo "<img  src='greenlight.gif' style='width:35px;height:35px;' />";
}  else {
    echo "<img  src='no_int.gif' style='width:100px;height:100px;' />";
}
?>
<span style="color: white;"  id="time"> 00:00:00 AM </span>
<script>
		$(document).ready(function(){
			setInterval(function(){
				$('#time').load('time.php')

			},1000)
			});
</script>
<div class="ekipet">
<ol style="color:red">
<li><a href="pic.php" >
<?php class Myclass1
 {
// Declaring three private variables
 private $font_size;
 private $font_color;
 private $string_value;
// Declarte construct method which accepts three parameters and the method customize_print()
 function __construct($font_size,$font_color,$string_value)
 {
 $this->font_size = $font_size;
 $this->font_color = $font_color;
 $this->string_value = $string_value;
 $this->customize_print();
 }
// Declare a method for customize print 
 function customize_print()
 {
 echo "<p style=font-size:".$this->font_size.";color:".$this->font_color.";>".$this->string_value."</p>";
 } 
 }
// Create a new object and passes three parameters 
$f = new MyClass1('20px','white','First team');

 ?></a></li>
	
	<li><a href="women.php " >
	<?php
	
class Myclass2
{

private $font_size;
private $font_color;
private $string_value;

function __construct($font_size,$font_color,$string_value)
{
$this->font_size = $font_size;
$this->font_color = $font_color;
$this->string_value = $string_value;
$this->customize_print();
}

function customize_print()
{
echo "<p style=font-size:".$this->font_size.";color:".$this->font_color.";>".$this->string_value."</p>";
} 
}

$f = new MyClass2('20px','white','Women');

?></a></li>
	<li> <a href="rinia.php" style="color:white;" ><?php

class Myclass3
{

private $font_size;
private $font_color;
private $string_value;

function __construct($font_size,$font_color,$string_value)
{
$this->font_size = $font_size;
$this->font_color = $font_color;
$this->string_value = $string_value;
$this->customize_print();
}

function customize_print()
{
echo "<p style=font-size:".$this->font_size.";color:".$this->font_color.";>".$this->string_value."</p>";
} 
}

$f = new MyClass3('20px','white','Under 23s and 18s');

?></a> </li>
	
	
	<li> <a href="legjendat.php" style="color:white;" ><?php

class Myclass4
{

private $font_size;
private $font_color;
private $string_value;

function __construct($font_size,$font_color,$string_value)
{
$this->font_size = $font_size;
$this->font_color = $font_color;
$this->string_value = $string_value;
$this->customize_print();
}

function customize_print()
{
echo "<p style=font-size:".$this->font_size.";color:".$this->font_color.";>".$this->string_value."</p>";
} 
}

$f = new MyClass4('20px','white','Legends');

?>
</a></li></ol></div>
	<p id="klasa1">GOALKEEPERS</p>
	<div >
	
		
		
			<div class="row1">
		<div class="column1">
		
		
		<div class="flip-box">
		  <div class="flip-box-inner">
			<div class="flip-box-front">
		     
			  <img src="de.jpg" alt="lojtar" style="width:350px;height:300px">
			<div class="bottom-left">
				<h1 id="numri">1 </h1>
				<h1 style="text-decoration:overline;
				text-decoration-color: red;">DAVID</h1>
				<h1>DE GEA</h1></div>
		     
			
		</div>
			<div class="flip-box-back" >
			 	<?php
				
				function lojtari1($appearances, $year,$age,$sheets,$join) {
					echo " Appearances:$appearances<br> Born in $year<br>Age: $age<br>Clean Sheets:$sheets <br>Joined:$join<br>";
				}

				lojtari1("380","1990","29","131","2 Jul 2011");

				?></div>
			  
			
			</div></div>
		</div>
		  <div class="flip-box"  style="margin-top:0px; margin-right: 20px;" >
			<div class="flip-box-inner">
			  <div class="flip-box-front">
				
				<img src="Grant.jpg" alt="lojtar" style="width:350px;height:300px;"   >
			  <div class="bottom-left" style="margin-top:-130px;">
				  <h1 id="numri">13 </h1>
				  <h1 style="text-decoration:overline;
				  text-decoration-color: red;">LEE</h1>
				  <h1>GRANT</h1></div>
				  
			  
		  </div>
			  <div class="flip-box-back" >
				<?php
				
				function lojtari2($appearances, $year,$age,$sheets,$join) {
					echo " Appearances:$appearances<br> Born in $year<br>Age: $age<br>Clean Sheets:$sheets <br>Joined:$join<br>";
				}

				lojtari2("200","1975","36","111","23 August 2010");

				?></div>
				
			</div>
			  
			</div>
			<div class="flip-box" style="margin-top:0px; margin-right: 20px;" >
				<div class="flip-box-inner">
				  <div class="flip-box-front">
				   
					<img src="Romero.jpg" alt="lojtar" style="width:350px;height:300px">
				  <div class="bottom-left" style="margin-top:-130px;">
					  <h1 id="numri">22 </h1>
					  <h1 style="text-decoration:overline;
					  text-decoration-color: red;">SERGIO</h1>
					  <h1>ROMERO</h1></div>
					  
				  
			  </div>
				  <div class="flip-box-back">
					<?php
				
				function lojtari3($appearances, $year,$age,$sheets,$join) {
					echo " Appearances:$appearances<br> Born in $year<br>Age: $age<br>Clean Sheets:$sheets <br>Joined:$join<br>";
				}

				lojtari3("380","1987","32","131","2 Jul 2011");

				?></div>
					
				</div>
				  
				</div>

				<div class="flip-box" style="margin-top:0px; margin-right: 20px;" >
					<div class="flip-box-inner">
					  <div class="flip-box-front">
					  
						<img src="Pereir.jpg" alt="lojtar" style="width:350px;height:300px">
					  <div class="bottom-left" style="margin-top:-130px;">
						  <h1 id="numri">40 </h1>
						  <h1 style="text-decoration:overline;
						  text-decoration-color: red;">JOEL</h1>
						  <h1>PEREIRA</h1></div>
						  
					  
				  </div>
					  <div class="flip-box-back">
						<?php
				
				function lojtari4($appearances, $year,$age,$sheets,$join) {
					echo " Appearances:$appearances<br> Born in $year<br>Age: $age<br>Clean Sheets:$sheets <br>Joined:$join<br>";
				}

				lojtari4("243","1996","23","131","2 April 2011");

				?></div></div>
						
					  
					  
					
					 
					</div>
		</div>
		
		
	</div>
	
	</div>
	</div>
	<p id="klasa1">DEFENDERS</p>	
	
	<div >
	
		
		
		<div class="row1">
	<div class="column1">
	
	
	<div class="flip-box">
	  <div class="flip-box-inner">
		<div class="flip-box-front">
		 
		  <img src="lindelof.jpg" alt="lojtar" style="width:350px;height:300px">
		<div class="bottom-left">
			<h1 id="numri">2 </h1>
			<h1 style="text-decoration:overline;
			text-decoration-color: red;">VICTOR</h1>
			<h1>LINDELOF</h1></div>
		 
		
	</div>
		<div class="flip-box-back">
		  <?php
				
				function lojtari5($appearances, $year,$age,$sheets,$join) {
					echo " Appearances:$appearances<br> Born in $year<br>Age: $age<br>Clean Sheets:$sheets <br>Joined:$join<br>";
				}

				lojtari5("541","1994","25","131","5 November 2009");

				?></div>
		  
		
		</div></div>
	</div>
	  <div class="flip-box"  style="margin-top:0px; margin-right: 20px;" >
		<div class="flip-box-inner">
		  <div class="flip-box-front">
			
			<img src="eric.jpg" alt="lojtar" style="width:350px;height:300px;"   >
		  <div class="bottom-left" style="margin-top:-130px;">
			  <h1 id="numri">3 </h1>
			  <h1 style="text-decoration:overline;
			  text-decoration-color: red;">ERIC</h1>
			  <h1>BAILLY</h1></div>
			  
		  
	  </div>
		  <div class="flip-box-back" >
			<?php
				
				function lojtari6($appearances, $year,$age,$sheets,$join) {
					echo " Appearances:$appearances<br> Born in $year<br>Age: $age<br>Clean Sheets:$sheets <br>Joined:$join<br>";
				}

				lojtari6("298","1990","29","131","30 March 2016");

				?></div>
			
		</div>
		  
		</div>
		<div class="flip-box" style="margin-top:0px; margin-right: 20px;" >
			<div class="flip-box-inner">
			  <div class="flip-box-front">
			   
				<img src="phil.jpg" alt="lojtar" style="width:350px;height:300px">
			  <div class="bottom-left" style="margin-top:-130px;">
				  <h1 id="numri">4 </h1>
				  <h1 style="text-decoration:overline;
				  text-decoration-color: red;">PHIL</h1>
				  <h1>JONES</h1></div>
				  
			  
		  </div>
			  <div class="flip-box-back">
				<?php
				
				function lojtari7($appearances, $year,$age,$sheets,$join) {
					echo " Appearances:$appearances<br> Born in $year<br>Age: $age<br>Clean Sheets:$sheets <br>Joined:$join<br>";
				}

				lojtari7("380","1992","27","131","2 Jul 2011");

				?></div>
				
			</div>
			  
			</div>

			<div class="flip-box" style="margin-top:0px; margin-right: 20px;" >
				<div class="flip-box-inner">
				  <div class="flip-box-front">
				  
					<img src="harry.jpg" alt="lojtar" style="width:350px;height:300px">
				  <div class="bottom-left" style="margin-top:-130px;">
					  <h1 id="numri">5 </h1>
					  <h1 style="text-decoration:overline;
					  text-decoration-color: red;">HARRY</h1>
					  <h1>MAGUIRE</h1></div>
					  
				  
			  </div>
				  <div class="flip-box-back">
					<?php
				
				function lojtari30($appearances, $year,$age,$sheets,$join) {
					echo " Appearances:$appearances<br> Born in $year<br>Age: $age<br>Clean Sheets:$sheets <br>Joined:$join<br>";
				}

				lojtari30("380","1990","29","131","2 Jul 2011");

				?></div></div>
					
				  
				  
				
				 
				</div>
	</div>
	
	
</div>
<div >
	
		
		
	<div class="row1">
<div class="column1">
	
	
	<div class="flip-box">
	  <div class="flip-box-inner">
		<div class="flip-box-front">
		 
		  <img src="chris.jpg" alt="lojtar" style="width:350px;height:300px">
		<div class="bottom-left">
			<h1 id="numri">12 </h1>
			<h1 style="text-decoration:overline;
			text-decoration-color: red;">CHRIS</h1>
			<h1>SMALLING</h1></div>
		 
		
	</div>
		<div class="flip-box-back">
		 <?php
				
				function lojtari20($appearances, $year,$age,$sheets,$join) {
					echo " Appearances:$appearances<br> Born in $year<br>Age: $age<br>Clean Sheets:$sheets <br>Joined:$join<br>";
				}

				lojtari20("100","1990","29","131","2 May 2011");

				?></div>
		  
		
		</div></div>
	</div>
	  <div class="flip-box"  style="margin-top:0px; margin-right: 20px;" >
		<div class="flip-box-inner">
		  <div class="flip-box-front">
			
			<img src="rojo.jpg" alt="lojtar" style="width:350px;height:300px;"   >
		  <div class="bottom-left" style="margin-top:-130px;">
			  <h1 id="numri">16 </h1>
			  <h1 style="text-decoration:overline;
			  text-decoration-color: red;">MARCOS</h1>
			  <h1>ROJO</h1></div>
			  
		  
	  </div>
		  <div class="flip-box-back" >
			<?php
				
				function lojtari21($appearances, $year,$age,$sheets,$join) {
					echo " Appearances:$appearances<br> Born in $year<br>Age: $age<br>Clean Sheets:$sheets <br>Joined:$join<br>";
				}

				lojtari21("234","1990","29","346","30 Jul 2009");

				?></div>
			
		</div>
		  
		</div>
		<div class="flip-box" style="margin-top:0px; margin-right: 20px;" >
			<div class="flip-box-inner">
			  <div class="flip-box-front">
			   
				<img src="ashley.jpg" alt="lojtar" style="width:350px;height:300px">
			  <div class="bottom-left" style="margin-top:-130px;">
				  <h1 id="numri">18 </h1>
				  <h1 style="text-decoration:overline;
				  text-decoration-color: red;">ASHLEY</h1>
				  <h1>YOUNG</h1></div>
				  
			  
		  </div>
			  <div class="flip-box-back">
				<?php
				
				function lojtari33($appearances, $year,$age,$sheets,$join) {
					echo " Appearances:$appearances<br> Born in $year<br>Age: $age<br>Clean Sheets:$sheets <br>Joined:$join<br>";
				}

				lojtari33("380","1990","29","131","2 Jul 2011");

				?></div>
				
			</div>
			  
			</div>

			<div class="flip-box" style="margin-top:0px; margin-right: 20px;" >
				<div class="flip-box-inner">
				  <div class="flip-box-front">
				  
					<img src="diogo.jpg" alt="lojtar" style="width:350px;height:300px">
				  <div class="bottom-left" style="margin-top:-130px;">
					  <h1 id="numri">20 </h1>
					  <h1 style="text-decoration:overline;
					  text-decoration-color: red;">DIOGO</h1>
					  <h1>DALOT</h1></div>
					  
				  
			  </div>
				  <div class="flip-box-back">
					<?php
				
				function lojtari22($appearances, $year,$age,$sheets,$join) {
					echo " Appearances:$appearances<br> Born in $year<br>Age: $age<br>Clean Sheets:$sheets <br>Joined:$join<br>";
				}

				lojtari22("380","1990","29","131","2 Jul 2011");

				?></div></div>
					
				  
				  
				
				 
				</div>
	</div>
	
	
</div>
<div >
	
		
		
	<div class="row1">
<div class="column1">
	
	
	<div class="flip-box">
	  <div class="flip-box-inner">
		<div class="flip-box-front">
		 
		  <img src="luke.jpg" alt="lojtar" style="width:350px;height:300px">
		<div class="bottom-left">
			<h1 id="numri">23 </h1>
			<h1 style="text-decoration:overline;
			text-decoration-color: red;">LUKE</h1>
			<h1>SHAW</h1></div>
		 
		
	</div>
		<div class="flip-box-back">
		<?php
				
				function lojtari34($appearances, $year,$age,$sheets,$join) {
					echo " Appearances:$appearances<br> Born in $year<br>Age: $age<br>Clean Sheets:$sheets <br>Joined:$join<br>";
				}

				lojtari34("380","1990","29","131","2 Jul 2011");

				?></div>
		  
		
		</div></div>
	</div>
	  <div class="flip-box"  style="margin-top:0px; margin-right: 20px;" >
		<div class="flip-box-inner">
		  <div class="flip-box-front">
			
			<img src="tim.jpg" alt="lojtar" style="width:350px;height:300px;"   >
		  <div class="bottom-left" style="margin-top:-130px;">
			  <h1 id="numri">24 </h1>
			  <h1 style="text-decoration:overline;
			  text-decoration-color: red;">TIM</h1>
			  <h1>FOSU-MENSAH</h1></div>
			  
		  
	  </div>
		  <div class="flip-box-back" >
			<?php
				
				function lojtari100($appearances, $year,$age,$sheets,$join) {
					echo " Appearances:$appearances<br> Born in $year<br>Age: $age<br>Clean Sheets:$sheets <br>Joined:$join<br>";
				}

				lojtari100("200","1975","36","111","23 August 2010");

				?></div>
			
		</div>
		  
		</div>
		<div class="flip-box" style="margin-top:0px; margin-right: 20px;" >
			<div class="flip-box-inner">
			  <div class="flip-box-front">
			   
				<img src="aaron.jpg" alt="lojtar" style="width:350px;height:300px">
			  <div class="bottom-left" style="margin-top:-130px;">
				  <h1 id="numri">29 </h1>
				  <h1 style="text-decoration:overline;
				  text-decoration-color: red;">AARON</h1>
				  <h1>WAN-BISSAKA</h1></div>
				  
			  
		  </div>
			  <div class="flip-box-back">
				<?php
				
				function lojtari31($appearances, $year,$age,$sheets,$join) {
					echo " Appearances:$appearances<br> Born in $year<br>Age: $age<br>Clean Sheets:$sheets <br>Joined:$join<br>";
				}

				lojtari31("380","1990","29","131","2 Jul 2011");

				?></div>
				
			</div>
			  
			</div>

			<div class="flip-box" style="margin-top:0px; margin-right: 20px;" >
				<div class="flip-box-inner">
				  <div class="flip-box-front">
				  
					<img src="ax1.jpg" alt="lojtar" style="width:350px;height:300px">
				  <div class="bottom-left" style="margin-top:-130px;">
					  <h1 id="numri">38 </h1>
					  <h1 style="text-decoration:overline;
					  text-decoration-color: red;">AXEL</h1>
					  <h1>TUANZEBE</h1></div>
					  
				  
			  </div>
				  <div class="flip-box-back">
					<?php
				
				function lojtari104($appearances, $year,$age,$sheets,$join) {
					echo " Appearances:$appearances<br> Born in $year<br>Age: $age<br>Clean Sheets:$sheets <br>Joined:$join<br>";
				}

				lojtari104("200","1975","36","111","23 August 2010");

				?></div></div>
					
				  
				  
				
				 
				</div>
	</div>
	
	
</div>


</div>
</div>

<p id="klasa1">MIDFIELDERS</p>	
	
	<div >
	
		
		
		<div class="row1">
	<div class="column1">
	
	
	<div class="flip-box">
	  <div class="flip-box-inner">
		<div class="flip-box-front">
		 
		  <img src="axel.jpg" alt="lojtar" style="width:350px;height:300px">
		<div class="bottom-left">
			<h1 id="numri">6 </h1>
			<h1 style="text-decoration:overline;
			text-decoration-color: red;">PAUL</h1>
			<h1>POGBA</h1></div>
		 
		
	</div>
		<div class="flip-box-back">
		 <?php
				
				function lojtari8($appearances, $year,$age,$sheets,$join) {
					echo " Appearances:$appearances<br> Born in $year<br>Age: $age<br>Clean Sheets:$sheets <br>Joined:$join<br>";
				}

				lojtari8("400","1990","29","200","8 June 2015");

				?></div>
		  
		
		</div></div>
	</div>
	  <div class="flip-box"  style="margin-top:0px; margin-right: 20px;" >
		<div class="flip-box-inner">
		  <div class="flip-box-front" ; style="background-color:black;">
			
			<img src="juan.jpg" alt="lojtar" style="width:350px;height:300px;"   >
		  <div class="bottom-left" style="margin-top:-130px;">
			  <h1 id="numri">8 </h1>
			  <h1 style="text-decoration:overline;
			  text-decoration-color: red;">JUAN</h1>
			  <h1>MATA</h1></div>
			  
		  
	  </div>
		  <div class="flip-box-back" >
			<?php
				
				function lojtari101($appearances, $year,$age,$sheets,$join) {
					echo " Appearances:$appearances<br> Born in $year<br>Age: $age<br>Clean Sheets:$sheets <br>Joined:$join<br>";
				}

				lojtari101("200","1975","36","111","23 August 2010");

				?></div>
			
		</div>
		  
		</div>
		<div class="flip-box" style="margin-top:0px; margin-right: 20px;" >
			<div class="flip-box-inner">
			  <div class="flip-box-front"; style="background-color:black;">
			   
				<img src="jesse.jpg" alt="lojtar" style="width:350px;height:300px ; ">
			  <div class="bottom-left" style="margin-top:-130px;">
				  <h1 id="numri">14 </h1>
				  <h1 style="text-decoration:overline;
				  text-decoration-color: red;">JESSE</h1>
				  <h1>LINGARD</h1></div>
				  
			  
		  </div>
			  <div class="flip-box-back">
				<?php
				
				function lojtari9($appearances, $year,$age,$sheets,$join) {
					echo " Appearances:$appearances<br> Born in $year<br>Age: $age<br>Clean Sheets:$sheets <br>Joined:$join<br>";
				}

				lojtari9("198","1990","29","104","13 December 2010");

				?></div>
				
			</div>
			  
			</div>

			<div class="flip-box" style="margin-top:0px; margin-right: 20px;" >
				<div class="flip-box-inner">
				  <div class="flip-box-front">
				  
					<img src="andreas.jpg" alt="lojtar" style="width:350px;height:300px">
				  <div class="bottom-left" style="margin-top:-130px;">
					  <h1 id="numri">15 </h1>
					  <h1 style="text-decoration:overline;
					  text-decoration-color: red;">ANDREAS</h1>
					  <h1>PEREIRA</h1></div>
					  
				  
			  </div>
				  <div class="flip-box-back">
					<?php
				
				function lojtari102($appearances, $year,$age,$sheets,$join) {
					echo " Appearances:$appearances<br> Born in $year<br>Age: $age<br>Clean Sheets:$sheets <br>Joined:$join<br>";
				}

				lojtari102("200","1975","36","111","23 August 2010");

				?></div></div>
					
				  
				  
				
				 
				</div>
	</div>
	
	
</div>
<div >
	
		
		
	<div class="row1">
<div class="column1">
	
	
	<div class="flip-box">
	  <div class="flip-box-inner">
		<div class="flip-box-front">
		 
		  <img src="fred.jpg" alt="lojtar" style="width:350px;height:300px">
		<div class="bottom-left">
			<h1 id="numri">17 </h1>
			<h1 style="text-decoration:overline;
			text-decoration-color: red;">FRED</h1>
			</div>
		 
		
	</div>
		<div class="flip-box-back">
		  <?php
				
				function lojtari103($appearances, $year,$age,$sheets,$join) {
					echo " Appearances:$appearances<br> Born in $year<br>Age: $age<br>Clean Sheets:$sheets <br>Joined:$join<br>";
				}

				lojtari103("200","1975","36","111","23 August 2010");

				?></div>
		  
		
		</div></div>
	</div>
	  <div class="flip-box"  style="margin-top:0px; margin-right: 20px;" >
		<div class="flip-box-inner">
		  <div class="flip-box-front">
			
			<img src="daniel.jpg" alt="lojtar" style="width:350px;height:300px;"   >
		  <div class="bottom-left" style="margin-top:-130px;">
			  <h1 id="numri">21 </h1>
			  <h1 style="text-decoration:overline;
			  text-decoration-color: red;">DANIEL</h1>
			  <h1>JAMES</h1></div>
			  
		  
	  </div>
		  <div class="flip-box-back" >
			<?php
				
				function lojtari105($appearances, $year,$age,$sheets,$join) {
					echo " Appearances:$appearances<br> Born in $year<br>Age: $age<br>Clean Sheets:$sheets <br>Joined:$join<br>";
				}

				lojtari105("200","1975","36","111","23 August 2010");

				?></div>
			
		</div>
		  
		</div>
		<div class="flip-box" style="margin-top:0px; margin-right: 20px;" >
			<div class="flip-box-inner">
			  <div class="flip-box-front">
			   
				<img src="angel.jpg" alt="lojtar" style="width:350px;height:300px">
			  <div class="bottom-left" style="margin-top:-130px;">
				  <h1 id="numri">18 </h1>
				  <h1 style="text-decoration:overline;
				  text-decoration-color: red;">ANGLE</h1>
				  <h1>GOMES</h1></div>
				  
			  
		  </div>
			  <div class="flip-box-back">
				<?php
				
				function lojtari106($appearances, $year,$age,$sheets,$join) {
					echo " Appearances:$appearances<br> Born in $year<br>Age: $age<br>Clean Sheets:$sheets <br>Joined:$join<br>";
				}

				lojtari106("200","1975","36","111","23 August 2010");

				?></div>
				
			</div>
			  
			</div>

			<div class="flip-box" style="margin-top:0px; margin-right: 20px;" >
				<div class="flip-box-inner">
				  <div class="flip-box-front">
				  
					<img src="matic.jpg" alt="lojtar" style="width:350px;height:300px">
				  <div class="bottom-left" style="margin-top:-130px;">
					  <h1 id="numri">31</h1>
					  <h1 style="text-decoration:overline;
					  text-decoration-color: red;">NEMANJA</h1>
					  <h1>MATIC</h1></div>
					  
				  
			  </div>
				  <div class="flip-box-back">
					 <?php
				
				function team2($appearances, $year,$age,$sheets,$join) {
					echo " Appearances:$appearances<br> Born in $year<br>Age: $age<br>Clean Sheets:$sheets <br>Joined:$join<br>";
				}

				team2("380","1990","29","131","2 Jul 2011");

				?></div></div>
					
				  
				  
				
				 
				</div>
	</div>
	
	
</div>
<div >
	
		
		
	<div class="row1">
<div class="column1">
	
	
	<div class="flip-box">
	  <div class="flip-box-inner">
		<div class="flip-box-front">
		 
		  <img src="j.jpg" alt="lojtar" style="width:350px;height:300px">
		<div class="bottom-left">
			<h1 id="numri">37 </h1>
			<h1 style="text-decoration:overline;
			text-decoration-color: red;">JAMES</h1>
			<h1>GARNER</h1></div>
		 
		
	</div>
		<div class="flip-box-back">
		<?php
				
				function lojtari107($appearances, $year,$age,$sheets,$join) {
					echo " Appearances:$appearances<br> Born in $year<br>Age: $age<br>Clean Sheets:$sheets <br>Joined:$join<br>";
				}

				lojtari107("200","1975","36","111","23 August 2010");

				?></div>
		  
		
		</div></div>
	</div>
	  <div class="flip-box"  style="margin-top:0px; margin-right: 20px;" >
		<div class="flip-box-inner">
		  <div class="flip-box-front">
			
			<img src="james.jpg" alt="lojtar" style="width:350px;height:300px;"   >
		  <div class="bottom-left" style="margin-top:-130px;">
			  <h1 id="numri">39</h1>
			  <h1 style="text-decoration:overline;
			  text-decoration-color: red;">SCOTT</h1>
			  <h1>MCTOMINAY</h1></div>
			  
		  
	  </div>
		  <div class="flip-box-back" >
			 <?php
				
				function team($appearances, $year,$age,$sheets,$join) {
					echo " Appearances:$appearances<br> Born in $year<br>Age: $age<br>Clean Sheets:$sheets <br>Joined:$join<br>";
				}

				team("380","1990","29","131","2 Jul 2011");

				?></div>
			
		</div>
		  
		
			  
			</div>
		</div>
					
				  
				  
				
				 
				</div>
	</div>
	
	
</div>

<p id="klasa1">FORWARDS</p>	
	
	<div >
	
		
		
		<div class="row1">
	<div class="column1">
	
	
	<div class="flip-box">
	  <div class="flip-box-inner">
		<div class="flip-box-front">
		 
		  <img src="san1.png" alt="lojtar" style="width:350px;height:300px">
		<div class="bottom-left">
			<h1 id="numri">7 </h1>
			<h1 style="text-decoration:overline;
			text-decoration-color: red;">ALEXIC</h1>
			<h1>SANCHEZ</h1></div>
		 
		
	</div>
		<div class="flip-box-back">
		  <?php
				
				function team3($appearances, $year,$age,$sheets,$join) {
					echo " Appearances:$appearances<br> Born in $year<br>Age: $age<br>Clean Sheets:$sheets <br>Joined:$join<br>";
				}

				team3("234","1990","29","230","22 January 2011");

				?></div>
		  
		
		</div></div>
	</div>
	  <div class="flip-box"  style="margin-top:0px; margin-right: 20px;" >
		<div class="flip-box-inner">
		  <div class="flip-box-front" ; style="background-color:black;">
			
			<img src="mart.jpg" alt="lojtar" style="width:350px;height:300px;"   >
		  <div class="bottom-left" style="margin-top:-130px;">
			  <h1 id="numri">9 </h1>
			  <h1 style="text-decoration:overline;
			  text-decoration-color: red;">ANTHONY</h1>
			  <h1>MARTIAL</h1></div>
			  
		  
	  </div>
		  <div class="flip-box-back" >
			 <?php
				
				function team4($appearances, $year,$age,$sheets,$join) {
					echo " Appearances:$appearances<br> Born in $year<br>Age: $age<br>Clean Sheets:$sheets <br>Joined:$join<br>";
				}

				team4("123","1990","29","131","12 April 2015");

				?></div>
			
		</div>
		  
		</div>
		<div class="flip-box" style="margin-top:0px; margin-right: 20px;" >
			<div class="flip-box-inner">
			  <div class="flip-box-front"; style="background-color:black;">
			   
				<img src="r1.jpg" alt="lojtar" style="width:350px;height:300px ; ">
			  <div class="bottom-left" style="margin-top:-130px;">
				  <h1 id="numri">10</h1>
				  <h1 style="text-decoration:overline;
				  text-decoration-color: red;">MARCUS</h1>
				  <h1>RASHFORD</h1></div>
				  
			  
		  </div>
			  <div class="flip-box-back">
				 <?php
				
				function team5($appearances, $year,$age,$sheets,$join) {
					echo " Appearances:$appearances<br> Born in $year<br>Age: $age<br>Clean Sheets:$sheets <br>Joined:$join<br>";
				}

				team5("380","1990","29","131","2 Jul 2011");

				?></div>
				
			</div>
			  
			</div>

			<div class="flip-box" style="margin-top:0px; margin-right: 20px;" >
				<div class="flip-box-inner">
				  <div class="flip-box-front">
				  
					<img src="mason.jpg" alt="lojtar" style="width:350px;height:300px">
				  <div class="bottom-left" style="margin-top:-130px;">
					  <h1 id="numri">26 </h1>
					  <h1 style="text-decoration:overline;
					  text-decoration-color: red;">MASON</h1>
					  <h1>GREENWOOD</h1></div>
					  
				  
			  </div>
				  <div class="flip-box-back">
					 <?php
				
				function team8($appearances, $year,$age,$sheets,$join) {
					echo " Appearances:$appearances<br> Born in $year<br>Age: $age<br>Clean Sheets:$sheets <br>Joined:$join<br>";
				}

				team8("380","1990","29","131","2 Jul 2011");

				?></div></div>
					
				  
				  
				
				 
				</div>
	</div>
	
	
</div>
<div >
	
		
		
	<div class="row1">
<div class="column1">
	
	
	<div class="flip-box">
	  <div class="flip-box-inner">
		<div class="flip-box-front">
		 
		  <img src="tahith.jpg" alt="lojtar" style="width:350px;height:300px">
		<div class="bottom-left">
			<h1 id="numri">44 </h1>
			<h1 style="text-decoration:overline;
			text-decoration-color: red;">TAHITH</h1>
			<h1>CHONG</h1></div>
		 
		
	</div>
		<div class="flip-box-back">
		  <p>Age: <big>20</big> </p>
		  <p>Appearances: <big>10</big></p>
		  
		  <p>DATE OF BIRTH 4 DEC 1999</p>
			<p>JOINED 27 Jun 2016</p></div>
		  
		
		</div></div>
	</div>
</div></div></div>
		<br/><br/>


	

<hr></section>
<?php include("mennu1.php");?>
	
</body>




</html>
