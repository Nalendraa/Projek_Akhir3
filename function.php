<?php
session_start();
require ('koneksi.php');


// jika klik tombol masuk
if (isset($_POST['masuk'])) {
    $username = $_POST['username'];
    $password =  $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    if (mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_assoc($query);
        if (password_verify($password, $data['password'])) {
            $_SESSION['login'] = $data['username'];
            echo '<script>
                alert("Masuk berhasil"); 
                window.location.href="index.php";
            </script>';
        } else {
            echo '<script>
                alert("Masuk gagal ! periksa kembali username dan password"); 
                window.location.href="login.php";
            </script>';
        }
    } else {
        echo '<script>
            alert("Masuk gagal ! periksa kembali username dan password"); 
            window.location.href="login.php";
        </script>';
    }
}


// jika klik tombol daftar
if (isset($_POST['daftar'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password =  $_POST['password'];

    $password = password_hash($password, PASSWORD_DEFAULT);
    $query = mysqli_query($conn, "INSERT INTO users (username, email, password) VALUES('$username', '$email', '$password')");

    if ($query) {
        echo '<script>
            alert("Pendaftaran berhasil"); 
            window.location.href="login.php";
        </script>';
    } else {
        echo '<script>
            alert("Pendaftaran gagal"); 
            window.location.href="login.php";
        </script>';
    }
}