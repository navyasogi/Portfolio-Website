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
<script src="js/myworks.js"></script>
<script src="js/role.js"></script>
</head>

<body>
  <div class="wrapper">
    <div class="page4" style="height: 1500px;">
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
        <div class="latestworks">
          <div class="latesthead">
            <input type="text" name="loginerror" id="loginerror" value="<?php echo $_SESSION['User_Role'];?>">
            <input type="hidden" name="userrole" id="userrole" value="">     
            <h1><b>MY LATEST WORK</b></h1>
            <p>I'm looking to expand my portfolio while I'm on top and while I'm young Navya brings your content to life in stunning clarity</p>
          </div>
          <div class="buttons">
            <button class="button1" onclick="showallprojects()">SHOW ALL</button>
            <button class="button2" onclick="showwebprojects()">WEBSITES</button>
            <button class="button2" onclick="showappprojects()">APPS</button>
            <button class="button2" onclick="showhobbyprojects()">HOBBIES</button>
            <button class="button2" id = "deleterec" onclick="showdeleteform()" style="float: right; margin-right: 100px;">DELETE</button>
            <button class="button2" id = "updaterec" onclick="showupdateform()" style="float: right;">MODIFY</button>
            <button class="button2" id = "newrec" onclick="shownewrecordform()" style="float: right;">ADD</button>
          </div>
          <div id="worktable">
          </div>
       </div>
    </div>
    <div class="footwork" style="margin-top: -25px; width: 100%; ">
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
  <!-- The Modal -->
    <div id="newrecord" class="modal wrapper">
        <span onclick="document.getElementById('newrecord').style.display='none'"
        class="close" title="Close Modal">&times;</span>

        <!-- Modal Content -->
        <form class="modal-content" action="http://localhost:8080/Proj2_sogi_navya/server/createproject.php" method="post" onsubmit="return closeSelf(this);" target="formSubmitFrame">

        <div class="container">
          <label for="Proj_ID"><b>Project ID</b></label>
          <input type="text" id="projid" name="Proj_ID" required><br>

          <label for="Proj_Name"><b>Project Name</b></label>
          <input type="text"  id="projname" name="Proj_Name" required><br>

          <label for="Date"><b>Date</b></label>
          <input type="date" id="date" name="Date" required><br>

          <label for="Proj_Description"><b>Description</b></label>
          <input type="text"  id="projdesc" name="Proj_Description" required><br>

          <label for="Category"><b>Category</b></label>
          <input type="text" id="category" name="Category" required><br>

          <label for="Likes"><b>Likes</b></label>
          <input type="text" id="likes" name="Likes" required><br>

          <label for="Comments"><b>Comments</b></label>
          <input type="text" id="comments" name="Comments" required><br>

          <label for="Image_Link"><b>Image Link</b></label>
          <input type="text" id="imagelink" name="Image_Link" required><br>

          <button type="submit" id="addbtn">Add</button>
     </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('newrecord').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
        </form>
    </div>
  <!-- The Modal -->
    <div id="updaterecord" class="modal wrapper">
        <span onclick="document.getElementById('updaterecord').style.display='none'"
        class="close" title="Close Modal">&times;</span>

        <!-- Modal Content -->
        <form class="modal-content"  target="formSubmitFrame">

        <div class="container">
          <label id="dprojectname"><b>Select a Project</b></label>
          <select id = "dprojectlist"  onchange="getprojectdetails()">
          </select><br> 
          <label for="Proj_ID"><b>Project ID</b></label>
          <input type="text" id="mprojid" name="Proj_ID" required readonly><br>

          <label for="Proj_Name"><b>Project Name</b></label>
          <input type="text"  id="mprojname" name="Proj_Name" required><br>

          <label for="Date"><b>Date</b></label>
          <input type="date" id="mdate" name="Date" required><br>

          <label for="Proj_Description"><b>Description</b></label>
          <input type="text"  id="mprojdesc" name="Proj_Description" required><br>

          <label for="Category"><b>Category</b></label>
          <input type="text" id="mcategory" name="Category" required><br>

          <label for="Likes"><b>Likes</b></label>
          <input type="text" id="mlikes" name="Likes" required><br>

          <label for="Comments"><b>Comments</b></label>
          <input type="text" id="mcomments" name="Comments" required><br>

          <label for="Image_Link"><b>Image Link</b></label>
          <input type="text" id="mimagelink" name="Image_Link" required><br>
          
          <button id="modifybtn" onclick="modifyrecord()">Modify</button>
          <button id="deletebtn" onclick="deleterecord()">Delete</button>
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('updaterecord').style.display='none'" class="cancelbtn">Cancel</button>
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
              <label for="fname">Last Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
              <input type="text" id="signlname" name="User_LName"  required><br>
              
              <label for="email">Email:&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp;&nbsp; </label>
              <input type="email" id="signemail" name="User_Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" ><br>
              
              <label for="lname">User: &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
              <input type="text" id="signuser" name="User_Role" ><br>
              
              <label for="psw">Password: &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
              <input type="password" id="psw" name="User_Pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br>
              
              <label for="psw">Repeat Password:&nbsp;&nbsp;</label>
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