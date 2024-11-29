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
                <a href="{{ route('voters.import') }}" class="btn btn-sm btn-success">Import</a>
                <a href="{{ route('voters.export') }}" class="btn btn-sm btn-warning">Export</a>
                <a href="{{ route('voters.create') }}" class="btn btn-sm btn-primary">Add</a>
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
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($voters as $index => $pemilihs)
                    <tr>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $index + 1 }}</span>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="{{ $pemilihs->image }}" class="avatar avatar-sm me-3" alt="{{ $pemilihs->name }}">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $pemilihs->name }}</h6>
                            <p class="text-xs text-secondary mb-0">{{ $pemilihs->email }}</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $pemilihs->Username }}</p>
                        <p class="text-xs text-secondary mb-0">{{ $pemilihs->department }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $pemilihs->password }}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm {{ $pemilihs->status == 'Online' ? 'bg-gradient-success' : 'bg-gradient-secondary' }}">{{ $pemilihs->status }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
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
  
@endsection
