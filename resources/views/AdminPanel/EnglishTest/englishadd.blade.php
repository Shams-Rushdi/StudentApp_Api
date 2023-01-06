@extends('include.master')
@section('content')
@section('index','Add English ')
@section('title','English Test')

                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                    <form class="form-valide" action="{{route('englishtest.store')}}" method="post">
                                    {{@csrf_field()}}
                                        <h4 class="header-title">Add English Test</h4>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">English Test Name</label>
                                            <input class="form-control" type="text" name="test_name"value="" id="example-text-input">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Test Type</label>
                                            <input class="form-control" type="text" name="test_type"value="" id="example-text-input">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Test Date</label>
                                            <input class="form-control" type="date" name="test_date"value="" id="example-text-input">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Test Score</label>
                                            <input class="form-control" type="text" name="test_score"value="" id="example-text-input">
                                        </div>

                                      <button class="btn btn-primary" type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
            

        </div>
        <!-- main content area end -->
        @endsection