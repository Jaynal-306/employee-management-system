@extends('master')

@section('title')
    Employee Dashboard Page
@endsection

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Dashboard</h2>

        <div class="row">
            <div class="col-md-6">
                <div class="card p-4 bg-success text-white">
                    <h4>Total Employees</h4>
                    <h2>{{ $totalEmployees }}</h2>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card p-4 bg-primary text-white">
                    <h4>Total Salary</h4>
                    <h2>{{ $totalSalary }}</h2>
                </div>
            </div>
        </div>

    </div>
@endsection