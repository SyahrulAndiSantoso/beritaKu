<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  <title>Berita Terkini</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $(".close").click(function() {
        $(".iklan").hide();
      });
    });
  </script>

  <style type="text/css">
    .oval {
      border-radius: 50px;
    }

    .tombol-ungu {
      background-color: #201F57;
    }

    .iklan {
      position: fixed;
      background-color: lightslategrey;
      top: 70px;
      left: 100px;
      right: 100px;
      bottom: 50px;
    }

    .iklan img {
      overflow: hidden;
    }

    .close {
      position: absolute;
      top: -9px;
      right: 0px;
      cursor: pointer;
    }

    .close i {
      font-size: 30px;
      color: goldenrod;
    }

    .close i:hover {
      color: gold;
    }
  </style>
</head>

<body>


  <nav class="navbar navbar-expand-lg navbar-light tombol-ungu mb-4">
    <div class="container-fluid mx-3 py-2">
      <a class="navbar-brand text-white" href="index.php?page=home&aksi=view">Berita Terkini</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        </ul>
        <form class="d-flex">
          <div class="input-group">
            <input type="text" class="form-control rounded-pill shadow-none w100" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2" style="width: 1000px">
            <button class="btn btn-outline-secondary position-absolute z-index-2 top-50 end-0 translate-middle-y rounded-pill border-0" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
          </div>
        </form>

        <a href="index.php?page=login&aksi=view" class="btn text-white bg-transparent mx-2 shadow-none" type="button">Masuk</a>
        <a href="index.php?page=registrasi&aksi=view" class="btn rounded-pill bg-white shadow-none">Daftar</a>
      </div>
    </div>
  </nav>


  <div class="container mb-5">
    <!-- aside -->
    <div class="row">
      <div class="col-md-4">
        <div class="row">
          <div class="col-md-12 mb-5">
            <div class="card">
              <ul class="list-group list-group-flush">
                <?php foreach ($trending as $data) : ?>
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-md-5">
                        <img src="assets/img/<?= $data['thumnail'] ?>" width="100%">
                      </div>
                      <div class="col-md-5">
                        <p class="card-text"><?= $data['judul'] ?></p>
                      </div>
                    </div>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <!-- main -->
      <div class="col-md-8">
        <div class="row">
          <?php foreach ($post as $data) : ?>
            <div class="col-md-6 mb-3">
              <div class="card">
                <img src="assets/img/<?= $data['thumnail'] ?>" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title"><?= $data['judul'] ?></h5>
                  <a href="#" class="form-control btn oval tombol-ungu text-white">Lihat Detail</a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>

        </div>
      </div>


    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="iklan">
          <div class="close"><i class="bi bi-x-circle-fill"></i></div>
          <img src="assets/img/zeus.jpg" width="100%" alt="">
        </div>
      </div>
    </div>
  </div>


  <footer class=" tombol-ungu">
    <div class="container-fluid border py-1">
      <div class="row justify-content-center text-center py-auto">
        <div class="col mx-auto align-self-center">
          <p class="fw-bold text-white">Losrem Ipsum</p>
        </div>
      </div>
  </footer>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>