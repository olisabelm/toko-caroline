<<<<<<< HEAD
<!DOCTYPE html>
<html>

<head>
    <title>Fresh Box</title>
    <style>
        /* Styles for container */
        .container {
            max-width: 300px;
            margin: 50px auto;
            padding: 0 15px;
        }

        /* Styles for form */
        form {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Styles for form title */
        h1 {
            margin-bottom: 20px;
            text-align: center;
        }

        /* Styles for form inputs and labels */
        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        /* Styles for buttons */
        .btn-primary,
        .btn-secondary {
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            margin-right: 10px;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: #fff;
        }
    </style>
</head>

<body>
    <?php include "menu.php"; ?>

    <?php
    require "koneksi.php";

    $id = $_SESSION["id"];

    $sql = "SELECT * FROM user WHERE id = '$id'";
    $query = mysqli_query($koneksi, $sql);

    $user = mysqli_fetch_array($query);
    ?>

    <div class="container">
        <form action="update-profil.php" method="POST">
            <h1 class="mb-4">Profil</h1>

            <input type="hidden" name="id" value="<?= $id ?>">

            <div class="form-group row">
                <label for="username" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input readonly type="text" class="form-control" id="username" name="username" value="<?= $user["username"] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="new_password" class="col-sm-2 col-form-label">Password Baru</label>
                <div class="col-sm-10">
                    <input required type="password" class="form-control" id="new_password" name="new_password">
                </div>
            </div>
            <div class="form-group row">
                <label for="confirm_password" class="col-sm-2 col-form-label">Ulangi Password Baru</label>
                <div class="col-sm-10">
                    <input required type="password" class="form-control" id="confirm_password" name="confirm_password">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary me-2">SIMPAN</button>
                    <button type="reset" class="btn btn-secondary">RESET</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
=======
<!DOCTYPE html>
<html>

<head>
    <title>Fresh Box</title>
    <style>
        /* Styles for container */
        .container {
            max-width: 300px;
            margin: 50px auto;
            padding: 0 15px;
        }

        /* Styles for form */
        form {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Styles for form title */
        h1 {
            margin-bottom: 20px;
            text-align: center;
        }

        /* Styles for form inputs and labels */
        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        /* Styles for buttons */
        .btn-primary,
        .btn-secondary {
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            margin-right: 10px;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: #fff;
        }
    </style>
</head>

<body>
    <?php include "menu.php"; ?>

    <?php
    require "koneksi.php";

    $id = $_SESSION["id"];

    $sql = "SELECT * FROM user WHERE id = '$id'";
    $query = mysqli_query($koneksi, $sql);

    $user = mysqli_fetch_array($query);
    ?>

    <div class="container">
        <form action="update-profil.php" method="POST">
            <h1 class="mb-4">Profil</h1>

            <input type="hidden" name="id" value="<?= $id ?>">

            <div class="form-group row">
                <label for="username" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input readonly type="text" class="form-control" id="username" name="username" value="<?= $user["username"] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="new_password" class="col-sm-2 col-form-label">Password Baru</label>
                <div class="col-sm-10">
                    <input required type="password" class="form-control" id="new_password" name="new_password">
                </div>
            </div>
            <div class="form-group row">
                <label for="confirm_password" class="col-sm-2 col-form-label">Ulangi Password Baru</label>
                <div class="col-sm-10">
                    <input required type="password" class="form-control" id="confirm_password" name="confirm_password">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary me-2">SIMPAN</button>
                    <button type="reset" class="btn btn-secondary">RESET</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
>>>>>>> b9f3fe71ceaa7dff5ecd36263f5e1057f21c3829
