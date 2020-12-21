@extends('layouts.main')
@extends('layouts.sidebar')

@section('content')
            <div class="card-header">
                <h4 class="card-title">
                
                       Edit Data Penduduk
               
                </h4>
                <a href="/penduduk" style="color: red;">back</a>
            </div>

            <div class="card-body p-3">
            <form action="/penduduk/update" method="post">
                    {{ csrf_field() }}
                <input type="hidden" id="id" name="id" value="{{$pd->id}}">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nama">Nama</label>
                        <input type="text"  class="form-control" id="nama" name="nama" placeholder="nama" value="{{$pd->nama}}">
                        <span class="text-danger" id="namaError"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nik">NIK</label>
                        <input type="text"  class="form-control" id="nik" name="nik" placeholder="nik" value="{{$pd->nik}}">
                        <span class="text-danger" id="nikError"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text"  class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="tempat lahir" value="{{$pd->tempat_lahir}}">
                        <span class="text-danger" id="tempat_lahirError"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date"  class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="tannggal lahir" value="{{$pd->tanggal_lahir}}">
                        <span class="text-danger" id="tanggal_lahirError"></span>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="ayah">Ayah</label>
                        <input type="text"  class="form-control" id="ayah" name="ayah" placeholder="ayah" value="{{$pd->ayah}}">
                        <span class="text-danger" id="ayahError"></span>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="ibu">Ibu</label>
                        <input type="text"  class="form-control" id="ibu" name="ibu" placeholder="ibu" value="{{$pd->ibu}}">
                        <span class="text-danger" id="ibuError"></span>
                    </div>
                </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
                    </div>

                </form>
            </div>
@endsection
