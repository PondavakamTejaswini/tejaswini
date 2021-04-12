<?php
include("db_conx.php");
if(isset($_POST['name']) && ($_POST['phone']) && ($_POST['gender']) && ($_POST['dob']) && ($_POST['country']) && ($_POST['password'])){
$name = $_POST['name'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$country = $_POST['country'];
$password = md5($_POST['password']);
$usercheck = mysqli_query($db,"SELECT * FROM users WHERE username='$name' AND password='$password'");
$count = mysqli_num_rows($usercheck);
if($count != 0){
echo"<script>
alert('User already registered');
window.location='userregistration.html';
</script>";
}else{
$sql = "INSERT INTO users(username,mobilenumber,gender,dateofbirth,country,password) VALUES('$name','$phone','$gender','$dob','$country','$password')";
if(mysqli_query($db,$sql)){
echo"<script>
alert('Account Created');
window.location='index.php';
</script>";
}else{
  echo"<script>
alert('Please try again');
window.location='userregistration.html';
</script>";
}
}
}
?>