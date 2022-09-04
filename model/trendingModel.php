<?php

class trendingModel
{

    public function get()
    {
        $sql = "SELECT * FROM trending";
        $query = koneksi()->query($sql);
        $hasil = [];

        while ($data = $query->fetch_assoc()) {
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function prosesStore($judul, $thumnail, $isi)
    {
        $sql = "INSERT INTO trending(judul,thumnail,isi) VALUES('$judul','$thumnail','$isi')";
        return koneksi()->query($sql);
    }
}
