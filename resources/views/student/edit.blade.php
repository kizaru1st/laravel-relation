@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Student ~ {{ $student->fullname }}
                            <a href="{{ route('students.index') }}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action='/students/{{ $student->id }}' method="POST">
                            @csrf
                            @method('PUT')
                            <h4>Students</h4>
                            <div class="mb-3">
                                <label for="">Full Name</label>
                                <input value="{{ $student->fullname }}" type="text" name="fullname" class="form-control"
                                    placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input value="{{ $student->email }}" type="text" name="email" class="form-control"
                                    placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="">Phone</label>
                                <input value="{{ $student->phone }}" type="text" name="phone" class="form-control"
                                    placeholder="">
                            </div>

                            <h4>Student Detail</h4>
                            <div class="mb-3">
                                <label for="">Alternative Phone</label>
                                <input value="{{ $student->studentDetail->alter_phone }}" type="text" name="alter_phone"
                                    class="form-control" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="">Course</label>
                                <input value="{{ $student->studentDetail->course }}" type="text" name="course"
                                    class="form-control" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="">Roll No</label>
                                <input value="{{ $student->studentDetail->roll_no }}" type="text" name="roll_no"
                                    class="form-control" placeholder="">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
