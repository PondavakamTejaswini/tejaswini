<?php
include 'checkadminloginstatus.php';
$aid=$log_aid;
if($aid=='')
{
 header("location:/admin-login.php");
 exit();
}
 ?>
<!DOCTYPE html>
<html>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/main.css">
<link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
    background:#00838f;
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
<div class="w3-bar w3-container w3-card-4 w3-black w3-bottom ">
  <a href="admin-logout.php" class="w3-bar-item w3-large w3-text-white w3-button"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a>
</div>
<div class="w3-container w3-row-padding ">
<h2 style="color:white;font-weight:900" >Users Registered</h2>
<div class="w3-container w3-row">
<div id="error" class="w3-padding w3-text-red w3-center w3-large"></div>
<?php
include_once("db_conx.php");
$check_user = mysqli_query($db,"SELECT * FROM users");
$count = mysqli_num_rows($check_user);
if($count != 0){
    echo"<table class='w3-border w3-table w3-center'>";
    echo"<tr class='w3-border'>";
    echo'<th>Username</th>
    <th>Mobile Number</th>';
    echo"</tr>";
while($row=mysqli_fetch_array($check_user)){
	$username = $row['username'];
	$mobilenumber = $row['mobilenumber'];
	$uid = $row['uid'];
	echo"<tr>
	<td>$username</td>
	<td>$mobilenumber</td>
	</tr>";
	
}
	echo"</table>";
}else{
	echo"<h4>No Users Found</h4>";
}
?>
</div>

</div>
</body>
</html>