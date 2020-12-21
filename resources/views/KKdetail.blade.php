@extends('layouts.main')
@extends('layouts.sidebar')

@section('content')
            <div class="card-header">
                <h4 class="card-title">
                 
                        Detail Kartu Keluarga
                   
                </h4>
                <a href="/" style="color: red;">back</a>
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
                                        <a class="text-gray" id="dno">{{$kk->no}}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="text-gray">Jorong</a>
                                    </td>
                                    <td>:</td>
                                    <td>
                                        <a class="text-gray" id="djorong">{{$kk->jorong->nama}}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="text-gray">Tanggal Pencatatan</a>
                                    </td>
                                    <td>:</td>
                                    <td>
                                        <a class="text-gray" id="dtgl">{{$kk->tanggal_pencatatan}}</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <a class="text-gray">Anggota Keluarga</a>
                                    </td>
                                    <td>:</td>
                                    <td>
                                        <a class="text-gray" id="dtgl">@foreach($anggotakk as $ak)
                                               <li> {{$ak->nama}} </li>
                                            @endforeach
                                        </a>
                                    </td>
                                </tr>
                            
                            </table>
                        </div>
                    </div>
                    
                </form>
            </div>

@endsection
