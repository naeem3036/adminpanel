@extends('dashboard')
@section('Contents')

{{-- Form Of Section --}}

<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
          <div id="second">
            @if (URL::current() == url('employeeRegistration'))
              <div class="myform form ">
                    <div class="logo mb-3">
                       <div class="col-md-12 text-center">
                          <h1 >Employee Registration</h1>
                       </div>
                    </div>
                    <form action="{{route('registerEmployee')}}" name="registration" method="POST">
                        @csrf
                       <div class="form-group">
                          <input type="text"  name="firstname" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter Firstname" value="{{old('firstname')}}">
                          <span class="text-danger">
                              @error('firstname')
                                  {{$message}}
                              @enderror
                          </span>
                       </div>
                       <div class="form-group">
                          <input type="text"  name="lastname" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="Enter Lastname" value="{{old('lastname')}}">
                          <span class="text-danger">
                            @error('lastname')
                                {{$message}}
                            @enderror
                        </span>
                       </div>
                       <div class="form-group">
                        <input type="text"  name="companyName" class="form-control" id="companyName" aria-describedby="emailHelp" placeholder="Enter Company Name" value="{{old('companyName')}}">
                        <span class="text-danger">
                          @error('companyName')
                              {{$message}}
                          @enderror
                        </span>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{old('email')}}">
                            <span class="text-danger">
                              @error('email')
                                  {{$message}}
                              @enderror
                          </span>
                         </div>
                         <div class="form-group">
                            <input type="tel" name="phone"  class="form-control" id="phone" aria-describedby="emailHelp" placeholder="Enter phone number" value="{{old('phone')}}">
                            <span class="text-danger">
                              @error('phone')
                                  {{$message}}
                              @enderror
                          </span>
                         </div>
                       <div class="col-md-12 text-center mb-3">
                          <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Register Employee</button>
                       </div>
                    </form>
                </div>
                @else
                <div class="myform form ">
                    <div class="logo mb-3">
                       <div class="col-md-12 text-center">
                          <h1 >{{$title}}</h1>
                       </div>
                    </div>
                    <form action="{{$url}}" name="registration" method="POST">
                        @csrf
                       <div class="form-group">
                          <input type="text"  name="firstname" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter Firstname" value="{{$record->firstname}}">
                          <span class="text-danger">
                              @error('firstname')
                                  {{$message}}
                              @enderror
                          </span>
                       </div>
                       <div class="form-group">
                          <input type="text"  name="lastname" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="Enter Lastname" value="{{$record->lastname}}">
                          <span class="text-danger">
                            @error('lastname')
                                {{$message}}
                            @enderror
                        </span>
                       </div>
                       <div class="form-group">
                        <input type="text"  name="companyName" class="form-control" id="companyName" aria-describedby="emailHelp" placeholder="Enter Company Name" value="{{$record->companyName}}">
                        <span class="text-danger">
                          @error('companyName')
                              {{$message}}
                          @enderror
                        </span>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{$record->email}}">
                            <span class="text-danger">
                              @error('email')
                                  {{$message}}
                              @enderror
                          </span>
                         </div>
                         <div class="form-group">
                            <input type="tel" name="phone"  class="form-control" id="phone" aria-describedby="emailHelp" placeholder="Enter phone number" value="{{$record->phone}}">
                            <span class="text-danger">
                              @error('phone')
                                  {{$message}}
                              @enderror
                          </span>
                         </div>
                       <div class="col-md-12 text-center mb-3">
                          <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">{{$title}}</button>
                       </div>
                    </form>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

{{-- End Company Form Of Section --}}

@endsection
