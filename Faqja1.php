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
	
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
    
  </head>

  <body>
   <?php include("menuu.php"); ?>
		    <div class="mySlides fade">
  <img src="azk.jpeg" style="width:100%">
  <div class="text">Paul Pogba has been conspicuous in his absence from Manchester
	  United's starting line-up this season and now the World Cup winner faces
	  more time on the sidelines as he is set to undergo an operation on an ankle injury.
  </div>
</div>
 <div class="mySlides fade">
  <img src="aq2.jpeg" style="width:100%">
  <div class="text">Two goals by Marcus Rashford helped inspire Manchester United 
	  to a 4-0 victory over Chelsea at Old Trafford.Harry Maguire and Aaron 
	  Wan-Bissaka  helped to keep a clean sheet for Ole Gunnar Solskjaer’s side.</div>
</div>

<div class="mySlides fade">
  <img src="az4.jpeg" style="width:100%">
  <div class="text">Manchester United saw the Fred they signed in two moments vs 
	  Tottenham.David De Gea joined Manchester United from Atletico Madrid as
	  United shelled a whopping £28.6 m to acquire his service.</div>
</div>

<div class="mySlides fade">
    <img src="az.jpeg" style="width:100%">
    <div class="text">Paul Pogba's Manchester United comeback is set to be delayed 
	    after he missed two days' training because of illness.Paul Pogba has been
	    conspicuous in his absence from Manchester United's starting line-up this
	    season and now the World Cup winner faces more time on the sidelines as he
	    is set to undergo an operation on an ankle injury.</div>
  </div>

  <div class="mySlides fade">
    <img src="asd.jpeg" style="width:100%">
    <div class="text">Wayne Rooney is Manchester United's all-time leading scorer and
	    the only player to have scored 250 goals for the Reds.Rooney's place among
	    the icons of Old Trafford was also secured via his appointment as club captain,
	    an honour afforded to him on the eve of the 2014/15 season.</div>
  </div>

</div>


<div style="text-align:center;">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span> 
  <span class="dot"></span>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
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
  setTimeout(showSlides, 3000);
}
</script>
       <div style="background:-webkit-linear-gradient(right,white,white,white,red);">
  <br>
          <p class="titulli"><big>C</big>HAMP<big class="redbig">20</big>NS</p>
	  <div class="d1">
<p>It's about a dedication and a passion whatever the score.It's about the hope and the dream. </p>
<p> We will never die .We will  keep the red flag flying high. </p>
</div>
	       <a href="Tickets.html"><button type="button">VIEW THE FIXTURES<small>&gt;&gt;</small></button></a>
<hr id="hr2">
<br/>
<br/>
<table border="0" cellspacing="2px">
<tr>
<td>
<p class="paragrafi"> <img src="Foto1.jpg" id="imazhet">
<span style="color:#800000;font-weight:bold;">RASHFORD EXPLAINS SUPERB GOALSCORING FORM</span><br>
Marcus Rashford has revealed that consistency is the reason behind his superb goalscoring form.
The Manchester United no.10 has put in sensational performance after sensational performance in the last few weeks and again he found the back of the net during Saturday’s Manchester derby.
</p></td>
<td>
<p class="paragrafi"> <img src="Foto2.jpg" id="imazhet">
<span style="color:#800000;font-weight:bold;">THE MAIN TALKING POINTS FROM THE DERBY</span><br>
Manchester United enjoyed a superb evening on Saturday, when we emerged from the Etihad with a vital 2-1 win in the Manchester derby.
The Reds grabbed all three points in the clash with Manchester City, thanks to Marcus Rashford and Anthony Martial.
</p></td>
</tr>
<tr>
<td>
  <p class="paragrafi"> <img src="Foto3.jpg" id="imazhet">
  <span style="color:#800000;font-weight:bold;">UNITED MAKE CHRISTMAS DREAMS COME TRUE</span><br>
The Manchester United first-team squad paid a special festive visit to young patients at three local hospitals, to deliver some early Christmas gifts.
Following the United Women's visit on Monday, the players went to Royal Manchester Children’s Hospital and Francis House Children’s Hospice. 
       </p></td>
      <td>
        <p class="paragrafi"> <img src="Foto4.jpg" id="imazhet">
       <span style="color:#800000;font-weight:bold;">UNITED V AZ ALKMAAR AT OLD TRAFFORD</span><br>
         Manchester United will return to action on Thursday when AZ Alkmaar visit Old Trafford in the UEFA EU League, with the top spot in Group L up for grabs between two sides.
    Ole Gunnar Solskjaer's Reds require just a point to secure first place in the pool.
    </p></td>
    </tr>
     </table>
     <br/>
    <br/>
    </div>
       </section>
	<?php include("mennu1.php"); ?>
	   </body></html>