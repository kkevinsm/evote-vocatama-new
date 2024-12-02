@extends('layouts.guest')

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />

<div class="main-content d-flex justify-content-center align-items-center" style="min-height: 70vh;">
    <div class="row w-100">
        <div class="col-12 col-md-6 col-sm-12 mx-auto">
            <div class="card">
                <div class="card-body text-center">
                    <div class="empty-state" data-height="400">
                        <h2>Terima kasih!</h2>
                        <p class="lead">
                            Semoga Formatur terpilih dapat melanjutkan tongkat estafet perjuangan yang lebih baik lagi!
                        </p>
                        <div class="mt-4">
                            <!-- Tombol Logout -->
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn bg-gradient-danger w-20" style="border-radius: 8px;">
                                <i class="fas fa-sign-out-alt me-2"></i>Logout
                                </button>
                            </form>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
