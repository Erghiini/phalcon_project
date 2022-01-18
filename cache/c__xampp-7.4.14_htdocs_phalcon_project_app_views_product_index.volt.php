<!DOCTYPE html>
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
    

<div class="container-fluid" style="margin-top: 50px;">
    <div class="row">
        <div class="col-md-12">
            <h1>Daftar Produk</h1>
        </div>
    </div>

    <div class="row" style="margin-bottom: 15px;">
        <div class="col-md-12">
            <button type="button" id="addButton" class="btn btn-primary">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah Data
            </button>
        </div>
    </div>

    <?php $v33907147001iterated = false; ?><?php $v33907147001iterator = $data; $v33907147001incr = 0; $v33907147001loop = new stdClass(); $v33907147001loop->self = &$v33907147001loop; $v33907147001loop->length = count($v33907147001iterator); $v33907147001loop->index = 1; $v33907147001loop->index0 = 1; $v33907147001loop->revindex = $v33907147001loop->length; $v33907147001loop->revindex0 = $v33907147001loop->length - 1; ?><?php foreach ($v33907147001iterator as $datas) { ?><?php $v33907147001loop->first = ($v33907147001incr == 0); $v33907147001loop->index = $v33907147001incr + 1; $v33907147001loop->index0 = $v33907147001incr; $v33907147001loop->revindex = $v33907147001loop->length - $v33907147001incr; $v33907147001loop->revindex0 = $v33907147001loop->length - ($v33907147001incr + 1); $v33907147001loop->last = ($v33907147001incr == ($v33907147001loop->length - 1)); ?><?php $v33907147001iterated = true; ?>
        <?php if ($v33907147001loop->first) { ?>
            <table class="table table-bordered table-hover" align="center">
                <thead>
                    <tr>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Keterangan</th>
                        <th>Gambar Produk</th>
                        <th>Action</th>
                    </tr>
                </thead>
        <?php } ?>
                <tbody>
                    <tr>
                        <td><?= $datas->name ?></td>
                        <td>Rp<?= $datas->price ?></td>
                        <td><?= $datas->description ?></td>
                        <td align="center">
                            <img src="temp/<?= $datas->image ?>" class="viewer" style="max-width: 50px; max-height: 34px;">
                        </td>
                        <td align="center">
                            <button type="button" value="<?= $datas->id ?>" class="btn btn-warning updateButton">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Update
                            </button>
                            <button type="button" value="<?= $datas->id ?>" class="btn btn-danger deleteButton">
                                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete
                            </button>
                        </td>
                    </tr>
                </tbody>
        <?php if ($v33907147001loop->last) { ?>
            </table>
        <?php } ?>
        <?php $v33907147001incr++; } if (!$v33907147001iterated) { ?>
            No Data
    <?php } ?>
</div>

<script type="text/javascript">
    $('#addButton').on('click', function(){
        $.ajax({
            type: "GET",
            url:"<?= $this->url->get('phalcon_project/product/formInsertData') ?>",
            beforeSend: function(){
                $('#loaderModal').show();
            },
            success: function (data) {
                $('#myModal').html(data);
                $('#loaderModal').hide();
                $('#myModal').modal('show');
            },
            error:function(){
                $('#loaderModal').hide();
            }
        });
    });

    $('.updateButton').on('click', function(){
        const id = $(this).val();

        $.ajax({
            type: "GET",
            url:"<?= $this->url->get('phalcon_project/product/formUpdateData/') ?>" + id,
            beforeSend: function(){
                $('#loaderModal').show();
            },
            success: function (data) {
                $('#myModal').html(data);
                $('#loaderModal').hide();
                $('#myModal').modal('show');
            },
            error:function(){
                alert("data gagal disimpan");
                $('#loaderModal').hide();
            }
        });
    });

    $('.deleteButton').on('click', function(){
        const id = $(this).val();

        if (confirm('Hapus data?')) {

            $.ajax({
                type: "GET",
                dataType: 'json',
                url:"<?= $this->url->get('phalcon_project/product/deleteData/') ?>" + id,
                beforeSend: function(){
                    $('#loaderModal').modal('show');
                },
                success: function (data) {
                    if (data.result == 'success') {
                        alert('Berhasil dihapus!');
                        window.location.reload();
                    } else {
                        $('#loaderModal').modal('hide');
                        alert('Gagal menghapus!');
                    }
                },
                error:function(){
                    $('#loaderModal').modal('hide');
                }
            });

        }
    });

    $(document).on('click', "img.viewer", function(){
        var image = new Image();
        image.src = this.src;

        var viewer = new Viewer(image, {
            hidden: function () {
                viewer.destroy();
            },
            navbar: false,
            toolbar: {
                zoomIn: true,
                zoomOut: true,
                reset: true
            }
        });

        viewer.show();
    });
</script>



    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
    </div>
    <div id="loaderModal" class="modal fade in" style="display: none; background: rgba(0, 0, 0, 0.5);">
        <div style="display: flex; justify-content: center; height: 100%; align-items: center;">
            <div class="loader"></div>
        </div>
    </div>
</body>
</html>