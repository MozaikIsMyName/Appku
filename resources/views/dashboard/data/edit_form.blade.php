@extends('dashboard.layouts.main')

@section('content')
    <h3>Form Edit Data Student</h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('/dashboard/data') }}'" >
                Kembali 
            </button>
        </div>
        <div class="card-body"></div>
            <form method="POST" action="{{ url('/dashboard/data/update_data' , $Data->ID) }}">
            <div class="card-body">
                <div>
                <h2 class="text-center">Edit Data Diri</h2>
                </div>
                @csrf
                <div class="row mb-3">
                <label for="txtid" class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control form-control-sm @error('txtid') is-invalid @enderror" 
                        id="txtid" name="txtid" value="{{ $Data->ID }}">
                    @error('txtid')
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                    @enderror
                </div>
                </div>
                <div class="row mb-3">
                    <label for="txtnis" class="col-sm-2 col-form-label">NIS</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control form-control-sm @error('txtnis') is-invalid @enderror" 
                    id="txtnis" name="txtnis" value="{{ $Data->NIS }}">
                    @error('txtnis')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtname" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control form-control-sm @error('txtname') is-invalid @enderror"
                    id="txtname" name="txtname" value="{{ $Data->Nama }}">
                    @error('txtname')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtasal_sekolah" class="col-sm-2 col-form-label">Asal Sekolah</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control form-control-sm @error('txtasal_sekolah') is-invalid @enderror"
                    id="txtasal_sekolah" name="txtasal_sekolah" value="{{ $Data->Asal_Sekolah }}">
                    @error('txtasal_sekolah')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txttanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-6">
                    <input type="date" class="form-control form-control-sm @error('txttanggal_lahir') is-invalid @enderror" 
                    id="txttanggal_lahir" name="txttanggal_lahir" value="{{ $Data->Tanggal_Lahir }}">
                    @error('txttanggal_lahir')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtjenis_kelamin" class="col-sm-2 col-form-label">Jenis kelamin</label>
                    <div class="col-sm-6">
                    <select class="form-select form-control-sm @error('txtjenis_kelamin') is-invalid @enderror" 
                    name="txtjenis_kelamin" id="txtjenis_kelamin" value="{{ $Data->Jenis_Kelamin }}" >
                        <option value="" selected>-Pilih-</option>
                        <option value="L" {{ (old('txtjenis_kelamin')=='L') ? 'selected' : '' }}>Laki laki</option>
                        <option value="P" {{ (old('txtjenis_kelamin')=='P') ? 'selected' : '' }}>Perempuan</option>
                    </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtalamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-6">
                    <input type="txtalamat" class="form-control form-control-sm @error('txtalamat') is-invalid @enderror" 
                    id="txtalamat" name="txtalamat" value="{{ $Data->Alamat }}">
                    @error('txtalamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtkota" class="col-sm-2 col-form-label">Kota</label>
                    <div class="col-sm-6">
                    <select name="txtkota" class="form-select" id="txtkota"  name="txtkota" value="{{ $Data->Kota }}">
                        <option value=""></option>
                        <option value="malang">Malang</option>
                        <option value="DKI jogyakarta">DKI jogyakarta</option>
                        <option value="Aceh">Aceh</option>
                        <option value="Bandung">Bandung</option>
                        <option value="Kediri">Kediri</option>
                        <option value="Blitar">Blitar</option>
                        <option value="Jakarta">jakarta</option>
                        <option value="Jakarta">Cilacap</option>
                        <option value="Jakarta">Salatiga</option>
                        <option value="Jakarta">Bekasi</option>
                    </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-6">
                    <button type="submit" class="btn btn-sm btn-success">
                        caramel
                    </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection