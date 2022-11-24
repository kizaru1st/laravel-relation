@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Student
                            <a href="{{ route('students.index') }}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('students.store') }}" method="POST">
                            @csrf
                            <h4>Students</h4>
                            <div class="mb-3">
                                <label for="">Full Name</label>
                                <input type="text" name="fullname" class="form-control" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="">Phone</label>
                                <input type="text" name="phone" class="form-control" placeholder="">
                            </div>
                            {{-- <h4>Student Detail</h4>
                            <div class="mb-3">
                                <label for="">Alternative Phone</label>
                                <input type="text" name="alter_phone" class="form-control" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="">Address</label>
                                <input type="text" name="address" class="form-control" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="">Course</label>
                                <input type="text" name="course" class="form-control" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="">Roll No</label>
                                <input type="text" name="roll_no" class="form-control" placeholder="">
                            </div> --}}
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
