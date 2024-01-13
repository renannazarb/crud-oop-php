<?php
require_once('User.php');

$user = new User();

if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $user->create($nama, $email);
}

if (isset($_POST['hapus'])) {
    $id = $_POST['id'];

    $user->delete($id);
}

$data = $user->read();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD OOP PHP</title>
</head>
<body>

<form method="post">
    <input type="text" name="nama" placeholder="Masukkan Nama">
    <input type="email" name="email" placeholder="Masukkan Email">
    <button name="tambah">Tambah</button>
</form>

<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($data as $user):
        ?>
        <tr>
            <td><?= $user['nama'] ?></td>
            <td><?= $user['email'] ?></td>
            <td>
                <a href="edit.php?id=<?= $user['id'] ?>">Edit</a>
                <form method="post">
                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                    <button name="hapus">Hapus</button>
                </form>
            </td>
        </tr>
        <?php
        endforeach
        ?>
    </tbody>
</table>
    
</body>
</html>