<?php
$myID=$_REQUEST['IDPB'];
$bienketnoi = mysqli_connect('localhost', 'root','') or die('Could not connect:'.mysqli_error('ko the ket noi'));
//chon CSDL de lam viec
$db_select = mysqli_select_db($bienketnoi,'dulieu');
$sql="select * from phongban where IDPB='$myID'";
$rs=mysqli_query($bienketnoi, $sql);
//$rs = mysqli_query("select * from phongban where IDPB='myID'");
$row = mysqli_fetch_array($rs,MYSQLI_BOTH);
?>
<html>
<head>
<title> Form cap nhat thong tin phong ban</title>
</head>
<body>
<Form action='Xulicapnhat_pb.php?IDPB=<?php echo $row['IDPB'];?>' method='post'>
<table width='100%' border='1'>
<tr>
    <TD>Ten Phong Ban</TD> 
    <TD><input type="text" size="20" name="txtTenpb" value='<?php echo $row['Tenpb'];?>'></TD>
</tr>
<TR>
    <TD>Mo Ta</TD> 
    <TD><input type='text' size='20' name='txtMota' value='<?php echo $row['Mota'];?>'></TD>
</TR>
<TR align ='center'>
    <TD colspan="2"><input type='submit' value='OK'><input type='reset' value='Reset'></TD>
</TR>
</table>
</Form>
</body>
</html>