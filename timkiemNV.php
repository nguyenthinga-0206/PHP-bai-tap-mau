<html>
<head>
    <meta charset="UTF-8">
</head>
<body >
    <center>
        <form method ="post">
        <caption><h1>TÌM KIẾM NHÂN VIÊN</h1></caption>
        <br>
        Column: <select name="column">
        <option value="IDNV">IDNV</option>
        <option value="Hoten">Hoten</option>
        <option value="IDPB">IDPB</option>
        <option value="Diachi">Diachi</option>
        </select>
        <br>
        <input type="text" name = "text">
        <br>
        <input type="submit" name = "ok" value = "OK">
        <br>
        </form>
    </center>
    <?php
        $search = $_POST['text'];
        $column = $_POST['column'];

        $conn = mysqli_connect('localhost', 'root','') or die('Could not connect:'.mysqli_error('ko the ket noi'));
        mysqli_select_db($conn,"dulieu");

        $sql = "select * from nhanvien WHERE $column like '%$search'";
        $result = mysqli_query($conn,$sql);
        echo '<table border="1" width="100%">';
        echo'<caption>THÔNG TIN NHÂN VIÊN</caption>';
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