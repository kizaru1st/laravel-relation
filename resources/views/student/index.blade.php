@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                @if (session('messages'))
                    <h4 class="alert alert-success">{{ session('messages') }}</h4>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4>Student List
                            <a href="{{ route('students.create') }}" class="btn btn-primary float-end">Add Student</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Fullname</th>
                                    <th>Email</th>
                                    <th>Add/Edit Student</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                    <tr>
                                        <td>{{ $student->id }}</td>
                                        <td>{{ $student->fullname }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td>
                                            <a href='/students/{{ $student->id }}/details' class="btn btn-info btn-sm">
                                                Add/Edit Details
                                            </a>
                                        </td>   
                                        <td>
                                            <a href='/students/{{ $student->id }}/edit'
                                                class="btn btn-info btn-sm">Edit</a>
                                            <form action="students/{{ $student->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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
@endsection
