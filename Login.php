<html>
    <head>
        <script Language = "JavaScript">
            function log(){
                if (document.mainForm.txtuser.value == ""){
                     alert("Missing Username")
                     return false}
                if (document.mainForm.txtpass.value == ""){ 
                    alert("Missing Password")
                    return false}
                if ((document.mainForm.txtuser.value != "")&&(document.mainForm.txtpass.value != ""))
                    alert("Welcome to JavaScript")
                return true;
            }
            
        </script>
    </head> 
    <body align = "center" bgcolor="#CC99CC" onload="document.flogin.txtuser.focus()">
        <h1>Login</h1>
        <form action="xulylogin.php"  method="POST" name = "flogin" >
            <table align = "center">
                <tr>
                    <td>Username</td>
                    <td>
                        <input type="text" size="20" name = 'username'>
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>
                        <input type = "password" size="20" name = "password">
                    </td>
                </tr>
                <tr align = "center">
                    <td colspan="2">
                        <input type = "submit"  value = "OK" onclick="log()">
                        <input type = "reset" value = "Reset" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>