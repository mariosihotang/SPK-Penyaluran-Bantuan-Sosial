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

<body>
    <div class="bg-login">

        <!-- Header -->
        <nav class="navbar navbar-light" style="background: #86D8EE; box-shadow: 0 0 15px 1px">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="/image/" width="50" height="50">
                </a>
                <form class="d-flex header_button">
                    <a href="/" style="color: #000;">
                        <h3>Home </h3>
                    </a>
                    <p style="margin-right: 50px;"></p>
                    <a href="/pages/login" style="color: #0d6efd;">
                        <h3>Login </i></h3>
                    </a>
                    <p style="margin-right: 50px;"></p>
                    <a href="#" style="color: #000;">
                        <h3>Hasil </h3>
                    </a>
                </form>
            </div>
        </nav>
        <!-- Header -->

        <div class="container" style="margin-top: 8vh;">
            <div class="login_section">
                <section class="gradient-custom">
                    <div class="container py-4">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-12 col-md-5">
                                <div class="card text-white" style="border-radius: 1rem; background: #4b5759;">
                                    <div class="card-body p-5 text-center">
                                        <form action="/admin/login" method="POST">
                                            <h3 class="fw-bold mb-4 text-uppercase">Login</h3>
                                            <?php if (session()->getFlashdata('error')) { ?>
                                                <div class="alert alert-danger" style="margin-top: -5px;">
                                                    <?php echo session()->getFlashdata('error') ?>
                                                </div>
                                            <?php } ?>

                                            <div class="form-outline form-white mb-1">
                                                <input type="text" id="username" name="username" class="form-control form-control-lg" value="<?php echo session()->getFlashdata('username') ?>" />
                                                <label class="form-label text-light" for="username">Username</label>
                                            </div>

                                            <div class="form-outline form-white mb-3">
                                                <input type="password" id="password" name="password" class="form-control form-control-lg" />
                                                <label class="form-label text-light" for="password">Password</label>
                                            </div>

                                            <input class="btn btn-outline-light btn-lg px-5" type="submit" name="login" value="Login">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>