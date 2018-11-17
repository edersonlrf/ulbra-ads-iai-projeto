<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="MemoryFlashGame">
        <meta name="author" content="Éderson Fernandes">
        <base href="<?php echo base_url() ?>">
        <link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/img/logo-24.png') ?>"/>
        <title>MemoryFlashGame</title>
        <link href='https://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>

        <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/bootstrap/css/bootstrap-theme.min.css') ?>" rel="stylesheet">

        <link href="<?php echo base_url('assets/css/layout.css') ?>" rel="stylesheet">

        <script src="<?php echo base_url('assets/jquery/jquery-3.3.1.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>

        <script src="<?php echo base_url('assets/js/main.js') ?>"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url() ?>">
                        <img src="<?php echo base_url('assets/img/logo-24-white.png') ?>" alt="Logo" class="home-logo">
                        MemoryFlashGame
                        &nbsp;|&nbsp;
                        <span class="text-size-12">Cartões Educativos e Jogo da Memória</span>
                    </a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav pull-right">
                        <li><a href="<?php echo base_url() ?>">Home</a></li>
                        <?php if ($this->session->userdata('logged')) { ?>
                            <li><a href="<?php echo base_url('meus-baralhos') ?>">Meus Baralhos</a></li>
                            <li><a href="<?php echo base_url('alterar-senha') ?>">Alterar Senha</a></li>
                            <li><a href="<?php echo base_url('logout') ?>">Sair</a></li>
                        <?php } else { ?>
                            <li><a href="<?php echo base_url('login') ?>">Login/Cadastro</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>