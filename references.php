<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width" initial-scale="1">
<meta charset="utf-8">
<link rel="stylesheet" href="portfolio.css">
<link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
<script type="text/javascript" src = "https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/myreferences.js"></script>
<style>
      
      .refbody {
     
      
      animation-name: slide;
      animation-duration: 10s;
      animation-direction: normal;
      animation-timing-function: ease;
      animation-iteration-count: infinite;
      }
      
    </style>
</head>
<body>
  <div class="wrapper">
    <div class="page3">
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
        <div class="ref">
        <div class="refhead">
          <h1>REFERENCES</h1>
        </div>  
        <br><br>
        <div  id="ref0" class="refbody">
          <div class="refpic">
           <img src="joe.jpg" style="rotate"><i class="fa fa-quote-right circle-icon1 fa-2x" aria-hidden="true" style="color: white;"></i> 
          </div>
          <div class="refcontent">
           <p id="refdesc0">"As always, great creative thinking for the best solution. Navya is by far the most professional and knowledgeable provider I have worked with. I would love to work with her again :)." </p>
           <br>
           <p id="refname0">Yury Jajitzky</p><br>
          </div>
        </div> 
        <div id="ref1" class="refbody">
          <div class="refpic">
           <img src="yury.jpg"><i class="fa fa-quote-right circle-icon1 fa-2x" aria-hidden="true" style="color: white;"></i> 
          </div>
          <div class="refcontent">
           <p id="refdesc1">"As always, great creative thinking for the best solution. Navya is by far the most professional and knowledgeable provider I have worked with. I would love to work with her again :)." </p>
           <br>
           <p id="refname1">Yury Jajitzky</p><br>
         </div>
        </div> 
        <div style="text-align:center">
           <span id="refdot0" class="dot" ></span>
           <span id="refdot1" class="dot" ></span>
         </div>
      </div>     
    </div>
  </div>
  <div class="footref" style="margin-top: -185px; width: 80%; margin-left: 143.5px;">
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
           <nav class="icons" style="margin-top: -55px;">
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
              
              <label for="email">Email:&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp;&nbsp; </label>
              <input type="email" id="signemail" name="User_Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" ><br>
              
              <label for="lname">User: &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
              <input type="text" id="signuser" name="User_Role" ><br>
              
              <label for="psw">Password: &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
              <input type="password" id="psw" name="User_Pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br>
              
              <label for="psw">Repeat Password: &nbsp;</label>
              <input type="password" id="rpsw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br><br>
              <menu class="menucls">
                    <input type="button" class="buttoncls" value="CLOSE" onClick="closesignupdlg()">
                    <input  type="submit" name='submit' value="GET IN">
              </menu>
              <div id="message">
                <h3 style="margin-left: 20px;">Password must contain the following:</h3>
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
<iframe name="formSubmitFrame" style="display: none;" ></iframe>    
</body>
</html>