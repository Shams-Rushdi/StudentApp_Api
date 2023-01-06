@extends('include.master')
@section('content')
@section('index','Create Admin')
@section('title','Admin')
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                    <form class="form-valide" action="{{route('admin.update',$admin->id)}}" method="post" enctype="multipart/form-data">
                                    {{@csrf_field()}}
                                                  
                                        @method('PUT')
                                
                                        <h4 class="header-title">Edit Admin Details</h4>
                                        <input type="hidden" name="id" placeholder="id" value="{{ $admin->id }}">
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">First Name</label>
                                            <input class="form-control" type="text" name="first_name"value="{{$admin->first_name}}" id="example-text-input">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Last Name</label>
                                            <input class="form-control" type="text" name="last_name"value="{{$admin->last_name }}" id="example-text-input">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">User Name</label>
                                            <input class="form-control" type="text" name="username"value="{{$admin->username }}" id="example-text-input">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Email</label>
                                            <input class="form-control" type="email" name="email"value="{{$admin->email }}" id="example-text-input">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Joining Date</label>
                                            <input class="form-control" type="date" name="joiningdate"value="{{$admin->joiningdate }}" id="example-text-input">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Address</label>
                                            <input class="form-control" type="text" name="address"value="{{$admin->address }}" id="example-text-input">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Phone Number 1</label>
                                            <input class="form-control" type="text" name="phonenumber1"value="{{$admin->phonenumber1 }}" id="example-text-input">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Phone Number 2</label>
                                            <input class="form-control" type="text" name="phonenumber2"value="{{$admin->phonenumber2 }}" id="example-text-input">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Nid Number</label>
                                            <input class="form-control" type="text" name="nid"value="{{$admin->nid }}" id="example-text-input">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Nationality</label>
                                            <input class="form-control" type="text" name="nationality"value="{{$admin->nationality }}" id="example-text-input">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Degree</label>
                                            <input class="form-control" type="text" name="degree"value="{{$admin->degree }}" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Gender</label>
                                            <select class="custom-select">
                                                <option selected="selected">Open this select menu</option>
                                                <option value="male">Make</option>
                                                <option value="female">Female</option>
                                                <
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Password</label>
                                            <input class="form-control" type="text" name="password" value="{{$admin->password}}" id="example-text-input">
                                        </div>

                                        <div class="form-group">
                                            <label class="col-form-label">Admin Type</label>
                                            <select class="custom-select" name="role">
                                                <option selected="selected">Select Admin Type</option>
                                                    @foreach($admintype as $key => $value)
                                                    <option value="{{$value}}">{{ $value }}</option>
                                                    @endforeach
                                            </select>
                                        </div>

                                        <label class="col-form-label">Image</label>
                                        <img style="width:150px; height:100px;" src="{{ asset('images/admin/'.$admin->image)}}" alt="">
                                        <div class="input-group mb-3">
                                            
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" name="image" value="{{$admin->password}}" class="custom-file-input" id="inputGroupFile01">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                            </div>
                                        </div>

                                        

                                      <button class="btn btn-primary" type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
            

        </div>
        <!-- main content area end -->
        @endsection