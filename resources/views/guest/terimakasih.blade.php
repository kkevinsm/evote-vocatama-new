@extends('layouts.guest')

@section('content')
    <div class=" min-vh-85">
        <div class="container-fluid" >
            <div class="card card-body blur shadow-blur">
                <div class="row gx-4 align-items-center text-center text-md-start"> <!-- Tambahkan responsif -->
                    <!-- Foto -->
                    <div class="col-12 col-md-auto">
                        <div class="avatar avatar-xl mx-auto mx-md-0 position-relative">
                            <img src="{{ asset('assets/img/bruce-mars.jpg') }}" alt="CRUD" class="w-100 border-radius-lg shadow-sm">
                        </div>
                    </div>
                    <!-- Heading dan Paragraf -->
                    <div class="col-12 col-md-auto my-auto">
                        <div class="h-100">
                            <p class="mb-0 font-weight-bold text-sm">
                                PILIH CALON FORMATUR
                            </p>
                            <h5 class="mb-1">
                                CRUD ROLES (EX: IKATAN PELAJAR MUHAMMADIYAH)
                            </h5>
                        </div>
                    </div>
                    <!-- Tombol Submit -->
                    <div class="col-12 col-md-auto ms-auto d-flex justify-content-md-end justify-content-center">
                        <form action="/guest/terimakasih" method="POST">
                            @csrf
                            <button type="submit" class="btn bg-gradient-info font-weight-bold" style="margin-bottom: -1px">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Instruction Text -->
            <div class="text-start mt-3 mx-4">
                <p class="text-muted font-weight-bold">
                    {{ __('Pilih maksimal CRUD kandidat') }}
                </p>
            </div>
            <!-- Card Section -->
            <div class="row mt-4">
                <!-- Your card content for the candidate cards goes here -->
            </div>
        </div>
    </div>
</div>
@endsection