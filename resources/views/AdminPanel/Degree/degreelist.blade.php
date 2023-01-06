@extends('include.master')
@section('content')
@section('index','Index Degree ')
@section('title','Degree')

            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                
                    <!-- Hoverable Rows Table end -->
                    <!-- Progress Table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                            <a type="button" href="{{route('degree.create')}}" class="btn btn-primary btn-lg float-right m-3">+ Add degrees</a>
                            <br>
                                <h4 class="header-title">degree Table</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-hover progress-table text-center">
                                        {{@csrf_field()}}
                                            <thead class="text-uppercase">
                                                <tr>
                                                    
                                                    <th scope="col">Degree Subject</th>
                                                    <th scope="col">action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                            @foreach($degrees as $degree)
                                                <tr>
                                                    <td >{{$degree->degrees_name}}</td>
                                                    <td>
                                                 <form action="{{route('degree.destroy',$degree->id)}}"  method="Post">
                                                    <a href="{{route('degree.edit',$degree->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a>
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