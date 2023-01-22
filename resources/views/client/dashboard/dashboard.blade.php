@extends('client.master')
@php
    $page = 'dashboard';
@endphp
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
                                    {{$total_st}}
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
                                    {{$total_dpt}}
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
                                    {{$total_pg}}
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
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Department</th>
                                <th>Program</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                @foreach($students as $st)
                                    <td>{{$st->st_id}}</td>
                                    <td>{{$st->st_name}}</td>
                                    <td>{{$st->st_phone}}</td>
                                    <td>{{$st->st_email}}</td>
                                    <td>{{$st->dpt_name}}</td>
                                    <td>{{$st->pg_name}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
