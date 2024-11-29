@extends('layouts.user_type.auth')

@section('content')
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
              <h6>Voters Data</h6>
              <div>
                <a href="{{ route('voters.import') }}" class="btn btn-sm btn-primary">Import</a>
                <a href="{{ route('voters.export') }}" class="btn btn-sm btn-success">Export</a>
                <button href="#" id="modal-add" class="btn btn-sm btn-info" data-toggle="modal" data-target="#add">Add</button>
              </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Username</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Password</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($datas as $index => $data)
                    <tr>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $index + 1 }}</span>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $data->name }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $data->username }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $data->password }}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        @if($data->status == 1)
                        <span class="badge badge-sm bg-gradient-success">Active</span>
                        @else
                        <span class="badge badge-sm bg-gradient-secondary">Non-active</span>
                        @endif
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  
    <!-- Modal Tambah -->
    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Voter</h5>
            </div>
            <form action="{{ route('voters.create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input name="name" type="text" class="form-control" id="name" placeholder="Name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Role" class="col-sm-3 col-form-label">Role</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="role">
                                    <option value="Cabang Sepanjang">Cabang Sepanjang</option>
                                    <option value="SMA Muhammadiyah 1 Taman">SMA Muhammadiyah 1 Taman</option>
                                    <option value="Vocatama">Vocatama</option>
                                    <option value="SMP Muhammadiyah 2 Taman">SMP Muhammadiyah 2 Taman</option>
                                    <option value="Mts Muhammadiyah 1 Taman">Mts Muhammadiyah 1 Taman</option>
                                </select>
                                <!-- <input name="asal" type="text" class="form-control" id="nama" placeholder="Nama" required> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="close-modal" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- Modal  -->

    <script>
        document.getElementById("modal-add").addEventListener("click", function () {
            const modal = document.getElementById("add");
            modal.style.display = "contents";
        });

        document.getElementById("close-modal").addEventListener("click", function () {
            const modal = document.getElementById("add");
            modal.style.display = "none";
        });
    </script>
@endsection
