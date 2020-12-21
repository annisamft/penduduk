@extends('layouts.main')
@extends('layouts.sidebar')

@section('content')
            <div class="card-header">
                <h4 class="card-title">
                
                       Add Penduduk
               
                </h4>
                <a href="/" style="color: red;">back</a>
            </div>

            <div class="card-body p-3">
            <form action="penduduk/create" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" id="keluarga_id" name="keluarga_id" value="{{$kk->id}}">

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nama">Nama</label>
                        <input type="text"  class="form-control" id="nama" name="nama" placeholder="nama">
                        <span class="text-danger" id="namaError"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nik">NIK</label>
                        <input type="text"  class="form-control" id="nik" name="nik" placeholder="nik">
                        <span class="text-danger" id="nikError"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text"  class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="tempat lahir">
                        <span class="text-danger" id="tempat_lahirError"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date"  class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="tannggal lahir" >
                        <span class="text-danger" id="tanggal_lahirError"></span>
                    </div>

                    <div class="form-group col-md-6">
                        <div class="form-group col-md-12">
                            <label for="agama">Agama</label>
                            <select class="form-control" id="agama" name="agama" required>
                                <option value="">Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Budha">Budha</option>
                                <option value="khatolik">Khatolik</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <div class="form-group col-md-12">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="laki-laki">laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <div class="form-group col-md-12">
                            <label for="level_pendidikan_id">Level Pendidikan</label>
                            <select class="form-control" id="level_pendidikan_id" name="level_pendidikan_id" required>
                                <option value="">Pilih Level Pendidikan</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <div class="form-group col-md-12">
                            <label for="pekerjaan_id">Pekerjaan</label>
                            <select class="form-control" id="pekerjaan_id" name="pekerjaan_id" required>
                                <option value="">Pilih Pekerjaan</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <div class="form-group col-md-12">
                            <label for="status_pernikahan">Status Pernikahan</label>
                            <select class="form-control" id="status_pernikahan" name="status_pernikahan" required>
                                <option value="">Pilih Status Pernikahan</option>
                                <option value="belum menikah">belum menikah</option>
                                <option value="menikah">menikah</option>
                                <option value="janda atau duda">janda atau duda</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <div class="form-group col-md-12">
                            <label for="status_keluarga">Status Keluarga</label>
                            <select class="form-control" id="status_keluarga" name="status_keluarga" required>
                                <option value="">Pilih Status Keluarga</option>
                                <option value="ayah">ayah</option>
                                <option value="ibu">ibu</option>
                                <option value="anak">anak</option>
                                <option value="orang tua">orang tua</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <div class="form-group col-md-12">
                            <label for="kewarganegaraan_id">Kewarganegaraan</label>
                            <select class="form-control" id="kewarganegaraan_id" name="kewarganegaraan_id" required>
                                <option value="">Pilih Warganegara</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="ayah">Ayah</label>
                        <input type="text"  class="form-control" id="ayah" name="ayah" placeholder="ayah">
                        <span class="text-danger" id="ayahError"></span>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="ibu">Ibu</label>
                        <input type="text"  class="form-control" id="ibu" name="ibu" placeholder="ibu">
                        <span class="text-danger" id="ibuError"></span>
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
    url: '{{ url('penduduk/listPendidikan') }}',
    dataType: "json",
    success: function(data) {
        var pd = jQuery.parseJSON(JSON.stringify(data));
        $.each(pd, function(k, v) {
            $('#level_pendidikan_id').append($('<option>', {value:v.id}).text(v.nama))
        })
    }
});

$.ajax({
    url: '{{ url('penduduk/listPekerjaan') }}',
    dataType: "json",
    success: function(data) {
        var pk = jQuery.parseJSON(JSON.stringify(data));
        $.each(pk, function(k, v) {
            $('#pekerjaan_id').append($('<option>', {value:v.id}).text(v.nama))
        })
    }
});

$.ajax({
    url: '{{ url('penduduk/listNegara') }}',
    dataType: "json",
    success: function(data) {
        var ng = jQuery.parseJSON(JSON.stringify(data));
        $.each(ng, function(k, v) {
            $('#kewarganegaraan_id').append($('<option>', {value:v.id}).text(v.nama))
        })
    }
});

</script>
@endsection