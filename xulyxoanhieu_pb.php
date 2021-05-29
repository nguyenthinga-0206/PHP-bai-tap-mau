<?php
$idpb=$_REQUEST['xoa'];
$link = mysqli_connect("localhost","root","","dulieu") or die ("Khong the ket noi den CSDL MySQL");
if(isset($_POST['xoa'])){
    $sql="delete from phongban where IDPB='$idpb'";
    $rs=mysqli_query($link,$sql);
}
header("Location:xoatatca_pb.php");
?>