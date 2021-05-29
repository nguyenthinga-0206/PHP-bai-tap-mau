<html>
<head>
</head>
<body align="center">
    <caption>
        <h1>THÔNG TIN NHÂN VIÊN</h1>
    </caption>
</body>
</html>
<?php
$bienketnoi = mysqli_connect('localhost', 'root',"") or die('Could not connect:');
//chon CSDL de lam viec
$db_select = mysqli_select_db($bienketnoi,'dulieu');
$sql='select * from nhanvien';
$rs=mysqli_query($bienketnoi, $sql);
//$rs = mysqli_query('select * from phongban');
//=================================================
echo '<Form action="Xulicapnhat_nv.php">';
echo '<table border="1" width="100%">';
echo "<tr>
        <th>IDNV</th>
        <th>HỌ TÊN</th>
        <th>IDPB</th>
        <th>ĐỊA CHỈ</th>
        <th>CHỌN</th>
</tr>";
while($row=mysqli_fetch_array($rs,MYSQLI_BOTH))
{
    echo
    '<TR><TD>'.$row['IDNV'].'</TD><TD>'.$row['Hoten'].'</TD><TD>'.$row['IDPB'].'</TD><TD>'.$row['Diachi'].'</TD><TD><A href="form_capnhat_nv.php?IDNV='.$row['IDNV'].'">xxx</A></TD></TR>';
}
echo '</table>';
?>