<html>
<head>
</head>
<body align="center">
    <form action="formchenthongtin_pb.php" method="post" name="chen_pb">
        <caption>
            <h1>THÔNG TIN PHÒNG BAN</h1>
        </caption>
        <?php
        $link = mysqli_connect("localhost","root","","dulieu") or die ("Khong the ket noi den CSDL MySQL");
        $sql="select * from phongban";
        $rs=mysqli_query($link,$sql);
        echo '<table border="1" width="100%">';
        echo "<tr>
                <th>IDPB</th>
                <th>TÊN PHONG BAN</th>
                <th>MÔ TẢ</th>
        </tr>";
        while($row = mysqli_fetch_array($rs)){
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
        ?><br>
     <input type="submit" value="Insert" />
    </form>
</body>
</html>
