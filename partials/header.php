<?php session_start() ?>
<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">

        <!-- CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" href="assets/css/nouislider.min.css">
        <link rel="stylesheet" href="assets/css/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/plyr.css">
        <link rel="stylesheet" href="assets/css/photoswipe.css">
        <link rel="stylesheet" href="assets/css/default-skin.css">
        <link rel="stylesheet" href="assets/css/main.css">

        <!-- Favicons -->
        <link rel="shortcut icon" href="assets/img/logo.png">
        <link rel="apple-touch-icon" href="assets/icon/favicon-32x32.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/icon/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/icon/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/icon/apple-touch-icon-144x144.png">

        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Dmitry Volkov">
        <title>B-Mov – Online Movies, TV Shows & Cinema</title>
        <style>
            .button__unlike {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 40px;
                width: 40px;
                -webkit-border-radius: 4px;
                border-radius: 4px;
                background-image: -moz-linear-gradient(90deg, #888888 0%, #cecece 100%);
                background-image: -webkit-linear-gradient(90deg, #888888 0%, #cecece 100%);
                background-image: -ms-linear-gradient(90deg, #888888 0%, #cecece 100%);
                background-image: linear-gradient(90deg, #888888 0%, #cecece 100%);
                -webkit-box-shadow: 0 0 20px 0 rgba(255, 88, 96, 0.5);
                box-shadow: 0 0 20px 0 rgba(255, 88, 96, 0.5);
                opacity: 0.85;
                margin-left: 20px;
            }

            .button__unlike span {
                display: none;
            }

            .button__unlike i {
                color: #fff;
                font-size: 24px;
            }

            .button__unlike:hover {
                opacity: 1;
            }
        </style>

    </head>

    <body class="body">

        <!-- header -->
        <header class="header">
            <div class="header__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="header__content">
                                <!-- header logo -->
                                <a href="index.php" class="header__logo">
                                    <img src="assets/img/logo.png" alt="">
                                </a>
                                <!-- end header logo -->

                                <!-- header nav -->
                                <ul class="header__nav">
                                    <!-- dropdown -->
                                    <li class="header__nav-item">
                                        <a href="index.php" class="header__nav-link">Home</a>
                                    </li>
                                    <!-- end dropdown -->

                                    <!-- dropdown -->
                                    <li class="header__nav-item">
                                        <a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuCatalog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Movies</a>

                                        <ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuCatalog">
                                            <li><a href="movies.php">All Movies</a></li>
                                            <li><a href="mostlikemovies.php">Most Likes Movies</a></li>
                                        </ul>
                                    </li>
                                    <!-- end dropdown -->

                                    <li class="header__nav-item">
                                        <a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuCatalog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Series</a>

                                        <ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuCatalog">
                                            <li><a href="series.php">All Series</a></li>
                                            <li><a href="mostlikeseries.php">Most Likes Series</a></li>
                                        </ul>
                                    </li>

                                    <!-- dropdown -->
                                    <li class="header__nav-item">
                                        <a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuCatalog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Genre</a>

                                        <ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuCatalog">
                                            <?php
                                            include 'proses/koneksi.php';
                                            $no = 1;
                                            $query = mysqli_query($db, 'SELECT * FROM tb_genre');
                                            while ($d = mysqli_fetch_array($query)) {
                                            ?>
                                                <li><a href="genre.php?genre=<?= $d['genre'] ?>"><?= $d['genre'] ?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </li>
                                    <!-- end dropdown -->

                                    <li class="header__nav-item">
                                        <a href="about.php" class="header__nav-link">About</a>
                                    </li>

                                    <li class="header__nav-item">
                                        <a href="faq.php" class="header__nav-link">FAQ</a>
                                    </li>
                                </ul>
                                <!-- end header nav -->

                                <!-- header auth -->
                                <div class="header__auth">
                                    <button class="header__search-btn" type="button">
                                        <i class="icon ion-ios-search"></i>
                                    </button>
                                    <?php
                                    if (isset($_SESSION['status'])) { ?>
                                        <a href="proses/logout.php" class="header__sign-in">
                                            <i class="icon ion-ios-log-in"></i>
                                            <span>Logout</span>
                                        </a>
                                    <?php } else { ?>
                                        <a href="signin.php" class="header__sign-in">
                                            <i class="icon ion-ios-log-in"></i>
                                            <span>sign in</span>
                                        </a>
                                    <?php } ?>
                                </div>
                                <!-- end header auth -->

                                <!-- header menu btn -->
                                <button class="header__btn" type="button">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                                <!-- end header menu btn -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- header search -->
            <form action="search.php" method="get" class="header__search">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="header__search-content">
                                <input type="text" placeholder="Search for a movie, TV Series that you are looking for" name="search">

                                <button type="submit">search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- end header search -->
        </header>
        <!-- end header -->