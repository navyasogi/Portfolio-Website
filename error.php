<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
<meta name="viewport" content="width=device-width" initial-scale="1">
<meta charset="utf-8">
<link rel="stylesheet" href="portfolio.css">
<link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
<script type="text/javascript" src = "https://kit.fontawesome.com/a076d05399.js"></script>
<script src="js/login.js"></script>
</head>
<body class="wrapper">
    <div class="welcome">
      <div class="head">
        <header>
           <nav class="name">
            <ul>
              <li><b>Navya Sogi</b></li>
            </ul>
          </nav>
          <nav class="navbar">
            <ul>
              <li><a class="isDisabled" href=""><b>HOME</b></a></li>
              <li><a class="isDisabled" href=""><b>MY SKILLS</b></a></li>
              <li><a class="isDisabled" href=""><b>RECOMMENDATION</b></a></li>
              <li><a class="isDisabled" href=""><b>WORKS</b></a></li>
              <li><a class="isDisabled" href=""><b>BLOG</b></a></li>
              <li><a class="isDisabled" href=""><b>HIRE ME</b></a></li>
              <li><a class="isDisabled" href="login.php"><b>LOGIN</b></a></li>
              <li><a class="isDisabled" onclick="signup()"><b>SIGN UP</b></a></li>
            </ul>
           </nav>
          </header>
        </div>
        <div class="welcomebody">
         <div class="welcomepara1"><p>Failed to login. Please check User name/Password</p></div>   
         <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  
    
 
<div id="loginfrm" >
      <div class="loginmodal" id="login" >
          <h3>Log In</h3><br>
           <span class="close" id="loginspan" onClick="closelogindlg()">&times;</span> 

          <form name="loginform" class="lform" action="http://localhost:8080/Proj2_sogi_navya/server/login.php" method="post" onsubmit="return closelogindlg()" target="formSubmitFrame" >
              <label for="fname">User:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
              <input type="text" id="fname" name="User_FName"  required><br>

              <label for="psw">Password: &nbsp; &nbsp;</label>
              <input type="password" id="lpsw" name="User_Pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br><br>
              <menu class="menucls">
                    <input type="button" class="buttoncls" value="CLOSE" onClick="closelogindlg()">
                    <input  type="submit" name='submit' value="GET IN">
              </menu>
              <div id="lmessage">
                <h3>Password must contain the following:</h3>
                <p id="lletter" class="invalid">A <b>lowercase</b> letter</p>
                <p id="lcapital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                <p id="lnumber" class="invalid">A <b>number</b></p>
                <p id="llength" class="invalid">Minimum <b>8 characters</b></p>
            </div>
          </form>
      </div> 
 </div> 
 <div id="signupfrm" >
      <div class="loginmodal" id="signup" >
          <h3>Check In</h3><br>
           <span class="close" id="signupspan" onClick="closesignupdlg()">&times;</span> 

          <form name="signupform" class="lform" action="http://localhost:8080/Proj2_sogi_navya/server/createuser.php" method="post" onsubmit="return closesignupdlg()" target="formSubmitFrame" >
              <label for="fname">First Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
              <input type="text" id="signfname" name="User_FName"  required><br>
              <label for="fname">Last Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
              <input type="text" id="signlname" name="User_LName"  required><br>
              
              <label for="email">Email:&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;</label>
              <input type="email" id="signemail" name="User_Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" ><br>
              
              <label for="lname">User: &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;</label>
              <input type="text" id="signuser" name="User_Role" ><br>
              
              <label for="psw">Password: &nbsp; &nbsp;</label>
              <input type="password" id="psw" name="User_Pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br><br>
              
              <label for="psw">Repeat Password: &nbsp; &nbsp;</label>
              <input type="password" id="rpsw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br><br>
              <menu class="menucls">
                    <input type="button" class="buttoncls" value="CLOSE" onClick="closesignupdlg()">
                    <input  type="submit" name='submit' value="GET IN">
              </menu>
              <div id="message">
                <h3>Password must contain the following:</h3>
                <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                <p id="number" class="invalid">A <b>number</b></p>
                <p id="length" class="invalid">Minimum <b>8 characters</b></p>
            </div>
          </form>
      </div> 
 </div> 
<div class="confrm">
 <div class="loginmodal" id="contactusform">
 <h3>Have a project you'd like to discuss?</h3><br>
  <span class="close" id="contactspan" onClick="closecontactdlg()">&times;</span> 
  <form class="lform" id="contactfrm" action="mailto: manjularsogi1@gmail.com" method="post" enctype="text/plain">
    <label for="fname">Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type="text" id="cfname" name="firstname" ><br>

    <label for="cemail">Email: &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type="email" id="contactemail" name="mail" ><br>

    <label for="lname">Message: &nbsp; &nbsp;&nbsp;&nbsp;</label>
    <input type="text" id="comment" name="comment" ><br><br>
  
    <input type="submit" value="SEND">
  </form>
 </div>
</div>	
<iframe name="formSubmitFrame" style="display: none;" ></iframe>    

</body>
</html>