<?php
$idpb=$_REQUEST['mod'];
$link = mysqli_connect("localhost","root","","dulieu") or die ("Khong the ket noi den CSDL MySQL");
$sql="delete from phongban where IDPB='$idpb' ";
$rs=mysqli_query($link,$sql);
header("Location:xoa_pb.php");
?>