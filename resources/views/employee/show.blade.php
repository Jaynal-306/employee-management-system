@extends('master')
@section('title')
    Manage Student page
@endsection
@section('content')
    <section class="py-5 bg-secondary-subtle">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header text-center"><h2 class="text-success">Manage Employee page</h2></div>
                        <p class="text-center fs-3 text-success">{{session('message')}}</p>
                        <div class="search-container">
                            <form action="{{ route('employees.show') }}" method="GET">
                                <input type="text" name="search" placeholder="Search employee" class="search-input">
                                <button type="submit" class="search-btn">Search</button>
                            </form>
                        </div>
                        {{-- <form action="{{ route('employees.show') }}" style="text-align: right; input: " method="GET">
                            <input type="text" name="search" placeholder="Search employee">
                            <button type="submit">Search</button>
                        </form> --}}
                        <table class="table table-striped table-hover table-bordered">
                            <thead class="text-center">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Designation</th>
                                    <th>Salary</th>
                                    <th>Photo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach($employees as $employee)
                                    <tr>
                                        <td>{{ $employee->id }}</td>
                                        <td>{{ $employee->name }}</td>
                                        <td>{{ $employee->email }}</td>
                                        <td>{{ $employee->phone }}</td>
                                        <td>{{ $employee->designation }}</td>
                                        <td>{{ $employee->salary }}</td>
                                        <td>
                                            <img src="{{ asset('storage/' . $employee->photo) }}" alt="" style="height: 50px; width: 50px;">
                                        </td>
                                        <td>
                                            <a href="{{ route('employees.details', $employee->id) }}" class="btn btn-info">View</a>
                                            <a href="{{route('employees.edit',$employee->id)}}" class="btn btn-success">edit</a>
                                            <form action="{{route('employees.delete',$employee->id)}}" method="post" style="display:inline;">
                                                @csrf 
                                                @method('DELETE')                                               
                                                <button type="submit" onclick="return confirm('Are you sure?')"  class="btn btn-danger btn-s">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-right">
                            {{ $employees->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </section>
@endsection