<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Fruitology</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="robots" content="noindex, follow" />
        <meta name="author" content="" />

        <link rel="shortcut icon" href="<?php echo base_url("/assets/image/icon.png") ?>" />

        <link href="<?php echo base_url("/assets/css/bootstrap.min.css"); ?>" rel="stylesheet" />
        <link href="<?php echo base_url("/assets/css/bootstrap-theme.min.css"); ?>" rel="stylesheet" />
        <link href="<?php echo base_url("/assets/css/jquery.reject.css"); ?>" rel="stylesheet" media="screen" />
        <link href="<?php echo base_url("/assets/css/general.css"); ?>" rel="stylesheet" media="screen" />
        <link href="<?php echo base_url("/assets/css/style.css"); ?>" rel="stylesheet" media="screen" />
        <link href="<?php echo base_url("/assets/css/responsive.css"); ?>" rel="stylesheet" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("/assets/css/index.css"); ?>" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("/assets/css/menu.css"); ?>" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("/assets/css/gallery.css"); ?>" media="screen" />
        <style type="text/css">
            <?php foreach ($data as $d) { ?>
                #carousel<?php echo $d["id_paket"] ?> .carousel-inner .carousel-caption {width: 100%;top: auto;left: 0;bottom: 0;padding: 0;margin: 0;}
                #carousel<?php echo $d["id_paket"] ?> .carousel-inner .carousel-caption h2 {background: url(<?php echo base_url()."assets/" ?>image/box7-active.png) no-repeat right top;border: 0;border-radius: 0; bottom: 0;left: 0;width: 235px;height: 117px;position: relative;text-indent: 0;float: left;margin: 0;font: 40px "Lobster", "Trebuchet MS", Arial, sans-serif;color: #fff;text-align: center;padding-top: 30px; }
                #carousel<?php echo $d["id_paket"] ?> .carousel-inner .carousel-caption p {background: url(<?php echo base_url()."assets/" ?>image/box7.png);border: 0;border-radius: 0;text-align: left;bottom: 0;left: 0;width: 695px;height: 102px;position: relative;text-indent: 0;float: left;margin: 0;  color: #8b744f;font: italic 12px/22px "Georgia", "Trebuchet MS", Arial;text-transform: none;margin: 0;padding: 18px 25px;text-shadow: 1px 1px rgba(0,0,0,0.1);top: 15px;}
                #carousel<?php echo $d["id_paket"] ?> .carousel-control {background: url(<?php echo base_url()."assets/" ?>image/slider-arrows.png) no-repeat;text-indent: -9999px; height: 88px; width: 50px;top: 38%;opacity: 1;filter: none;background-size: 200%;}
                #carousel<?php echo $d["id_paket"] ?> .carousel-control:hover {opacity: 1}
                #carousel<?php echo $d["id_paket"] ?> .carousel-control.left {left: -45px;}
                #carousel<?php echo $d["id_paket"] ?> .carousel-control.right {background-position: -50px 0;right: -45px;}
            <?php } ?>
        </style>
    </head>

    <body>
        <div id="body" class="frontpage">
            <div id="body-inner">
                <header id="header">
                    <div class="container">
                        <div class="logo hidden-xs"><img src="<?php echo base_url("/assets/image/logo.png") ?>" alt="" style="margin-top:10px" /></div>


                        <div id="topmenu" style="margin-top:20px;">
                            <div class="left-side"></div>
                            <div class="right-side "></div>

                            <nav class="navbar" role="navigation">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <span class="navbar-brand visible-xs">Fruitology</span>
                                </div>

                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav left">
                                        <li class="id1"><a href="<?php echo base_url("")."home"; ?>">Home</a></li>
                                        <li class="id3"><a href="<?php echo base_url("")."resep"; ?>">Resep Sehat</a></li>
                                    </ul>
                                    <ul class="nav navbar-nav right">
                                        <li class="id5"><a href="<?php echo base_url("")."gallery"; ?>">Galeri Buah</a></li>
                                        <li class="id6"><a href="<?php echo base_url("")."about"; ?>">About</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </header>
