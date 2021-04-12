<?php
include 'checkuserloginstatus.php';
$uid=$log_id;
if($uid =='')
{
 header("location:login.html");
 exit();
}
?><!DOCTYPE html>
<html>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/main.css">
<link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
   background:#00e5ff;
}
.form{
	width:90%;
	margin-left:5%;
	margin-top:0%;
}
.lm4{
    width:28%;
    margin-left:3%
}
@media only screen and (max-width:900px) {
    .md4{
width:30%;
margin-left:3%
}
}
@media only screen and (max-width:550px) {
.sm6{
width:45%;
margin-left:3.3%;
}
}
</style>
<body>
<div class="w3-bar w3-bottom w3-container w3-black" >
  <a href="user-logout.php" class="w3-bar-item w3-large w3-button"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a>
</div>
<div class="w3-container form w3-row-padding w3-margin-top ">
 <form class="w3-container w3-round" METHOD="POST" action="data-add.php">
 <h1>ADD DATA</h1>
    <p>      
    <label class="w3-text-black"><b>Statement 1</b></label>
    <input class="w3-input" name="data1" id="data1"  type="text" placeholder="Write Something...."></p>
	<p>      
    <label class="w3-text-black"><b>Statement 2</b></label>
    <input class="w3-input" name="data2" type="text" id="data2" placeholder="Write Something...."></p>
    <p>
    <button class="w3-btn w3-black w3-round" id="btn" onclick="addData()">Submit</button></p>
	<input type="hidden" id="uid" name="uid"  value="<?php echo "$uid";?>">
	<div id="error" class="w3-padding w3-text-red w3-center w3-large"></div>
  </form>
</div>
<div class="w3-container w3-row">
  <h1>Data Added</h1>
<?php
$check_user = mysqli_query($db,"SELECT * FROM data WHERE uid='$uid'");
$count  = mysqli_num_rows($check_user);
if($count !=0){
while($row=mysqli_fetch_array($check_user)){
	$data1 = $row['data1'];
	$data2 = $row['data2'];
	$did = $row['did'];
	echo"
	<div class='w3-container w3-col w3-margin-bottom w3-margin-top sm6 md4 lm4 w3-round-xlarge w3-padding ' style='background:#ffa726;'>
	  <p>Data 1: $data1</p>
	  <p>Data 2: $data2</p>
	</div>";
}
}else{
	echo"<h4>No Data Added</h4>";
}
?>
  </div>
</body>
</html>