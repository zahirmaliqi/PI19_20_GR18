<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="style1.css">
   <link rel="stylesheet" href="stiliT.css">
	 <link rel="stylesheet" href="titulli.css">
	<link rel="stylesheet" type="text/css" href="zahirmaliqi.css">
	
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script> 
        $(document).ready(function(){
          $("#flip").click(function(){
            $("#panel").slideDown("slow");
          });
        });
        </script>
       
    
  </head>
<?php include("menuu.php"); ?>
    <body>     
        <script>
            function myFunction() {
              document.getElementById("demo").innerHTML = "Vicarage Road";
            }
            </script>
            <script>
                        function myF() {
                          document.getElementById("demo1").innerHTML = "Old Trafford";
                        }
                        </script>
         <script>
            function myFu() {
              document.getElementById("demo2").innerHTML = "Anfield";
            }
            </script>
            <script>
                function myFun() {
                  document.getElementById("demo3").innerHTML = "Etihad Stadium";
                }
                </script>
                <script>
                    function myFunc() {
                      document.getElementById("demo4").innerHTML = "Stamford Bridge";
                    }
                    </script>

          <div class="w3-container">
 
            <img src="ekipii.jpg" alt="Lights" style="width:100%;">
            
            
        <div id="flip">
		  <?php define("FIXTURES", "Click to slide the Fixtures");
          //constant inside a function
          function myTest() {
              echo FIXTURES;
              }
              
              myTest();
              ?></div>
        <div id="panel">
            <p style="display: grid;">
  
                <div style="display: grid;">
                  <p id="text2"style="font-size:25px;font-family:Arena;color:white;">MAN UTD<img class="img-valign" src="mmm.jpg" alt="" />
                    <button id="ora" onclick="myFunction()">Janaury 20:00</button>
                    <img class="img-valign" src="fcb.png" alt=""/>BARCELONA </p>
                    <p id="demo" style="text-align: center;color:rgb(216, 37, 127);font-family: Arial, Helvetica, sans-serif;font-size: 20px;"></p>
                  
                </div>
                <div style="display: grid;grid: gap 50;">
                    <p id="text2"style="font-size:25px;font-family:Arena;color:white;padding-left:10px;">MAN UTD<img class="img-valign" src="mmm.jpg" alt="" />
                      <button id="ora" onclick="myF()">February 20:00</button>
                      <img class="img-valign" src="liverpool.jpg" alt=""/>LIVERPOOLL </p>
                      <p id="demo1" style="text-align: center;color:rgb(216, 37, 127);font-family: Arial, Helvetica, sans-serif;font-size: 20px;"></p>
                      
                    
                  </div>
                  <div style="display: grid;">
                    <p id="text2"style="font-size:25px;font-family:Arena;color:white;;grid:5px">MAN UTD<img class="img-valign" src="mmm.jpg" alt="" />
                      <button id="ora" onclick="myFu()">March 20:00</button>
                      <img class="img-valign" src="westhamunited.png" alt=""/>WSTUNITED </p>
                      <p id="demo2" style="text-align: center;color:rgb(216, 37, 127);font-family: Arial, Helvetica, sans-serif;font-size: 20px;"></p>
                    
                  </div>
                  <div style="display: grid;">
                    <p id="text2"style="font-size:25px;font-family:Arena;color:white;">MAN UTD<img class="img-valign" src="mmm.jpg" alt="" />
                      <button id="ora" onclick="myFun()">May 20:00</button>
                      <img class="img-valign" src="milan.png" alt=""/>MILANNNNN</p>
                      <p id="demo3" style="text-align: center;color:rgb(216, 37, 127);font-family: Arial, Helvetica, sans-serif;font-size: 20px;"></p>
                    
                  </div>
                  <div style="display: grid;">
                    <p id="text2"style="font-size:25px;font-family:Arena;color:white;">MAN UTD<img class="img-valign" src="mmm.jpg" alt="" />
                      <button id="ora" onclick="myFunc(1)">August 20:00</button>
                      <img class="img-valign" src="fcb.png" alt=""/>BARCELONA </p>
                      <p id="demo4" style="text-align: center;color:rgb(216, 37, 127);font-family: Arial, Helvetica, sans-serif;font-size: 20px;"></p>
                    
                  </div>
              </p>
              
                
        </div>
          
      
        </div>
      <?php 
  
  class Myclass
  {
   public $font_size ="40px";
   public $font_color = "grey";
   public $font_family="Times New Roman, Times, serif";
   public $string_name = "-------There are two ways to buy tickets for Premier League home games at Old Trafford.-----";
   public $string_name2 ="Alternatively, you can guarantee a seat to any home game with a Matchday VIP Experience.";
   public function customize_print()
	    {
   echo "<p style=font-size:".$this->font_size.";color:".$this->font_color.";font-family:".$this->font_family.";>".$this->string_name."</p>";
    echo "<p style=font-size:".$this->font_size.";color:".$this->font_color.";font-family:".$this->font_family.";>".$this->string_name2."</p>";
     }
  }
  $f = new MyClass;
  echo $f->customize_print();
  ?>
            <br/>
            
           <a href="buyticket.php"> <button id="button1" type="button" >
		   <?php
           // case-insensitive constant name 
           define("BUY", "BUY TICKETS", true);
            echo BUY;?><small>&#8594 </small></button></a>
            
           <a href="buyticket.php"><button  id="butoni1" type="button" > 
		   <?php
           // case-insensitive constant name 
           define("VIP", "BUY MATCHDAY VIP", true);
            echo VIP;?><small>&#8594 </small></button></a>

          
