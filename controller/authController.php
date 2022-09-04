<?php

class authController
{

    public function __construct()
    {
        $this->model = new authModel();
    }

    public function viewLogin()
    {
        require_once("view/landingPage/login.php");
    }

    public function viewRegistrasi()
    {
        require_once("view/landingPage/registrasi.php");
    }

    public function login()
    {
        $password = $_POST['password'];
        $email = $_POST['email'];
        $loginAdmin = $this->model->prosesLoginAdmin($password, $email);
        $loginPengguna = $this->model->prosesLoginPengguna($password, $email);
        if ($loginAdmin) {
            $_SESSION['role'] = 'admin';
            $_SESSION['data'] = $loginAdmin;
            header("location:index.php?page=trending&aksi=view&pesan=Berhasil Login");
        } else if ($loginPengguna) {
            $_SESSION['role'] = 'pengguna';
            $_SESSION['data'] = $loginPengguna;
            header("location:index.php?page=post&aksi=view&pesan=Berhasil Login");
        } else {
            header("location:index.php?page=login&aksi=view&pesan=Gagal Login");
        }
    }

    public function registrasi()
    {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = 'pengguna';
        if ($this->model->prosesRegistrasi($nama, $email, $password, $role)) {
            header("location:index.php?page=login&aksi=view&pesan=Berhasil Registrasi");
        } else {
            header("location:index.php?page=registrasi&aksi=view&pesan=Gagal Registrasi");
        }
    }

    public function logout()
    {
        session_destroy();
        header("location:index.php?page=home&aksi=view");
    }
}
