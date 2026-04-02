@extends('master')

@section('title')
    Create Employee
@endsection

@section('content')
    <section class="py-5 bg-secondary-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <div class="card">
                        <div class="card-header text-center"><h2 class="text-success">Create Employee Form</h2></div>
                        <div class="card-body">
                            <p class="text-center text-success">{{session('success')}}</p>
                            <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3">Employee Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="name" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Employee Email</label>
                                    <div class="col-md-9">
                                        <input type="email" name="email" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Employee Phone</label>
                                    <div class="col-md-9">
                                        <input type="number" name="phone" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Employee Designation</label>
                                    <div class="col-md-9">
                                        <input type="text" name="designation" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Employee Salary</label>
                                    <div class="col-md-9">
                                        <input type="text" name="salary" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Employee Photo</label>
                                    <div class="col-md-9">
                                        <input type="file" name="photo" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success form-control" value="Create New Employee"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection