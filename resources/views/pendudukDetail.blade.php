@extends('layouts.main')
@extends('layouts.sidebar')

@section('content')
            <div class="card-header">
                <h4 class="card-title">
                 
                        Detail Data Penduduk
                   
                </h4>
                <a href="/penduduk" style="color: red;">back</a>
            </div>

            <div class="card-body p-3">
                <form>
               
                    <div class="card">
                        <div class="card-body">
                            <table width="400">
                          
                                <tr>
                                    <td>
                                        <a class="text-gray">No KK</a>
                                    </td>
                                    <td>:</td>
                                    <td>
                                        <a class="text-gray" id="dno">{{$pd->kartu_keluarga->no}}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="text-gray">Nama</a>
                                    </td>
                                    <td>:</td>
                                    <td>
                                        <a class="text-gray" id="djorong">{{$pd->nama}}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="text-gray">NIK</a>
                                    </td>
                                    <td>:</td>
                                    <td>
                                        <a class="text-gray" id="dtgl">{{$pd->nik}}</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <a class="text-gray">Tempat Lahir</a>
                                    </td>
                                    <td>:</td>
                                    <td>
                                        <a class="text-gray" id="dtgl">{{$pd->tempat_lahir}}</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <a class="text-gray">Tanngal Lahir</a>
                                    </td>
                                    <td>:</td>
                                    <td>
                                        <a class="text-gray" id="dtgl">{{$pd->tanggal_lahir}}</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <a class="text-gray">Level Pendidikan</a>
                                    </td>
                                    <td>:</td>
                                    <td>
                                        <a class="text-gray" id="dtgl">{{$pd->level_pendidikan->nama}}</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <a class="text-gray">Pekerjaan</a>
                                    </td>
                                    <td>:</td>
                                    <td>
                                        <a class="text-gray" id="dtgl">{{$pd->pekerjaan->nama}}</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <a class="text-gray">Status Pernikahan</a>
                                    </td>
                                    <td>:</td>
                                    <td>
                                        <a class="text-gray" id="dtgl">{{$pd->status_pernikahan}}</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <a class="text-gray">Status Keluarga</a>
                                    </td>
                                    <td>:</td>
                                    <td>
                                        <a class="text-gray" id="dtgl">{{$pd->status_keluarga}}</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <a class="text-gray">Kewarganegaraan</a>
                                    </td>
                                    <td>:</td>
                                    <td>
                                        <a class="text-gray" id="dtgl">{{$pd->kewarganegaraan->nama}}</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <a class="text-gray">Ayah</a>
                                    </td>
                                    <td>:</td>
                                    <td>
                                        <a class="text-gray" id="dtgl">{{$pd->ayah}}</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <a class="text-gray">Ibu</a>
                                    </td>
                                    <td>:</td>
                                    <td>
                                        <a class="text-gray" id="dtgl">{{$pd->ibu}}</a>
                                    </td>
                                </tr>
                            
                            </table>
                        </div>
                    </div>
                    
                </form>
            </div>

@endsection
