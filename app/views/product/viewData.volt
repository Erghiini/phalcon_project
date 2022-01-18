{% extends 'template/index.volt' %}

{% block content %}

<div class="container-fluid" style="margin-top: 100px;">
    <div class="row" style="margin-bottom: 15px;">
        <div class="col-md-12">
            <button type="button" id="addButton" class="btn btn-primary">Tambah Data</button>
        </div>
    </div>

    {% for datas in data %}
        {% if loop.first %}
            <table class="table table-bordered table-hover" align="center">
                <thead>
                    <tr>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No. HP</th>
                    </tr>
                </thead>
        {% endif %}
                <tbody>
                    <tr>
                        <td>{{ datas.nip }}</td>
                        <td>{{ datas.nama }}</td>
                        <td>{{ datas.alamat }}</td>
                        <td>{{ datas.nohp }}</td>
                        <td align="center">
                            <button type="button" value="{{ datas.id }}" class="btn btn-warning updateButton">Update</button>
                            <button type="button" value="{{ datas.id }}" class="btn btn-danger deleteButton">Delete</button>
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
            url:"{{ url('phalcon_project/Pegawai/formInsertData') }}",
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
            url:"{{ url('phalcon_project/Pegawai/formUpdateData/') }}" + id,
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
                url:"{{ url('phalcon_project/Pegawai/deleteData/') }}" + id,
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

{% endblock %}