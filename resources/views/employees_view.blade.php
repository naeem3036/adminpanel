@extends('dashboard')
@section('Contents')

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Company Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $record)
                <tr>
                    <td>{{$record->firstname}}</td>
                    <td>{{$record->lastname}}</td>
                    <td>{{$record->companyName}}</td>
                    <td>{{$record->email}}</td>
                    <td>{{$record->phone}}</td>
                    <td>
                        <a href="{{route('employees_edit',['id'=>$record->id])}}"> <button type="button" class="btn btn-primary">Edit</button> </a>
                        <a href="{{route('employees_delete',['id'=>$record->id])}}"> <button type="button" class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
