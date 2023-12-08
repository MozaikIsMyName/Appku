@extends('dashboard.layouts.main')

@section('content')
  <div class="card mt-4">
    <div class="card-body">
      <h1 class="h1">Data Siswa</h1>
      <div class="input-group">
        <form class="d-flex" role="search">
          <button class="btn btn-primary mt-2 " type="submit">
            <svg class="bi">
              <use xlink:href="#search" />
            </svg>
          </button>
          <input class="form-control mt-2" type="search" placeholder="Search" aria-label="Search">
        </form>
        <form class="d-flex" method="get" action="Data">
          <select class="productname bradge btn-outline-success" name="data_filter">
            <option value="0" disabled="true" selected="true"></option>
            <option>ID</option>
            <option>Nis</option>
            <option>Nama</option>
          </select>
        </form>
        <div class="dropdown">
        </div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class="fa-solid fa-circle-plus"></i> Add New Data
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="card-header">
                <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('/dashboard/data') }}'" >
                    Kembali 
                </button>
              </div>
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Baru Data Student</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="card">
                  <div class="card-body"></div>
                      <form method="POST" action="{{ url('/dashboard/data') }}">
                      <div class="card-body">
                          <div>
                          <h2 class="text-center">Isi Data Diri</h2>
                          </div>
                          @csrf
                          <div class="row mb-3 mt-4">
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
                            <label for="txtasal_sekolah" class="col-sm-2 col-form-label">Asal Sekolah</label>
                            <div class="col-sm-6">
                            <input type="text" class="form-control form-control-sm @error('txtasal_sekolah') is-invalid @enderror"
                            id="txtasal_sekolah" name="txtasal_sekolah" value="{{ old('txtasal_sekolah') }}">
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
            </div>
          </div>
        </div>
        <button class="btn btn-outline-success" type="submit">
          <a href="/data/export"><i class="fa-solid fa-file-excel"></i> Save</a>
        </button>
      </div>
      <div class="card mt-4">
        <div class="card-body">
          <h4 class="card-title mb-3 mt-3"></h4>
          <form action="/dashboard/data" method="get" >
              @csrf
                <div class="row mb-3">
                    <div class="input-col-sm-3">
                      <label class="form-label"> Alamat / Asal Sekolah</label>
                      <input class="form-control" name="search" placeholder="Cari..." value="{{ isset($search) ? $search : '' }}">
                      <button type="submit" class="btn btn-primary">Cari</button>
                    </div>
                </div>
          </form>
        </div>
      </div>
      <div class="card mt-4">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <ul>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID</th>
                    <th scope="col">NIS</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Asal Sekolah</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Kota</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($Data as $Dat)
                    <tr>
                      <th>{{ $loop->iteration }}</th>
                      <td>{{ $Dat->ID }}</td>
                      <td>{{ $Dat->NIS }}</td>
                      <td>{{ $Dat->Nama }}</td>
                      <td>{{ $Dat->Asal_Sekolah }}</td>
                      <td>{{ $Dat->Tanggal_Lahir}}</td>
                      <td>{{ ($Dat->Jenis_Kelamin=='L') ? 'Laki-Laki' : 'Perempuan' }}</td>
                      <td>{{ $Dat->Alamat }}</td>
                      <td>{{ $Dat->Kota }}</td>
                      <td>
                        <a href="/dashboard/data/edit_data/{{ $Dat->ID }}" onclick="return confirm('Apakah Anda Yakin?')" class="btn bg-warning" id="">
                        <ion-icon name="eyedrop-outline"></ion-icon></a>
                      </td>
                      <td>
                        <a href="/dashboard/data/delete_data/{{ $Dat->ID }}" class="btn bg-danger" onclick="return confirm('Apakah Anda Yakin?')" id="delete">
                          <ion-icon name="trash-outline"></ion-icon></a>
                      </td>
                    </tr>
                  @endforeach
                </ul>
                </thead>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <br/>
      Halaman : {{ $Data->currentPage() }} <br/>
      Jumlah Data : {{ $Data->total() }} <br/>
      Data Per Halaman : {{ $Data->perPage() }} <br/><br/>
      {{ $Data->links() }}
    </div>
  </div>
@endsection
