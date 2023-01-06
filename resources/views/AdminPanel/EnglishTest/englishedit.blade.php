@extends('include.master')
@section('content')
@section('index',' Edit English Test')
@section('title','English Test')

                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                    <form class="form-valide" action="{{route('englishtest.update',$englishtest->id)}}" method="post">
                                    {{@csrf_field()}}                   
                                        @method('PUT')
                                    
                                        <h4 class="header-title">Edit English Test</h4>
                                        <input type="hidden" name="id" placeholder="id" value="{{ $englishtest->id }}">
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">English Test Name</label>
                                            <input class="form-control" type="text" name="test_name"value="{{$englishtest->test_name}}" id="tests_name">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Test Type</label>
                                            <input class="form-control" type="text" name="test_type"value="{{$englishtest->test_type}}" id="tests_name">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Test Date</label>
                                            <input class="form-control" type="date" name="test_date"value="{{$englishtest->test_date}}" id="tests_name">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Test Score</label>
                                            <input class="form-control" type="text" name="test_score"value="{{$englishtest->test_score}}" id="tests_name">
                                        </div>

                                      <button class="btn btn-primary" type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
            

        </div>
        <!-- main content area end -->
        @endsection