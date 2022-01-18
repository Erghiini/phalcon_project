{% extends 'template/index.volt' %}

{% block content %}

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

    {% for datas in data %}
        {% if loop.first %}
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
        {% endif %}
                <tbody>
                    <tr>
                        <td>{{ datas.name }}</td>
                        <td>Rp{{ datas.price }}</td>
                        <td>{{ datas.description }}</td>
                        <td align="center">
                            <img src="temp/{{ datas.image }}" class="viewer" style="max-width: 50px; max-height: 34px;">
                        </td>
                        <td align="center">
                            <button type="button" value="{{ datas.id }}" class="btn btn-warning updateButton">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Update
                            </button>
                            <button type="button" value="{{ datas.id }}" class="btn btn-danger deleteButton">
                                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete
                            </button>
                        </td>
                    </tr>
                </tbody>
        {% if loop.last %}
            </table>
        {% endif %}
        {% else %}
            No Data
    {% endfor %}
</div>

<script type="text/javascript">
    $('#addButton').on('click', function(){
        $.ajax({
            type: "GET",
            url:"{{ url('phalcon_project/product/formInsertData') }}",
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
            url:"{{ url('phalcon_project/product/formUpdateData/') }}" + id,
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
                url:"{{ url('phalcon_project/product/deleteData/') }}" + id,
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

{% endblock %}