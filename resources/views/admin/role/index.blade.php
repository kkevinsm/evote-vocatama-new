@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Roles Vote</h5>
                        </div>
                        <div class="d-flex align-items-center">
                            <a href="#" class="btn btn-success btn-sm mb-0 me-2" type="button" data-bs-toggle="modal" data-bs-target="#add">
                                New
                            </a>
                            <input type="search" class="form-control form-control-sm" placeholder="Search ..." aria-label="Search">
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="width: 10%;">
                                        No
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="width: 40%;">
                                        Roles Description
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="width: 30%;">
                                        Max vote
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="width: 20%;">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($datas as $index => $data)
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">{{ $index+1 }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $data->name }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $data->max_vote }}</p>
                                    </td>
                                    <td class="text-center">
                                        <button href="#" class="btn btn-info btn-sm mx-3" data-bs-toggle="modal" data-bs-target="#edit">
                                            Edit
                                        </button>
                                        <button class="btn btn-danger btn-sm mx-3" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Role</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Description Role</label>
                  <input type="text" class="form-control" value="Hangker Sepanjang" id="description-role">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Max vote</label>
                    <input type="number" class="form-control" value="0" id="max-vote" min="0">
                 </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn bg-gradient-success">Add</button>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- Modal  -->

<!-- Modal Edit -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Role</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Description Role</label>
                        <input type="text" class="form-control" value="Hangker Sepanjang" id="description-role">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Max vote</label>
                        <input type="number" class="form-control" value="0" id="max-vote" min="0">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn bg-gradient-success">Edit</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal  -->

    
@endsection
