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
$link = mysqli_connect("localhost","root","") or die ("Khong the ket noi den CSDL MySQL");
mysqli_select_db($link,"dulieu");
$sql="select * from phongban";
$rs=mysqli_query($link,$sql);
echo '<table border="1" width="100%">';
echo "<tr>
        <th>IDPB</th>
        <th>TÊN PHONG BAN</th>
        <th>MÔ TẢ</th>
        <th>CHỌN</th>
</tr>";
while($row = mysqli_fetch_array($rs))
{
    echo '<TR><TD align="center">'.$row['IDPB'].'</TD>
        <TD align="center">'.$row['Tenpb'].'</TD>
        <TD align="center">'.$row['Mota'].'</TD>
        <TD align="center"><a href="./xulyxoa_pb.php?mod='.$row['IDPB'].'">Xóa</a></TD></TR>';
}
echo '</TABLE>'
?>