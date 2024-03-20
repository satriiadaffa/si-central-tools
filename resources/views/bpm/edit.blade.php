<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Central Tools-Fabrikasi</title>
    <!-- Custom fonts for this template -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Edit BPM
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> Terdapat beberapa masalah dengan inputan Anda.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form method="post" action="{{ route('bpm.update', ['bpm' => $bpm->nomor_bpm]) }}" id="myForm">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nomor_bpm">Nomor BPM</label>
                            <input type="text" name="nomor_bpm" class="form-control" id="nomor_bpm"
                                value="{{ $bpm->nomor_bpm}}">
                        </div>
                        <div class="form-group">
                            <label for="order_proyek">Order Proyek</label>
                            <input type="text" name="order_proyek" class="form-control" id="order_proyek"
                                value="{{ $bpm->order_proyek }}">
                        </div>
                        <div class="form-group">
                            <label for="kode_material">Kode Material</label>
                            <select name="kode_material" class="form-control" id="kode_material">
                                <option value="">Pilih Kode Material</option>
                                @foreach ($kode_materials as $kodeMaterial)
                                <option value="{{ $kodeMaterial->kode_material }}" {{ $bpm->kode_material ==
                                    $kodeMaterial->kode_material ? 'selected' : '' }}>
                                    {{ $kodeMaterial->kode_material }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jumlah_bpm">Jumlah</label>
                            <input type="text" name="jumlah_bpm" class="form-control" id="jumlah_bpm"
                                value="{{ $bpm->jumlah_bpm }}">
                        </div>
                        <div class="form-group">
                            <label for="satuan">Satuan</label>
                            <select name="satuan" id="satuan" class="form-control">
                                <option value="pcs" {{ $bpm->satuan == 'pcs' ? 'selected' : '' }}>Pcs</option>
                                <option value="kg" {{ $bpm->satuan == 'kg' ? 'selected' : '' }}>Kg</option>
                                <option value="set" {{ $bpm->satuan == 'set' ? 'selected' : '' }}>Set</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tgl_permintaan">Tanggal Permintaan</label>
                            <input type="date" name="tgl_permintaan" class="form-control" id="tgl_permintaan"
                                value="{{ $bpm->tgl_permintaan }}">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea name="keterangan" id="keterangan"
                                class="form-control">{{ $bpm->keterangan }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('bpm.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</html>