@extends('layout.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">
        <main class="form-regristration">
            <h6 class="h3 mb-3 fw-normal text-center">Admin Siswa</h6>
            <h6 class="h7 mb-3 fw-normal text-center">Registration Account</h6>
            <form action="/register" method="post">
                @csrf
                <div class="form-floating">
                    <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="Name" autofocus required>
                    <label for="Name">Name</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control" id="Username" placeholder="Username" required>
                    <label for="Username">Username</label>
                </div>
                <div class="form-floating">
                    <input type="email" name="username" class="form-control" id="email" placeholder="name@example" autofocus required>
                    <label for="email">Email</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control rounded-top" id="Password" placeholder="Password" required>
                    <label for="Password">Password</label>
                    <body class="text-center">
                </div>
                <div class="checkbox mt-3">
                    <label>
                    <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
                <small class="d-block text-center mt-3">Already Registered? <a href="/login">login</a></small>
            </form>
        </main>
    </div>
</div>

@endsection