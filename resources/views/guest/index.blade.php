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
            <nav aria-label="breadcrumb" class="w-100 d-flex justify-content-center justify-content-lg-start">
                <h6 class="font-weight-bolder mb-0 text-capitalize text-center">Hi, {{ Auth::user()->name }}</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 d-flex justify-content-center justify-content-lg-end" id="navbar"> 
                <ul class="navbar-nav justify-content-center justify-content-lg-end">
                    <li class="nav-item d-flex align-items-center">
                        <a href="{{ url('/logout') }}" 
                        class="nav-link text-body font-weight-bold text-center"
                        style="white-space: nowrap; padding: 0 10px;">
                            <i class="fa fa-user me-2"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>    
    <!-- End Navbar -->

    @foreach($roles as $index => $role)
    <div id="form-role{{ $role->id }}" class="min-vh-85" style="display: {{ $index == 0 ? 'block' : 'none' }};">
        <form action="/guest/store" method="POST">
        @csrf
        <input type="hidden" id="selectedValues{{ $role->id }}" name="selectedValues[{{ $role->id }}]" >

            <div class="container-fluid pt-3">
                <div class="card card-body blur shadow-blur">
                    <div class="row gx-4 align-items-center text-center text-md-start">
                        <!-- Foto -->
                        <div class="col-12 col-md-auto">
                            <div class="avatar avatar-xl mx-auto mx-md-0 position-relative">
                                <!-- <img src="{{ asset('assets/img/bruce-mars.jpg') }}" alt="CRUD" class="w-100 border-radius-lg shadow-sm"> -->
                                <img src="{{ asset('image/' . $data->photo) }}" alt="..." class="bg-white h-100 w-100 border-radius-lg shadow-sm p-2">
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
                            @if($loop->last)
                                <button id="submitVote{{ $role->id }}" type="submit" class="btn bg-gradient-info font-weight-bold hidden" style="margin-bottom: -1px" disabled>
                                    Submit
                                </button>
                                <button id="toastr{{ $role->id }}" onclick="toast({{ $role->id }}, '{{ $role->name }}', {{ $role->max_vote }})" type="button" class="btn bg-gradient-info font-weight-bold" style="margin-bottom: -1px">
                                    Submit
                                </button>
                            @else
                                <button id="next{{ $role->id }}" type="button" onclick="goToNextRole({{ $role->id }}, {{ $loop->iteration }})" class="btn bg-gradient-info font-weight-bold hidden" style="margin-bottom: -1px" disabled>
                                    Next
                                </button>
                                <button id="toastr{{ $role->id }}" onclick="toast({{ $role->id }}, '{{ $role->name }}', {{ $role->max_vote }})" type="button" class="btn bg-gradient-info font-weight-bold" style="margin-bottom: -1px">
                                    Next
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- Instruction Text -->
                <div class="text-start mt-3 mx-4">
                    <p class="text-muted font-weight-bold">
                        Pilih maksimal {{ $role->max_vote }} kandidat
                    </p>
                </div>
            </div>
            
            <div class="container-fluid">
                <div class="row">
                    @foreach($groupedDatas[$role['name']] as $data)
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                        <div class="card z-index-2 max-height-600">
                            <div class="card-body p-4">
                                <div class="border-radius-lg py-2 shadow-sm justify-content-center" 
                                    style="background-image: url({{ asset('image/' . $data->image) }});
                                            height: 300px; background-size: cover; width: 100%;"
                                            class="mx-auto d-block">
                                </div>
            
                                <div class="row mt-2">
                                    <h6 class="col-12 text-center">{{ $data->name }}</h6>
                                </div>
            
                                <div class="row">
                                    <div class="d-flex flex-column align-items-center mt-3">
                                        <div class="d-flex gap-2">
                                           <!-- Checkbox for selection -->
                                            <input id="pilihan{{ $role->id }}{{ $data->id }}" type="checkbox" class="hidden" name="category[{{ $role->id }}][]" value="{{ $data->id }}">
                                            <button id="vote{{ $role->id }}{{ $data->id }}" type="button" class="btn bg-gradient-success" onclick="vote({{ $role->id }}, '{{ $role->name }}', {{ $role->max_vote }}, {{ $data->id }});">Vote</button>
                                            <button id="unVote{{ $role->id }}{{ $data->id }}" type="button" class="btn bg-gradient-danger hidden" onclick="unVote({{ $role->id }}, '{{ $role->name }}', {{ $role->max_vote }}, {{ $data->id }});">Unvote</button>
                                            <button id="visiMisi{{ $data->id }}" type="button" class="btn bg-gradient-dark" data-bs-toggle="modal" data-bs-target="#modal-visi-misi" data-id="{{ $data->id }}" data-visi="{{ $data->visi }}" data-misi="{{ $data->misi }}">Visi & Misi</button>
                                        </div>
                                    </div>
                                </div>                    
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </form>
    </div>
    @endforeach

