<?php

    $mysqli = mysqli_connect('localhost', 'root', '', 'skd');

    $username=$_POST['username'];
    $password=$_POST['password'];

    $login = 0;

    $query = "SELECT * FROM tugas1 WHERE username='$username' and password='$password'";
    $data = mysqli_query($mysqli, $query);

    $aName1 = mysqli_fetch_assoc($data);
    $cek = mysqli_num_rows($data);

    session_start();
    if($cek > 0){
        $role = $aName1['role'];
        print($role);
        session_destroy();
    }else{

        if (isset($_SESSION['loginCount'])) {
            $login = $_SESSION['loginCount']++;

            if ($login == 5) {
                echo " <script>
                alert('Silahkan tunggu 1 menit lagi untuk bisa login kembali');
                document.location.href='blokir.php';
                </script> ";
                session_destroy();
            }

            if ($login == 4) {
                echo " <script>
                alert('Kesempatan terakhir untuk login');
                document.location.href='indeks.php';
                </script> ";
            }

            if ($login < 4) {
                echo " <script>
                alert('Akses ditolak');
                document.location.href='indeks.php';
                </script> ";
            }
        } else {
            echo " <script>
                alert('Akses ditolak');
                document.location.href='indeks.php';
                </script> ";
                $_SESSION['loginCount'] = 1;
        }
    }

?>