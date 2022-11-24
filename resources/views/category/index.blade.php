@extends('layouts.app')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4>Category Details
                            <a href="{{ route('category.create') }}" class="btn btn-primary float-end">Add Category</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <a href="" class="btn-sm btn btn-success float-start">Edit</a>
                                        <form action="">
                                            <button class="ms-1 btn-sm btn btn-danger" type="submit">Delete</button>
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
