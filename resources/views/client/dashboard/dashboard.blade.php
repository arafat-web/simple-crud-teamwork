@extends('client.master')
@section('title')
    Dashboard
@endsection
@section('content')
    <main class="mt-3 p-2">
        <div class="container">
            <div class="page-title">
                <div style="font-weight: 500;" class="fs-3">Dashboard</div>
            </div>
            <nav class="mt-2 mb-4" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>

            <div class="dashboard">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card px-4 border-0 shadow-sm">
                            <div class="card-body">
                                <div class="fs-5 text-end">
                                    100
                                </div>
                                <div style="margin-top: -10px;" class="fs-3 text-start text-info">
                                    <i class="bi bi-people-fill"></i>
                                </div>
                                <div style="margin-top: -40px;" class="fs-5 pt-4 text-end">
                                    Students
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card px-4 border-0 shadow-sm">
                            <div class="card-body">
                                <div class="fs-5 text-end">
                                    100
                                </div>
                                <div style="margin-top: -10px;" class="fs-3 text-start text-warning">
                                    <i class="bi bi-intersect"></i>
                                </div>
                                <div style="margin-top: -40px;" class="fs-5 pt-4 text-end">
                                    Departments
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card px-4 border-0 shadow-sm">
                            <div class="card-body">
                                <div class="fs-5 text-end">
                                    100
                                </div>
                                <div style="margin-top: -10px;" class="fs-3 text-start text-danger">
                                    <i class="bi bi-journal-text"></i>
                                </div>
                                <div style="margin-top: -40px;" class="fs-5 pt-4 text-end">
                                    Programs
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="latest-added mt-5">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="page-title fs-5 fw-bold mb-4">
                            Latest Added
                        </div>
                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Department</th>
                                <th>Program</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>201901002</td>
                                <td>Arafat</td>
                                <td>CSE</td>
                                <td>BSc</td>
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
                                <td>201901002</td>
                                <td>Arafat</td>
                                <td>CSE</td>
                                <td>BSc</td>
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
                                <td>201901002</td>
                                <td>Arafat</td>
                                <td>CSE</td>
                                <td>BSc</td>
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
                                <td>201901002</td>
                                <td>Arafat</td>
                                <td>CSE</td>
                                <td>BSc</td>
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
                                <td>201901002</td>
                                <td>Arafat</td>
                                <td>CSE</td>
                                <td>BSc</td>
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
    </main>
@endsection
