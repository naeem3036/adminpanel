@extends('dashboard')
@section('Contents')

{{-- Form Of Section --}}

<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
          <div id="second">
            @if (URL::current() == url('companyRegistration'))
              <div class="myform form ">
                    <div class="logo mb-3">
                       <div class="col-md-12 text-center">
                          <h1 >Company Registration</h1>
                       </div>
                    </div>
                    <form action="{{route('registerCompany')}}" name="registration" enctype="multipart/form-data" method="POST">
                        @csrf
                       <div class="form-group">
                          <input type="text"  name="companyname" class="form-control" id="companyname" aria-describedby="emailHelp" placeholder="Enter Company Name" value="{{old('companyname')}}">
                          <span class="text-danger">
                              @error('companyname')
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
                          <div class="custom-file">
                            <label for="file">Choose Logo </label>
                            <input type="file" class="form-control" name="file" id="file">
                          </div>
                        </div>

                       <div class="form-group">
                        <input type="text"  name="website" class="form-control" id="website" aria-describedby="emailHelp" placeholder="Enter Website Link" value="{{old('website')}}">
                        <span class="text-danger">
                          @error('website')
                              {{$message}}
                          @enderror
                      </span>
                     </div>
                       <div class="col-md-12 text-center mb-3">
                          <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Get Started For Free</button>
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
                <form action="{{$url}}" name="registration" enctype="multipart/form-data" method="POST">
                    @csrf
                   <div class="form-group">
                      <input type="text"  name="companyname" class="form-control" id="companyname" aria-describedby="emailHelp" placeholder="Enter Company Name" value="{{$record->name}}">
                      <span class="text-danger">
                          @error('companyname')
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
                      <div class="custom-file">
                        <label for="file">Choose Logo </label>
                        <input type="file" class="form-control" name="file" id="file">
                      </div>
                    </div>

                   <div class="form-group">
                    <input type="text"  name="website" class="form-control" id="website" aria-describedby="emailHelp" placeholder="Enter Website Link" value="{{$record->website}}">
                    <span class="text-danger">
                      @error('website')
                          {{$message}}
                      @enderror
                  </span>
                 </div>
                   <div class="col-md-12 text-center mb-3">
                      <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm"> {{$title}} </button>
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
