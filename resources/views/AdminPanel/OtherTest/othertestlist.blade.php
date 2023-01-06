@extends('include.master')
@section('content')
@section('index','Other Test Index')
@section('title','Other Test')

            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                
                    <!-- Hoverable Rows Table end -->
                    <!-- Progress Table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                            <a type="button" href="{{route('othertest.create')}}" class="btn btn-primary btn-lg float-right m-3">+ Add Other Test</a>
                            <br>
                                <h4 class="header-title">Other English Test Table</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-hover progress-table text-center">
                                        {{@csrf_field()}}
                                            <thead class="text-uppercase">
                                                <tr>
                                                    
                                                    <th scope="col">Other English Test Name</th>
                                                    
                                                    <th scope="col">Test Date</th>
                                                    <th scope="col">Test Score</th>
                                                    <th scope="col">action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                            @foreach($otherenglishtests as $otherenglishtest)
                                                <tr>
                                                    <td >{{$otherenglishtest->othertest_name}}</td>
                                                    
                                                    <td >{{$otherenglishtest->othertest_date}}</td>
                                                    <td >{{$otherenglishtest->othertest_score}}</td>
                                                    <td>
                                                 <form action="{{route('othertest.destroy',$otherenglishtest->id)}}"  method="Post">
                                                    <a href="{{route('othertest.edit',$otherenglishtest->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                                                </form>
                                                    </td>
                                                </tr>
                                                @endforeach   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Progress Table end -->
                </div>
            </div>
        </div>
        <!-- main content area end -->
        @endsection