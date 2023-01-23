@extends('client.master')
@php
    $sub_page = 'students';
    $page = 'all.students';
@endphp
@section('title')
    All Student
@endsection
@section('content')
    <main class="mt-3 p-2">
        <div class="container">
            <div class="page-title">
                <div style="font-weight: 500;" class="fs-3">All Student</div>
            </div>
            <nav class="mt-2 mb-4" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">All Student</li>
                </ol>
            </nav>
            @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('success') }}
                </div>
            @endif
            <div class="all-student mt-5">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="page-title fs-5 fw-bold mb-4">
                            All Students
                        </div>
                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Department</th>
                                <th>Program</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach($students as $st)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$st->st_id}}</td>
                                    <td>{{$st->st_name}}</td>
                                    <td>{{$st->st_phone}}</td>
                                    <td>{{$st->dpt_name}}</td>
                                    <td>{{$st->pg_name}}</td>
                                    <td>
                                        <a href="{{route('show.student', ['id'=>$st->id])}}"
                                           class="btn btn-sm btn-info">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="{{route('edit.student', ['id'=>$st->id])}}"
                                           class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a href="{{route('delete.student', ['id'=>$st->id])}}"
                                           class="btn btn-sm btn-danger">
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
    </main>

    <script>
        $(document).ready(function () {
            $('#datatable').DataTable();
        });
    </script>
@endsection
