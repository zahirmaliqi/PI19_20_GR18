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
    
    <title>Document</title>
    
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
                            <li> <a href="Historyandcuriosities.html">HISTORY AND CURIOSITIES</a> </li>
			    <li><a href="pjesa2.html">PLAYERS</a>  </li>
                            <li>  <a href="pic.html">GALLERY</a></li>
                            <li> <a href="Tickets.html">FIXTURES</a> </li>
                            <li> <a href="Game.html">GAME</a> </li>
                       </ul> 
          </nav>
</head>
<div class="ekipet">
<ul>
	<li><a href="pic.html" style="color:white;" >First team</a></li>
	<li><a href="women.html" style="color:white;" >Women</a>  </li>
	<li> <a href="rinia.html" style="color:white;" >Under 23s and 18s</a> </li>
	
	<li> <a href="legjendat.html" style="color:white;" >Legends</a> </li>
	
</ul>
 </div>
	<p id="klasa1">GOALKEEPERS</p>
	<div >
	
		
		
			<div class="row1">
		<div class="column1">
		
		
		<div class="flip-box">
		  <div class="flip-box-inner">
			<div class="flip-box-front">
		     
			  <img src="sio1.jpg" alt="lojtar" style="width:350px;height:300px">
			<div class="bottom-left">
				<h1 id="numri">1 </h1>
				<h1 style="text-decoration:overline;
				text-decoration-color: red;">SIOBHAN</h1>
				<h1>CHAMBERLAIN</h1></div>
		     
			
		</div>
			<div class="flip-box-back" >
			  
			  <?php
				//function with two arguments ($fname and $year)
				function familyName($fname, $year) {
					echo "$fname Refsnes. Born in $year <br>";
				}

				familyName("Hege","1975");

				?></div>
			  
			
			</div></div>
		</div>
		  <div class="flip-box"  style="margin-top:0px; margin-right: 20px;" >
			<div class="flip-box-inner">
			  <div class="flip-box-front">
				
				<img src="emi2.jpg" alt="lojtar" style="width:350px;height:300px;"   >
			  <div class="bottom-left" style="margin-top:-130px;">
				  <h1 id="numri">13 </h1>
				  <h1 style="text-decoration:overline;
				  text-decoration-color: red;">EMILY</h1>
				  <h1>RAMSEY</h1></div>
				  
			  
		  </div>
			  <div class="flip-box-back" >
				
				<?php
			   //Sort Array in Descending Order
					$notes = array("Age : 32", "Appearances : 51", "Clean sheets : 32", "DATE OF BIRTH 22 Feb 1987","JOINED 27 Jul 2015");
					rsort($notes);

					$clength = count($notes);
					for($x = 0; $x < $clength; $x++) {
						echo $notes[$x];
						echo "<br>";
					}
					?></div>
				
			</div>
			  
			</div>
			<div class="flip-box" style="margin-top:0px; margin-right: 20px;" >
				<div class="flip-box-inner">
				  <div class="flip-box-front">
				   
					<img src="auro3.jpg" alt="lojtar" style="width:350px;height:300px">
				  <div class="bottom-left" style="margin-top:-130px;">
					  <h1 id="numri">15 </h1>
					  <h1 style="text-decoration:overline;
					  text-decoration-color: red;">AURORA</h1>
					  <h1>MIKALSEN</h1></div>
					  
				  
			  </div>
				  <div class="flip-box-back">
					<p>Age: <big>32</big> </p>
					<p>Appearances: <big>51</big></p>
					<p>Clean sheets : 32 </p>
					<p>DATE OF BIRTH
						22 Feb 1987</p>
					<p>JOINED 27 Jul 2015</p></div>
					
				</div>
				  
				</div>

				<div class="flip-box" style="margin-top:0px; margin-right: 20px;" >
					<div class="flip-box-inner">
					  <div class="flip-box-front">
					  
						<img src="fran4.jpg" alt="lojtar" style="width:350px;height:300px">
					  <div class="bottom-left" style="margin-top:-130px;">
						  <h1 id="numri">22 </h1>
						  <h1 style="text-decoration:overline;
						  text-decoration-color: red;">FRAN</h1>
						  <h1>BENTLEY</h1></div>
						  
					  
				  </div>
					  <div class="flip-box-back">
						<p>Age: <big>23</big> </p>
						<p>Appearances: <big>3</big></p>
						<p>Clean sheets : 3 </p>
						<p>DATE OF BIRTH 28 Jun 1996</p>
						<p>JOINED 1 Jul 2012</p></div></div>
						
					  
					  
					
					 
                    </div> </div></div>
                    <div >
                        
                            
                            
                        <div class="row1">
                    <div class="column1">
                    <div class="flip-box"  >
                        <div class="flip-box-inner">
                          <div class="flip-box-front">
                           
                            <img src="bent5.jpg" alt="lojtar" style="width:350px;height:300px">
                          <div class="bottom-left" style="margin-top:-130px;">
                              <h1 id="numri">27 </h1>
                              <h1 style="text-decoration:overline;
                              text-decoration-color: red;">MARY</h1>
                              <h1>EARPS</h1></div>
                              
                          
                      </div>
                          <div class="flip-box-back">
                            <p>Age: <big>32</big> </p>
                            <p>Appearances: <big>51</big></p>
                            <p>Clean sheets : 32 </p>
                            <p>DATE OF BIRTH
                                22 Feb 1987</p>
                            <p>JOINED 27 Jul 2015</p></div>
                            
                        </div>
                          
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
		 
		  <img src="martha6.jpg" alt="lojtar" style="width:350px;height:300px">
		<div class="bottom-left">
			<h1 id="numri">2 </h1>
			<h1 style="text-decoration:overline;
			text-decoration-color: red;">MARTHA </h1>
			<h1>HARRIS</h1></div>
		 
		
	</div>
		<div class="flip-box-back">
		  <p>Age: <big>25</big> </p>
		  <p>Appearances: <big>91</big></p>
		  <p>Total Goals: <big>2</big></p>
		  <p>DATE OF BIRTH 17 Jul 1994</p>
			<p>JOINED 1 Jul 2017</p></div>
		  
		
		</div></div>
	</div>
	  <div class="flip-box"  style="margin-top:0px; margin-right: 20px;" >
		<div class="flip-box-inner">
		  <div class="flip-box-front">
			
			<img src="lotta7.jpg" alt="lojtar" style="width:350px;height:300px;"   >
		  <div class="bottom-left" style="margin-top:-130px;">
			  <h1 id="numri">3 </h1>
			  <h1 style="text-decoration:overline;
			  text-decoration-color: red;">LOTTA</h1>
			  <h1>OKVIST</h1></div>
			  
		  
	  </div>
		  <div class="flip-box-back" >
			<p>Age: <big>25</big> </p>
			<p>Appearances: <big>74</big></p>
			<p>Total Goals: <big>1</big></p>
			<p>DATE OF BIRTH
				12 APR 1994</p>
			<p>JOINED 8 Jun 2016</p></div>
			
		</div>
		  
		</div>
		<div class="flip-box" style="margin-top:0px; margin-right: 20px;" >
			<div class="flip-box-inner">
			  <div class="flip-box-front">
			   
				<img src="amy8.jpg" alt="lojtar" style="width:350px;height:300px">
			  <div class="bottom-left" style="margin-top:-130px;">
				  <h1 id="numri">4 </h1>
				  <h1 style="text-decoration:overline;
				  text-decoration-color: red;">AMY</h1>
				  <h1>TURNER</h1></div>
				  
			  
		  </div>
			  <div class="flip-box-back">
				<p>Age: <big>27</big> </p>
				<p>Appearances: <big>221</big></p>
				<p>Total Goals: <big>5</big></p>
				<p>DATE OF BIRTH
					21 FEB 1992</p>
				<p>JOINED 1 Jul 2011</p></div>
				
			</div>
			  
			</div>

			<div class="flip-box" style="margin-top:0px; margin-right: 20px;" >
				<div class="flip-box-inner">
				  <div class="flip-box-front">
				  
					<img src="abbi9.jpg" alt="lojtar" style="width:350px;height:300px">
				  <div class="bottom-left" style="margin-top:-130px;">
					  <h1 id="numri">5 </h1>
					  <h1 style="text-decoration:overline;
					  text-decoration-color: red;">ABBIE</h1>
					  <h1>MCMANUS</h1></div>
					  
				  
			  </div>
				  <div class="flip-box-back">
					<p>Age: <big>26</big> </p>
					<p>Appearances: <big>26</big></p>
					
					<p>DATE OF BIRTH 5 MAR  1993</p>
					<p>JOINED 5 AUG 2019</p></div></div>
					
				  
				  
				
				 
				</div>
	</div>
	
	
