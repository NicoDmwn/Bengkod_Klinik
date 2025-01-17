<!DOCTYPE html>
<html lang="en">

<style>
.client_section {
    padding: 50px 0;
    background-color: #f7f7f7;
    color: #333;
}

.heading_container {
    text-align: center;
    margin-bottom: 40px;
}

.heading_container h2 {
    font-size: 32px;
    margin-bottom: 10px;
}

.testimonial-card {
    background: white;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    margin-bottom: 20px;
}

.card {
    display: flex;
    align-items: center;
    justify-content: center;
}

.card-content {
    display: grid;
    grid-template-columns: auto 1fr;
    gap: 20px;
    padding: 20px;
}

.img-box {
    display: flex;
    align-items: center;
    justify-content: center;
}

.img-box img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
}

.text-content {
    text-align: left;
}

.text-content h6 {
    font-size: 18px;
    margin-bottom: 5px;
    font-weight: 600;
}

.location {
    font-size: 14px;
    color: #666;
    margin-bottom: 10px;
}

.testimonial-text {
    font-size: 14px;
    line-height: 1.6;
}

@media (max-width: 768px) {
    .card-content {
        grid-template-columns: 1fr;
        text-align: center;
    }

    .img-box {
        justify-content: center;
        margin-bottom: 15px;
    }
}

</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Poliklinik</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <h4>Poliklinik</h4>
        </div>
    </nav>
    <div class="container-fluid flex flex-col justify-center items-center text-white p-5"
        style="height: 400px; background-image: url('img/udinus.jpeg'); background-size: cover; background-position: center; position: relative;">
    </div>
    <div class="container mt-5">
        
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-hospital-user fa-fw mb-3 text-primary" style="font-size: 34px;"></i>
                        <h3 class="">Pasien</h3>
                        <p class="card-text">Apabila Anda adalah seorang Pasien, silahkan Registrasi terlebih dahulu untuk melakukan pendaftaran sebagai Pasien!</p>
                        <a href="loginUser.php">Klik disini</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-stethoscope fa-fw mb-3 text-success" style="font-size: 34px;"></i>
                        <h3 class="">Dokter</h3>
                        <p class="card-text">Apabila Anda adalah seorang Dokter, silahkan Login terlebih dahulu untuk memulai melayani Pasien!</p>
                        <div class="d-grid">
                            <a href="login.php">Klik disini</a>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>
    <div class="container-fluid bg-dark mt-5">
        <footer class="row justify-content-lg-center">
            <div class="mt-3">
                Poliklinik - Sistem Temu Janji Pasien Dokter
            </div>
        </footer>
    </div>
        


        <!-- jQuery -->
        <script src="assets/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="assets/dist/js/adminlte.min.js"></script>
</body>

</html>