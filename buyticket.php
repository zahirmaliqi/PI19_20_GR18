<html lang="en" manifest="example.appcache">
<head>
  <meta http-equiv="content-type" content="text/html"; charset="utf-8"/>
    <title>Login Form</title>
    <link href="buyticket.css" rel="stylesheet" type="text/css"/>


    </head>
    <body>
    <div class="tiketa">
         <form name="myForm" onsubmit="return validateForm()" method="post">
        <h3 style="color:#fff;">
          <?php
            $txt = "Buy Tickets or T-shirt";
            //output text and a variable
            echo "You need to $txt?";
            ?>
           </h3>
        <h7 style="color:white">Fill the details below accurately and we will contact you soon.</h7>
            <input type="text" name="username" placeholder=" Name" required autofocus>
            <br><br>
            <input type="text" name="username" placeholder="Last Name">
            <br><br>
            <input type="tel" name="Phone number"
                   placeholder="Phone number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br><br>
           <input type="password" name="code"
                   placeholder="Your code"><br><br>
            <input type="email" name="email" placeholder="Email address" autocomplete="off" required><br><br>
              <input type="checkbox" name="vehicle1" value="Bike"> I accept terms and condition.<br><br>
              <select class="sty">
  <option value="Select">Select:</option>
  <option value="T-Shirt">T-Shirt</option>
  <option value="Ticket">Ticket</option>
 
               </select>
               <br>
         
        </br>
         
            <input type="submit" formmethod="post" value="BUY NOW" onclick="myFunction()"/><br><br>
            
            <script>
                function myFunction() {
                alert("Are all requirements fulfilled?");
                                       }
            </script>
            
        </form>
        </div>
     
     <script>
function validateForm() {
  var x = document.forms["myForm"]["code"].value;
  if (x == "") {
    alert("You must enter your code to continue.");
    return false;
  }
}
</script>
    <script>
var str = prompt("Type your favourite team:"); 
var n = str.search(/a/i);
alert("The position of a in "+str+" is: " + n);
</script>
    </body>
</html>