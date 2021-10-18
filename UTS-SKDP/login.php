<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-5">
            <br>
            <br>
            <br>
            <br>
                <div class="card border-secondary mb-3" style="max-width: 25rem;">
                    <div class="card-body">
                        <h2>
                            <center>Login</center>
                        </h2>
                        <form action="aksilogin.php" method="post">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama lengkap">
                            </div>
                            <div class="mb-3">
                                <label for="katasandi" class="form-label">Password</label>
                                <input type="password" class="form-control" name="katasandi" id="katasandi" placeholder="Masukkan password">
                            </div>
                            <p>Belum punya akun? <a href="registrasi.php">Sign Up</a> </p>
                            <div class="d-grid gap-2">
                                <button class="btn btn-success" href="dashboard.php" type="login" name="login">Login</button>
                                <button class="btn btn-primary" type="button">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
