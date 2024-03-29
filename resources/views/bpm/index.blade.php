

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('admin/dashboard/sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('admin/dashboard/header')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif

                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">BON PERMINTAAN MATERIAL</h6>
                            <a class="btn btn-sm btn-outline-success" href="{{ route('bpms.create') }}">Input BPM</a>
                        </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="myTable" class="table table-bordered">
                                <thead>
                                    <tr class="text-center">
                                        <th>Nomor BPM</th>
                                        <th>Project</th>
                                        <th>Tanggal Permintaan</th>
                                        <th>Daftar Material</th>
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bpms as $bpm)
                                    <tr>
                                        <td>{{ $bpm->nomor_bpm }}</td>
                                        <td>{{ $bpm->project }}</td>
                                        <td>{{ $bpm->tgl_permintaan }}</td>
                                        <td class="flex justify-content-center">
                                            <a class="btn btn-info btn-sm mr-2" href="{{ route('bpm.show', $bpm->nomor_bpm) }}"><i class="fas fa-eye"></i></a>
                                            <!-- Menambahkan ikon mata untuk tindakan Show -->
                                        </td>
                                        <td>
                                            <form action="{{ route('bpm.destroy', $bpm->nomor_bpm) }}" method="POST" class="d-flex justify-content-center">
                                                <a class="btn btn-primary btn-sm mr-2" href="{{ route('bpm.edit', $bpm->nomor_bpm) }}"><i
                                                    class="fas fa-edit"></i></a> <!-- Menambahkan ikon pensil untuk tindakan Edit -->
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                                <!-- Menambahkan ikon tong sampah untuk tindakan Delete -->
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('admin/dashboard/footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Bootstrap core JavaScript-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <!-- Include logout modal content -->

</body>

</html>

{{-- @endsection --}}