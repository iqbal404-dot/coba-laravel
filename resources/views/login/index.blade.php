@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-7" style="margin-top: 12%">
        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Please Log in</h1>
            <form>
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" autocomplete="off">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
                <small class="d-block text-center mt-3">Belum registrasi? <a href="/register" class="text-decoration-none">Registrasi sekarang!</a></small>
            </form>
        </main>
    </div>
</div>
@endsection