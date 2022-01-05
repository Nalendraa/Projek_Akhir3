<?php require 'function.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/auth.css" />
    <title>Masuk dan Daftar</title>
</head>

<body>
    <!-- Masuk -->
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form id="form" action="function.php" class="sign-in-form" method="POST">
                    <h2 class="title">Masuk</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" required name="username" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" required name="password" />
                    </div>
                    <input type="submit" value="Masuk" name="masuk" class="btn solid" />
                    <p class="social-text">Atau masuk dengan</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                    </div>
                </form>
                <!-- End Masuk -->

                <!-- Daftar -->
                <form action="function.php" class="sign-up-form" onsubmit="validation(event)" method="POST">
                    <h2 class="title">Daftar</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="username" id="username" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" name="email" id="email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" id="password" />
                    </div>
                    <input type="submit" class="btn" value="Daftar" name="daftar" />
                    <p class="social-text">Atau masuk dengan</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Daftar -->

        <!-- Animasi -->
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Belum punya akun ?</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis, ex ratione. Aliquid!</p>
                    <button class="btn transparent" id="sign-up-btn">Daftar</button>
                </div>
                <img src="assets/img/masuk.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Sudah punya akun ?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum laboriosam ad deleniti.</p>
                    <button class="btn transparent" id="sign-in-btn">Masuk</button>
                </div>
                <img src="assets/img/daftar.svg" class="image" alt="" />
            </div>
        </div>
    </div>
    <!-- End Animasi -->

    <script src="assets/js/main.js"></script>

    <!-- validasi huruf pada username -->
    <script type="text/javascript">
    function validation(e) {
        var validasiHuruf = /^[a-zA-Z ]+$/;
        var nama = document.getElementById("username");
        if (nama.value.match(validasiHuruf)) {} else {
            alert("Masukkan Usenrname Anda!\nIsi hanya dengan huruf!");
            nama.value = "";
            nama.focus();
            e.preventDefault();
        }
    }
    </script>

    <!-- Validasi form Daftar -->
    <script type="text/javascript">
    function validasi(e) {
        var username = document.getElementById("username").value;
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        if (username != "" && email != "" && password != "") {
            return true;
        } else {
            alert("Anda harus mengisi data dengan lengkap !");
        }
    }
    </script>
</body>

</html>