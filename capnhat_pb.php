<html>
<head>
</head>
<body align="center">
    <caption>
        <h1>THÔNG TIN PHÒNG BAN</h1>
    </caption>
</body>
</html>
<?php
$bienketnoi = mysqli_connect('localhost', 'root',"") or die('Could not connect:');
//chon CSDL de lam viec
$db_select = mysqli_select_db($bienketnoi,'dulieu');
$sql='select * from phongban';
$rs=mysqli_query($bienketnoi, $sql);
//$rs = mysqli_query('select * from phongban');
//=================================================
echo '<Form action="Xulicapnhat_pb.php">';
echo '<table border="1" width="100%">';
echo "<tr>
        <th>IDPB</th>
        <th>TÊN PHONG BAN</th>
        <th>MÔ TẢ</th>
        <th>CHỌN</th>
</tr>";
while($row=mysqli_fetch_array($rs,MYSQLI_BOTH))
{
    echo
    '<TR><TD>'.$row['IDPB'].'</TD><TD>'.$row['Tenpb'].'</TD><TD>'.$row['Mota'].'</TD><TD><A href="form_capnhat_pb.php?IDPB='.$row['IDPB'].'">xxx</A></TD></TR>';
}
echo '</table>';
?>