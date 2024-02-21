<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh Box</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form action="validasi.php" method="POST" class="login-form">
            <h1>Selamat Datang!</h1>
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" class="input-field"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" class="input-field"></td>
                </tr>
                <tr>
                    <td colspan="2" class="button-container">
                        <button type="submit" class="login-button">LOGIN</button>
                        <button type="reset" class="clear-button">CLEAR</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>