<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh Box</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
    <div class="form-box">
        <div class="form-value">
        <form action="validasi.php" method="POST" class="login-form" onsubmit="return konfirmasi(this)">
            <h2>Selamat datang!</h2>
            <div class="form-group">
              <input type="text" id="username" name="username" spellcheck="false" required placeholder="Username" autocomplete="off" class="input-field" />
              <label for="username">Username</label>
            </div>
            <div class="form-group">
              <input type="password" id="password" name="password" required placeholder="Password" autocomplete="off" class="input-field" />
              <label for="password">Password</label>
            </div>
            <div class="button-container">
               <button type="submit" class="login-button">LOGIN</button>
               <button type="reset" class="clear-button">CLEAR</button>
            </div>
        </form>
        </div>
    </div>
    </section>

</body>
</html>
