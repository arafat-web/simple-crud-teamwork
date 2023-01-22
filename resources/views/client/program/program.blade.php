@extends('client.master')
@php
    $page = 'program';
@endphp
@section('title')
    Program
@endsection
@section('content')
    <main class="mt-3 p-2">
        <div class="container">
            <div class="page-title">
                <div style="font-weight: 500;" class="fs-3">Programs</div>
            </div>
            <nav class="mt-2 mb-4" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Programs</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-md-5">
                    <div class="add-dept mt-5">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body">
                                <div class="page-title fs-5 fw-bold mb-4">
                                    Add Programs
                                </div>
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3 px-2">
                                                <label for="pg_name" class="form-label">Name</label>
                                                <input class="form-control" placeholder="BSc" type="text" id="pg_name"
                                                       name="pg_name">
                                            </div>
                                            <div class="mb-3 px-2">
                                                <label for="pg_code" class="form-label">Code</label>
                                                <input class="form-control" placeholder="B-123" type="text" id="pg_code"
                                                       name="pg_code">
                                            </div>
                                            <div class="mb-3 px-2">
                                                <label for="pg_image" class="form-label">Image</label>
                                                <input class="form-control" type="file" id="pg_image" name="pg_image">
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
                                    All Programs
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
                                    <tr>
                                        <td>1</td>
                                        <td>BSc</td>
                                        <td>1220</td>
                                        <td>Image</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-warning">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-danger">
                                                <i class="bi bi-trash-fill"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>BSc</td>
                                        <td>1220</td>
                                        <td>Image</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-warning">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-danger">
                                                <i class="bi bi-trash-fill"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>BSc</td>
                                        <td>1220</td>
                                        <td>Image</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-warning">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-danger">
                                                <i class="bi bi-trash-fill"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>BSc</td>
                                        <td>1220</td>
                                        <td>Image</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-warning">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-danger">
                                                <i class="bi bi-trash-fill"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>BSc</td>
                                        <td>1220</td>
                                        <td>Image</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-warning">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-danger">
                                                <i class="bi bi-trash-fill"></i>
                                            </a>
                                        </td>
                                    </tr>
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
