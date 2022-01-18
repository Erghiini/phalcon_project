<html>
<head>
    <title>Tutorial Bootstrap dan Phalcon</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->url->get('img/favicon.ico')?>"/>
    <!-- jQuery first, then Popper.js, and then Bootstrap's JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
    <nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">ANTZ Studio</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="nav navbar-nav">
                    <li><a href="<?= $this->url->get('Home/index') ?>">Home</a></li>
                    <li><a href="<?= $this->url->get('Pegawai/index') ?>" >Pegawai</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
 

<div class="jumbotron">
    <div class="container-fluid">
        <h1>Selamat Datang</h1>
        <p>Tutorial memadukan Template bootstrap dengan phalcon. Untuk dokumentasi lebih jelas mengenai bootstrap silahkan klik link di bawah ini : </p>
        <p><a href="http://getbootstrap.com/" target="_blank" class="btn btn-success btn-lg">Flying to bootstrap</a></p>
    </div>
</div>
<div class="container-fluid">
    
    <hr>
    <div class="row">
        <div class="col-xs-12">
            <footer>
                <p>&copy; Tutorial Memadukan Template Bootstrap dengan Phalcon </p>
            </footer>
        </div>
    </div>
</div>

</body>
</html>