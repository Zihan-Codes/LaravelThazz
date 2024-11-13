@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Employee Details</h1>

        <div class="card shadow-sm">
            <div class="card-header text-white bg-primary">
                <h4 class="mb-0">Details for {{ $employee->name }}</h4>
            </div>
            <div class="card-body">
                
                <table class="table table-bordered table-striped table-hover">
                    <tbody>
                        <tr>
                            <th scope="row" class="bg-light">Name</th>
                            <td>{{ $employee->name }}</td>
                        </tr>
                        <tr>
                            <th scope="row" class="bg-light">Email</th>
                            <td>{{ $employee->email }}</td>
                        </tr>
                        <tr>
                            <th scope="row" class="bg-light">Position</th>
                            <td>{{ $employee->position }}</td>
                        </tr>
                        <tr>
                            <th scope="row" class="bg-light">Salary</th>
                            <td>${{ number_format($employee->salary, 2) }}</td>
                        </tr>
                    </tbody>
                </table>

                
                <a href="{{ route('employees.index') }}" class="btn btn-secondary btn-lg d-block">Back to Employees</a>
            </div>
        </div>
    </div>
@endsection
