<?php 
    class authModel{
        public function prosesLoginAdmin($password,$email)
        {
            $sql = "SELECT * FROM pengguna WHERE password = '$password' AND email = '$email' AND role = 'admin'";
            $query = koneksi()->query($sql);
            return $query->fetch_assoc();
        }

        public function prosesLoginPengguna($password,$email)
        {
            $sql = "SELECT * FROM pengguna WHERE password = '$password' AND email = '$email' AND role = 'pengguna'";
            $query = koneksi()->query($sql);
            return $query->fetch_assoc();
        }

        public function prosesRegistrasi($nama,$email,$password,$role)
        {
            $sql = "INSERT INTO pengguna(nama,email,password,role) VALUES ('$nama','$email','$password','$role')";
            return koneksi()->query($sql);
        }
    }
?>