
<html>
    <head>
        <title>INSERT</title>
    </head> 
    <body align = "center" bgcolor="#CC99CC" onload="document.flogin.txtuser.focus()">
        <form action="xulychenthongtin_pb.php"  method="POST" name = "Insert" >
            <table align = "center">
                <tr>
                    <td>IDPB</td>
                    <td>
                        <input type="text"  name = "ChenIDPB"  placeholder="Nhap ID phong ban" require="require">
                    </td>
                </tr>
                <tr>
                    <td>Tên Phòng Ban</td>
                    <td>
                        <input type="text"  name = "ChenTenPB" placeholder="Nhap ID phong ban" require="require">
                    </td>
                </tr>
                <tr>
                    <td>Mô tả</td>
                    <td>
                        <input type = "text"  name = "ChenMota" placeholder="Nhap ID phong ban" require="require">
                    </td>
                </tr>
                <tr align = "center">
                    <td colspan="2">
                        <input type = "submit"  value = "OK Insert" >
                        <input type = "reset" value = "Reset" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>