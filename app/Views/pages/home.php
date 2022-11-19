<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/style.css">


    <title><?= $title; ?></title>
</head>

<body style="background-image: linear-gradient(to right, #7DE6F3, #7DE6F3, #fff);">

    <!-- Header -->
    <nav class="navbar navbar-light" style="background: #86D8EE; box-shadow: 0 0 15px 1px">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="/image/" width="50" height="50">
            </a>
            <form class="d-flex header_button">
                <a href="/" style="color: #0d6efd;">
                    <h3>Home </h3>
                </a>
                <p style="margin-right: 50px;"></p>
                <a href="/pages/login" style="color: #000;">
                    <h3>Login </h3>
                </a>
                <p style="margin-right: 50px;"></p>
                <a href="#" style="color: #000;">
                    <h3>Hasil </h3>
                </a>
            </form>
        </div>
    </nav>
    <!-- Header -->

    <div class="container" style="margin-top: 3vh;">
        <div class="row">
            <div class="col-sm-5 col-md-6" style="margin-top: 10vh;">
                <h1 style="color: #000;">Sistem Pendukung Keputusan Penyaluran Bantuan Sosial Pada Masyarakat Disabilitas Menggunakan Metode MOORA</h1><br>
                <a href="/pages/login">
                    <div class="d-grid gap-6 col-4">
                        <button type="button" class="btn btn-primary" style="border-radius: 5px; box-shadow: 0 0 10px 1px #000; margin-top: 10vh;">
                            <h4 style="color: #fff;">Mulai</h4>
                        </button>
                    </div>
                </a>

            </div>

            <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0" style="margin-top: 15vh;">
                <img src="/image/image1.png" class="float-end" style="margin-right: -15%;"><br>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>