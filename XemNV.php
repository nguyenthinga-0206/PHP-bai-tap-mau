<html>
<head>
</head>
<body align="center">
    <caption>
        <h1>THÔNG TIN NHÂN VIÊN</h1>
    </caption>
<?php 
$link=mysqli_connect("localhost","root","") or die("Could not connect to MySQL Database");
mysqli_select_db($link,"dulieu");
$sql='select * from nhanvien';
$result=mysqli_query($link, $sql);
echo "<table border='1' width='100%'>";
echo "<tr>
        <th>IDNV</th>
        <th>HỌ TÊN</th>
        <th>IDPB</th>
        <th>ĐỊA CHỈ</th>
</tr>";
while($row = mysqli_fetch_array($result)){
    $IDNV=$row{"IDNV"};
    $Hoten=$row{"Hoten"};
    $IDPB=$row{"IDPB"};
    $Diachi=$row{"Diachi"};
    echo "<tr>
        <td>$IDNV</td>
        <td>$Hoten</td>
        <td>$IDPB</td>
        <td>$Diachi</td>
    </tr>";
}
echo "</table>";
?>
</body>
</html>
