<?php
$ht = $_REQUEST['txtHoten'];
$idpb = $_REQUEST['txtIDPB'];
$dc = $_REQUEST['txtDiachi'];

$myID = $_REQUEST['IDNV'];
$bienketnoi = mysqli_connect('localhost', 'root',"") or die('Could not connect:');
//chon CSDL de lam viec
$db_select = mysqli_select_db($bienketnoi,'dulieu');
//============================================
$sql="update nhanvien set Hoten='$ht', IDPB='$idpb', Diachi='$dc' where IDNV='$myID'";
$rs=mysqli_query($bienketnoi, $sql);
//chuyen ve trang hien thij phong ban
header('Location:capnhat_nv.php');
?>