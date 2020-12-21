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
                    <button class="btn btn-success m-r-5" id="addKK">
                        <i class="anticon anticon-plus"></i>
                        Add Kartu Keluarga
                    </button>
                </h4>
            </div>

            <div class="card-body">
                <table id="tKK" class="table">
                    <thead>
                    <tr>
                        <th>No KK</th>
                        <th>Jorong</th>
                        <th>Aksi</th>
                        <th>Tambah Anggota</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($kk as $k)
                        <tr>
                            <td>{{$k->no}}</td>
                            <td>{{$k->jorong->nama}}</td>
                            <td>
                                <a href="/detail/{{ $k->id }}" class="btn btn-info">Detail</a>
                                <a href="/edit/{{ $k->id }}" class="btn btn-warning">Edit</a>
                                <a href="/delete/{{ $k->id }}" class="btn btn-danger">Hapus</a>
                            </td>
                            <td>
                                <a href="/addAnggota/{{ $k->id }}" class="btn btn-primary">Add Penduduk</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div id="mKK" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Form Kartu Keluarga</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body p-3">
            <form action="/create" method="post">
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