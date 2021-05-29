
<html>
    <head>
        <title>INSERT</title>
    </head> 
    <body align = "center" bgcolor="#CC99CC" onload="document.flogin.txtuser.focus()">
        <form action="xulychenthongtin_nv.php"  method="POST" name = "Insert" >
            <table align = "center">
                <tr>
                    <td>IDNV</td>
                    <td>
                        <input type="text"  name = "ChenIDNV"  placeholder="Nhap ID nhan vien" require="require">
                    </td>
                </tr>
                <tr>
                    <td>Họ tên</td>
                    <td>
                        <input type="text"  name = "ChenHoten" placeholder="Nhap Ho ten" require="require">
                    </td>
                </tr>
                <tr>
                    <td>IDPB</td>
                    <td>
                        <input type = "text"  name = "ChenIDPB" placeholder="Nhap ID phong ban" require="require">
                    </td>
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td>
                        <input type = "text"  name = "ChenDiachi" placeholder="Nhap Dia chi" require="require">
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