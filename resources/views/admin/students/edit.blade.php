@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="mb-3">Edit Student</h4>

        <form method="POST" action="{{ route('admin.students.update', $student->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text"
                       name="name"
                       value="{{ old('name', $student->name) }}"
                       class="form-control @error('name') is-invalid @enderror">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text"
                       name="email"
                       value="{{ old('email', $student->email) }}"
                       class="form-control @error('email') is-invalid @enderror">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Course</label>
                <input type="text"
                       name="course"
                       value="{{ old('course', $student->course) }}"
                       class="form-control @error('course') is-invalid @enderror">
                @error('course')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('admin.students.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</div>
@endsection
