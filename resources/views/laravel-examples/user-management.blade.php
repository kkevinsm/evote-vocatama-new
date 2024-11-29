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
                            <a href="#" class="btn btn-success btn-sm mb-0" type="button">
                                Import
                            </a>
                            <a href="#" class="btn bg-gradient-primary btn-sm mb-0" type="button">
                                +&nbsp; Add
                            </a>
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
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">1</p>
                                    </td>
                                    <td>
                                        <div>
                                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Admin</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Admin</p>
                                    </td>
                                    <td class="text-center">
                                        <!-- Button Detail -->
                                        <a href="#" class="btn btn-info btn-sm mx-3" data-bs-toggle="tooltip" data-bs-original-title="Detail user">
                                            Detail
                                        </a>
                                        <!-- Button Delete -->
                                        <button class="btn btn-danger btn-sm mx-3" data-bs-toggle="tooltip" data-bs-original-title="Delete user">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">2</p>
                                    </td>
                                    <td>
                                        <div>
                                            <img src="/assets/img/team-1.jpg" class="avatar avatar-sm me-3">
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Creator</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Creator</p>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-info btn-sm mx-3" data-bs-toggle="tooltip" data-bs-original-title="Detail user">
                                            Detail
                                        </a>
                                        <button class="btn btn-danger btn-sm mx-3" data-bs-toggle="tooltip" data-bs-original-title="Delete user">
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

@endsection
