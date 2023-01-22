@extends('client.master')
@section('title')
   Edit Department
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
                    <li class="breadcrumb-item active" aria-current="page">Edit Departments</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-md-5">
                    <div class="add-dept mt-5">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body">
                                <div class="page-title fs-5 fw-bold mb-4">
                                    Edit Department
                                </div>
                                <form action="" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="mb-3 px-2">
                                                <label for="cat_name" class="form-label">Name</label>
                                                <input type="hidden" name="id" value="{{$department->id}}">
                                                <input class="form-control" placeholder="CSE" type="text" id="dpt_name" value="{{$department->dpt_name}}" name="dpt_name">
                                            </div>
                                            <div class="mb-3 px-2">
                                                <label for="cat_code" class="form-label">Code</label>
                                                <input class="form-control" placeholder="1220" type="text" id="dpt_code" value="{{$department->dpt_code}}" name="dpt_code">
                                            </div>
                                            <div class="mb-3 px-2">
                                                <label for="cat_image" class="form-label">Image</label>
                                                <input class="form-control" type="file" id="cat_image" name="dpt_image">
                                            </div>
                                            <div class="mb-3 px-2">
                                                <label for="cat_image" class="form-label">Existing Image</label>
                                                <img src="{{asset($department->dpt_image)}}" class="form-control" alt="" width="120px">
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
                                    @foreach($departments as $department)
                                        <tr>
                                            <td>1</td>
                                            <td>{{$department->dpt_name}}</td>
                                            <td>{{$department->dpt_code}}</td>
                                            <td><img src="{{asset($department->dpt_image)}}" class="img-fluid" width="120px"></td>
                                            <td>
                                                <a href="{{route('edit.department',[$department->id])}}" class="btn btn-sm btn-warning">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                                <a href="#" class="btn btn-sm btn-danger">
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
@endsection
