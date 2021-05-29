<?php
$idnv=$_REQUEST['xoa'];
$link = mysqli_connect("localhost","root","","dulieu") or die ("Khong the ket noi den CSDL MySQL");
if(isset($_POST['xoa'])){
    $sql="delete from nhanvien where IDNV='$idnv'";
    $rs=mysqli_query($link,$sql);
}
header("Location:xoatatca_nv.php");
?>