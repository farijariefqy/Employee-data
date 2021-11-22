@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Employee</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('employees.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $employee->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NIP:</strong>
                    <input type="number" name="nip" value="{{ $employee->nip }}" class="form-control" placeholder="NIP">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NIK:</strong>
                    <input type="number" name="nik" value="{{ $employee->nik }}" class="form-control" placeholder="NIK">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Place Of Birth:</strong>
                    <input type="text" name="place_of_birth" value="{{ $employee->place_of_birth }}" class="form-control" placeholder="Place Of Birth">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date Of Birth:</strong>
                    <input type="date" name="date_of_birth" value="{{ $employee->date_of_birth }}" class="form-control" placeholder="Date Of Birth">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date Accepted Work:</strong>
                    <input type="date" name="date_accepted_work" value="{{ $employee->date_accepted_work }}" class="form-control" placeholder="Date Accepted Work">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="inputState">Employee Status:</label>
                        <select name = "employee_status" id="employee_status" class="form-control">
                        <option selected>{{ $employee->employee_status }}</option>
                        <option value="Permanent">Permanent</option>
                        <option value="Contract">Contract</option>
                        <option value="Internship">Internship</option>
                    </select>
                </div>
              </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="inputState">Position :</label>
                        <select name = "position" id="position" class="form-control">
                        <option selected>{{ $employee->position }}</option>
                        <option value="IT Suport">IT Suport</option>
                        <option value="IT Suport">System Analyst</option>
                        <option value="HR">HR</option>
                        <option value="Supervisor IT">Supervisor IT</option>
                    </select>
                </div>
              </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="inputState">Department :</label>
                        <select name = "department" id="department" class="form-control">
                        <option selected>{{ $employee->department }}</option>
                        <option value="IT">IT</option>
                        <option value="HR">HR</option>
                        <option value="Production">Production</option>
                    </select>
                </div>
              </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="email" name="email" value="{{ $employee->email }}" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Telp:</strong>
                    <input type="number" name="telp" value="{{ $employee->telp }}" class="form-control" placeholder="Telp">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address:</strong>
                    <input type="text" name="address" value="{{ $employee->address }}" class="form-control" placeholder="Address">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="inputState">Mariatal Status</label>
                        <select name = "mariatal_status" id="mariatal_status" class="form-control">
                        <option selected>{{ $employee->mariatal_status }}</option>
                        <option value="Already">Already</option>
                        <option value="Not Yet">Not Yet</option>
                    </select>
                </div>
              </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="inputState">Gender</label>
                        <select name = "gender" id="gender" class="form-control">
                        <option selected>{{ $employee->gender }}</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
              </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection