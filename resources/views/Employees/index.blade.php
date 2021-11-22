@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>Employee Data</h1>
    <p>application to register employees</p>
  </div>
  @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="pull-right">
                <a class="btn btn-success" style="float: right" href="{{ route('employees.create') }}" title="Create a employee"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>
    <table class="table table-bordered table-responsive table-hover">
        <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">NIP</th>
            <th scope="col">NIK</th>
            <th scope="col">Place Of Birth</th>
            <th scope="col">Date Of Birth</th>
            <th scope="col">Date Accepted Work</th>
            <th scope="col">Employee Status</th>
            <th scope="col">Position</th>
            <th scope="col">Department</th>
            <th scope="col">Email</th>
            <th scope="col">Telp</th>
            <th scope="col">Address</th>
            <th scope="col">Mariatal Status</th>
            <th scope="col">Gender</th>
            <th width="130px">Action</th>
        </tr>
        @foreach ($employees as $employee)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->nip }}</td>
                <td>{{ $employee->nik }}</td>
                <td>{{ $employee->place_of_birth }}</td>
                <td>{{ $employee->date_of_birth }}</td>
                <td>{{ $employee->date_accepted_work }}</td>
                <td>{{ $employee->employee_status }}</td>
                <td>{{ $employee->position }}</td>
                <td>{{ $employee->department }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->telp }}</td>
                <td>{{ $employee->address }}</td>
                <td>{{ $employee->mariatal_status }}</td>
                <td>{{ $employee->gender }}</td>
                <td>
                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                        <a href="{{ route('employees.show', $employee->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('employees.edit', $employee->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>
                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $employees->links() !!}

@endsection