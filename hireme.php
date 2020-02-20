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
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="js/myhires.js"></script>
<script src="js/role.js"></script>
</head>
<body>
  <div class="wrapper">
    <div class="page4" id="page4">
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
       <div class="hirehead">
          <button class="button2" id = "deleterec" onclick="showdeletehiremeform()" style="float: right; margin-right: 100px;">DELETE</button> 
          <button class="button2" id = "updaterec" onclick="showupdatehiremeform()" style="float: right;">MODIFY</button>
          <button class="button2" id = "newrec" onclick="shownewhiremeform()" style="float: right;">ADD</button>
            <input type="text" name="loginerror" id="loginerror" value="<?php echo $_SESSION['User_Role']?>">
            <input type="hidden" name="userrole" id="userrole" value="">     
          <h1>HIRE ME</h1>
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
       <div id="worktable">   
       </div>    
       <div class="skill" id="skills">
          <div class="title">
            <h2><b>SKILLS AND KNOWLEDGE</b></h2>
            <p>I'm looking to expand my portfolio while I'm on top and while I'm young Navya brings your content to life in stunning clarity</p><br>
          </div><br>
         <div class="w3-container"><br>
          <h3>SOFTWARE</h3><br>
          <h5>HTML</h5>
          <div class="w3-light-grey">
            <div class="w3-blue" style="height:15px;width:25%; color: #4b9fc9"></div>
          </div><br>
          <h5>CSS</h5>
          <div class="w3-light-grey">
           <div class="w3-blue" style="height:15px;width:50%"></div>
          </div><br>
          <h5>Bootstrap</h5>
          <div class="w3-light-grey">
           <div class="w3-blue" style="height:15px;width:65%"></div>
          </div><br>
          <h5>Blender</h5>
          <div class="w3-light-grey">
           <div class="w3-blue" style="height:15px;width:45%"></div>
          </div><br>
          <h5>Photoshop</h5>
          <div class="w3-light-grey">
           <div class="w3-blue" style="height:15px;width:85%"></div>
          </div>

         </div>
         <div class="recognitions">
          <div class="rechead"><h3>RECOGNITIONS</h3></div>
          <div class="rec1">
            <i class="fas fa-images square i1 "></i>
            <i class="fas fa-pencil-alt square i2"></i>
            <i class="fas fa-suitcase square i3"></i>
          </div>
          <div class="rec2">
            <p>BEST PROJECT AWARD OF SOCIAL RELEVANCE</p>
            <h3>Dayananda Sagar College of Engineering, Bangalore, India</h3>
          </div>
          <div class="rec3">
            <p>BEST PAPER AWARD IN ICIRCA - IEEE CONFERENCE</p>
            <h3>ICIRCA, Coimbatore, India</h3>
          </div>
          <div class="rec4">
            <p>TOP 6 IN JP MORGAN CODE FOR GOOD HACKATHON</p>
            <h3>JPMC, Bangalore, India</h3>
          </div>
         </div><br>
         <div class="progress">
          <h3>LANGUAGE SKILLS</h3><br>
          <img src="progress.png"> 
         </div>
         <div class="knowledge">
          <h3>KNOWLEDGE</h3><br>
          <ul>
            <li>HTML</li>
            <li>CSS</li>
            <li>JAVASCRIPT</li>
            <li>BOOTSTRAP</li>
            <li>WORDPRESS</li>
          </ul>
         </div>
         <div class="hobbies">
          <h3>HOBBIES & INTERESTS</h3>
          <img src="hobbies.png"> 
         </div>
       </div>
      </div>
    </div>

</div>

 <!-- The Modal -->
 <div id="newhiremerecord" class="modal wrapper">
     <span onclick="document.getElementById('newhiremerecord').style.display='none'"
           class="close" title="Close Modal">&times;</span>

     <!-- Modal Content -->
     <form class="modal-content" action="http://localhost:8080/Proj2_sogi_navya/server/createhire.php" method="post" onsubmit="return closeSelf(this);" target="formSubmitFrame" >

         <div class="container">
             <label for="Hire_ID"><b>Hire_ID</b></label>
             <input type="text" id="hireid" name="Hire_ID" required><br>

             <label for="Hire_Title"><b>Hire_Title</b></label>
             <input type="text"  id="hiretitle" name="Hire_Title" required><br>

             <label for="Hire_Desc"><b>Hire Description</b></label>
             <input type="text" id="hiredesc" name="Hire_Desc" required><br>

             <label for="Contact_No"><b>Contact No</b></label>
             <input type="text"  id="contactno" name="Contact_No" required><br>
             
             <label for="Price"><b>Price</b></label>
             <input type="text" id="price" name="Price" required><br>

             <button type="submit" id="addbtn">Add</button>
         </div>

         <div class="container" style="background-color:#f1f1f1">
             <button type="button" onclick="document.getElementById('newhiremerecord').style.display='none'" class="cancelbtn">Cancel</button>
         </div>
     </form>
 </div>        
 <div id="updatehiremerecord" class="modal wrapper">
     <span onclick="document.getElementById('updatehiremerecord').style.display='none'"
           class="close" title="Close Modal">&times;</span>
     <!-- Modal Content -->
     <form class="modal-content"  target="formSubmitFrame">
         <div class="container">
             <label id="dprojectname"><b>Select a Hire</b></label>
             <select id = "dprojectlist"  onchange="gethiredetails()">
             </select><br> 
             <label for="Hire_ID"><b>Hire ID</b></label>
             <input type="text" id="mhireid" name="Hire_ID" required readonly><br>

             <label for="Hire_Title"><b>Hire Title</b></label>
             <input type="text"  id="mhiretitle" name="Hire_Title" required><br>

             <label for="Hire_Desc"><b>Hire Description</b></label>
             <input type="text" id="mhiredesc" name="Hire_Desc" required><br>

             <label for="Contact_No"><b>Contact No</b></label>
             <input type="text"  id="mcontactno" name="Contact_No" required><br>

             <label for="Price"><b>Price</b></label>
             <input type="text" id="mprice" name="Price" required><br>
    
             <button id="modifybtn" onclick="modifyrecord()">Modify</button>
             <button id="deletebtn" onclick="deleterecord()">Delete</button>
         </div>

         <div class="container" style="background-color:#f1f1f1">
             <button type="button" onclick="document.getElementById('updatehiremerecord').style.display='none'" class="cancelbtn">Cancel</button>
         </div>
     </form>
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
      <div class="loginmodal" id="signup" style="height: 8000px;" >
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
              
              <label for="psw">Password: &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
              <input type="password" id="psw" name="User_Pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br>
              
              <label for="psw">Repeat Password: &nbsp; &nbsp;</label>
              <input type="password" id="rpsw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br><br>
              <menu class="menucls">
                    <input type="button" class="buttoncls" value="CLOSE" onClick="closesignupdlg()">
                    <input  type="submit" name='submit' value="GET IN">
              </menu>
              <div id="message">
                <h3 style="margin-left: 20px;">Password must contain the following:</h3>
                <p id="letter" class="invalid" style="font-size: 20px;">A <b>lowercase</b> letter</p>
                <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                <p id="number" class="invalid">A <b>number</b></p>
                <p id="length" class="invalid">Minimum <b>8 characters</b></p>
            </div>
          </form>
      </div> 
 </div> 

<iframe name="formSubmitFrame" style="display: none;" ></iframe>       
  </body>
</html>