<div class="mySlides" >
    <a href="video.html">
    <img id="you" src="youtube.gif" > 
    </a>
  </div>
  
  <div class="mySlides">
    <a href="video.html">
    <img id="you"src="lala.jpg" >
    </a>
  
  </div>
  <div class="mySlides" >
    <a href="video.html">
    <img id="you"src="mali.jpg" >
    </a>
  
  </div>
  
  <div >
    <span class="dot1"></span> 
    <span class="dot1"></span> 
    <span class="dot1"></span> 
  </div>
  
  
  <script>
  var slideIndex = 0;
  show();
  function show() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot1");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(show, 2000); 
  }
  </script>
  <div id="box">
    <img src="uefa.png" style=" width:100px; height:100px;position:relative ;padding-left:110px; ">
    <p style="text-align:center;font-size: 15px;color:green">GROUP  L</p>
    <table id="customers">
      <tr>
        <td >Pos</td>
        <td > Team </td>
        <td > P </td>
        <td > W	</td>
        <td >Pts</td>
      
      </tr>
      <tr>
        <td style="color:chartreuse" >1	</td>
        <td style="color:chartreuse" >ManUtd</td>
        <td style="color:chartreuse" >6</td>
        <td style="color:chartreuse" >4</td>
        <td style="color:chartreuse" >13</td>
        
      </tr>
      <tr>
        <td>2</td>
        <td>Arizona</td>
        <td>6</td>
        <td>2</td>
        <td>9</td>
        </tr>
     <tr>
            <td>2</td>
            <td>Arizona</td>
            <td>6</td>
            <td>3</td>
            <td>9</td>
            </tr>
     <tr>
                <td>2</td>
                <td>Arizona</td>
                <td>6</td>
                <td>4</td>
                <td>9</td>
     </tr>
       
      
    </table>
    
    <button id="viewall" type="button"><a  href="https://www.manutd.com/en/matches/first-team/2019-20/europa-league">VIEW ALL&raquo;</a></button>
  <hr id="hr2">
  
    </div>
    <div id="box">
        <img src="premier1.png" style=" width:100px; height:100px;position:relative ;padding-left:110px; ">
        <p style="text-align:center;font-size: 15px;color:green">PREMIER LEAGUE</p>
        <table id="customers">
          <tr>
            <td >Pos	 Team    P 	   W	   Pts</td>
          
          </tr>
          <tr>
            <td style="color:chartreuse" >1	MAN UTD 17	16	49</td>
            
          </tr>
          <tr>
            <td>2	Leicester	18	12	39</td>
           
          </tr>
          <tr>
            <td>8	Liverpool	18	6	25</td>
            
          </tr>
          <tr>
            <td>3	Man City	18	12	38</td>
           
          </tr>
        </table>
        
        <button id="viewall" type="button"><a  href="https://www.manutd.com/en/matches/first-team/2019-20/premier-league/league-table">VIEW ALL&raquo;</a></button>
      <hr id="hr2">
      
        </div>
        <br/>
        
              <div class="dropdown">
              <span style="color:green;font-size: 30px;font-family: fantasy;">The best player in Premier League</span>
              <div class="dropdown-content">
              <p style="font-size:12px;color:rgb(228, 128, 6);">
	      <?php
              //constant array
                define("players", [
                    "Paul Pogba",
                    "Aaron Wan-Bissaka",
                    "Bruno Miguel Borges Fernandes "
                ]);
                echo players[1];
                ?></p>
              </div>
  </div>
        <hr id="hr2">
        <br/>

        <article class="graphic">
            <figure>
           
            <a href="https://www.manutd.com/en/Partners/Global/adidas"><img src="adidas.png" alt="Image for graphic work"></a>
                <figcaption>ADIDAS</figcaption>
            </figure>
        </article>
        <article class="web">
            <figure>
               <a href="https://www.manutd.com/en/Partners/Global/Apollo-Tyres"><img src="APOLLO.png" alt="Image for web work"></a>
                <figcaption>APOLLO</figcaption>
            </figure>
        </article>
        <article class="misc">
            <figure>
               <a href="https://www.manutd.com/en/Partners/Global/Konami" ><img src="KONAMI.png" ></a>
                <figcaption>KONAMI</figcaption>
            </figure>
            <figure>
                <a href="https://www.manutd.com/en/Partners/Global/Deezer"><img src="DEEZER.png" ></a>
                <figcaption>DEEZER</figcaption>
            </figure>
        </article>
        <article class="web">
            <figure>
                <a href="https://www.hcltech.com/unitedbyhcl"><img src="HCL.png" ></a>
                <figcaption>HCL</figcaption>
            </figure>
       </article>
       <article class="misc">
        <figure>
           <a href="https://www.manutd.com/en/Partners/Global/Visit-Malta"><img src="VISITMALTA.png" ></a>
            <figcaption>VISITMALTA</figcaption>
        </figure>
        <figure>
            <a href="http://www.yabo2018.com/"><img src="mau.png" ></a>
            <figcaption>YABO</figcaption>
        </figure>
    </article>
    <article class="web">
        <figure>
            <a href="https://www.manutd.com/en/Partners/Global/DHL"><img src="DHL.png" ></a>
            <figcaption>DHL</figcaption>
        </figure>
   </article>
   <article class="web">
    <figure>
        <a href="https://www.manutd.com/en/Partners/Global/Melitta"><img src="abc.png" ></a>
        <figcaption>MELITA</figcaption>
    </figure>
</article>

      <hr id="hr2">
<?php include("mennu1.php"); ?>
               </body></html>
