<?php
// Start the session
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
<script src="js/sinup.js"></script>
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
              <li><a class="isDisabled" href="home.php"><b>HOME</b></a></li>
              <li><a class="isDisabled" href="skillexpertise.php"><b>MY SKILLS</b></a></li>
              <li><a class="isDisabled" href="references.php"><b>RECOMMENDATION</b></a></li>
              <li><a class="isDisabled" href="works.php"><b>WORKS</b></a></li>
              <li><a class="isDisabled" href="http://navyasogi.uta.cloud/"><b>BLOG</b></a></li>
              <li><a class="isDisabled" href="hireme.php"><b>HIRE ME</b></a></li>
              <li><a class="isDisabled" href="login.php"><b>LOGIN</b></a></li>
              <li><a class="isDisabled" onclick="signup()"><b>SIGN UP</b></a></li>
            </ul>
           </nav>
          </header>
        </div>
        <div class="welcomebody">
         <input type="text" name="loginerror" id="loginerror" style="margin-left: 300px; margin-top: -90px; position: absolute; width: 500px;" value="<?php echo $_SESSION['Login_Error'];?>">
         <input type="hidden" name="userrole" id="userrole" value="">
         <div class="welcomehead"><h1>My Admin page</h1></div>
         <div class="welcomepara1"><p>It is a great pleasure for me to receive your visit</p></div>
         <div class="welcomepara2"><p>and that my professional information is of your liking and meets what you're looking for</p></div>
         <div class="welcomebutton"><button class="button"><i class="fas fa-download"></i>  DOWNLOAD RESUME</button></div>
      </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <div class="awardsbody">
  <div class="awards">
    <table>
    <tr>
      <td><i class="fa fa-trophy fa-2x circle-icon2" aria-hidden="true" style="color: #52b8f7;"></i></td>
      <td><i class="fas fa-thumbs-up fa-2x circle-icon2" style="color: #52b8f7;"></i></td>
      <td><i class="fas fa-rocket fa-2x circle-icon2" style="color: #52b8f7;"></i></td>
      <td><i class="fas fa-camera fa-2x circle-icon2" style="color: #52b8f7;"></i></td> 
    </tr>
    <tr>
     <td><h2>240</h2></td>
     <td><h2>2500</h2></td>
     <td><h2>25</h2></td>
     <td><h2>4000</h2></td> 
    </tr>
    <tr>
     <td><h2>AWARDS <br> WON</h2></td>
     <td><h2>HAPPY <br>CUSTOMERS</h2></td>  
     <td><h2>PROJECTS <br> DONE</h2></td>
     <td><h2>PHOTOS <br>MADE</h2></td>
    </tr>
   </table>
  </div>
</div>
<div class="contact">
  <div class="customers">
    <h1>&nbsp;&nbsp;&nbsp;MY<br> CUSTOMERS</h1><br>
    <p>The best books to keep you reading </p>
  </div>
  <div class="brands">
    <table>
     <tr>
      <td><img src="logo-1.png"></td>
      <td><img src="logo-2.png"></td>
      <td><img src="logo-1.png"></td> 
     </tr>  
     <tr>
      <td><img src="logo-3.png"></td>
      <td><img src="logo-4.png"></td>
      <td><img src="logo-5.png"></td> 
     </tr>  
    </table>
  </div>  
 </div>
 <div class="contactme">
  <h2>CONTACT ME</h2>
  <h5>Have a project you would like to discuss?</h5>
  <hr class="hr1">
  <img src="comment.png">
  <h3>Navya R Sogi</h3><br>
  <h6>navya.sogi@gmail.com</h6><br>
  <hr class="hr2">
 </div>
 <div class="foot">
        <footer>
           
          <nav class="navbarfoot">
            <ul>
              <li><a class="isDisabled" href="home.php"><b>HOME</b></a></li>
              <li><a class="isDisabled" href="skillexpertise.php"><b>MY SKILLS</b></a></li>
              <li><a class="isDisabled" href="references.php"><b>RECOMMENDATION</b></a></li>
              <li><a class="isDisabled" href="works.php"><b>WORKS</b></a></li>
              <li><a class="isDisabled" href="http://navyasogi.uta.cloud/"><b>BLOG</b></a></li>
              <li><a class="isDisabled" href="hireme.php"><b>HIRE ME</b></a></li>
              <li><a class="isDisabled" href="login.php"><b>LOGIN</b></a></li>
              <li><a class="isDisabled" onclick="signup()"><b>SIGN UP</b></a></li>
              <li><a class="isDisabled" onclick="contactus()"><b>CONTACT US</b></a></li>
            </ul>
           </nav>
           <nav class="icons">
            <ul>
              <li><i class="fab fa-facebook-square"></i></li>
              <li><i class="fab fa-twitter-square"></i></li>
              <li><i class="fab fa-linkedin"></i></li>
            </ul>
          </nav>
          </footer>
        </div>
</div>
<div id="loginfrm" >
      <div class="loginmodal" id="login" >
          <h3>Log In</h3><br>
           <span class="close" id="loginspan" onClick="closelogindlg()">&times;</span> 

          <form name="loginform" class="lform">
              <label for="fname">User:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
              <input type="text" id="fname" name="User_FName"  required><br>

              <label for="psw">Password: &nbsp; &nbsp;</label>
              <input type="password" id="lpsw" name="User_Pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br><br>
              <menu class="menucls">
                    <input type="button" class="buttoncls" value="CLOSE" onClick="closelogindlg()">
                    <input  type="button" name='submit' value="GET IN" onClick="userlogin()">
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

          <form name="signupform" class="lform" action="http://localhost:8080/Proj2_sogi_navya/server/createuser.php" method="post" onsubmit="return closesignupdlg()"  >
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
<div class="confrm" >
 <div class="loginmodal" id="contactusform" style="height: 50%; margin-left: 400px; margin-top: 300px;">
 <h3>Have a project you'd like to discuss?</h3><br>
  <span class="close" id="contactspan" onClick="closecontactdlg()">&times;</span> 
  <form class="lform" id="contactfrm" style="height: 50%;" action="mailto: navya.sogi@gmail.com" method="post" enctype="text/plain">
    <label for="fname" style="margin-left: 20px;">Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type="text" id="cfname" name="firstname" required ><br>

    <label for="cemail"  style="margin-left: 20px;">Email: &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type="email" id="contactemail" name="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required><br>

    <label for="lname" style="margin-left: 20px;">Message: &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type="text" id="comment" name="comment" required><br><br>
  
    <input style="margin-left: 200px;"type="submit" value="SEND">
  </form>
 </div>
</div>    
</div>	
<iframe name="formSubmitFrame" style="display: none;" ></iframe>    


</body>
</html>