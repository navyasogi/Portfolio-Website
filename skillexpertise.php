
<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width" initial-scale="1">
<meta charset="utf-8">
<link rel="stylesheet" href="portfolio.css">
<link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
<script type="text/javascript" src = "https://kit.fontawesome.com/a076d05399.js"></script>
<script src="js/myskills.js"></script>
<script src="js/role.js"></script>
</head>
<body>
  <div class="wrapper">
    <div class="page2">
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
        <div class="skillspage">
        <div class="skillstitle">
         <input type="text" name="loginerror" id="loginerror" value="<?php echo $_SESSION['User_Role'];?>">
         <input type="hidden" name="userrole" id="userrole" value="">   
         <div class="skillhead"><h1><b>SKILLS & <br>EXPERTISE</b></h1></div>
         <div class="skillheaddesc"><h4>Visual designer and front end <br> developer</h4></div>
         <div class="skillimage"><img src="me.jpg" alt="Image not found"></div>
        </div>
        <div class="skills">
        <div class="skillsbody">
         <table class="skilltable">
           <tr>
            <td class="icon"><i class="fas fa-paper-plane fa-1x circle-icon" style="color:#5c717f;"></i></td>
            <td class="icon"><i class="fa fa-desktop fa-1x circle-icon" style="color:#5c717f;"></i></td>
           </tr>
           <tr>
            <th><div id="skill0"></div></th>
            <th><div id="skill1"></div></th>
           </tr>
           <tr>
            <td><div id="skilldesc0" style="text-align: top;"></div></td>
            <td><div id="skilldesc1" style="text-align: top;"></div></td>
           </tr>
           <tr>
            <td class="icon"><i class="fas fa-paint-brush fa-1x circle-icon" style="color:#5c717f;"></i></td>
            <td class="icon"><i class="far fa-code fa-1x circle-icon" style="color:#5c717f;"></i></td>
           </tr>
           <tr>
            <th><div id="skill2"></div></th>
            <th>Programming</th>
           </tr>
           <tr>
            <td><div id="skilldesc2" style="text-align: top;"></div></td>
            <td>Developing applications and systems that meet the needs and streamline the work and experience of users</td>
           </tr>
         </table>
        </div><br><br><br><br><br><br>
        <div class="skillendtable" >
         <table class="endtable">
           <tr></tr>  
           <tr>
            <th>Smart Digital Solutions</th>
            <th colspan="2" class="spanth">A Front End Developer</th>
           </tr>
           <tr>
            <td><img src="device01.png"></td>
            <td><img src="device02.png"></td>
            <td><img src="device03.png"></td>
          </tr>
         </table>
        </div> 
      </div>
      </div>
      <br>  
      <div id= "workexp" class="workbody">
        <button class="button2" id = "wdeleterec" onclick="showdeleteform()" style="float: right; margin-right: 100px;">DELETE</button> 
         <button class="button2" id = "wupdaterec" onclick="showupdateform()" style="float: right;">MODIFY</button>
          <button class="button2" id = "wnewrec" onclick="shownewrecordform()" style="float: right; ">ADD</button>
          
          <div class="workhead">
            <h1>WORK EXPERIENCE</h1><br>
            
            <p>I'm looking to expand my portfolio while I'm on top and while I'm young Navya brings your content to life in stunning clarity</p>
          </div>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <div id="wexpdata"></div>
          </div>
        
        <div  id="education" class="workbody">
            <button class="button2" id = "deleterec" onclick="showdeleteeduform()" style="float: right; margin-right: 100px;">DELETE</button> 
            <button class="button2" id = "updaterec" onclick="showupdateeduform()" style="float: right;">MODIFY</button>
            <button class="button2" id = "newrec" onclick="showneweduform()" style="float: right;">ADD</button>
            <div class="workhead">
            <h1>EDUCATION</h1><br>
            <p>I'm looking to expand my portfolio while I'm on top and while I'm young Navya brings your content to life in stunning clarity</p>
          </div>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <div id="edudata"></div>
      </div>
  </div>
  <div class="footskill" style="margin-top: -10px;">
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
  <!-- The Modal -->
    <div id="newworkexprecord" class="modal wrapper">
        <span onclick="document.getElementById('newworkexprecord').style.display='none'"
        class="close" title="Close Modal">&times;</span>

        <!-- Modal Content -->
        <form class="modal-content" action="http://localhost:8080/Proj2_sogi_navya/server/createworkexp.php" method="post" onsubmit="return closeSelf(this);" target="formSubmitFrame" >

        <div class="container">
          <label for="Work_ID"><b>Work ID</b></label>
          <input type="text" id="workid" name="Work_ID" required><br>

          <label for="Organization"><b>Organization</b></label>
          <input type="text"  id="orgname" name="Organization" required><br>

          <label for="Work_Desc"><b>Work Description</b></label>
          <input type="text" id="workdesc" name="Work_Desc" required><br>

          <label for="Date_Of_Joining"><b>Date Of Joining</b></label>
          <input type="date"  id="djoining" name="Date_Of_Joining" required><br>

          <label for="Date_Of_Resignation"><b>Date Of Resignation</b></label>
          <input type="date" id="dresignation" name="Date_Of_Resignation" required><br>

          <label for="Designation"><b>Designation</b></label>
          <input type="text" id="designation" name="Designation" required><br>
 
          <button type="submit" id="addbtn">Add</button>
     </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('newworkexprecord').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
        </form>
    </div>     
  
  <div id="updateworkexprecord" class="modal wrapper">
        <span onclick="document.getElementById('updateworkexprecord').style.display='none'"
        class="close" title="Close Modal">&times;</span>

        <!-- Modal Content -->
        <form class="modal-content"  target="formSubmitFrame">

        <div class="container">
          <label id="dprojectname"><b>Select a Work Experience</b></label>
          <select id = "dprojectlist"  onchange="getworkexpdetails()">
          </select><br> 
          <label for="Work_ID"><b>Work ID</b></label>
          <input type="text" id="mworkid" name="Work_ID" required readonly><br>

          <label for="Organization"><b>Organization</b></label>
          <input type="text"  id="morgname" name="Organization" required><br>

          <label for="Work_Desc"><b>Work Description</b></label>
          <input type="text" id="mworkdesc" name="Work_Desc" required><br>

          <label for="Date_Of_Joining"><b>Date Of Joining</b></label>
          <input type="date"  id="mdjoining" name="Date_Of_Joining" required><br>

          <label for="Date_Of_Resignation"><b>Date Of Resignation</b></label>
          <input type="date" id="mdresignation" name="Date_Of_Resignation" required><br>

          <label for="Designation"><b>Designation</b></label>
          <input type="text" id="mdesignation" name="Designation" required><br>
          
          <button id="modifybtn" onclick="modifyrecord()">Modify</button>
          <button id="deletebtn" onclick="deleterecord()">Delete</button>
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('updateworkexprecord').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
        </form>
    </div>

  <!-- The Modal -->
    <div id="newedurecord" class="modal wrapper">
        <span onclick="document.getElementById('newedurecord').style.display='none'"
        class="close" title="Close Modal">&times;</span>

        <!-- Modal Content -->
        <form class="modal-content" action="http://localhost:8080/Proj2_sogi_navya/server/createedu.php" method="post" onsubmit="return closeSelfedu(this);" target="formSubmitFrame">

        <div class="container">
          <label for="Education_ID"><b>Education ID</b></label>
          <input type="text" id="eduid" name="Education_ID" required><br>

          <label for="University"><b>University</b></label>
          <input type="text"  id="uniname" name="University" required><br>

          <label for="Education_Level"><b>Education Level</b></label>
          <input type="text" id="edulevel" name="Education_Level" required><br>

          <label for="From_Date"><b>From Date</b></label>
          <input type="date"  id="fromdate" name="From_Date" required><br>

          <label for="To_Date"><b>To Date</b></label>
          <input type="date" id="todate" name="To_Date" required><br>

          <label for="City"><b>City</b></label>
          <input type="text" id="city" name="City" required><br>
  
          <label for="Country"><b>Country</b></label>
          <input type="text" id="country" name="Country" required><br>
          
          <button type="submit" id="eaddbtn">Add</button>
     </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('newedurecord').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
        </form>
    </div>  
  
  <div id="updateedurecord" class="modal wrapper">
        <span onclick="document.getElementById('updateedurecord').style.display='none'"
        class="close" title="Close Modal">&times;</span>

        <!-- Modal Content -->
        <form class="modal-content"  target="formSubmitFrame">

        <div class="container">
          <label id="deduname"><b>Select a Education</b></label>
          <select id = "dedulist"  onchange="geteducationdetails()">
          </select><br>   
          <label for="Education_ID"><b>Education ID</b></label>
          <input type="text" id="meduid" name="Education_ID" required readonly><br>

          <label for="University"><b>University</b></label>
          <input type="text"  id="muniname" name="University" required><br>

          <label for="Education_Level"><b>Education Level</b></label>
          <input type="text" id="medulevel" name="Education_Level" required><br>

          <label for="From_Date"><b>From Date</b></label>
          <input type="date"  id="mfromdate" name="From_Date" required><br>

          <label for="To_Date"><b>To Date</b></label>
          <input type="date" id="mtodate" name="To_Date" required><br>

          <label for="City"><b>City</b></label>
          <input type="text" id="mcity" name="City" required><br>
  
          <label for="Country"><b>Country</b></label>
          <input type="text" id="mcountry" name="Country" required><br>
          
          <button id="modifyedubtn" onclick="modifyedurecord()">Modify</button>
          <button id="deleteedubtn" onclick="deleteedurecord()">Delete</button>
        </div>
            
        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('updateedurecord').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
        </form>
    </div>      
</div> 
<div id="loginfrm" >
      <div class="loginmodal" id="login" >
          <h3>Log In</h3><br>
           <span class="close" id="loginspan" onClick="closelogindlg()">&times;</span> 

          <form name="loginform" class="lform" >
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

          <form name="signupform" class="lform" action="http://localhost:8080/Proj2_sogi_navya/server/createuser.php" method="post" onsubmit="return closesignupdlg()" target="formSubmitFrame" >
              <label for="fname">First Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
              <input type="text" id="signfname" name="User_FName"  required><br>
              <label for="fname">Last Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
              <input type="text" id="signlname" name="User_LName"  required><br>
              
              <label for="email">Email:&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;</label>
              <input type="email" id="signemail" name="User_Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" ><br>
              
              <label for="lname">User: &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
              <input type="text" id="signuser" name="User_Role" ><br>
              
              <label for="psw">Password: &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
              <input type="password" id="psw" name="User_Pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br>
              
              <label for="psw">Repeat Password: &nbsp; </label>
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
<iframe name="formSubmitFrame" style="display: none;" ></iframe>

</body>
</html>
