<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'] ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <!-- Loader CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/loader.css">
    <!-- Data-table CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/js/dataTables/dataTables.bootstrap4.css">
    <!-- Favicon  -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/fontawesome-free-5.13.0-web/css/all.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/fontawesome-free-5.13.0-web/css/brands.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/fontawesome-free-5.13.0-web/css/all.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/fontawesome-free-5.13.0-web/css/regular.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/fontawesome-free-5.13.0-web/css/solid.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/fontawesome-free-5.13.0-web/css/svg-with-js.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/fontawesome-free-5.13.0-web/css/v4-shims.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/style.css">
</head>
<body>
    <div class="loading_bg">
        <div class="loading">
            <hr/><hr/><hr/><hr/>
        </div>
    </div>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?= BASEURL; ?>">php-mvc</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <!-- <li class="nav-item active">
                        <a class="nav-link" href="<?= BASEURL; ?>">Home <span class="sr-only">(current)</span></a>
                    </li> -->
                    <li class="nav-item dropdown megamenu-li dmenu">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Menu
                        </a>
                        <div class="dropdown-menu megamenu sm-menu border-top" aria-labelledby="dropdown01">
                        <div class="row">
                            <div class="col-sm-6 col-lg-3 border-right mb-4">
                                <h5><i class="fas fa-server"></i> Master Data</h5>
                                <a class="dropdown-item" href="<?= BASEURL; ?>/students"><i class="far fa-dot-circle"></i> Students</a>
                                <a class="dropdown-item" href="#"><i class="far fa-dot-circle"></i> CoA</a>
                            </div>
                            <div class="col-sm-6 col-lg-3 border-right mb-4">
                                <h5><i class="fas fa-comments-dollar"></i> Transaction</h5>
                                <a class="dropdown-item" href="#"><i class="far fa-dot-circle"></i> Purchase</a>
                                <a class="dropdown-item" href="#"><i class="far fa-dot-circle"></i> Sales</a>
                                <a class="dropdown-item" href="#"><i class="far fa-dot-circle"></i> Production</a>
                            </div>
                            <div class="col-sm-6 col-lg-3 border-right mb-4">
                                <h5><i class="fas fa-file-invoice-dollar"></i> Report</h5>
                                <a class="dropdown-item" href="#"><i class="far fa-dot-circle"></i> General Journal</a>
                                <a class="dropdown-item" href="#"><i class="far fa-dot-circle"></i> General Ledger</a>
                                <a class="dropdown-item" href="#"><i class="far fa-dot-circle"></i> Trial Balance</a>
                                <a class="dropdown-item" href="#"><i class="far fa-dot-circle"></i> Income Statement</a>
                                <a class="dropdown-item" href="#"><i class="far fa-dot-circle"></i> Capital Statement</a>
                            </div>
                            <div class="col-sm-6 col-lg-3 border-right mb-4">
                                <h5><i class="fas fa-cogs"></i>&nbsp;&nbsp;Setting</h5>
                                <a class="dropdown-item" href="<?= BASEURL; ?>/about"><i class="far fa-dot-circle"></i> About</a>
                            </div>
                        </div>
                        </div>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right"> 
                    <li class="nav-item"> 
                        <a class="nav-link" href="">
                            <img src="<?= BASEURL ?>/img/billy.jpeg" alt="Profile Picture" width="24" class="rounded-circle">
                            Muhammad Balyan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=""> <i class="fas fa-power-off"></i> <span class="text-hide">Logout</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br>
    
    <div id="particles-js"></div>
