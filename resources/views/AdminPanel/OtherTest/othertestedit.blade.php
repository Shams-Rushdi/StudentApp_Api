@extends('include.master')
@section('content')
@section('index','Edit Other Test ')
@section('title','Other Test')
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                    <form class="form-valide" action="{{route('othertest.update',$othertest->id)}}" method="post">
                                    {{@csrf_field()}}                   
                                        @method('PUT')
                                    
                                        <h4 class="header-title">Edit Other English Test</h4>
                                        <input type="hidden" name="id" placeholder="id" value="{{ $othertest->id }}">
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">English Test Name</label>
                                            <input class="form-control" type="text" name="othertest_name"value="{{$othertest->othertest_name}}" id="tests_name">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Test Date</label>
                                            <input class="form-control" type="date" name="othertest_date"value="{{$othertest->othertest_date}}" id="tests_name">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Test Score</label>
                                            <input class="form-control" type="text" name="othertest_score"value="{{$othertest->othertest_score}}" id="tests_name">
                                        </div>

                                      <button class="btn btn-primary" type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
            

        </div>
        <!-- main content area end -->
        @endsection