@extends('include.master')
@section('content')
@section('index','Edit Scholarship ')
@section('title','Scholarship')

                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                    <form class="form-valide" action="{{route('scholarships.update',$scholarship->id)}}" method="post">
                                    {{@csrf_field()}}                   
                                        @method('PUT')
                                    
                                        <h4 class="header-title">Edit Scholarship</h4>
                                        <input type="hidden" name="id" placeholder="id" value="{{ $scholarship->id }}">
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Scholarship Name</label>
                                            <input class="form-control" type="text" name="scholership_name"value="{{$scholarship->scholership_name}}" id="">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Scholarship Available</label>
                                            <input class="form-control" type="text" name="scholership_available"value="{{$scholarship->scholership_available}}" id="">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Scholarship Deadline</label>
                                            <input class="form-control" type="date" name="scholership_deadline"value="{{$scholarship->scholership_deadline}}" id="">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Scholarship Details</label>
                                            <input class="form-control" type="text" name="scholership_details"value="{{$scholarship->scholership_details}}" id="">
                                        </div>

                                      <button class="btn btn-primary" type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
            

        </div>
        <!-- main content area end -->
        @endsection