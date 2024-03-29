<!-- Bootstrap core CSS -->
<link href="{{url('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css')}}" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="{{url('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
<link href="{{url('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}" rel="stylesheet">

<link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="nav-link" href="{{ url('/dashboard') }}">
        <div class="d-flex justify-content-center align-items-center">
            <img src="{{ asset('img/ct-1.png') }}" alt="Dashboard" style="height: 80px; width: auto;">
        </div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    {{-- <li class="nav-item active">
        <a class="nav-link" href="{{ url('/dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li> --}}
    <!-- End of Nav Item - Dashboard -->

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Kode Material -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('stok_material.index') }}">
            <i class="fas fa-fw fa-star"></i>
            <span>Stok Material</span>
        </a>
    </li>

    <li class="nav-item">
            <a class="nav-link" href="{{ route('bom.index') }}">
                <i class="fas fa-fw fa-cog"></i>
                <span>Bill Of Materials (BOM)</span>
            </a>
        </li>
    <!-- End of Nav Item - Kode Material -->

    <!-- Nav Item - BPM-BPRM -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>BPRM-BPM</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('bprm.index') }}">BPRM</a>
                <a class="collapse-item" href="{{ route('bpm.index') }}">BPM</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - SPM -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('bpm.index') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Surat Permintaan Material (SPM)</span>
        </a>
    </li>
    <!-- End of Nav Item - SPM -->

    <!-- Nav Item - SPM -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('project.index') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Daftar Project</span>
        </a>
    </li>
    <!-- End of Nav Item - SPM -->

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->

<!-- JavaScript for Sidebar Toggle -->

<!-- Bootstrap core JavaScript-->
        <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        
        <!-- Core plugin JavaScript-->
        <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
        
        <!-- Custom scripts for all pages-->
        <script src="{{asset('js/sb-admin-2.min.js')}}"></script>
        
        <!-- Page level plugins -->
        {{-- <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script> --}}
        
        <!-- Page level custom scripts -->
        {{-- <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
        <script src="{{asset('js/demo/chart-pie-demo.js')}}"></script> --}}
