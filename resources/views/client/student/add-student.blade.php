@extends('client.master')
@php
        $sub_page = 'students';
        $page = 'add.student';
@endphp
@section('title')
    Add Student
@endsection
@section('content')

    <main class="mt-3 p-2">
        <div class="container">
            <div class="page-title">
                <div style="font-weight: 500;" class="fs-3">Add Student</div>
            </div>
            <nav class="mt-2 mb-4" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Student</li>
                </ol>
            </nav>

            <div class="latest-added mt-5">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="page-title fs-5 fw-bold mb-4">
                            Add New Student
                        </div>
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3 px-2">
                                        <label for="st_name" class="form-label">Name</label>
                                        <input class="form-control" placeholder="Arafat Hossain" type="text"
                                               id="st_name" name="st_name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3 px-2">
                                        <label for="st_phone" class="form-label">Phone</label>
                                        <input class="form-control" placeholder="017xxxxxxxx" type="tel" id="st_phone"
                                               name="st_phone">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3 px-2">
                                        <label for="st_email" class="form-label">Email</label>
                                        <input class="form-control" placeholder="example@email.com" type="email"
                                               id="st_email" name="st_email">
                                    </div>
                                </div>

                                <div class="col-md-4 mt-md-4">
                                    <div class="mb-3 px-2">
                                        <label for="st_dept" class="form-label">Department</label>
                                        <select class="form-select" name="st_dept" id="st_dept">
                                            <option class="text-muted" selected disabled>Select a Department</option>
                                            <option value="1">CSE</option>
                                            <option value="2">EEE</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-md-4">
                                    <div class="mb-3 px-2">
                                        <label for="st_program" class="form-label">Program</label>
                                        <select class="form-select" name="st_program" id="st_program">
                                            <option class="text-muted" selected disabled>Select a Program</option>
                                            <option value="1">BSc</option>
                                            <option value="2">MSc</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-md-4">
                                    <div class="mb-3 px-2">
                                        <label for="st_admsn" class="form-label">Admission Date</label>
                                        <input class="form-control" type="date" id="st_admsn" name="st_admsn">
                                    </div>
                                </div>
                                <div class="col-md-4 mt-md-4">
                                    <div class="mb-3 px-2">
                                        <label for="st_image" class="form-label">Image</label>
                                        <input class="form-control" type="file" id="st_image" name="st_image">
                                    </div>
                                </div>
                                <div class="col-12 mt-md-4">
                                    <div class="mb-3 px-2">
                                        <button type="submit" class="btn btn-success"> Submit</button>
                                        <button type="reset" class="btn btn-warning"> Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
