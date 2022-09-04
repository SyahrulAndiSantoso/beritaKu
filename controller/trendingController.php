<?php

class trendingController
{

    public function __construct()
    {
        $this->model = new trendingModel();
    }


    public function index()
    {
        $data = $this->model->get();
        extract($data);
        require_once("view/dashboard/trending/index.php");
    }

    public function store()
    {
        $judul = $_POST['judul'];
        $thumnail = $_FILES['thumnail']['name'];
        $isi = $_POST['isi'];
        move_uploaded_file($_FILES['thumnail']['tmp_name'], "assets/img/$thumnail");
        if ($this->model->prosesStore($judul, $thumnail, $isi)) {
            header("location:index.php?page=trending&aksi=view&pesan=Berhasil Menambah Data");
        } else {
            header("location:index.php?page=trending&aksi=view&pesan=Gagal Menambah Data");
        }
    }
}
