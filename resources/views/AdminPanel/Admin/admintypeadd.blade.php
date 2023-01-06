@extends('include.master')
@section('content')
@section('index','Add Admin Type ')
@section('title','Admin')
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                    <form class="form-valide" action="{{route('admin.type.add.submit')}}" method="post">
                                    {{@csrf_field()}}
                                        <h4 class="header-title">Add Admin Type</h4>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Admin Type</label>
                                            <input class="form-control" type="text" name="admin_type"value="" id="example-text-input">
                                        </div>

                                      <button class="btn btn-primary" type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
            

        </div>
        <!-- main content area end -->
        @endsection