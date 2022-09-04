<?php


require_once("koneksi.php");
require_once("model/authModel.php");
require_once("model/postModel.php");
require_once("model/trendingModel.php");

require_once("controller/authController.php");
require_once("controller/postController.php");
require_once("controller/trendingController.php");

if (isset($_GET['page']) && isset($_GET['aksi'])) {
    session_start();
    $page = $_GET['page'];
    $aksi = $_GET['aksi'];

    if ($page == "login") {
        $auth = new authController();
        if ($aksi == "view") {
            $auth->viewLogin();
        } else if ($aksi == "proses-login") {
            $auth->login();
        }
    } else if ($page == "registrasi") {
        $auth = new authController();
        if ($aksi == "view") {
            $auth->viewRegistrasi();
        } else if ($aksi == "store") {
            $auth->registrasi();
        }
    } else if ($page == "home") {
        $post = new postController();
        if ($aksi == "view") {
            $post->home();
        }
    } else if ($page == "post") {
        $post = new postController();
        require_once("view/dashboard/template/header.php");
        if ($aksi == "view") {
            $post->index();
        } else if ($aksi == "store") {
            $post->store();
        }
        require_once("view/dashboard/template/footer.php");
    } else if ($page == "trending") {
        $trending = new trendingController();
        require_once("view/dashboard/template/header.php");
        if ($aksi == "view") {
            $trending->index();
        } else if ($aksi == "store") {
            $trending->store();
        }
        require_once("view/dashboard/template/footer.php");
    } else if ($page == "auth") {
        $auth = new authController();
        if ($aksi == "logout") {
            $auth->logout();
        }
    }
} else {
    header("location: index.php?page=home&aksi=view");
}
