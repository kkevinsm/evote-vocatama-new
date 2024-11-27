@extends('layouts.dashboard')

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
        <div class="section-header" style="color:#262626">
            <h1  style="color:#262626">Pilih Calon Ketua Ortom HW</h1>
            <div class="col">
                <div class="float-right">
                    <button id="toastr" type="button" class="btn btn-success" onclick="toast()">Submit</button>
                    <button id="submitVote" type="submit" class="btn btn-success hidden" disabled>Submit</button>
                </div>
            </div>
        </div>

        @csrf
        <div class="row">
            @foreach($datas as $data)
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="gallery gallery-lg">
                            <div class="gallery-item" style="margin: 0px 0px 15px 0px" data-toggle="modal"
                                data-target="#foto{{ $data->id }}" data-image="{{ asset('image/' . $data->image) }}"
                                data-title="Image 1"></div>
                        </div>
                        <div>
                            <input id="pilihan{{ $data->id }}" type="checkbox" class="hidden" name="category[]"
                                value="{{ $data->id }}">
                            <button id="vote{{$data->id}}" type="button" class="btn btn-success"
                                onclick="vote({{ $data->id }}); checkSelected();">Vote</button>
                            <button id="unVote{{$data->id}}" type="button" class="btn btn-danger hidden"
                                onclick="unVote({{ $data->id }}); checkSelected();">Batalkan Vote</button>
                        </div>
                    </div>
                    <div class="card-body" style="padding-top: 0px;">
                        <div style="width:100%; text-align:center">
                            <button class="btn btn-primary" type="button" data-toggle="collapse"
                                data-target="#collapseExample1{{$data->id}}" aria-expanded="false"
                                aria-controls="collapseExample1{{$data->id}}">
                                VISI
                            </button>
                            <button class="btn btn-primary" type="button" data-toggle="collapse"
                                data-target="#collapseExample2{{$data->id}}" aria-expanded="false"
                                aria-controls="collapseExample2{{$data->id}}">
                                MISI
                            </button>
                        </div>
                        <div class="collapse" id="collapseExample1{{$data->id}}"
                            style="width:100%; border-bottom: 1px solid #c5c5c5; padding:5px; text-align: justify;">
                            {{ $data->visi }}
                        </div>
                        <div class="collapse" id="collapseExample2{{$data->id}}" style="width:100%; padding:5px;">
                            {{ $data->misi }}
                        </div>
                    </div>
                </div>
            </div>
            {{-- Modal Foto --}}
            <div class="modal fade" id="foto{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Foto Calon Formatur</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img class="gallery-item" src="{{ asset('image/' . $data->image) }}"
                                style="max-width: 350px; max-height:350px;">
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Modal Foto --}}
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
        var count = 0;

        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked) {
                count++;
            }
        }

        var submitButton = document.getElementById('submitVote');

        if (count === 1) {
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
            message: 'Pilih 1 Calon Ketua HW!',
            position: 'topCenter',
        });
    }
</script>
@endsection