<?php
header("Access-Control-Allow-Origin: *");
session_start();
class ROLE { 
       
} 

$name = $pwd = "";
if($_SERVER["REQUEST_METHOD"] === "POST"){
  $name = test_input($_POST["User_FName"]);
  $pwd = test_input($_POST["User_Pwd"]);
    
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
/*$name=$_POST["User_FName"];
$pwd=$_POST["User_Pwd"];*/
//echo $name." ".$pwd;
$con = mysqli_connect("localhost", "root","","navya" );
//echo "connected";
    if ($con) {
        //echo "insoide con";
        if ($name != '' && $pwd != '') {
                    //echo "insoide if loop";


           /* $query = mysqli_query($con,"select * from Admin_Info where Admin_FName='" . $name . "' and Pwd='" . $pwd . "'") or die(mysqli_error($con));
            if($query){
                $res = mysqli_fetch_row($query);
                if ($res) {
                    header('Location: home.php');
                    $_SESSION['Login_Error'] = 'You  have successfully logged in';
                    $_SESSION['User_ID'] = $res[0];
                    $_SESSION['User_Role'] = "Admin";
                   // $cookie_name = "userrole";
                   // $cookie_value = $res[6];
                    //setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
                    $value = new ROLE();
                    $value->role = "Admin"; 
                    //echo'You have successfully logged in';
                    echo json_encode($value);
                    http_response_code(200);
                    //header('location:welcome.php');
                } 
            }*/
            //else{
                $query = mysqli_query($con,"select * from User_Details where User_FName='" . $name . "' and User_Pwd='" . $pwd . "'") or die(mysqli_error($con));
                if($query){
                    //echo "i have connected";
                    $res = mysqli_fetch_row($query);
                    if ($res) {
                        //echo "i have got res";
                        $_SESSION['Login_Error'] = 'You  have successfully logged in';
                        //echo $res[0]." ".$res[6];
                        $_SESSION['User_ID'] = $res[0];
                        $_SESSION['User_Role'] = $res[6];
                        if($_SESSION['User_Role']=="Admin"){
                        header('Location: admin.php');
                        echo "<script>window.location.assign('http://localhost:8080/Proj2_sogi_navya/admin.php');</script>";
                        echo "You have successfully logged in";}
                        else{
                          header('Location:home.php');
                        echo "<script>window.location.assign('http://localhost:8080/Proj2_sogi_navya/home.php');</script>";}
                        
                        // $cookie_name = "userrole";
                        // $cookie_value = $res[6];
                        //setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
                        $value = new ROLE();
                        $value->role = $res[6];
                        //echo'You have successfully logged in';
                        //echo json_encode($value);
                        echo json_encode($res[6]);
                        http_response_code(200);
                        //header('location:welcome.php');
                     }
                else {
                    header('Location: http://localhost:8080/Proj2_sogi_navya/error.php');
                    echo "<script>window.location.assign('http://localhost:8080/Proj2_sogi_navya/error.php');</script>";
                    http_response_code(404);
                    //echo'You entered username or password is incorrect';
                    $_SESSION['Login_Error'] = 'You have entered incorrect username or password';}
                }
                
            }
         else {
            //echo'Enter both username and password wrong';
        }
   }



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
        
<div class="loginbody" style="margin-top: 200px;">
  <div class="welcomehead"><h1 style="color: white;">Hello There!</h1></div>
         <div class="welcomepara1"><p style="color: white;">It is a great pleasure for me to receive your visit</p></div><br><br>
         <div class="welcomepara2"><p style="color: white;">Click here to explore!</p></div>
         <div class="welcomebutton"><button class="button"><a onclick="login()">LOGIN</button></div>
</div><br><br><br><br><br><br><<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 <div class="foot" style="margin-top: -215px; width: 100%; ">
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
      <div class="loginmodal" id="login" style="height: 50%; margin-left: 450px; margin-top: 320px;" >
          <h3 style="margin-left: 250px;" >Log In</h3><br>
           <span class="close" id="loginspan" onClick="closelogindlg()">&times;</span> 

          <form name="loginform" class="lform" action="" autocomplete="off" method="post" onsubmit="return closelogindlg()" >
              <label for="fname" style="margin-left: 50px;">User:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
              <input type="text" id="fname" name="User_FName"  required><br>

              <label for="psw" style="margin-left: 50px;">Password: &nbsp; &nbsp;</label>
              <input type="password" id="lpsw" name="User_Pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br><br>
              <menu class="menucls" style="margin-left: 50px;">
                    <input style="margin-left: 20px;" type="button" class="buttoncls" value="CLOSE" onClick="closelogindlg()">
                    <input style="margin-left: 20px;"  type="submit" name='submit' value="GET IN" >
              </menu><br><br><br>
              <div id="lmessage" style="margin-left: 50px;">
                <h3 style="margin-left: 50px;">Password must contain the following:</h3>
                <p style="margin-left: 50px;" id="lletter" class="invalid">A <b>lowercase</b> letter</p>
                <p style="margin-left: 50px;" id="lcapital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                <p style="margin-left: 50px;" id="lnumber" class="invalid">A <b>number</b></p>
                <p style="margin-left: 50px;" id="llength" class="invalid">Minimum <b>8 characters</b></p>
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