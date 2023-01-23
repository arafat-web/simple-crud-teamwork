@extends('client.master')
@php
    $page = 'department';
@endphp
@section('title')
    Department
@endsection
@section('content')
    <main class="mt-3 p-2">
        <div class="container">
            <div class="page-title">
                <div style="font-weight: 500;" class="fs-3">Departments</div>
            </div>
            <nav class="mt-2 mb-4" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Departments</li>
                </ol>
            </nav>
            @if(Session::has('success'))
                <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('success') }}</p>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger mt-3 mb-3">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <div class="col-md-5">
                    <div class="add-dept mt-5">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body">
                                <div class="page-title fs-5 fw-bold mb-4">
                                    Add Department
                                </div>

                                <form action="{{route('add.department')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3 px-2">
                                                <label for="cat_name" class="form-label">Name</label>
                                                <input class="form-control" placeholder="CSE" type="text" id="dpt_name" name="dpt_name">
                                            </div>
                                            <div class="mb-3 px-2">
                                                <label for="cat_code" class="form-label">Code</label>
                                                <input class="form-control" placeholder="1220" type="text" id="dpt_code" name="dpt_code">
                                            </div>
                                            <div class="mb-3 px-2">
                                                <label for="cat_image" class="form-label">Image</label>
                                                <input class="form-control" type="file" id="cat_image" name="dpt_image">
                                            </div>

                                            <div class="col-12 mt-md-4">
                                                <div class="mb-3 px-2">
                                                    <button type="submit" class="btn btn-success"> Submit </button>
                                                    <button type="reset" class="btn btn-warning"> Reset </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="all-student mt-5">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body">
                                <div class="page-title fs-5 fw-bold mb-4">
                                    All Departments
                                </div>
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Code</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $i=1 @endphp
                                    @foreach($departments as $department)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$department->dpt_name}}</td>
                                        <td>{{$department->dpt_code}}</td>
                                        <td><img src="{{asset($department->dpt_image)}}" width="80px" height="60px"></td>
                                        <td>
                                            <a href="{{route('edit.department',[$department->id])}}" class="btn btn-sm btn-warning">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <a href="{{route('delete.department',[$department->id])}}" class="btn btn-sm btn-danger">
                                                <i class="bi bi-trash-fill"></i>
                                            </a>
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
    </main>

    <script>
        $(document).ready(function () {
            $('#datatable').DataTable();
        });
    </script>
@endsection
