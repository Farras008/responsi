<?php
    session_start();
    include "config.php";

    $email = $_POST['email'];
    $password = $_POST['password'];
    

    $query = mysqli_query($connection, "SELECT * FROM petugas WHERE email='$email' && password='$password'") or die (mysqli_error($connection));

    $cek = mysqli_num_rows($query);

    if($cek>0)
    {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header("location:admin.php");
        
    }
    else{
        echo "
            <script>
                alert('Login gagal! Email atau password Anda salah.');
                document.location.href = 'index.php';
            </script>
        ";
    }
?>