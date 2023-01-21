@extends('client.master')
@section('title')
    Show Student
@endsection
@section('content')
    <main class="mt-3 p-2">
        <div class="container">
            <div class="page-title">
                <div style="font-weight: 500;" class="fs-3">Students</div>
            </div>
            <nav class="mt-2 mb-4" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Student Info</li>
                </ol>
            </nav>

            <div class="student-information mb-5 mt-5">
                <div class="row">
                    <div class="col-12 col-md-6 m-auto">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body">
                                <div class="page-title text-center fs-5 fw-bold mb-4">
                                    Arafat's Information
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <img class="d-block m-auto"
                                             style="width: 200px; height: 200px; border-radius: 50%;"
                                             src="https://avatars.githubusercontent.com/u/26932301?v=4" alt="">
                                        <h5 class="text-center mt-3">Arafat Hossain</h5>
                                        <h6 class="text-center text-muted">BSc In CSE</h6>
                                        <h6 class="text-center">017xxxxxxxx</h6>
                                        <h6 class="text-center">arafat@gmail.com</h6>
                                        <div class="text-center mt-3">
                                            <a href="{{route('edit.student')}}" class="btn btn-warning">Edit</a>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
