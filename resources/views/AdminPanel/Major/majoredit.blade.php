@extends('include.master')
@section('content')
@section('index','Edit Major Table ')
@section('title','Major')

                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                    <form class="form-valide" action="{{route('major.update',$major->id)}}" method="post">
                                    {{@csrf_field()}}
                                        @method('PUT')
                                    
                                        <h4 class="header-title">Edit Major</h4>
                                        <input type="hidden" name="id" placeholder="id" value="{{ $major->id }}">
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Major Name</label>
                                            <input class="form-control" type="text" name="majors_name"value="{{$major->majors_name}}" id="majors_name">
                                        </div>

                                      <button class="btn btn-primary" type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
            

        </div>
        <!-- main content area end -->
        @endsection