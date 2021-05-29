<html>
<head>
</head>
<body align="center">
    <form action="formchenthongtin_nv.php" method="post" name="chen_nv">
        <caption>
            <h1>THÔNG TIN NHÂN VIÊN</h1>
        </caption>
        <?php
        $link = mysqli_connect("localhost","root","","dulieu") or die ("Khong the ket noi den CSDL MySQL");
        $sql="select * from nhanvien";
        $rs=mysqli_query($link,$sql);
        echo '<table border="1" width="100%">';
        echo "<tr>
            <th>IDNV</th>
            <th>HỌ TÊN</th>
            <th>IDPB</th>
            <th>ĐỊA CHỈ</th>
        </tr>";
        while($row = mysqli_fetch_array($rs)){
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
        ?><br>
     <input type="submit" value="Insert" />
    </form>
</body>
</html>
