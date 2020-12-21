@section('sidebar')
<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li>
                    <a href="{{url('/')}}" >
                        <i data-feather="user"></i>
                        <span> Kelola Kartu Keluarga </span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/penduduk')}}">
                        <i data-feather="book-open"></i>
                        <span> Kelola Penduduk</span>
                    </a>
                </li>
                <li class="menu-title mt-2">Laporan</li>
                <li>
                    <a href="{{url('pendudukUP')}}" >
                        <i data-feather="archive"></i>
                        <span> Penduduk Usia Produktif</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('pendudukNA')}}" >
                        <i data-feather="archive"></i>
                        <span> Penduduk perNagari</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('pendudukLV')}}" >
                        <i data-feather="archive"></i>
                        <span> Penduduk SMP kebawah</span>
                    </a>
                </li>

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
@endsection
