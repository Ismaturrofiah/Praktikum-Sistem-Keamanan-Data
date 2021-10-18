<?php 
    require 'aksiregistrasi.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Form</title>
</head>

<body>
    <div class="container">
        <br>
        <br>
        <div class="row justify-content-md-center">
            <br>
            <br>
            <div class="col-sm-9">
                <div class="card">
                    <div class="card-body">
                        <form action=" " method="post">
                            <h1>
                                <center>Registrasi Akun</center>
                            </h1>
                            <br>
                            <div class="mb-3 row">
                                <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama" class="form-control">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="tempat" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" name="tempat" class="form-control">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="date" name="tanggal" class="form-control">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-Laki">
                                    <label class="form-check-label" for="jenis_kelamin">Laki-Laki</label>
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
                                    <label class="form-check-label" for="jenis_kelamin">Perempuan</label>
                                    <br>
                                    <label class="form-check-label" for="jenis_kelamin"></label>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                                <div class="col-sm-10">
                                    <select name="agama" class="form-select">
                                        <option value="-" selected="selected">---Agama---</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen Katolik">Kristen Katolik</option>
                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <textarea name="alamat" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="jurusan" class="col-sm-2 col-form-label">Pilihan Jurusan</label>
                                <div class="col-sm-10">
                                    <select name="jurusan" class="form-select">
                                        <option value="-" selected="selected">---Jurusan---</option>
                                        <option value="MIPA">MIPA</option>
                                        <option value="IPS">IPS</option>
                                        <option value="Bahasa">Bahasa</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="katasandi" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="katasandi" class="form-control">
                                </div>
                            </div>  

                            <p>Sudah punya akun? <a href="login.php">Sign In</a> </p>
                            <button type="submit" name="submit" value="submit" class="btn btn-outline-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>