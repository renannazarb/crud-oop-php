<?php
require_once('User.php');

$user = new User();

$id = $_GET['id'];

$user_data = $user->readById($id);

if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $user->update($id, $nama, $email);
    header('refresh:0');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>

    <h2>Edit User <?= $user_data['nama'] ?></h2>
    <a href="index.php">Kembali</a>
    <form method="post">
        <input type="text" name="nama" placeholder="Masukkan Nama" value="<?= $user_data['nama'] ?>">
        <input type="email" name="email" placeholder="Masukkan Email" value="<?= $user_data['email'] ?>">
        <button name="update">Update</button>
    </form>
    
</body>
</html>