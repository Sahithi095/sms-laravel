@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-body">

        <div class="d-flex justify-content-between mb-3">
            <h4>Student List</h4>
            <a href="{{ route('admin.students.create') }}" class="btn btn-primary">
                + Add Student
            </a>
        </div>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Course</th>
                    <th style="width:200px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->course }}</td>
                        <td>
                            <a href="{{ route('admin.students.edit', $student->id) }}"
                               class="btn btn-sm btn-warning">
                                Edit
                            </a>

                            <form action="{{ route('admin.students.destroy', $student->id) }}"
                                  method="POST"
                                  class="d-inline"
                                  onsubmit="return confirm('Are you sure you want to delete this student?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No students found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</div>
@endsection
