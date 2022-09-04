<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
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
    <nav class="navbar navbar-expand-lg navbar-light tombol-ungu mb-5">
        <div class="container-fluid mx-3 py-2">
            <a class="navbar-brand text-white" href="index.php?page=home&aksi=view">Berita Terkini</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                </ul>
                <a href="index.php?page=login&aksi=view" class="btn text-white bg-transparent mx-2 shadow-none" type="button">Masuk</a>
                <a href="index.php?page=registrasi&aksi=view" class="btn rounded-pill bg-white shadow-none">Daftar</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form action="index.php?page=login&aksi=proses-login" method="POST">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>