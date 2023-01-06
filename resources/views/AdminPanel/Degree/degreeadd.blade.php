@extends('include.master')
@section('content')
@section('index','Add Degree ')
@section('title','Degree')
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                    <form class="form-valide" action="{{route('degree.store')}}" method="post">
                                    {{@csrf_field()}}
                                        <h4 class="header-title">Add Degree</h4>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Degree Name</label>
                                            <input class="form-control" type="text" name="degrees_name"value="" id="example-text-input">
                                        </div>

                                      <button class="btn btn-primary" type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
            

        </div>
        <!-- main content area end -->
        @endsection