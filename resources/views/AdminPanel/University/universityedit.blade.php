@extends('include.master')
@section('content')
@section('index','University Edit')
@section('title','University')


                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                    <form class="form-valide" action="{{route('university.update',$university->id)}}" method="post">
                                    {{@csrf_field()}}                   
                                        @method('PUT')
                                    
                                        <h4 class="header-title">Edit University Details</h4>
                                        <input type="hidden" name="id" placeholder="id" value="{{ $university->id }}">
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">University Name</label>
                                            <input class="form-control" type="text" name="university_name"value="{{$university->university_name}}" id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">University Address</label>
                                            <input class="form-control" type="text" name="university_address"value="{{$university->university_address}}" id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">University City</label>
                                            <input class="form-control" type="text" name="university_city"value="{{$university->university_city}}" id="">
                                        </div>                                        
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">University Country</label>
                                            <input class="form-control" type="text" name="university_country"value="{{$university->university_country}}" id="">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Nniversity Deadline</label>
                                            <input class="form-control" type="date" name="deadline"value="{{$university->deadline}}" id="">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">English Requirement</label>
                                            <input class="form-control" type="text" name="eng_requirement"value="{{$university->eng_requirement}}" id="">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Cgpa Requirement</label>
                                            <input class="form-control" type="text" name="gpa_requirement"value="{{$university->gpa_requirement}}" id="">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Education Cost</label>
                                            <input class="form-control" type="text" name="education_cost"value="{{$university->education_cost}}" id="">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Sop</label>
                                            <input class="form-control" type="text" name="sop"value="{{$university->sop}}" id="">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Acceptance Rate</label>
                                            <input class="form-control" type="text" name="acceptance_rate"value="{{$university->acceptance_rate}}" id="">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Acceptance Fee</label>
                                            <input class="form-control" type="text" name="application_fee"value="{{$university->application_fee}}" id="">
                                        </div>


                                       

                                      <button class="btn btn-primary" type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
            

        </div>
        <!-- main content area end -->
@endsection
