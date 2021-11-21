<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../asset/css/login.css" />
    <title>Sign in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <div class="card">
        <div class="text-center intro">
          <i class="fab fa-opencart mb-4"></i>
          <span class="d-block account">Toko Mabel</span>
          <span class="contact">Belanja Mabel Murah, Hemat, Dimana Saja, dan Kapan Saja Hanya Denga Sekali Klik</span>
        </div>
        <form action="../proses/proses_register.php" method="post">
          <div class="mt-4 text-center">
              <h4>Register.</h4>
              <span>Selamat Datang dan Selamat Berbelanja</span>
              
              <div class="inputbox">
                <input type="text" class="form-control" name="nama" placeholder="Nama">
                <i class="fa fa-user"></i>
              </div>
              <div class="inputbox">
                <input type="email" class="form-control" name="email" placeholder="Email">
                <i class="fas fa-at"></i>
              </div>
              <div class="inputbox">
                <input type="tel" class="form-control" name="telp" placeholder="Telephone">
                <i class="fas fa-phone-alt"></i>
              </div>
              <div class="mt-3 inputbox">
                <input type="text" class="form-control" name="username" placeholder="Username">
                <i class="fa fa-user"></i>
              </div>
              <div class="inputbox">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <i class="fa fa-lock"></i>
              </div>
          </div>
          <div class="d-flex justify-content-between">
              <div>
                <a href="login.php" class="forgot">Have Account?</a>
              </div>
          </div>
          <div class="mt-2">
            <button class="btn btn-primary btn-block">Register</button>
          </div>
        </form>
    </div>
  </body>
</html>