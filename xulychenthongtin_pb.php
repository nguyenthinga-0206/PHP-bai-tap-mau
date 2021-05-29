<?php
$p=$_POST['ChenIDPB'];
$t=$_POST['ChenTenPB'];
$m=$_POST['ChenMota'];
$link = mysqli_connect("localhost","root","","dulieu") or die ("Khong the ket noi den CSDL MySQL");
$sql="insert into phongban value('$p','$t' ,'$m')";
$rs=mysqli_query($link,$sql);
header("Location:chenthongtin_pb.php");
?>