@guest

@else
<div id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
    <div class="list-group list-group-flush mx-3 mt-4 ">

        <a href="{{ route('home') }}"
            class="list-group-item list-group-item-action py-2 ripple {{ Request::is('home')?" active":"" }}">
            <i class="fas fa-house fa-fw me-3"></i><span> Menu Utama </span></a>

        @if (Auth::user()->level == 'admin')
        <a href="{{ route('sapi') }}"
            class=" list-group-item list-group-item-action py-2 rippl {{ Request::is('sapi')? "active":"" }}">
            <i class="fas fa-cow fa-fw me-3"></i><span>Sapi Masuk</span></a>

        <a class="list-group-item list-group-item-action py-2 rippl {{ Request::is('penimbangan/*')? "active":"" }}"
            data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
            aria-controls="collapseExample">
            <i class="fas fa-solid fa-weight-scale me-3"></i><span class="dropdown-toggle ">Penimbangan </span>
        </a>
        <div class="collapse list-group-flush mx-3 mt-1" id="collapseExample">


            <a href="{{ route('penimbangan/pertama') }}"
                class=" list-group-item list-group-item-action {{ Request::is('penimbangan/pertama','penimbangan/pertama/*')? "active":"" }}">
                <span>Timbang Pertama</span></a>


            <a href="#" class="list-group-item list-group-item-action {{ Request::is('#')? "active":"" }}">
                <span>Timbang Kedua</span></a>


            <a href="#" class=" list-group-item list-group-item-action {{ Request::is('#')? "active":"" }}">
                <span>Timbang Ketiga</span></a>
        </div>


        <a href="{{ route('peramalan') }}"
            class="list-group-item list-group-item-action py-2 rippl {{ Request::is('peramalan','peramalan/*')? "active":"" }}"><i
                class="fas fa-calendar-day fa-fw me-3"></i><span>Peramalan</span></a>

        <a href="{{ route('pelaporan') }}"
            class="list-group-item list-group-item-action py-2 rippl {{ Request::is('pelaporan')? "active":"" }}"><i
                class="fas fa-regular fa-file-pdf fa-fw me-3"></i><span>Laporan</span></a>

        <a href="{{ route('user') }}"
            class="list-group-item list-group-item-action py-2 rippl {{ Request::is('user','user/*')? "active":"" }}"><i
                class="fas fa-solid fa-user fa-fw me-3"></i><span>user</span></a>

        <a href="#" class="list-group-item list-group-item-action py-2 rippl {{ Request::is('#')? "active":"" }}"><i
                class="fas fa-cow fa-fw me-3"></i><span>Lepas Sapi</span></a>

        <a href="#" class="list-group-item list-group-item-action py-2 rippl {{ Request::is('#')? "active":"" }}"><i
                class="fas fa-solid fa-dollar-sign fa-fw me-3"></i><span>Keuangan</span></a>

        @elseif (Auth::user()->level == 'petugas')

        <a href="{{ route('sapi') }}"
            class=" list-group-item list-group-item-action py-2 rippl {{ Request::is('sapi')? "active":"" }}">
            <i class="fas fa-cow fa-fw me-3"></i><span>Sapi Masuk</span></a>

            <a class="list-group-item list-group-item-action py-2 rippl {{ Request::is('penimbangan/*')? "active":"" }}"
            data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
            aria-controls="collapseExample">
            <i class="fas fa-solid fa-weight-scale me-3"></i><span class="dropdown-toggle ">Penimbangan </span>
            </a>
            <div class="collapse list-group-flush mx-3 mt-1" id="collapseExample">


                <a href="{{ route('penimbangan/pertama') }}"
                    class=" list-group-item list-group-item-action {{ Request::is('penimbangan/pertama','penimbangan/pertama/*')? "active":"" }}">
                    <span>Timbang Pertama</span></a>


                <a href="#" class="list-group-item list-group-item-action {{ Request::is('#')? "active":"" }}">
                    <span>Timbang Kedua</span></a>


                <a href="#" class=" list-group-item list-group-item-action {{ Request::is('#')? "active":"" }}">
                    <span>Timbang Ketiga</span></a>
            </div>

        @elseif (Auth::user()->level == 'pemilik')
        <a href="{{ route('peramalan') }}"
            class="list-group-item list-group-item-action py-2 rippl {{ Request::is('peramalan','peramalan/*')? "active":"" }}"><i
                class="fas fa-calendar-day fa-fw me-3"></i><span>Peramalan</span></a>

        <a href="{{ route('pelaporan') }}"
            class="list-group-item list-group-item-action py-2 rippl {{ Request::is('pelaporan')? "active":"" }}"><i
                class="fas fa-regular fa-file-pdf fa-fw me-3"></i><span>Laporan</span></a>
        
        <a href="#" class="list-group-item list-group-item-action py-2 rippl {{ Request::is('#')? "active":"" }}"><i
            class="fas fa-solid fa-dollar-sign fa-fw me-3"></i><span>Keuangan</span></a>

        @endif




    </div>

</div>
@endguest