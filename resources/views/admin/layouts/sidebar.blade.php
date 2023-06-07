<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">SMKN 1 Toraja Utara</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/main') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Data</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data:</h6>
                <a class="collapse-item" href="{{ url('siswa') }}">Siswa</a>
                <a class="collapse-item" href="{{ url('guru') }}">Guru</a>
                <a class="collapse-item" href="{{ url('kelas') }}">Kelas</a>
                <a class="collapse-item" href="{{ url('jurusan') }}">Jurusan</a>
                <a class="collapse-item" href="{{ url('mapel') }}">Mata Pelajaran</a>
                <a class="collapse-item" href="{{ url('wali') }}">Wali</a>
                <a class="collapse-item" href="{{ url('jadwal') }}">Jadwal</a>
                <a class="collapse-item" href="{{ url('hari') }}">Hari</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('user') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>User</span></a>
    </li>
</ul>
