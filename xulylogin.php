<?php
$user=$_REQUEST['username'];
$pass=$_REQUEST['password'];
if($user=="" || $pass==""){
    header("Location:Login.php");
}
else{
    $link = mysqli_connect("localhost","root","") or die ("Khong the ket noi den CSDL MySQL");
    mysqli_select_db($link,"dulieu");
    $sql="select * from admin where Username='$user' && Password='$pass'";
    $rs=mysqli_query($link,$sql);
    if(mysqli_num_rows($rs)==0){
        header("Location:Login.php");
    }
    else header("Location:tatca.html");
}    
?>