@extends('include.master')
@section('content')
@section('index','Add University ')
@section('title','University')


                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                    
                                    <form class="form-valide" action="{{route('university.store')}}" method="post">
                                    {{@csrf_field()}}
                                        <h4 class="header-title">Add University</h4>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">University Name</label>
                                            <input class="form-control" type="text" name="university_name" value="" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-search-input" class="col-form-label">University Address</label>
                                            <input class="form-control" type="text" name="university_address" value="" id="example-search-input">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-tel-input" class="col-form-label">University City</label>
                                            <input class="form-control" type="text" name="university_city" value="" id="example-tel-input">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="example-tel-input" class="col-form-label">University Country</label>
                                            <input class="form-control" type="text" name="university_country" value="" id="example-tel-input">
                                        </div>

                                        
                                        <div class="form-group">
                                            <label for="example-datetime-local-input" class="col-form-label">Degree</label><br><br>
                                            @foreach($degrees as $key => $value)
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox"   checked class="custom-control-input" id="{{$value}}" for="{{$value}}" name="degree_[]" value="{{$value}}">
                                                <label class="custom-control-label" for="{{$value}}">{{ $value }}</label>
                                            </div>
                                            @endforeach
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="example-datetime-local-input" class="col-form-label">Major</label><br><br>
                                            @foreach($major as $key => $value)
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox"   checked class="custom-control-input" id="{{$value}}" for="{{$value}}" name="major_[]" value="{{$value}}">
                                                <label class="custom-control-label" for="{{$value}}">{{ $value }}</label>
                                            </div>
                                            @endforeach
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="example-datetime-local-input" class="col-form-label">Deadline</label>
                                            <input class="form-control" type="date" name="deadline" value="" id="example-datetime-local-input">
                                        </div>




                                        <div class="form-group">
                                            <label for="example-datetime-local-input" class="col-form-label">English Requirement</label><br><br>
                                            @foreach($engtests as $key => $value)
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox"   checked class="custom-control-input" id="{{$value}}" for="{{$value}}" name="eng_requirement[]" value="{{$value}}">
                                                <label class="custom-control-label" for="{{$value}}">{{ $value }}</label>
                                            </div>
                                            @endforeach
                                        </div>

                                        <div class="form-group">
                                            <label for="example-datetime-local-input" class="col-form-label">Other Requirement</label><br><br>
                                            @foreach($othertests as $key => $value)
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox"   checked class="custom-control-input" id="{{$value}}" for="{{$value}}" name="other_requirement[]" value="{{$value}}">
                                                <label class="custom-control-label" for="{{$value}}">{{ $value }}</label>
                                            </div>
                                            @endforeach
                                        </div>


                                        <div class="form-group">
                                            <label for="example-datetime-local-input" class="col-form-label">Cgpa Requirement</label>
                                            <input class="form-control" type="text" name="gpa_requirement" value="" id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-datetime-local-input" class="col-form-label">Education Cost</label>
                                            <input class="form-control" type="text" name="education_cost" value="" id="">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-datetime-local-input" class="col-form-label">Sop</label>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" checked id="customRadio1" name="sop" value="yes" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio1">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio2" name="sop" value="no" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio2">No</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="example-datetime-local-input" class="col-form-label">Acceptance Rate</label>
                                            <input class="form-control" type="text" name="acceptance_rate" value="" id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-datetime-local-input" class="col-form-label">Application Fee</label>
                                            <input class="form-control" type="text" name="application_fee" value="" id="">
                                        </div>

                                        <button class="btn btn-primary" type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
            

        </div>
        <!-- main content area end -->
 @endsection