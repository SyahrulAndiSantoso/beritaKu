<?php

class postModel
{

    public function prosesStore($judul, $thumnail, $isi)
    {
        $sql = "INSERT INTO post(judul,thumnail,isi) VALUES('$judul','$thumnail','$isi')";
        return koneksi()->query($sql);
    }

    public function get()
    {
        $sql = "SELECT * FROM post";
        $query = koneksi()->query($sql);
        $hasil = [];

        while ($data = $query->fetch_assoc()) {
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function getTrending()
    {
        $sql = "SELECT * FROM trending";
        $query = koneksi()->query($sql);
        $hasil = [];

        while ($data = $query->fetch_assoc()) {
            $hasil[] = $data;
        }
        return $hasil;
    }
}
