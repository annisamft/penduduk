@extends('layouts.main')
@extends('layouts.sidebar')

@section('content')
<div class="col-lg-12">
    <div class="card-box pb-2">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">
                Penduduk pada nagari tertentu
                </h4>
                <form action="/pendudukNA/pilihNA" method="get">
                    <div class="form-row"> 
                        <div class="form-group col-md-3">
                            <select class="form-control" id="nagari" name="nagari">
                                <option value="">Pilih Nagari</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <input type="submit" value="cari" class="btn btn-success">
                        </div>
                    </div>
                </form>
            </div>

            <div class="card-body">
                <table id="tPenduduk" class="table">
                    <thead>
                    <tr>
                        <th>NIK</th>
                        <th>Asal Nagari</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($penduduk as $pd)
                        <tr>
                            <td>{{$pd->nik}}</td>
                            <td>{{$pd->nama}}</td>
                            <td>{{$pd->tanggal_lahir}}</td>
                            <td>{{$pd->jenis_kelamin}}</td>
                            <td>{{$pd->agama}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection

@section('js')
<script>
$.ajax({
    url: '{{ url('/listNagari') }}',
    dataType: "json",
    success: function(data) {
        var na = jQuery.parseJSON(JSON.stringify(data));
        $.each(na, function(k, v) {
            $('#nagari').append($('<option>', {value:v.id}).text(v.nama))
        })
    }
});

</script>
@endsection
