@extends('layouts.main')
@extends('layouts.sidebar')

@section('content')
            <div class="card-header">
                <h4 class="card-title">
                
                       Edit Kartu Keluarga
               
                </h4>
                <a href="/" style="color: red;">back</a>
            </div>

            <div class="card-body p-3">
            <form action="/update" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" id="id" name="id" value="{{$kk->id}}">
                    <div class="form-group">
                        <label for="no">No KK</label>
                        <input type="text"  class="form-control" id="no" name="no" placeholder="No" value="{{$kk->no}}">
                        <span class="text-danger" id="noError"></span>
                    </div>

                    <div class="form-group">
                        <div class="form-group col-md-12">
                            <label for="jorong">Jorong</label>
                            <select class="form-control" id="jorong" name="jorong" required>
                                <option value="">Pilih jorong</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group" >
                        <div class="form-group col-md-12">
                            <label for="tanggal_pencatatan">tanggal_pencatatan</label>
                            <input type="date"  class="form-control" id="tanggal_pencatatan" name="tanggal_pencatatan" placeholder="tanggal pencatatan" value="{{$kk->tanggal_pencatatan}}">
                            <span class="text-danger" id="tanggal_pencatatanError"></span>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
                    </div>

                </form>
            </div>
@endsection

@section('js')
<script type="text/javascript">

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