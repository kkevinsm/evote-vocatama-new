@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Candidates Data</h5>
                        </div>
                        <div>
                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#import">Import</button>
                            <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#add">Add</button>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="width: 5%;">
                                        No
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2" style="width: 5%;">
                                        Photo
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="width: 30%;">
                                        Name
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="width: 30%;">
                                        Role
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="width: 20%;">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($datas as $index => $candidate)
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">{{ $index+1 }}</p>
                                    </td>
                                    <td>
                                        <div>
                                            <img src="{{ asset('image/' . $candidate->image) }}" class="avatar avatar-sm me-3">
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $candidate->name }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $candidate->role }}</p>
                                    </td>
                                    <td class="text-center">
                                        <!-- Button Detail -->
                                        <a href="{{ route('candidate.detail', $candidate->id) }}" class="btn btn-info btn-sm mx-3" data-bs-toggle="tooltip" data-bs-original-title="Detail Candidate">
                                            Detail
                                        </a>
                                        <!-- Button Delete -->
                                        <form action="{{ route('candidate.destroy', $candidate->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Are you sure you want to delete this candidate?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm mx-3" data-bs-toggle="tooltip" data-bs-original-title="Delete Candidate">
                                                Delete
                                            </button>
                                        </form>
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
                <h5 class="modal-title" id="addModalLabel">Add New Candidate</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('candidate.create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name" class="col-form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="visi" class="col-form-label">Visi:</label>
                        <textarea class="form-control" id="visi" name="visi" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="misi" class="col-form-label">Misi:</label>
                        <textarea class="form-control" id="misi" name="misi" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="photo" class="col-form-label">Photo:</label>
                        <input type="file" class="form-control" id="photo" name="photo" accept="image/*" required>
                        <small class="text-muted">Accepted formats: JPG, PNG (Max size: 2MB)</small>
                    </div>
                    <div class="form-group">
                        <label for="role" class="col-form-label">Role:</label>
                        <select class="form-control" id="role" name="role" required>
                            @foreach ($roles as $role)
                                <option value="{{ $role->name }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
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
        <div class="modal-body">
          <form action="{{ route('voters.import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="file" class="col-form-label">Upload File:</label>
              <input type="file" class="form-control" id="file" name="file" accept=".csv, .xlsx" required>
              <small class="text-muted">Supported formats: CSV, XLSX</small>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn bg-gradient-primary">Upload</button>
        </div>
      </div>
    </div>
  </div>  

@endsection
