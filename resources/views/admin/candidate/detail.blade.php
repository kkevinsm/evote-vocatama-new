@extends('layouts.user_type.auth')

@section('content')

<div class="card mb-4">
    <div class="card-header">
        <h5>Edit candidates Details</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('candidate.update', $candidate->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-4">
                    <h6>Current Photo:</h6>
                    <img src="{{ asset('image/' . $candidate->image) }}" alt="candidates Photo" class="img-fluid rounded mb-3">
                    <div class="form-group">
                        <label for="photo">Change Photo:</label>
                        <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
                        <small class="text-muted">Accepted formats: JPG, PNG (Max size: 2MB)</small>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $candidate->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="visi">Visi:</label>
                        <textarea class="form-control" id="visi" name="visi" rows="3" required>{{ $candidate->visi }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="misi">Misi:</label>
                        <textarea class="form-control" id="misi" name="misi" rows="3" required>{{ $candidate->misi }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="role">Role:</label>
                        <select class="form-control" id="role" name="role" required>
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}" {{ $candidate->role_id == $role->id ? 'selected' : '' }}>
                                    {{ $role->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn bg-gradient-primary">Save Changes</button>
                <a href="{{ route('candidate.index') }}" class="btn bg-gradient-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>

@endsection
