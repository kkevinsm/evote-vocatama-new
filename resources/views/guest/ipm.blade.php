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
<div>
        <div class="container-fluid">
            <div class="card card-body blur shadow-blur">
                <div class="row gx-4">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            <img src="{{ asset('assets/img/bruce-mars.jpg') }}" alt="CRUD" class="w-100 border-radius-lg shadow-sm">
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <p class="mb-0 font-weight-bold text-sm">
                                PILIH CALON FORMATUR
                            </p>
                            <h5 class="mb-1">
                                CRUD ROLES (EX: IKATAN PELAJAR MUHAMMADIYAH)
                            </h5>
                        </div>
                    </div>
                    <!-- Submit Button Section in the Same Row -->
                    <div class="col-auto my-auto d-flex justify-content-end align-items-center">
                        <form action="/submit-path" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary">Submit</button>
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

        @foreach($datas as $data)
        <!-- Card 1 -->
        <div class="col-lg-3 mx-4 col-md-6 col-sm-6 col-12">
            <div class="card z-index-2 max-height-600">
                <div class="card-body p-3">
                    <!-- Foto -->
                    <div class="rounded rounded-xl py-2" style="background-image: url({{ asset('image/' . $data->image) }}); height: 450px; background-size: cover; width: 100%;"></div>

                    <!-- Information -->
                    <div class="row mt-2">
                        <h6 class="col-12 text-center">{{ $data->nama }}</h6>
                    </div>

                    <!-- Vote & Visi Misi Buttons -->
                    <div class="d-flex flex-column align-items-center mt-3">
                        <div class="d-flex justify-content-center mb-2 w-100">
                            <input id="pilihan{{ $data->id }}" type="checkbox" class="hidden" name="category[]"
                                value="{{ $data->id }}">
                        </div>
                        <div class="d-flex justify-content-center mb-2 w-100">
                            <button id="vote{{$data->id}}" type="button" class="btn btn-success"
                                onclick="vote({{ $data->id }}); checkSelected();">Vote</button>
                        </div>
                        <div class="d-flex justify-content-center mb-2 w-100">
                            <button id="unVote{{$data->id}}" type="button" class="btn btn-danger hidden"
                                onclick="unVote({{ $data->id }}); checkSelected();">Batalkan Vote</button>
                        </div>
                        <!-- Visi & Misi Button -->
                        <div class="d-flex justify-content-center mt-3 w-100">
                            <button id="visiMisi{{$data->id}}" type="button" class="btn btn-dark"
                                onclick="showVisiMisi({{ $data->id }});">Visi & Misi</button>
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
        var count = 9;

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
</script>
@endsection