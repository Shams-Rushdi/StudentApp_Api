@extends('include.master')
@section('content')
@section('index','Student Edit')
@section('title','Student')


                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                    <form class="form-valide" action="{{route('student.update',$student->id)}}" method="post">
                                    {{@csrf_field()}}                   
                                        @method('PUT')
                                    
                                        <h4 class="header-title">Edit University Details</h4>
                                        <input type="hidden" name="id" placeholder="id" value="{{ $student->id }}">
                                        
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">First Name</label>
                                            <input class="form-control" type="text" name="first_name"value="{{$student->first_name}}" id="">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Middle Name</label>
                                            <input class="form-control" type="text" name="middle_name"value="{{$student->middle_name}}" id="">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Last Name</label>
                                            <input class="form-control" type="text" name="last_name"value="{{$student->last_name}}" id="">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Email</label>
                                            <input class="form-control" type="text" name="email"value="{{$student->email}}" id="">
                                        </div>
                                        

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Date Of Birth</label>
                                            <input class="form-control" type="date" name="dob"value="{{$student->dob}}" id="">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Address</label>
                                            <input class="form-control" type="text" name="address"value="{{$student->address}}" id="">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Zip Code</label>
                                            <input class="form-control" type="text" name="zipcode"value="{{$student->zipcode}}" id="">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">State</label>
                                            <input class="form-control" type="text" name="state"value="{{$student->state}}" id="">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">CitizenShip</label>
                                            <input class="form-control" type="text" name="citizenship"value="{{$student->citizenship}}" id="">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Residency</label>
                                            <input class="form-control" type="text" name="residency"value="{{$student->residency}}" id="">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Mobile Number</label>
                                            <input class="form-control" type="text" name="mobile_number"value="{{$student->mobile_number}}" id="">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">User Id</label>
                                            <input class="form-control" type="text" name="user_id"value="{{$student->user_id}}" id="">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">User Name</label>
                                            <input class="form-control" type="text" name="user_name"value="{{$student->user_name}}" id="">
                                        </div>

                                      <button class="btn btn-primary" type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
            

        </div>
        <!-- main content area end -->
@endsection
