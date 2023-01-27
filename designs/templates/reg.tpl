<html>
    <head>
        <title>Registration</title>
    </head>
    <body style = background-color:rgba(0,0,0,0.74);>
        <center><h2><u>Registration</u></h2>
            <form method = 'POST'action="">
                <table style = background-color:rgb(100,114,124);>
                    <input type="hidden" name="hide" value ="h">
                    <tr>
                        <td>Name</td><td><input type="text" name="name"></td>
                    </tr>
                    <tr>
                        <td>Address</td><td><textarea name= "address"></textarea></td>
                    </tr>
                    <tr>
                        <td>Gender</td><td><input type="radio" name="gender" value="male">Male</td>
                        <td><input type="radio" name="gender" value="female">Female</td>
                    </tr>
                    <tr>
                        <td>Email</td><td><input type="email" name="email"></td>
                    </tr>
                    <tr>
                        <td>Password</td><td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td></td><td><input type="submit" value="Clear"></td>
                    </tr>
                    <tr>
                        <td></td><td><input type="reset" value="Register"></td>
                    </tr>
                </table>
            </form>
        
        </center>
    </body>
</html>