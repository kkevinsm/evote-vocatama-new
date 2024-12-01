@extends('layouts.guest')

@section('head')
<style>
    .hidden {
        display: none;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">
@endsection

@section('content')

    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <h6 class="font-weight-bolder mb-0 text-capitalize"></h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 d-flex justify-content-end" id="navbar"> 
                <ul class="navbar-nav  justify-content-end">
                <li class="nav-item d-flex align-items-center">
                    <a href="{{ url('/logout') }}" class="nav-link text-body font-weight-bold px-0 d-none d-md-flex">
                        <i class="fa fa-user me-sm-1"></i>
                            <span class="d-sm-inline d-none">Sign Out</span>
                    </a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    @foreach($roles as $index => $role)
    <div class=" min-vh-85">
        <div class="container-fluid" >
            <div class="card card-body blur shadow-blur">
                <div class="row gx-4 align-items-center text-center text-md-start">
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
                                {{ $role->name }}
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
        
        <div class="container-fluid">
            <div class="row">
                <!-- Card -->
                @foreach($groupedDatas[$role['name']] as $data)
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="card z-index-2 max-height-600">
                        <div class="card-body p-4">
                            <!-- Foto -->
                            <div class="border-radius-lg py-2 shadow-sm" 
                                 style="background-image: url({{ asset('image/' . $data->image) }});
                                        height: 250px; background-size: cover; width: 100%;">
                            </div>
        
                            <!-- Information -->
                            <div class="row mt-2">
                                <h6 class="col-12 text-center">{{ $data->name }}</h6>
                            </div>
        
                            <!-- Vote & Visi Misi Buttons -->
                            <div class="row">
                                <div class="d-flex flex-column align-items-center mt-3">
                                    <div class="d-flex justify-content-center w-100">
                                        <div class="d-flex gap-2">
                                            <!-- Buttons -->
                                            <input id="pilihan{{ $data->id }}" type="checkbox" class="hidden" name="category[]" value="{{ $data->id }}">
                                            <button id="vote{{$data->id}}" type="button" class="btn bg-gradient-success" onclick="vote({{ $data->id }}); checkSelected();">Vote</button>
                                            <button id="unVote{{$data->id}}" type="button" class="btn bg-gradient-danger hidden" onclick="unVote({{ $data->id }}); checkSelected();">Unvote</button>

                                            <button id="visiMisi{{$data->id}}" type="button" class="btn bg-gradient-dark" data-bs-toggle="modal" data-bs-target="#modal-visi-misi" data-id="{{ $data->id }}" data-visi="{{ $data->visi }}" data-misi="{{ $data->misi }}">Visi & Misi</button>
                                        </div>
                                    </div>
                                </div>
                            </div>                    
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endforeach
</div>

{{-- !-- Modal Visi Misi --}}

<div class="modal fade" id="modal-visi-misi" tabindex="-1" role="dialog" aria-labelledby="modal-visi-misi-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
            <h6 class="modal-title font-weight-bold text-dark" id="modal-visi-misi-title">Visi & Misi Kandidat</h6>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <h6 class="font-weight-bold text-dark">Visi:</h6>
                <p id="visi"></p>
                <h6 class="font-weight-bold text-dark mt-4">Misi:</h6>
                <p id="misi"></p>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
            <button type="button" class="btn bg-gradient-danger btn-link ml-auto" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
<script>
    function vote(id) {
        document.getElementById("vote" + id).classList.add("hidden"); // Add a highlight class
        document.getElementById("unVote" + id).classList.remove("hidden"); // Add a highlight class

        document.getElementById('pilihan' + id).checked = true;
    }

    function unVote(id) {
        document.getElementById("vote" + id).classList.remove("hidden"); // Add a highlight class
        document.getElementById("unVote" + id).classList.add("hidden"); // Add a highlight class

        document.getElementById('pilihan' + id).checked = false;
    }

    //Menghitung
    function checkSelected() {
        var checkboxes = document.getElementsByName('category[]');
        var count = 0;

        console.log(count);
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked) {
                count++;
            }
        }

        var submitButton = document.getElementById('submitVote');

        if (count >= 9) {
            submitButton.disabled = false;
            document.getElementById("toastr").classList.add("hidden");
            document.getElementById("submitVote").classList.remove("hidden");
        } else {
            submitButton.disabled = true;
            document.getElementById("toastr").classList.remove("hidden");
            document.getElementById("submitVote").classList.add("hidden");
        }

        console.log(count);
    }

    function toast() {
        iziToast.warning({
            title: 'Error',
            message: 'Harus Pilih 9 Calon Formatur!',
            position: 'topCenter',
        });
    }

    document.querySelectorAll('button[data-bs-target="#modal-visi-misi"]').forEach(button => {
        button.addEventListener('click', function () {
            const id = this.getAttribute('data-id');
            const visi = this.getAttribute('data-visi');
            const misi = this.getAttribute('data-misi');

            document.querySelector('#visi').innerHTML = visi;
            document.querySelector('#misi').innerHTML = misi;
        });
    });
    
</script>
@endsection