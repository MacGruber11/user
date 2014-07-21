<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

        <title>User</title>

        <!-- Bootstrap core CSS -->
        <link href="/templates/dist/css/bootstrap.css" rel="stylesheet">
        <link href="/templates/dist/css/bootstrap-theme.min.css" rel="stylesheet">
        <script src="/templates/dist/js/jquery-1.8.0.min.js" type="text/javascript"></script>
        <script src="/templates/dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="/templates/dist/js/bootstrap.js" type="text/javascript"></script>
        <script src="/templates/dist/js/city.js" type="text/javascript"></script>
        <script src="/templates/dist/js/typeahead.js" type="text/javascript"></script>
        <script src="/templates/dist/js/mockjax.js" type="text/javascript"></script>
        <script src="/templates/dist/js/jquery.tokeninput.js" type="text/javascript"></script>
        <!-- Custom styles for this template -->
        <link href="/templates/dist/css/theme.css" rel="stylesheet">
        <link href="/templates/dist/css/signin.css" rel="stylesheet">
        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div class="container">
            <?php if ($this->ion_auth->logged_in()): ?>
                <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                    <div class="container">
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                                <?php if (!$this->ion_auth->is_admin()): ?>
                                    <li><a href="profile">Profile</a></li>
                                <?php endif ?>
                                <li><a href="<?php echo base_url(); ?>index.php/auth/logout">Exit</a></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div>
                </div>
                <?php
             endif ?>