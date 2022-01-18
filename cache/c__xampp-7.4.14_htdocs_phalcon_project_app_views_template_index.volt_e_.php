a:3:{i:0;s:3332:"<!DOCTYPE html>
<html>
<head>
    <title>Tutorial Bootstrap dan Phalcon</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="<?= $this->url->get('img/favicon.ico'); ?>"/>

    <!-- jQuery first, then Popper.js, and then Bootstrap's JavaScript -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- ViewerJS -->
    <link rel="stylesheet" type="text/css" href="<?= $this->url->get('phalcon_project/public/plugins/viewerjs/viewer.min.css'); ?>">
    <script type="text/javascript" src="<?= $this->url->get('phalcon_project/public/plugins/viewerjs/viewer.min.js'); ?>"></script>

    <style>
        .loader {
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #3498db;
            width: 120px;
            height: 120px;
            -webkit-animation: spin 1s linear infinite;
            animation: spin 1s linear infinite;
        }
        @-webkit-keyframes spin {
            0% { -webkit-transform: rotate(0deg); }
            100% { -webkit-transform: rotate(360deg); }
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        img.viewer {
            cursor: zoom-in;
        }
    </style>
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
                <a class="navbar-brand" href="#">Erghi's</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="nav navbar-nav">
                    <li><a href="<?= $this->url->get('phalcon_project') ?>">Home</a></li>
                    <li><a href="<?= $this->url->get('phalcon_project/product') ?>" >Product</a></li>
                </ul>
            </div>
        </div>
    </nav>
    ";s:7:"content";a:1:{i:0;a:4:{s:4:"type";i:357;s:5:"value";s:6:"
    ";s:4:"file";s:68:"C:\xampp-7.4.14\htdocs\phalcon_project/app/views/template/index.volt";s:4:"line";i:65;}}i:1;s:380:"

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
    </div>
    <div id="loaderModal" class="modal fade in" style="display: none; background: rgba(0, 0, 0, 0.5);">
        <div style="display: flex; justify-content: center; height: 100%; align-items: center;">
            <div class="loader"></div>
        </div>
    </div>
</body>
</html>";}