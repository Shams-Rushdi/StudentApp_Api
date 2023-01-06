@extends('include.master')
@section('content')
@section('index','Change Password')
@section('title','Admin')
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                    <form class="form-valide" action="{{route('admin.pass.submit')}}" method="post" enctype="multipart/form-data">
                                    {{@csrf_field()}}
                                                  
                                        @method('POST')
                                
                                        <h4 class="header-title">Change Password</h4>
                                        <input type="hidden" name="id" placeholder="id" value="{{ $user->id }}">
                                        <input class="form-control" type="hidden" name="email"value="{{$admin->email }}" id="example-text-input">
                                        <input class="form-control" type="hidden" name="role" value="{{$admin->role }}" id="example-text-input">

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Current Password</label>
                                            <input class="form-control" type="password" name="old_password"value="" id="example-text-input">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">New Password</label>
                                            <input class="form-control" type="password" name="new_password"value="" id="example-text-input">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Confirm New Password</label>
                                            <input class="form-control" type="password" name=""value="" id="example-text-input">
                                        </div>
                                        
                                      <button class="btn btn-primary" type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
            

        </div>
        <!-- main content area end -->
        @endsection