</div>
<div >
	
		
		
	<div class="row1">
<div class="column1">
	
	
	<div class="flip-box">
	  <div class="flip-box-inner">
		<div class="flip-box-front">
		 
		  <img src="smith9.jpg" alt="lojtar" style="width:350px;height:300px">
		<div class="bottom-left">
			<h1 id="numri">20 </h1>
			<h1 style="text-decoration:overline;
			text-decoration-color: red;">KRISY</h1>
			<h1>SMAITH</h1></div>
		 
		
	</div>
		<div class="flip-box-back">
		  <p>Age: <big>30</big> </p>
		  <p>Appearances: <big>323</big></p>
		  <p>Total Goals: <big>18</big></p>
		  <p>DATE OF BIRTH 22 NOV 1989</p>
			<p>JOINED 1 Jul 2010</p></div>
		  
		
		</div></div>
	</div>
	  <div class="flip-box"  style="margin-top:0px; margin-right: 20px;" >
		<div class="flip-box-inner">
		  <div class="flip-box-front">
			
			<img src="mill10.jpg" alt="lojtar" style="width:350px;height:300px;"   >
		  <div class="bottom-left" style="margin-top:-130px;">
			  <h1 id="numri">21 </h1>
			  <h1 style="text-decoration:overline;
			  text-decoration-color: red;">MILLIE</h1>
			  <h1>TURNER</h1></div>
			  
		  
	  </div>
		  <div class="flip-box-back" >
			<p>Age: <big>29</big> </p>
			<p>Appearances: <big>122</big></p>
			<p>Total Goals: <big>2</big></p>
			<p>DATE OF BIRTH
				20 MAR 1990</p>
			<p>JOINED 20 AUG 2014</p></div>
			
		</div>
		  
		</div>
	
		  
				  
				
				 
				</div>
	</div>
	
	
