@extends('master')

@section('title')
    Employee Details Page
@endsection

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Employee Details</h2>

        <div class="card p-4 shadow">
            <p><strong>Name:</strong> {{ $employee->name }}</p>
            <p><strong>Email:</strong> {{ $employee->email }}</p>
            <p><strong>Phone:</strong> {{ $employee->phone }}</p>
            <p><strong>Designation:</strong> {{ $employee->designation }}</p>
            <p><strong>Salary:</strong> {{ $employee->salary }}</p>

            <p><strong>Photo:</strong></p>
            <img src="{{ asset('storage/'.$employee->photo) }}" width="120" class="rounded shadow">

            <br><br>
            <a href="{{ route('employees.show') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
@endsection