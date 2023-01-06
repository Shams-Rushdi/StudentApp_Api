@extends('include.master')
@section('content')
@section('index','Add Scholarship ')
@section('title','Scholarship')

                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                    <form class="form-valide" action="{{route('scholarships.store')}}" method="post">
                                    {{@csrf_field()}}
                                        <h4 class="header-title">Add Scholarship </h4>
                                        <div class="form-group">
                                            <label class="col-form-label">University Name</label>
                                            <select class="custom-select" name="university_id">
                                                <option selected="selected">Select University</option>
                                                    @foreach($university as $key => $value)
                                                    <option value="{{$key}}">{{ $value }}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Scholarship Name</label>
                                            <input class="form-control" type="text" name="scholership_name"value="" id="example-text-input">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Scholarship Available</label>
                                            <input class="form-control" type="text" name="scholership_available" value="" id="example-text-input">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-datetime-local-input" class="col-form-label">Degree</label><br><br>
                                            @foreach($degrees as $key => $value)
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox"   checked class="custom-control-input" id="{{$value}}" for="{{$value}}" name="scholership_degree[]" value="{{$value}}">
                                                <label class="custom-control-label" for="{{$value}}">{{ $value }}</label>
                                            </div>
                                            @endforeach
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="example-datetime-local-input" class="col-form-label">Major</label><br><br>
                                            @foreach($major as $key => $value)
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox"   checked class="custom-control-input" id="{{$value}}" for="{{$value}}" name="scholership_major[]" value="{{$value}}">
                                                <label class="custom-control-label" for="{{$value}}">{{ $value }}</label>
                                            </div>
                                            @endforeach
                                        </div>

                                        <div class="form-group">
                                            <label for="example-datetime-local-input" class="col-form-label">Cgpa Requirement</label>
                                            <input class="form-control" type="text" name="scholership_cgpa" value="" id="">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-datetime-local-input" class="col-form-label">English Requirement</label><br><br>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" checked class="custom-control-input" id="customCheck5">
                                                <label class="custom-control-label" for="customCheck5">IELTS</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                <label class="custom-control-label" for="customCheck6">GRE</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" checked class="custom-control-input" id="customCheck7">
                                                <label class="custom-control-label" for="customCheck7">GMAT</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="customCheck8">
                                                <label class="custom-control-label" for="customCheck8">SAT</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Scholerships Details</label>
                                            <input class="form-control" type="text" name="scholership_details" value="" id="example-text-input">
                                        </div>

                                        

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Scholerships Deadline</label>
                                            <input class="form-control" type="date" name="scholership_deadline" value="" id="example-text-input">
                                        </div>
                                        

                                      <button class="btn btn-primary" type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
            

        </div>
        <!-- main content area end -->
        @endsection