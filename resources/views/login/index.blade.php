@extends('layout.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-class" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
        @endif


        @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-class" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
        @endif

        <div class="card">
            <div class="card-header">
        <form action="/login" method="post">
        <main class="form-signin">
                <h6 class="h3 mb-3 fw-normal text-center">Admin Siswa</h6>
                <h6 class="h7 mb-3 fw-normal text-center">Login To Your Account</h6>
                @csrf
            <div class="form-floating">
                <input type="email" name="username" class="form-control" id="email" placeholder="name@example" autofocus required>
                <label for="email">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control rounded-top" id="Password" placeholder="Password" required>
                <label for="Password">Password</label>
                <body class="text-center">
            </div>
            <button type="button" class="w-100 btn btn-sm btn-primary" onclick="window.location='{{ url('dashboard') }}'">
                Sig in</button> <a href=""></a>
            <small class="d-block text-center mt-3">don't have account? <a href="/register">sign up</a></small>
            </form>
        </main>
    </div>
</div>
@endsection