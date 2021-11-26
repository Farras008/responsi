<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aplikasi Inventaris Berbasis Web</title>
    <link rel="stylesheet" href="assets/css/style.css" />

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- boorstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
      body {
        background-image: url("assets/img/bg-awal.png");
        background-repeat: no-repeat;
        background-attachment: fixed;
        /* background-size: cover; */
        background-size: 100% 100%;
      }
    </style>
  </head>
  <body>
    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#07326d"
        fill-opacity="1"
        d="M0,0L48,26.7C96,53,192,107,288,117.3C384,128,480,96,576,106.7C672,117,768,171,864,165.3C960,160,1056,96,1152,85.3C1248,75,1344,117,1392,138.7L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"
      ></path>
    </svg> -->
    <center class="ml1" style="padding-top: 50px; color: #ffffff">
      <span class="text-wrapper">
        <span class="line line1"></span>
        <span class="letters">SELAMAT DATANG</span>
        <span class="line line2"></span>
      </span>
    </center>
    <div class="col-login">
        <div class="col align-self-center">
            <h1 class="t-login">Login Page</h1>
            <center>
            <?php
                if(isset($_GET['pesan'])){
                    if($_GET['pesan']=="gagal") {
                        echo "Login gagal! Email atau password Anda salah.";
                    }
                    if($_GET['pesan']=="belum_login") {
                        echo "Anda belum login. Silakan login terlebih dahulu.";
                    }
                }
            ?>
            </center>
            <form method="POST" action="proseslogin.php">
                <div class="mb-3">
                    <label class="form-label putih">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan email Anda" name="email">
                    <div id="emailHelp" class="form-text putih">Kami tidak akan pernah membagikan email Anda kepada siapapun.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label putih">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan password" name="password">
                </div>
                <center>
                    <button type="submit" class="btn btn-primary btn-login">Login</button> <br>
                </center>
            </form>
            <br>
            <center>
                <p>Tetap Semangat <br> Jangan Lupa Tersenyum Hari Ini</p>
            </center>
        </div> 
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="assets/js/script.js"></script>
  </body>
</html>
