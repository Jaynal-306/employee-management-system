@extends('master')

@section('title')
    Home page
@endsection

@section('content')
    {{-- <section class="py-5 bg-secondary-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>This is my crude project</h2>
                </div>
            </div>
        </div>
    </section> --}}
    <header class="hero">
        <h1>Welcome to Employee Portal</h1>
        <p>Manage your employees, works, and schedules efficiently.</p>
    </header>
    <section class="mb bg-primary">
        <div class="container">
            <div class="card">
                <i class="fas fa-users"></i>
                <h3>All Employee</h3>
                <p>View, edit, and manage all employee records.</p>
            </div>

            <div class="card">
                <i class="fas fa-user-plus"></i>
                <h3>Add Employee</h3>
                <p>Enroll a new employee into the system.</p>
            </div>

            <div class="card">
                <i class="fas fa-book"></i>
                <h3>Work Schedules</h3>
                <p>Manage available classes and subjects.</p>
            </div>

            <div class="card">
                <i class="fas fa-chart-line"></i>
                <h3>Employee Attendance</h3>
                <p>Track daily attendance and reports.</p>
            </div>
        </div>
    </section>
    
@endsection