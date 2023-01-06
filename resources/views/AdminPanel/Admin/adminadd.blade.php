@extends('include.master')
@section('content')
@section('index','Create Admin')
@section('title','Admin')
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                    <form class="form-valide" action="{{route('admin.store')}}" method="post" enctype="multipart/form-data">
                                    {{@csrf_field()}}
                                
                                        <h4 class="header-title">Add Ohter English Test</h4>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">First Name</label>
                                            <input class="form-control" type="text" name="fname"value="" id="example-text-input">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Last Name</label>
                                            <input class="form-control" type="text" name="lname"value="" id="example-text-input">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">User Name</label>
                                            <input class="form-control" type="text" name="uname"value="" id="example-text-input">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Email</label>
                                            <input class="form-control" type="email" name="email"value="" id="example-text-input">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Joining Date</label>
                                            <input class="form-control" type="date" name="joiningdate"value="" id="example-text-input">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Address</label>
                                            <input class="form-control" type="text" name="address"value="" id="example-text-input">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Phone Number 1</label>
                                            <input class="form-control" type="text" name="phonenumber1"value="" id="example-text-input">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Phone Number 2</label>
                                            <input class="form-control" type="text" name="phonenumber2"value="" id="example-text-input">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Nid Number</label>
                                            <input class="form-control" type="text" name="nid"value="" id="example-text-input">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Nationality</label>
                                            <input class="form-control" type="text" name="nationality"value="" id="example-text-input">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Degree</label>
                                            <input class="form-control" type="text" name="degree"value="" id="example-text-input">
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
                                            <input class="form-control" type="text" name="password"value="" id="example-text-input">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Confrom Password</label>
                                            <input class="form-control" type="text" name="cpassword"value="" id="example-text-input">
                                        </div>

                                        <div class="form-group">
                                            <label class="col-form-label">Admin Type</label>
                                            <select class="custom-select" name="admintype">
                                                <option selected="selected">Select Admin Type</option>
                                                    @foreach($admintype as $key => $value)
                                                    <option value="{{$value}}">{{ $value }}</option>
                                                    @endforeach
                                            </select>
                                        </div>

                                        <label class="col-form-label">Image</label>
                                        <div class="input-group mb-3">
                                            
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
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