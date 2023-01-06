@extends('include.master')
@section('content')
@section('index','Create Admin')
@section('title','Admin')
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                    <form class="form-valide" action="{{route('admin.profile.submit')}}" method="post" enctype="multipart/form-data">
                                    {{@csrf_field()}}
                                                  
                                        @method('POST')
                                
                                        <h4 class="header-title">Edit Admin Details</h4>
                                        <input type="hidden" name="id" placeholder="id" value="{{ $user->id }}">
                                        <input class="form-control" type="hidden" name="email"value="{{$admin->email }}" id="example-text-input">
                                        <input class="form-control" type="hidden" name="role" value="Admin" id="example-text-input">
                                        

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
                                            <label for="example-text-input" class="col-form-label">Phone Number 2</label>
                                            <input class="form-control" type="text" name="phonenumber2"value="{{$admin->phonenumber2 }}" id="example-text-input">
                                        </div>

                                        
                                      <button class="btn btn-primary" type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
            

        </div>
        <!-- main content area end -->
        @endsection