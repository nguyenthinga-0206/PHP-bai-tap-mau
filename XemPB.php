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
$link=mysqli_connect("localhost","root","") or die("Could not connect to MySQL Database");
mysqli_select_db($link,"dulieu");
$sql='select * from phongban';
$result=mysqli_query($link, $sql);
echo "<table border='1' width='100%'>";
echo "<tr>
        <th>IDPB</th>
        <th>TÊN PHONG BAN</th>
        <th>MÔ TẢ</th>
</tr>";
while($row = mysqli_fetch_array($result)){
    $IDPB=$row{"IDPB"};
    $Tenpb=$row{"Tenpb"};
    $Mota=$row{"Mota"};
    echo "<tr>
        <td>$IDPB</td>
        <td>$Tenpb</td>
        <td>$Mota</td>
    </tr>";
}
echo "</table>";
?>