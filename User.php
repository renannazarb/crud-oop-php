<?php

require_once('Database.php');

class User extends Database {

    function create($nama, $email) {
        $query = "INSERT INTO user VALUES (NULL, '$nama', '$email')";
        $result = $this->getKoneksi()->query($query);

        return $result ? true : false;
    }

    function read() {
        $query = "SELECT * FROM user ORDER BY id DESC";
        $result = $this->getKoneksi()->query($query);

        $data = $result->fetch_all(MYSQLI_ASSOC);
        
        return $data;
    }

    function readById($id) {
        $query = "SELECT * FROM user WHERE id=$id";
        $result = $this->getKoneksi()->query($query);

        return $result->fetch_assoc();
    }

    function update($id, $nama, $email) {
        $query = "UPDATE user SET nama = '$nama', email = '$email' WHERE id = $id";
        $result = $this->getKoneksi()->query($query);

        return $result ? true : false;
    }

    function delete($id) {
        $query = "DELETE FROM user WHERE id=$id";
        $result = $this->getKoneksi()->query($query);

        return $result ? true : false;
    }

}