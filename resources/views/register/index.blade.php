@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-7" style="margin-top: 7%">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form>
                <div class="form-floating">
                    <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="Name" autocomplete="off">
                    <label for="name">Name</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control" id="username" placeholder="Username" autocomplete="off">
                    <label for="username">Username</label>
                </div>
                <select class="form-select" aria-label="Default select example" name="status">
                    <option value="admin" selected>Admin</option>
                    <option value="superadmin">Superadmin</option>
                </select>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" autocomplete="off">
                    <label for="email">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password">
                    <label for="password">Password</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
                <small class="d-block text-center mt-3">Sudah Punya Akun? <a href="/login" class="text-decoration-none">Login sekarang!</a></small>
            </form>
        </main>
    </div>
</div>
@endsection