<?php
$idnv=$_REQUEST['mod'];
$link = mysqli_connect("localhost","root","","dulieu") or die ("Khong the ket noi den CSDL MySQL");
$sql="delete from nhanvien where IDNV='$idnv' ";
$rs=mysqli_query($link,$sql);
header("Location:xoa_nv.php");
?>