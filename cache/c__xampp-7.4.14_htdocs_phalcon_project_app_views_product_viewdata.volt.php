<html>
<head>
    <title>Tutorial Bootstrap dan Phalcon</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->url->get('img/favicon.ico')?>"/>

    <!-- jQuery first, then Popper.js, and then Bootstrap's JavaScript -->
    <script
      src="https://code.jquery.com/jquery-2.2.4.min.js"
      integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
    

<div class="container-fluid" style="margin-top: 100px;">
    <div class="row" style="margin-bottom: 15px;">
        <div class="col-md-12">
            <button type="button" id="addButton" class="btn btn-primary">Tambah Data</button>
        </div>
    </div>

    <?php $v30041682011iterated = false; ?><?php $v30041682011iterator = $data; $v30041682011incr = 0; $v30041682011loop = new stdClass(); $v30041682011loop->self = &$v30041682011loop; $v30041682011loop->length = count($v30041682011iterator); $v30041682011loop->index = 1; $v30041682011loop->index0 = 1; $v30041682011loop->revindex = $v30041682011loop->length; $v30041682011loop->revindex0 = $v30041682011loop->length - 1; ?><?php foreach ($v30041682011iterator as $datas) { ?><?php $v30041682011loop->first = ($v30041682011incr == 0); $v30041682011loop->index = $v30041682011incr + 1; $v30041682011loop->index0 = $v30041682011incr; $v30041682011loop->revindex = $v30041682011loop->length - $v30041682011incr; $v30041682011loop->revindex0 = $v30041682011loop->length - ($v30041682011incr + 1); $v30041682011loop->last = ($v30041682011incr == ($v30041682011loop->length - 1)); ?><?php $v30041682011iterated = true; ?>
        <?php if ($v30041682011loop->first) { ?>
            <table class="table table-bordered table-hover" align="center">
                <thead>
                    <tr>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No. HP</th>
                    </tr>
                </thead>
        <?php } ?>
                <tbody>
                    <tr>
                        <td><?= $datas->nip ?></td>
                        <td><?= $datas->nama ?></td>
                        <td><?= $datas->alamat ?></td>
                        <td><?= $datas->nohp ?></td>
                        <td align="center">
                            <button type="button" value="<?= $datas->id ?>" class="btn btn-warning updateButton">Update</button>
                            <button type="button" value="<?= $datas->id ?>" class="btn btn-danger deleteButton">Delete</button>
                        </td>
                    </tr>
                </tbody>
        <?php if ($v30041682011loop->last) { ?>
            </table>
        <?php } ?>
        <?php $v30041682011incr++; } if (!$v30041682011iterated) { ?>
            No Data
    <?php } ?>
</div>

<script type="text/javascript">
    $('#addButton').on('click', function(){
        $.ajax({
            type: "GET",
            url:"<?= $this->url->get('phalcon_project/Pegawai/formInsertData') ?>",
            beforeSend: function(){
                // document.getElementById("overlay").style.display="inherit";
            },
            success: function (data) {
                $('#myModal').html(data);
                $('#myModal').modal('show');
            },
            error:function(){
                // alert("data gagal disimpan")  ;
                // document.getElementById("overlay").style.display="none";
            }
        });
    });

    $('.updateButton').on('click', function(){
        const id = $(this).val();

        $.ajax({
            type: "GET",
            url:"<?= $this->url->get('phalcon_project/Pegawai/formUpdateData/') ?>" + id,
            beforeSend: function(){
                // document.getElementById("overlay").style.display="inherit";
            },
            success: function (data) {
                $('#myModal').html(data);
                $('#myModal').modal('show');
            },
            error:function(){
                // alert("data gagal disimpan")  ;
                // document.getElementById("overlay").style.display="none";
            }
        });
    });

    $('.deleteButton').on('click', function(){
        const id = $(this).val();

        if (confirm('Hapus data?')) {

            $.ajax({
                type: "GET",
                dataType: 'json',
                url:"<?= $this->url->get('phalcon_project/Pegawai/deleteData/') ?>" + id,
                beforeSend: function(){
                    // document.getElementById("overlay").style.display="inherit";
                },
                success: function (data) {
                    if (data.result == 'success') {
                        alert('Berhasil dihapus!');
                        window.location.reload();
                    } else {
                        alert('Gagal menghapus!');
                    }
                },
                error:function(){
                    // alert("data gagal disimpan")  ;
                    // document.getElementById("overlay").style.display="none";
                }
            });

        }
    });
</script>



    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <!-- <div class="modal-dialog"> -->

            <!-- Modal content-->
            <!-- <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div> -->

        <!-- </div> -->
    </div>
</body>
</html>