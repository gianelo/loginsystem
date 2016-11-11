<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ingresar al sistema </title>
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>static/css/vendor/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>static/css/flat-ui.min.css"/>
</head>
<style>
      body {
        min-height: 2000px;
        padding-top: 70px;
      }
    </style>
<body>
<div class="container">

       <!-- Static navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
          </button>
          <a class="navbar-brand" href="#">Flat UI</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li class="active"><a href="./">Static top</a></li>
            <li><a href="../navbar-fixed-top/">Fixed top</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div class="row">
        <div class="col-md-4  col-md-offset-4">
            <h2>Login</h2>
            <form action=" "  method="POST">

                <div class="form-group">
                    <label for="username"></label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                </div>

                <div class="form-group">
                    <label for="password"></label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                </div>
                <input type="submit" value="Ingresar" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
</body>
</html>