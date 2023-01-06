@extends('include.master')
@section('content')
@section('index','Edit Degree ')
@section('title','Degree')

                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                    <form class="form-valide" action="{{route('degree.update',$degree->id)}}" method="post">
                                    {{@csrf_field()}}
                                        @method('PUT')
                                    
                                        <h4 class="header-title">Edit degree</h4>
                                        <input type="hidden" name="id" placeholder="id" value="{{ $degree->id }}">
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">degree Name</label>
                                            <input class="form-control" type="text" name="degrees_name"value="{{$degree->degrees_name}}" id="degrees_name">
                                        </div>

                                      <button class="btn btn-primary" type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
            

        </div>
        <!-- main content area end -->
        @endsection