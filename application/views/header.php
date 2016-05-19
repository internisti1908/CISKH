<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?=$title?></title>

    <!-- Bootstrap -->
    <link href="<?=$base?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?=$base?>">SKH Kanaan Global School</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="#">Jibas</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Master <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li> <a href="addTema.php"> Add Tema SKH</a> </li>
                <li><a href="viewTema.php"> vie Tema SKH </a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SKH <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li> <a href="#"> notification </a> </li>
                <li> <a href="#"> add SKh </a> </li>
                <li> <a href="#"> view SKH</a> </li>
                <li> <a href="#"> Approval SKH </a> </li>
                <li><a href="#"> unlock SKH </a></li>
              </ul>
            </li>
            <li>
              <a href="#">Print SKH </a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Setting <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li> <a href="#"> Add Menu Header</a> </li>
                <li> <a href="#"> View Menu Header</a> </li>
                <li> <a href="#"> Add Menu Detail</a> </li>
                <li> <a href="#"> View Menu Detail</a> </li>
                <li> <a href="#"> Add Menu Access</a> </li>
                <li> <a href="#"> View Menu Access</a> </li>
              </ul>
            </li>
            <li>
              <a href="#">Logout </a>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

