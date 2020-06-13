<?php
    $mac=$_POST['mac'];
    $ip=$_POST['ip'];
    $username=$_POST['username'];
    $linklogin=$_POST['link-login'];
    $linkorig=$_POST['link-orig'];
    $error=$_POST['error'];
    $trial=$_POST['trial'];
    $loginby=$_POST['login-by'];
    $chapid=$_POST['chap-id'];
    $chapchallenge=$_POST['chap-challenge'];
    $linkloginonly=$_POST['link-login-only'];
    $linkorigesc=$_POST['link-orig-esc'];
    $macesc=$_POST['mac-esc'];
    $identity=$_POST['identity'];
    $bytesinnice=$_POST['bytes-in-nice'];
    $bytesoutnice=$_POST['bytes-out-nice'];
    $sessiontimeleft=$_POST['session-time-left'];
    $uptime=$_POST['uptime'];
    $refreshtimeout=$_POST['refresh-timeout'];   
    $linkstatus=$_POST['link-status'];
    $remainbytesout=$_POST['remain-bytes-out'];
    $remainbytestotalnice=$_POST['remain-bytes-total-nice'];  
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="https://cdn.jsdelivr.net/gh/rizky-raditya/wificloudns@master/favicon.ico">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wire Guest</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://cdn.jsdelivr.net/gh/rizky-raditya/wificloudns@master/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://cdn.jsdelivr.net/gh/rizky-raditya/wificloudns@master/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="https://cdn.jsdelivr.net/gh/rizky-raditya/wificloudns@master/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="https://cdn.jsdelivr.net/gh/rizky-raditya/wificloudns@master/css/creative.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Wire Guest</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#services">Status</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Project</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Bantuan</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <img src="https://cdn.jsdelivr.net/gh/rizky-raditya/wificloudns@master/img/logo.png" alt="" />
                <hr>
                <p>User : <?php echo $username; ?></p>
                <p>Waktu Aktif : <?php echo $uptime; ?></p>
            </div>
        </div>
    </header>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Status</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
                        <h3>Alamat IP :</h3>
                        <p class="text-muted"><?php echo $ip; ?>  </p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
                        <h3>Sisa Kouta</h3>
                        <p class="text-muted"><?php echo $remainbytesout; ?> <?php echo $remainbytestotalnice; ?> </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                       <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
                       <h3>Pemakaian</h3>
                       <p class="text-muted">Download :<?php echo $bytesinnice; ?> </p>
                       <p class="text-muted">Upload :<?php echo $bytesoutnice; ?> </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                         <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
                        <h3>Sisa Waktu</h3>
                        <p class="text-muted"><?php echo $sessiontimeleft; ?>  </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-4 col-sm-6">
                    <a href="https://cdn.jsdelivr.net/gh/rizky-raditya/wificloudns@master/img/portfolio/fullsize/1.jpg" class="portfolio-box">
                        <img src="https://cdn.jsdelivr.net/gh/rizky-raditya/wificloudns@master/img/portfolio/thumbnails/1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Wire Guest
                                </div>
                                <div class="project-name">
                                    Project 1
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="https://cdn.jsdelivr.net/gh/rizky-raditya/wificloudns@master/img/portfolio/fullsize/2.jpg" class="portfolio-box">
                        <img src="https://cdn.jsdelivr.net/gh/rizky-raditya/wificloudns@master/img/portfolio/thumbnails/2.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Wire Guest
                                </div>
                                <div class="project-name">
                                    Project 2
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="https://cdn.jsdelivr.net/gh/rizky-raditya/wificloudns@master/img/portfolio/fullsize/3.jpg" class="portfolio-box">
                        <img src="https://cdn.jsdelivr.net/gh/rizky-raditya/wificloudns@master/img/portfolio/thumbnails/3.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Wire Guest
                                </div>
                                <div class="project-name">
                                    Project 3
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="https://cdn.jsdelivr.net/gh/rizky-raditya/wificloudns@master/img/portfolio/fullsize/4.jpg" class="portfolio-box">
                        <img src="https://cdn.jsdelivr.net/gh/rizky-raditya/wificloudns@master/img/portfolio/thumbnails/4.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Wire Guest
                                </div>
                                <div class="project-name">
                                    Project 4
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="https://cdn.jsdelivr.net/gh/rizky-raditya/wificloudns@master/img/portfolio/fullsize/5.jpg" class="portfolio-box">
                        <img src="https://cdn.jsdelivr.net/gh/rizky-raditya/wificloudns@master/img/portfolio/thumbnails/5.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Wire Guest
                                </div>
                                <div class="project-name">
                                    Project 5
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="https://cdn.jsdelivr.net/gh/rizky-raditya/wificloudns@master/img/portfolio/fullsize/6.jpg" class="portfolio-box">
                        <img src="https://cdn.jsdelivr.net/gh/rizky-raditya/wificloudns@master/img/portfolio/thumbnails/6.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Wire Guest
                                </div>
                                <div class="project-name">
                                    Project 6
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Bantuan</h2>
                    <hr class="primary">
                    <p>Bantuan atau pertanyaan dapat menghubungi kami di</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>+628989001393</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:singkawang@msn.com">singkawang@msn.com</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/gh/rizky-raditya/wificloudns@master/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://cdn.jsdelivr.net/gh/rizky-raditya/wificloudns@master/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/rizky-raditya/wificloudns@master/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/rizky-raditya/wificloudns@master/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/rizky-raditya/wificloudns@master/js/chat.js"></script>

    <!-- Theme JavaScript -->
    <script src="https://cdn.jsdelivr.net/gh/rizky-raditya/wificloudns@master/js/creative.min.js"></script>

</body>

</html>
