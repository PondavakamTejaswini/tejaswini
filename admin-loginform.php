<?php
header("Access-Control-Allow-Origin: *");
include_once("db_conx.php");
if(isset($_POST['name']) && ($_POST['password'])){
	$e=$_POST['name'];
	$p=$_POST['password'];
	   $email = "admin";
	  $pass="admin123";
 if($e == $email && $p == $pass){
	      $aid = 101;
	      $adminemail = $e;
	      $adminpassword = $email;
	      $_SESSION['aid'] = $pass;
	      $_SESSION['adminemail'] = $adminemail;
		  $_SESSION['adminpassword'] = $adminpassword;
		   setcookie("aid", $aid, strtotime( '+1 days' ), "/", "", "", TRUE);
    	   setcookie("adminemail", $adminemail, strtotime( '+1 days' ), "/", "", "", TRUE);
    	   setcookie("adminpass", $adminpassword, strtotime( '+1 days' ), "/", "", "", TRUE);
    	   echo"<script>
                alert('Login Sucess');
                window.location='admin-dashboard.php';
                </script>";
		
    }else{
     echo"<script>
                alert('Invalid Credentials');
                window.location='admin-login.php';
                </script>";
}
}
?>