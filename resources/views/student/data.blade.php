@extends('layout.main')

@section('content')
    <h3>Data Student</h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('student/add') }}'">
                <i class="fa-solid fa-magnifying-glass-plus"></i> Add New Data
            </button>
        </div>
        <div class="card-body">
            @if (session('msg'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Berhasil</strong> {{ session('msg') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <table class="table table-sm table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Asal Sekolah</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Kota</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($student as $row)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $row->ID }}</td>
                            <td>{{ $row->NIS }}</td>
                            <td>{{ $row->Nama }}</td>
                            <td>{{ $row->Asal_Sekolah }}</td>
                            <td>{{ ($row->Tanggal_Lahir=='2005-09-30') ? '2005-09-30' : '2007-12-13'}}</td>
                            <td>{{ ($row->Jenis_Kelamin=='Perempuan') ? 'Laki-Laki' : 'Perempuan' }}</td>
                            <td>{{ $row->Alamat }}</td>
                            <td>{{ $row->Kota }}</td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>    
        </div>
    </div>
@endsection
