<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM ENKRIPSI</title>
</head>
<body>
    <form action="Caesar.php" method="get">
        <table>
            <tr>
                <td>Plainteks</td>
                <td>:<input type="text" name="kata"></td>
            </tr>
            <tr>
                <td>Key</td>
                <td>:<input type="text" name="key" maxlength="2"></td>
            </tr>
        </table>
        <br>
        <br>
        <input type="submit" value="kirim">
        <input type="reset" value="reset">
    </form>
</body>
</html>
