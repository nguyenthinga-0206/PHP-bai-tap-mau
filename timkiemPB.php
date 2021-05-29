<html>
<head>
    <meta charset="UTF-8">
</head>
<body >
    <center>
        <form method ="post">
        <caption><h1>TÌM KIẾM PHÒNG BAN</h1></caption>
        <br>
        Column: <select name="column">
        <option value="IDPB">IDPB</option>
        <option value="Tenpb">Tenpb</option>
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

        $sql = "select * from phongban WHERE $column like '%$search'";
        $result = mysqli_query($conn,$sql);
        echo '<table border="1" width="100%">';
        echo'<caption>THÔNG TIN PHÒNG BAN</caption>';
        echo "<tr>
                <th>IDPB</th>
                <th>TÊN PHÒNG BAN</th>
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
</body>
</html>