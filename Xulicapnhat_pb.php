<?php
$tenpb = $_REQUEST['txtTenpb'];
$mota = $_REQUEST['txtMota'];

$myID = $_REQUEST['IDPB'];
$bienketnoi = mysqli_connect('localhost', 'root',"") or die('Could not connect:');
//chon CSDL de lam viec
$db_select = mysqli_select_db($bienketnoi,'dulieu');
//============================================
$sql="update phongban set Tenpb='$tenpb', Mota='$mota' where IDPB='$myID'";
$rs=mysqli_query($bienketnoi, $sql);
//chuyen ve trang hien thij phong ban
header('Location:capnhat_pb.php');
?>