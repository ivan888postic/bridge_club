<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>JTZ</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">

        <link href="resources/css/bootstrap.min.css" rel="stylesheet">
        <link href="resources/css/style.css" rel="stylesheet">

    </head>
    <body>
        <header id="site-header">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?= base_url() ?>">JTZ</a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-left">
                            <li><a href="#">Klub</a></li>
                            <li><a href="#">Turniri</a></li>
                            <li><a href="#">Galerija</a></li>
                        </ul>
                        
                        <ul class="nav navbar-nav navbar-right">
                            <?php if (isset($_SESSION['username']) && $_SESSION['logged_in'] === true) : ?>
                                <li><a href="<?= base_url('logout') ?>">Logout</a></li>
                            <?php else : ?>
                                <li><a href="<?= base_url('register') ?>">Register</a></li>
                                <li><a href="<?= base_url('login') ?>">Login</a></li>
                            <?php endif; ?>
                        </ul>
                    </div><!-- .navbar-collapse -->
                </div><!-- .container-fluid -->
            </nav><!-- .navbar -->
        </header><!-- #site-header -->

    <main id="site-content" role="main">

        <?php if (isset($_SESSION)) : ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php var_dump($_SESSION); ?>
                    </div>
                </div><!-- .row -->
            </div><!-- .container -->
        <?php endif; ?>
		
