@extends('layouts.user_type.auth')

@section('content')
<div>
  <div class="row">
      <div class="col-12">
          <div class="card mb-4 mx-4">
              <div class="card-header pb-0">
                  <div class="d-flex flex-row justify-content-between">
                      <div>
                          <h5 class="mb-0">Voters Data</h5>
                      </div>
                      <div>
                          <button type="button" class="btn btn-sm bg-gradient-info" data-bs-toggle="modal" data-bs-target="#import">Import</button>
                          <a href="{{ route('voters.export') }}" class="btn btn-sm bg-gradient-danger">Export</a>
                          <button type="button" class="btn btn-sm bg-gradient-success" data-bs-toggle="modal" data-bs-target="#add">Add</button>
                      </div>
                  </div>
              </div>
              <div class="card-body px-0 pt-0 pb-2">
                  <div class="table-responsive p-0">
                      <table class="table align-items-center mb-0">
                          <thead>
                              <tr>
                                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Instansi</th>
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
                                              <h6 class="mb-0 text-sm">
                                                  {{ \Illuminate\Support\Str::limit($data->name, 20, '...') }}
                                              </h6>
                                          </div>
                                      </div>
                                  </td>
                                  <td>
                                      <p class="text-xs font-weight-bold mb-0">{{ $data->instansi }}</p>
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

<!-- Modal Add -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Add New Voter</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('voters.create') }}" method="POST">
                @csrf
            <div class="modal-body">
                
                    <div class="form-group">
                        <label for="name" class="col-form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="instansi" class="col-form-label">Instansi:</label>
                        <input type="text" class="form-control" id="instansi" name="instansi" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn bg-gradient-primary">Save</button>
            </div>
        </form>

        </div>
    </div>
</div>

<!-- Modal Import -->
<div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="importModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="importModalLabel">Import Voters</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('voters.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="file" class="col-form-label">Upload File:</label>
                        <input type="file" class="form-control" id="file" name="file" accept=".csv, .xlsx" required>
                        <small class="text-muted">Supported formats: CSV, XLSX</small>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn bg-gradient-primary">Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
