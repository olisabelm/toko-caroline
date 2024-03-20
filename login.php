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
        <form id="loginForm" action="validasi.php" method="POST" class="login-form">
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
        <p id="error" class="error"></p>
        </div>
    </div>
    </section>

    <script>
        document.getElementById("loginForm").addEventListener("submit", function(event) {
            event.preventDefault(); 
            var form = this;
            var formData = new FormData(form);
            
            fetch(form.action, {
                method: form.method,
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                if (data.includes("Username atau password tidak valid")) {
                    document.getElementById("error").textContent = "Username atau password tidak valid";
                } else if (data.includes("Username tidak ditemukan")) {
                    document.getElementById("error").textContent = "Username tidak ditemukan";
                } else {
                    form.submit(); 
                }
            })
            .catch(error => console.error('Error:', error));
        });
    </script>
</body>
</html>
