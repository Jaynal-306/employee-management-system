@extends('master')

@section('title')
    Edit Student Page
@endsection

@section('content')
    <section class="py-5 bg-secondary-subtile">
        <div class="container">
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <div class="card">
                        <div class="card-header text-center"><h2 class="text-success">Student Edit Form</h2></div>
                        <div class="card-body">
                            <p class="text-center text-success">{{session('message')}}</p>
                            <form action="{{route('employees.update', $employee->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <label class="col-md-3">Employee Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="name" value="{{ $employee->name }}" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Employee Email</label>
                                    <div class="col-md-9">
                                        <input type="email" name="email" value="{{ $employee->email }}" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Employee Phone</label>
                                    <div class="col-md-9">
                                        <input type="number" name="phone" value="{{ $employee->phone }}" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Employee Designation</label>
                                    <div class="col-md-9">
                                        <input type="text" name="designation" value="{{ $employee->designation }}" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Employee Salary</label>
                                    <div class="col-md-9">
                                        <input type="text" name="salary" value="{{ $employee->salary }}" class="form-control"/>
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
                                        <input type="submit" class="btn btn-success form-control"  value="Update Employee"/>
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