</div>
<div >
	
		
		
	

<p id="klasa1">MIDFIELDERS</p>	
	
	<div >
	
		
		
		<div class="row1">
	<div class="column1">
	
	
	<div class="flip-box">
	  <div class="flip-box-inner">
		<div class="flip-box-front">
		 
		  <img src="1aimee.jpg" alt="lojtar" style="width:350px;height:300px">
		<div class="bottom-left">
			<h1 id="numri">6 </h1>
			<h1 style="text-decoration:overline;
			text-decoration-color: red;">AMIEE</h1>
			<h1>PALMER</h1></div>
		 
		
	</div>
		<div class="flip-box-back">
		  <p>Age: <big>26</big> </p>
		  <p>Appearances: <big>150</big></p>
		  <p>Total Goals: <big>31</big></p>
		  <p>DATE OF BIRTH 15 MAR 1993</p>
			<p>JOINED 8 AUG 2016</p></div>
		  
		
		</div></div>
	</div>
	  <div class="flip-box"  style="margin-top:0px; margin-right: 20px;" >
		<div class="flip-box-inner">
		  <div class="flip-box-front" ; style="background-color:black;">
			
			<img src="2moll.jpg" alt="lojtar" style="width:350px;height:300px;"   >
		  <div class="bottom-left" style="margin-top:-130px;">
			  <h1 id="numri">8 </h1>
			  <h1 style="text-decoration:overline;
			  text-decoration-color: red;">MOLLIE</h1>
			  <h1>GREEN</h1></div>
			  
		  
	  </div>
		  <div class="flip-box-back" >
			<p>Age: <big>31</big> </p>
			<p>Appearances: <big>237</big></p>
			<p>Total Goals: <big>46</big></p>
			<p>DATE OF BIRTH
				28 APR 1988</p>
			<p>JOINED 25 Jun 2014</p></div>
			
		</div>
		  
		</div>
		<div class="flip-box" style="margin-top:0px; margin-right: 20px;" >
			<div class="flip-box-inner">
			  <div class="flip-box-front"; style="background-color:black;">
			   
				<img src="3katie.jpg" alt="lojtar" style="width:350px;height:300px ; ">
			  <div class="bottom-left" style="margin-top:-130px;">
				  <h1 id="numri">10 </h1>
				  <h1 style="text-decoration:overline;
				  text-decoration-color: red;">KATIE</h1>
				  <h1>ZELEM</h1></div>
				  
			  
		  </div>
			  <div class="flip-box-back">
				<p>Age: <big>27</big> </p>
				<p>Appearances: <big>193</big></p>
				<p>Total Goals: <big>30</big></p>
				<p>DATE OF BIRTH
					15 DEC 1992</p>
				<p>JOINED 1 Jul 2001</p></div>
				
			</div>
			  
			</div>

			<div class="flip-box" style="margin-top:0px; margin-right: 20px;" >
				<div class="flip-box-inner">
				  <div class="flip-box-front">
				  
					<img src="4hay.jpg" alt="lojtar" style="width:350px;height:300px">
				  <div class="bottom-left" style="margin-top:-130px;">
					  <h1 id="numri">12 </h1>
					  <h1 style="text-decoration:overline;
					  text-decoration-color: red;">HAYLEY</h1>
					  <h1>LADD</h1></div>
					  
				  
			  </div>
				  <div class="flip-box-back">
					<p>Age: <big>24</big> </p>
					<p>Appearances: <big>59</big></p>
					<p>Total Goals: <big>3</big></p>
					<p>DATE OF BIRTH 1 JAN  1996</p>
					<p>JOINED 1 JUL 2012</p></div></div>
					
				  
				  
				
				 
				</div>
	</div>
	
	
</div>
<div >
	
		
		
	<div class="row1">
<div class="column1">
	
	
	<div class="flip-box">
	  <div class="flip-box-inner">
		<div class="flip-box-front">
		 
		  <img src="5jakc.jpg" alt="lojtar" style="width:350px;height:300px">
		<div class="bottom-left">
			<h1 id="numri">14 </h1>
			<h1 style="text-decoration:overline;
            text-decoration-color: red;">JACKIE</h1>
            <h1>GROENEN</h1>
					  
			</div>
		 
		
	</div>
		<div class="flip-box-back">
		  <p>Age: <big>26</big> </p>
		  <p>Appearances: <big>47</big></p>
		  <p>Total Goals: <big>1</big></p>
		  <p>DATE OF BIRTH 5 MAR 1993</p>
			<p>JOINED 21 Jun 2018</p></div>
		  
		
		</div></div>
	</div>
	  <div class="flip-box"  style="margin-top:0px; margin-right: 20px;" >
		<div class="flip-box-inner">
		  <div class="flip-box-front">
			
			<img src="6lauren.jpg" alt="lojtar" style="width:350px;height:300px;"   >
		  <div class="bottom-left" style="margin-top:-130px;">
			  <h1 id="numri">16 </h1>
			  <h1 style="text-decoration:overline;
			  text-decoration-color: red;">LAUREN</h1>
			  <h1>JAMES</h1></div>
			  
		  
	  </div>
		  <div class="flip-box-back" >
			<p>Age: <big>22</big> </p>
			<p>Appearances: <big>24</big></p>
			<p>Total Goals: <big>3</big></p>
			<p>DATE OF BIRTH
				10 NOV 1997</p>
			<p>JOINED 12 JUN 2019</p></div>
			
		</div>
			  	</div></div>
					
			
		
			  
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
		 
		  <img src="1elle.jpg" alt="lojtar" style="width:350px;height:300px">
		<div class="bottom-left">
			<h1 id="numri">7 </h1>
			<h1 style="text-decoration:overline;
			text-decoration-color: red;">ELLA</h1>
			<h1>TOONE</h1></div>
		 
		
	</div>
		<div class="flip-box-back">
		  <p>Age: <big>31</big> </p>
		  <p>Appearances: <big>45</big></p>
		  <p>Total Goals: <big>5</big></p>
		  <p>DATE OF BIRTH 19 DEC 1988</p>
			<p>JOINED 22 JAN 2018</p></div>
		  
		
		</div></div>
	</div>
	  <div class="flip-box"  style="margin-top:0px; margin-right: 20px;" >
		<div class="flip-box-inner">
		  <div class="flip-box-front" ; style="background-color:black;">
			
			<img src="2jess.jpg" alt="lojtar" style="width:350px;height:300px;"   >
		  <div class="bottom-left" style="margin-top:-130px;">
			  <h1 id="numri">9 </h1>
			  <h1 style="text-decoration:overline;
			  text-decoration-color: red;">JESS</h1>
			  <h1>SIGSWORTH</h1></div>
			  
		  
	  </div>
		  <div class="flip-box-back" >
			<p>Age: <big>24</big> </p>
			<p>Appearances: <big>194</big></p>
			<p>Total Goals: <big>58</big></p>
			<p>DATE OF BIRTH
				5 DEC 1995</p>
			<p>JOINED 1 SEP 2015</p></div>
			
		</div>
		  
		</div>
		<div class="flip-box" style="margin-top:0px; margin-right: 20px;" >
			<div class="flip-box-inner">
			  <div class="flip-box-front"; style="background-color:black;">
			   
				<img src="3leah.jpg" alt="lojtar" style="width:350px;height:300px ; ">
			  <div class="bottom-left" style="margin-top:-130px;">
				  <h1 id="numri">11</h1>
				  <h1 style="text-decoration:overline;
				  text-decoration-color: red;">LEAH</h1>
				  <h1>GALTON</h1></div>
				  
			  
		  </div>
			  <div class="flip-box-back">
				<p>Age: <big>22</big> </p>
				<p>Appearances: <big>197</big></p>
				<p>Total Goals: <big>61</big></p>
				<p>DATE OF BIRTH
					31 OCT 1997</p>
				<p>JOINED 1 Jul 2014</p></div>
				
			</div>
			  
			</div>

			<div class="flip-box" style="margin-top:0px; margin-right: 20px;" >
				<div class="flip-box-inner">
				  <div class="flip-box-front">
				  
					<img src="4lizz.jpg" alt="lojtar" style="width:350px;height:300px">
				  <div class="bottom-left" style="margin-top:-130px;">
					  <h1 id="numri">17</h1>
					  <h1 style="text-decoration:overline;
					  text-decoration-color: red;">LIZZIE</h1>
					  <h1>ARNOT</h1></div>
					  
				  
			  </div>
				  <div class="flip-box-back">
					<p>Age: <big>18</big> </p>
					<p>Appearances: <big>28</big></p>
					<p>Total Goals: <big>8</big></p>
					<p>DATE OF BIRTH 1 OCT  2001</p>
					<p>JOINED 1 JUL 2018</p></div></div>
					
				  
				  
				
				 
				</div>
	</div>
	
	