{{-- Modal Visi Misi --}}
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
function vote(roleId, roleName, roleMaxVote, id) {
    document.getElementById("vote" + roleId + id).classList.add("hidden"); // Add a highlight class
    document.getElementById("unVote" + roleId + id).classList.remove("hidden"); // Add a highlight class
    document.getElementById('pilihan' + roleId + id).checked = true;
    checkSelected(roleId, roleName, roleMaxVote); // Update count when vote is added
}

function unVote(roleId, roleName, roleMaxVote, id) {
    document.getElementById("vote" + roleId + id).classList.remove("hidden"); // Add a highlight class
    document.getElementById("unVote" + roleId + id).classList.add("hidden"); // Add a highlight class
    document.getElementById('pilihan' + roleId + id).checked = false;
    checkSelected(roleId, roleName, roleMaxVote); // Update count when vote is removed
}

var selectedValues = []; // Global array to hold selected values

// Menghitung jumlah pilihan per role dan memperbarui tombol Submit
function checkSelected(roleId, roleName, roleMaxVote) {
    var checkboxes = document.getElementsByName('category[' + roleId + '][]');
    var count = 0;

    // Menghitung jumlah checkbox yang dicentang
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].checked) {
            count++;
            var value = parseInt(checkboxes[i].value); // Convert to integer
            if (!selectedValues.includes(value)) {
                selectedValues.push(value); // Add to selectedValues if not already present
            }
        } else {
            // If unchecked, remove the value from selectedValues
            var uncheckedValue = parseInt(checkboxes[i].value);
            var index = selectedValues.indexOf(uncheckedValue);
            if (index > -1) {
                selectedValues.splice(index, 1); // Remove the value from the array
            }
        }
    }

    // Update tombol submit dan toastr
    var submitButton = document.getElementById('submitVote' + roleId); // Tombol Submit
    var toastrButton = document.getElementById('toastr' + roleId);    // Tombol Toastr
    var nextButton = document.getElementById('next' + roleId);        // Tombol Next (bukan peran terakhir)

    // Periksa apakah jumlah pilihan sesuai dengan roleMaxVote
    if (count == roleMaxVote) {
        if (submitButton) {
            submitButton.disabled = false; // Aktifkan tombol Submit
            submitButton.classList.remove("hidden"); // Tampilkan tombol Submit
        }
        if (nextButton) {
            nextButton.disabled = false; // Aktifkan tombol Next
            nextButton.classList.remove("hidden"); // Tampilkan tombol Next
        }
        toastrButton.classList.add("hidden"); // Sembunyikan tombol Toastr
    } else {
        if (submitButton) {
            submitButton.disabled = true; // Nonaktifkan tombol Submit
            submitButton.classList.add("hidden"); // Sembunyikan tombol Submit
        }
        if (nextButton) {
            nextButton.disabled = true; // Nonaktifkan tombol Next
            nextButton.classList.add("hidden"); // Sembunyikan tombol Next
        }
        toastrButton.classList.remove("hidden"); // Tampilkan tombol Toastr
    }

    console.log("Selected count for role " + roleId + ": " + count);
    console.log("Selected Values: ", selectedValues);
    updateSelectedCheckboxes(roleId, selectedValues);
}

// Update nilai hidden input
function updateSelectedCheckboxes(roleId, selectedValues) {
    var hiddenInput = document.getElementById('selectedValues' + roleId);
    if (hiddenInput) {
        hiddenInput.value = JSON.stringify(selectedValues); // Simpan nilai sebagai JSON
    }
}

function toast(roleId, roleName, roleMaxVote) {
    console.log('roleName', roleName)
    iziToast.warning({
        title: 'Error',
        message: 'Harus Pilih ' + roleMaxVote + ' Calon Formatur ' + roleName + '!',
        position: 'topCenter',
    });
}

// Modal visi misi
document.querySelectorAll('button[data-bs-target="#modal-visi-misi"]').forEach(button => {
    button.addEventListener('click', function () {
        const id = this.getAttribute('data-id');
        const visi = this.getAttribute('data-visi');
        const misi = this.getAttribute('data-misi');

        document.querySelector('#visi').innerHTML = visi;
        document.querySelector('#misi').innerHTML = misi;
    });
});

function goToNextRole(currentRoleId, currentIndex) {
    // Hide the current role's container
    var currentRoleContainer = document.getElementById('form-role' + currentRoleId);
    if (currentRoleContainer) {
        currentRoleContainer.style.display = 'none';
    }

    // Show the next role's container
    var nextRoleIndex = currentIndex;
    var nextRoleContainer = document.getElementById('form-role' + (currentRoleId + 1)); // Adjust accordingly if role IDs are not sequential
    if (nextRoleContainer) {
        nextRoleContainer.style.display = 'block'; // Make next role visible
    }
}

</script>
@endsection