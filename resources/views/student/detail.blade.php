@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add/Edit Student Details
                            <a href="{{ route('students.index') }}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action='/students/{{ $student->id }}/updateDetails' method="POST">
                            @csrf
                            @method('PUT')
                            <h4>Student Detail</h4>
                            <div class="mb-3">
                                <label for="">Alternative Phone</label>
                                <input value="{{ $student->alter_phone ?? ""}}" type="text" name="alter_phone"
                                    class="form-control" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="">Course</label>
                                <input value="{{ $student->course ?? "" }}" type="text" name="course"
                                    class="form-control" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="">Roll No</label>
                                <input value="{{ $student->roll_no ?? "" }}" type="text" name="roll_no"
                                    class="form-control" placeholder="">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
