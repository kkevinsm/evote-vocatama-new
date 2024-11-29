@extends('layouts.user_type.guest')

@section('content')

  <main class="main-content mt-0">
    <section>
      <div class="page-header min-vh-85">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="text-center mb-2">
                <img src="../assets/img/bruce-mars.jpg" alt="Logo Instansi" class="img-fluid rounded-circle crud" 
                style="max-width: 150px; border: 2px solid #ccc;">
              </div>
              <div class="card-header pb-0 bg-transparent text-center mb-4">
                <h2 class="font-weight-bolder text-primary text-gradient">crud</h2>
              </div>
              <div class="card"  style="padding: 20px;">
                <div class="card-body">
                  <form role="form" method="POST" action="/session">
                    @csrf
                    <label>Username</label>
                    <div class="mb-3">
                      <input type="string" class="form-control" name="username" id="username" placeholder="Username" 
                      style="border-radius: 8px; box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);">
                      @error('username')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                    <label>Password</label>
                    <div class="mb-3">
                      <input type="password" class="form-control" name="password" id="password" placeholder="Password" 
                      style="border-radius: 8px; box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);">
                      @error('password')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-primary w-100 mt-4 mb-0" style="border-radius: 12px;">Login</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

@endsection
