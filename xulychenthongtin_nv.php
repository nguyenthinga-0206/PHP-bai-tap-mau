<?php
$idnv=$_POST['ChenIDNV'];
$ht=$_POST['ChenHoten'];
$idpb=$_POST['ChenIDPB'];
$dc=$_POST['ChenDiachi'];
$link = mysqli_connect("localhost","root","","dulieu") or die ("Khong the ket noi den CSDL MySQL");
$sql="insert into nhanvien value('$idnv','$ht','$idpb','$dc') ";
$rs=mysqli_query($link,$sql);
header("Location:chenthongtin_nv.php");
?>