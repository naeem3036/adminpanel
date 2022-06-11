@extends('dashboard')
@section('Contents')

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Logo</th>
                    <th>Website</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($companies as $record)
                <tr>
                    <td>{{$record->name}}</td>
                    <td>{{$record->email}}</td>
                    {{-- {{$data = asset('storage/app/'.$record->logo)}} --}}
                    <td><img src='{{asset('storage/app/'.$record->logo)}}' alt="" class="img-thumbnail"></td>
                    <td>{{$record->website}}</td>
                    <td>
                        <a href="{{route('companies_edit',['id'=>$record->id])}}"> <button type="button" class="btn btn-primary">Edit</button> </a>
                        <a href="{{route('companies_delete',['id'=>$record->id])}}"> <button type="button" class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
