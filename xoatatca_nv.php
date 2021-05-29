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
$link = mysqli_connect("localhost","root","") or die ("Khong the ket noi den CSDL MySQL");
mysqli_select_db($link,"dulieu");
$sql="select * from nhanvien";
$rs=mysqli_query($link,$sql);
echo '<form action="xulyxoanhieu_nv.php" method="post" name="xoanhieu" align="right">';
echo '<table border="1" width="100%">';
echo "<tr>
        <th>IDNV</th>
        <th>HỌ TÊN</th>
        <th>IDPB</th>
        <th>ĐỊA CHỈ</th>
</tr>";
while($row = mysqli_fetch_array($rs))
{
    echo '<tr>
        <TD align="center">'.$row['IDNV'].'</TD>
        <TD align="center">'.$row['Hoten'].'</TD>
        <TD align="center">'.$row['IDPB'].'</TD>
        <TD align="center">'.$row['Diachi'].'</TD>
        <TD align="center"><input type="checkbox" name="xoa" value='.$row['IDNV'].'></TD></TR>';
}
echo '</TABLE>';
echo '<br><input type="submit" value="Xoá những nhân viên đã chọn" />';
echo '</form>'
?>
