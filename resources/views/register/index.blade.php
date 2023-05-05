@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-7" style="margin-top: 7%">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form action="/register" method="post">
                @csrf

                <div class="form-floating">
                    <input type="text" name="name" class="form-control rounded-top @error('name')
                        is-invalid
                    @enderror" id="name" placeholder="Name" autocomplete="off" required value="{{ old('name') }}">
                    <label for="name">Name</label>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control @error('username')
                        is-invalid
                    @enderror" id="username" placeholder="Username" autocomplete="off" required value="{{ old('username') }}">
                    <label for="username">Username</label>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <select class="form-select" aria-label="Default select example" name="status">
                    <option value="admin" selected>Admin</option>
                    <option value="superadmin">Superadmin</option>
                </select>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email')
                        is-invalid
                    @enderror" id="email" placeholder="Email" autocomplete="off" required value="{{ old('email') }}">
                    <label for="email">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control rounded-bottom @error('password')
                        is-invalid
                    @enderror" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
                <small class="d-block text-center mt-3">Sudah Punya Akun? <a href="/login" class="text-decoration-none">Login sekarang!</a></small>
            </form>
        </main>
    </div>
</div>
@endsection