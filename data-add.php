<?php
include_once("db_conx.php");
if(isset($_POST['data1']) && ($_POST['data2']) && ($_POST['uid'])){
$data1 = $_POST['data1'];
$data2 = $_POST['data2'];
$uid = $_POST['uid'];
$sql = "INSERT INTO data(data1,data2,uid) VALUES('$data1','$data2','$uid')";
if(mysqli_query($db,$sql)){
echo"<script>
alert('Data Added');
window.location='home.php';
</script>";
}else{
 echo"<script>
alert('Please Try Again');
window.location='home.php';
</script>";
}
}
?>