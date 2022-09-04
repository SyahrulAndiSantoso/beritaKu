<?php

class postController
{


    public function __construct()
    {
        $this->model = new postModel();
    }

    public function store()
    {
        $judul = $_POST['judul'];
        $thumnail = $_FILES['thumnail']['name'];
        $isi = $_POST['isi'];
        move_uploaded_file($_FILES['thumnail']['tmp_name'], "assets/img/$thumnail");
        if ($this->model->prosesStore($judul, $thumnail, $isi)) {
            header("location:index.php?page=post&aksi=view&pesan=Berhasil Menambah Data");
        } else {
            header("location:index.php?page=post&aksi=view&pesan=Gagal Menambah Data");
        }
    }

    public function index()
    {
        $data = $this->model->get();
        extract($data);
        require_once("view/dashboard/post/index.php");
    }

    public function home()
    {
        $post = $this->model->get();
        $trending = $this->model->getTrending();
        extract($post);
        extract($trending);
        require_once("view/landingPage/index.php");
    }
}
