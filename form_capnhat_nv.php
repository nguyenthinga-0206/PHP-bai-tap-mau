<?php
$myID=$_REQUEST['IDNV'];
$bienketnoi = mysqli_connect('localhost', 'root','') or die('Could not connect:'.mysqli_error('ko the ket noi'));
//chon CSDL de lam viec
$db_select = mysqli_select_db($bienketnoi,'dulieu');
$sql="select * from nhanvien where IDNV='$myID'";
$rs=mysqli_query($bienketnoi, $sql);
//$rs = mysqli_query("select * from phongban where IDPB='myID'");
$row = mysqli_fetch_array($rs,MYSQLI_BOTH);
?>
<html>
<head>
</head>
<body align="center">
    <caption>
        <h1>THÔNG TIN NHÂN VIÊN</h1>
    </caption>
<Form action='Xulicapnhat_nv.php?IDNV=<?php echo $row['IDNV'];?>' method='post'>
<table width='100%' border='1'>
<tr>
    <TD>Ho ten</TD> 
    <TD><input type="text" size="20" name="txtHoten" value='<?php echo $row['Hoten'];?>'></TD>
</tr>
<TR>
    <TD>IDPB</TD> 
    <TD><input type='text' size='20' name='txtIDPB' value='<?php echo $row['IDPB'];?>'></TD>
</TR>
<tr>
    <TD>Dia chi</TD> 
    <TD><input type="text" size="20" name="txtDiachi" value='<?php echo $row['Diachi'];?>'></TD>
</tr>
<TR align ='center'>
    <TD colspan="2"><input type='submit' value='OK'><input type='reset' value='Reset'></TD>
</TR>
</table>
</Form>
</body>
</html>