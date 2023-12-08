@extends('layout.main')

@section('content')
    <h3>Form Baru Data Student</h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('Student') }}'" >
                Kembali 
            </button>
        </div>
        <div class="card-body"></div>
            <form method="POST" action="{{ url('Student') }}">
              <div class="card-body">
                <div>
                  <h2 class="text-center">Isi Data Diri</h2>
                </div>
                @csrf
                <div class="row mb-3">
                  <label for="txtid" class="col-sm-2 col-form-label">ID</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-sm @error('txtid') is-invalid @enderror" 
                        id="txtid" name="txtid" value="{{ old('txtid') }}">
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
                      id="txtnis" name="txtnis" value="{{ old('txtnis') }}">
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
                      id="txtname" name="txtname" value="{{ old('txtname') }}">
                    @error('txtname')
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
                      id="txttanggal_lahir" name="txttanggal_lahir" value="{{ old('txttanggal_lahir') }}">
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
                      name="txtjenis_kelamin" id="txtjenis_kelamin">
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
                      id="txtalamat" name="txtalamat" value="{{ old('txtalamat') }}">
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
                      <select name="txtkota" class="form-select" id="txtkota"  name="txtkota">
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