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
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    
	<title>Legend Gallery</title>
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
     <?php include("menuu.php"); ?>

      <?php
$host_name = 'www.google.com';
$port_no = '80';

$st = (bool)@fsockopen($host_name, $port_no, $err_no, $err_str, 10);
if ($st) {
    echo "<img  src='greenlight.gif' style='width:35px;height:35px;' />";
} else {
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
<a href="quiz.php"><button type="button" style="padding:2px 15px;font-size:20px;font-weight:700;background: yellow;border-radius:30px;color:black;">Play Quiz!<small>&gt;&gt;</small></button></a>

 <?php
$servername = "localhost";
$username = "root";
$password = "";
//require_once("dbconfig.php");
// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die(" " . mysqli_connect_error());
}
echo " ";
	  /*
$sql = "CREATE DATABASE quizzer";
if (mysqli_query($conn, $sql)) {
    echo " ";
} else {
    echo "  " . mysqli_error($conn);
}
$dbname = "quizzer";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("  " . mysqli_connect_error());
}

// sql to create table Pas KRIJIMIT TE TABELES TE KOMENTOHET PJESA E CREATE DATABASE DHE CREATE TABLE EDHE INSERTIMI I VALUVE 
$sql = "CREATE TABLE questions (
question_number INT(11)  PRIMARY KEY,
text TEXT

)";

if (mysqli_query($conn, $sql)) {
    echo " ";
} else {
    echo "  " . mysqli_error($conn);
}
$sql =" INSERT INTO questions (question_number,text) VALUES
(1, 'What is the name of Manchester Uniteds home ground?'),
(2, 'When David Beckham played for United, which number did he wear?'),
(3, 'Who was the manager before Ole Gunnar Solskjaer?'),
(4, 'Who was Uniteds top goalscorer in the 2018/19 season?'),
(5, 'What is Manchester Uniteds nickname?'),
(6, 'How many times have Man United won the FA Cup?'),
(7, 'Who is Manchester Uniteds all time top goalscorer?'),
(8, 'What nickname did United fans give to Eric Cantona?'),
(9, 'In what year did Manchester United sign David de Gea?'),
(10, 'Manchester United released a song called :Come On You Reds in 1994 where did it place in the UK singles chart?')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}




$sql = "CREATE TABLE choices (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    question_number INT(11) NOT NULL,
    is_correct TINYINT(1) NOT NULL DEFAULT '0',
    text TEXT
    
  
    )";
    
    if (mysqli_query($conn, $sql)) {
        echo " ";
    } else {
        echo "  " . mysqli_error($conn);
    }
    $sql =" INSERT INTO choices (question_number,is_correct,text) VALUES
    (1,0,'Bramall Lane'),
    (1,0,'Elland Road'),
    (1,1,'Old Trafford'),
    (1,0,'ST James s Park'),

    (2,0,'26'),
    (2,1,'7'),
    (2,0,'8'),
    (2,0,'19'),

    (3,1,'Jose Mourinho'),
    (3,0,'Louis Van Gaal'),
    (3,0,'David Moyes'),
    (3,0,'Alex Ferguson'),

    (4,0,'Marcus Rashford'),
    (4,0,'Juan Mata'),
    (4,0,'Anthony Martial'),
    (4,1,'Paul Pogba'),

    (5,0,'The Reds'),
    (5,0,'The Blades'),
    (5,1,'Red Devils'),
    (5,0,'The Toffees'),

    (6,0,'10'),
    (6,0,'11'),
    (6,1,'12'),
    (6,0,'13'),

    (7,0,'Wayne Rooney'),
    (7,0,'Bobby Charlton'),
    (7,1,'Ryan Giggs'),
    (7,0,'Mark Hughes'),

    (8,0,'God'),
    (8,0,'The Magician'),
    (8,0,'The Flying Frenchman'),
    (8,1,'King Eric'),

    (9,1,'2011'),
    (9,0,'2012'),
    (9,0,'2013'),
    (9,0,'2014'),

    (10,1,'1'),
    (10,0,'10'),
    (10,0,'43'),
    (10,0,'99')";
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }*/
    
?>


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
				
									   
<hr></section>
<?php include("mennu1.php");?>
	
</body>




</html>
