<?php
    require 'kriptografi.php';
    require 'connect.php';

    $kalimat= str_replace(".", "Xx", $_POST['nama']);

    //encrypt
    for ($i=0;$i<strlen($kalimat);$i++)
    {
        $m=ord($kalimat[$i]); //merubah karakter menjadi ASCII
        $enc= $enc.chr(encRSA($m));
    }

    //decrypt
    for ($i=0;$i<strlen($kalimat);$i++)
    {
        $m=ord($enc[$i]);
        $dec= $dec.chr(decRSA($m));
    }
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
                                <center>Keamanan</center>
                            </h1>
                            <br>
                            <div class="mb-3 row">
                                <label for="nama" class="col-sm-2 col-form-label">Plain Text</label>
                                <div class="col-sm-10">
                                    <?php for ($i = 0; $i < strlen($kalimat); $i++) {
                                        echo $kalimat[$i];
                                    } ?>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="tempat" class="col-sm-2 col-form-label">Hasil Enkripsi</label>
                                <div class="col-sm-10">
                                    <?php echo $enc[$i]; ?>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="tanggal" class="col-sm-2 col-form-label">Hasil Dekripsi</label>
                                <div class="col-sm-10">
                                    <?php echo $dec[$i]; ?>
                                </div>
                            </div>  

                            <button type="submit" name="submit" value="submit" href="/" class="btn btn-outline-success">Kembali</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>