</div>
<div >
	
		
		
	<div class="row1">
<div class="column1">
	
	
	<div class="flip-box">
	  <div class="flip-box-inner">
		<div class="flip-box-front">
		 
		  <img src="5kri.jpg" alt="lojtar" style="width:350px;height:300px">
		<div class="bottom-left">
			<h1 id="numri">18 </h1>
			<h1 style="text-decoration:overline;
			text-decoration-color: red;">KIRSTY</h1>
			<h1>HANSON</h1></div></div>
		 
		
	</div>
		<div class="flip-box-back">
		  <p>Age: <big>20</big> </p>
		  <p>Appearances: <big>10</big></p>
		  
		  <p>DATE OF BIRTH 4 DEC 1999</p>
			<p>JOINED 27 Jun 2016</p></div>
		  
		
		</div></div>
    
    <div class="flip-box">
        <div class="flip-box-inner">
          <div class="flip-box-front">
           
            <img src="6jane.jpg" alt="lojtar" style="width:350px;height:300px">
          <div class="bottom-left">
              <h1 id="numri">19 </h1>
              <h1 style="text-decoration:overline;
              text-decoration-color: red;">JANE</h1>
              <h1>ROSS</h1></div></div>
           
          
      </div>
          <div class="flip-box-back">
            <p>Age: <big>20</big> </p>
            <p>Appearances: <big>10</big></p>
            
            <p>DATE OF BIRTH 4 DEC 1999</p>
              <p>JOINED 27 Jun 2016</p></div>
            
          
          </div></div>
      </div>
    
</div></div></div>
	<br/>
	
		<br/><br/>


	



</body>
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