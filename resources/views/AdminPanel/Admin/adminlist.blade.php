@extends('include.master')
@section('content')
@section('index','Admin Index')
@section('title','Admin')
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                
                    <!-- Hoverable Rows Table end -->
                    <!-- Progress Table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                @if(Session::has('msg'))
                                    <p class="alert-alert-success">{{Session::get('msg')}}</p>
                                @endif
                            <a type="button" href="{{route('admin.create')}}" class="btn btn-primary btn-lg float-right m-3">+ Add Admin</a>
                            <br>
                                <h4 class="header-title">Admin Table</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-hover progress-table text-center">
                                        {{@csrf_field()}}
                                            <thead class="text-uppercase">
                                                <tr>
                                                    
                                                    <th scope="col">Admin Name</th>
                                                    <th scope="col">Email </th>
                                                    <th scope="col">Phone Number</th>
                                                    <th scope="col">Admin Type</th>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                            @foreach($admin as $admin)
                                                <tr>
                                                    <td >{{$admin->username}}</td>
                                                    <td >{{$admin->email}}</td>
                                                    <td >{{$admin->phonenumber1}}</td>
                                                    <td >{{$admin->role}}</td>
                                                    <td ><img style="width:150px; height:100px;" src="{{ asset('images/admin/'.$admin->image)}}" alt=""></td>
                                                    
                                                    <td>
                                                 <form action="{{route('admin.destroy',$admin->id)}}"  method="Post">
                                                    <a href="{{route('admin.edit',$admin->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick="return confirm('Are you sure to Delete?')" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
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