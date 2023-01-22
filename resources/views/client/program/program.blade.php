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
                            @if($edit>0)

                                <div class="card-body">
                                    <div class="page-title fs-5 fw-bold mb-4">
                                        Edit Programs
                                    </div>
                                    <form action="{{route('update.program')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3 px-2">
                                                    <label for="pg_name" class="form-label">Name</label>
                                                    <input type="hidden" name="id" value="{{$program->id}}">
                                                    <input class="form-control" type="text" value="{{$program->pg_name}}" id="pg_name"
                                                           name="pg_name">
                                                </div>
                                                <div class="mb-3 px-2">
                                                    <label for="pg_code" class="form-label">Code</label>
                                                    <input class="form-control" type="text" value="{{$program->pg_code}}" id="pg_code"
                                                           name="pg_code">
                                                </div>
                                                <div class="mb-3 px-2">
                                                    <label for="pg_image" class="form-label">New Image</label>
                                                    <input class="form-control" type="file" id="pg_image" name="pg_image">
                                                    <img src="{{asset($program->pg_image)}}" class="img-fluid h-25" alt="">
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
                            @else
                            <div class="card-body">
                                <div class="page-title fs-5 fw-bold mb-4">
                                    Add Programs
                                </div>
                                <form action="{{route('add.program')}}" method="post" enctype="multipart/form-data">
                                    @csrf
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
                            @endif

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
                                    @php
                                    $i=1
                                    @endphp
                                    @foreach($programs as $program)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$program->pg_name}}</td>
                                        <td>{{$program->pg_code}}</td>
                                        <td><img src="{{asset($program->pg_image)}}"  class="img-fluid" width="120px" height="120px" alt=""></td>
                                        <td>
                                            <a href="{{route('edit.program',['id'=>$program->id])}}" class="btn btn-sm btn-warning">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <a href="{{route('delete.program',['id'=>$program->id])}}" class="btn btn-sm btn-danger">
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
