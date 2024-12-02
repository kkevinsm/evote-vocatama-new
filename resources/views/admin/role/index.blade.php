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
                            <a href="#" class="btn bg-gradient-success btn-sm mb-0 me-2" type="button" data-bs-toggle="modal" data-bs-target="#add">
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
                                    <p class="text-xs font-weight-bold mb-0">{{ $index + 1 }}</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{ $data->name }}</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{ $data->max_vote }}</p>
                                </td>
                                <td class="text-center gap-2">
                                    <button class="btn bg-gradient-info btn-sm mx-3" data-bs-toggle="modal" data-bs-target="#edit" data-id="{{ $data->id }}" data-name="{{ $data->name }}" data-max-vote="{{ $data->max_vote }}">
                                        Edit
                                    </button>
                                    <form action="{{ route('role.destroy', $data->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Are you sure you want to delete this candidate?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn bg-gradient-danger btn-sm mx-3" data-bs-toggle="tooltip" data-bs-original-title="Delete Candidate">
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
            <form action="{{ route('role.store') }}" method="POST">
            @csrf
                <input type="hidden" name="id" id="edit-id">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Description Role</label>
                        <input type="text" class="form-control" id="description-role" name="name" placeholder="Input role name...">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Max vote</label>
                        <input type="number" class="form-control"  id="max-vote" min="0" name="max_vote">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn bg-gradient-success">Add</button>
                </div>
            </form>
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
            
            <form action="{{ route('role.update') }}" method="POST" id="edit-form">
                @csrf
                @method('PUT')
                <input type="hidden" class="form-control" id="id" name="id">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="description-role" class="col-form-label">Description Role</label>
                        <input type="text" class="form-control" id="description-role" name="name" placeholder="Input role name...">
                    </div>
                    <div class="form-group">
                        <label for="max-vote" class="col-form-label">Max vote</label>
                        <input type="number" class="form-control" id="max-vote" name="max_vote" min="0" placeholder="Input max vote...">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn bg-gradient-success">Save changes</button>
                </div>
            </form>            
        </div>
    </div>
</div>

<!-- Modal  -->

<script>
    // Saat tombol edit diklik
    document.querySelectorAll('button[data-bs-target="#edit"]').forEach(button => {
    button.addEventListener('click', function () {
        const id = this.getAttribute('data-id');
        const name = this.getAttribute('data-name');
        const maxVote = this.getAttribute('data-max-vote');

        // Isi nilai input di modal edit
        document.querySelector('#edit #id').value = id;
        document.querySelector('#edit #description-role').value = name;
        document.querySelector('#edit #max-vote').value = maxVote;
    });
});
</script>
@endsection
