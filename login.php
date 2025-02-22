<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Tambahan CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color:rgb(123, 220, 255);
        }

        .login-container {
            display: flex;
            max-width: 1200px;
            /* Ubah max-width sesuai kebutuhan */
            background-color: #fff;
           
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        .left-container {
            flex: 1;
            overflow: hidden;
        }

        .left-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .right-container {
            flex: 1;
            padding: 40px;
            /* Menambahkan padding untuk memperbesar area formulir */
        }

        .login-form {
            max-width: 400px;
            /* Sesuaikan dengan kebutuhan */
            margin: 0 auto;
        }

        .login-form h2 {
            text-align: center;
            /* Tengahkan judul */
        }

        .login-form label {
            display: block;
            margin-bottom: 8px;
        }

        .login-form input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: none;
            /* Hapus border */
            border-bottom: 1px solid #ccc;
            /* Tambahkan garis bawah */
            outline: none;
            /* Hapus outline */
        }

        .login-form button {
            width: 100%;
            padding: 10px;
            background-color:rgb(58, 116, 204);
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .register-link {
            text-align: center;
            margin-top: 10px;
        }

        .register-link a {
            color: #3498db;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="login-container col-5">
       
        <div class="right-container">
            <div class="login-form">
                <h4 class="text-center">Login Dokter</h4>
                <p class="login-box-msg text-center">Lakukan login <b class="text-primary">Dokter</b> untuk melayani</p>
                <br><br>
                <form action="pages/login/checkLogin.php" method="post">
                    <label for="nama">Username :</label>
                    <input type="text" class="form-control" name="username" required>

                    <label for="no_hp">Password :</label>
                    <input type="password" class="form-control" name="password" required>

                    <button type="submit" class="btn btn-block btn-dark">
                        Masuk
                    </button>
                </form>

            </div>
            <div class="text-center mt-3"> <a href="loginUser.php"><span
                        class="text-primary">Pasien klik disini</span></a>
            </div>
        </div>
     
       
    </div>
    </div>

</body>

</html>
</script>
</body>

</html>