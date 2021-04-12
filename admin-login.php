<!DOCTYPE html>
<html>
<title>Admin Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/main.css">
<link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {

	background:#00838f;
}
.form{
	width:40%;
	margin-left:30%;
	margin-top:0%;
	
}
@media only screen and (max-width:550px) {
.form{
width:80%;
	margin-left:10%;
	margin-top:5%;
}
}
</style>
<body >
<div class="w3-bar w3-container">
  <a href="index.php" class="w3-bar-item w3-text-white w3-right w3-button"><i class="fa fa-user" aria-hidden="true"></i> user Login</a>
  <a href="userregistration.html" class="w3-bar-item w3-text-white w3-right w3-button"><i class="fa fa-user-plus" aria-hidden="true"></i> User Registration</a>
</div>
<div class="w3-container form w3-row-padding">
<div class="">
<form class="w3-container w3-card w3-margin w3-round-xlarge " style="background:#000000;" METHOD="POST" action="admin-loginform.php">
  <h2 class="w3-text-white w3-center" style="font-family: 'Allerta';"><i class="fa fa-user-circle" aria-hidden="true"></i> Admin Login</h2>
  <p>      
  <label class="w3-text-white"><b>Admin Name</b></label>
  <input class="w3-input w3-border  w3-round " name="name" type="text"></p>
  <p>      
  <label class="w3-text-white"><b>Password</b></label>
  <input class="w3-input w3-border  w3-round" name="password" type="password"></p>
  <p>      
  <button class="w3-btn w3-white w3-center  w3-round" style="width:100%">Login  </button></p><br>
</form>
</div>
</div>
</body>
</html>