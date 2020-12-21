@extends('layouts.main')
@extends('layouts.sidebar')

@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
<div class="col-lg-12">
    <div class="card-box pb-2">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">
                    Data Penduduk
                </h4>
            </div>

            <div class="card-body">
                <table id="tPenduduk" class="table">
                    <thead>
                    <tr>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($penduduk as $pd)
                        <tr>
                            <td>{{$pd->nik}}</td>
                            <td>{{$pd->nama}}</td>
                            <td>{{$pd->jenis_kelamin}}</td>
                            <td>{{$pd->agama}}</td>
                            <td>
                                <a href="/penduduk/detail/{{ $pd->id }}" class="btn btn-info">Detail</a>
                                <a href="/penduduk/edit/{{ $pd->id }}" class="btn btn-warning">Edit</a>
                                <a href="/penduduk/delete/{{ $pd->id }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div id="mPenduduk" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Form Penduduk</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body p-3">
            <form action="penduduk/create" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="no">No KK</label>
                        <input type="text"  class="form-control" id="no" name="no" placeholder="No">
                        <span class="text-danger" id="noError"></span>
                    </div>

                    <div class="form-group">
                        <div class="form-group col-md-12">
                            <label for="jorong">Jorong</label>
                            <select class="form-control" id="jorong" name="jorong">
                                <option value="">Pilih jorong</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group" >
                        <div class="form-group col-md-12">
                            <label for="tanggal_pencatatan">tanggal_pencatatan</label>
                            <input type="date"  class="form-control" id="tanggal_pencatatan" name="tanggal_pencatatan" placeholder="tanggal pencatatan">
                            <span class="text-danger" id="tanggal_pencatatanError"></span>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>


@endsection

@section('js')
<script type="text/javascript">
$(document).on('click', '#addKK', function() {
    $('#mKK').modal('show');
    $('#formKK').attr('action', '{{ url('kelolauser/create') }}');
});

$.ajax({
    url: '{{ url('/listJorong') }}',
    dataType: "json",
    success: function(data) {
        var jorong = jQuery.parseJSON(JSON.stringify(data));
        $.each(jorong, function(k, v) {
            $('#jorong').append($('<option>', {value:v.id}).text(v.nama))
        })
    }
});

</script>
@endsection