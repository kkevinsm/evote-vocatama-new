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
<section class="section">
    <form action="{{ route('guest.pilih.hw') }}" method="POST">
        <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 my-3 {{ (Request::is('static-sign-up') ? 'w-100 shadow-none  navbar-transparent mt-4' : 'blur blur-rounded shadow py-2 start-0 end-0 mx4') }}">
            <div class="container-fluid {{ (Request::is('static-sign-up') ? 'container' : 'container-fluid') }}">
                <h1 class="navbar-brand font-weight-bolder ms-lg-0 ms-3 {{ (Request::is('static-sign-up') ? 'text-white' : '') }}">
                Pilih Calon Formatur HW SEPANJANG
                </h1>
                <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon mt-2">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav mx-auto"></ul>
                    
                    <div class="section-header" style="color:#262626">
                        <div class="col">
                            <div class="float-right flex justify-center align-center">
                                <button id="toastr" type="button" class="btn btn-success" onclick="toast()">Submit</button>
                                <button id="submitVote" type="submit" class="btn btn-success hidden" disabled>Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        @csrf
        <div class="row mt-8">
            @foreach($datas as $data)
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card z-index-2 max-height-600">
                    <div class="card-body p-3">
                        <!-- Foto -->
                        <div class="rounded rounded-xl py-2" style="background-image: url({{ asset('image/' . $data->image) }}); height: 450px; width: 250px; d-flex justify-content-center; width: 100%;"></div>

                        <!-- Information -->
                        <div class="row mt-2">
                            <h6 class="col-6 d-flex justify-content-start align-items-center">{{ $data->nama }}</h6>
                            <div class="col-6 d-flex justify-content-center align-items-center">
                                <input id="pilihan{{ $data->id }}" type="checkbox" class="hidden" name="category[]"
                                    value="{{ $data->id }}">
                                <button id="vote{{$data->id}}" type="button" class="btn btn-success"
                                    onclick="vote({{ $data->id }}); checkSelected();">Vote</button>
                                <button id="unVote{{$data->id}}" type="button" class="btn btn-danger hidden"
                                    onclick="unVote({{ $data->id }}); checkSelected();">Batalkan Vote</button>
                            </div>
                        </div>
                        

                        <div class="container border-radius-lg">
                            <div class="row">
                                <div class="col-6 py-3 ps-0">
                                    <h4 class="font-weight-bolder">Visi</h4>
                                </div>
                                <div class="col-6 py-3 ps-0">
                                    <h4 class="font-weight-bolder">Misi</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </form>
</section>
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