<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">@yield('title')</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="index.html">Home</a></li>
                    <li><span>@yield('index')</span></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            <div class="user-profile pull-right">
            <img class="avatar user-thumb" src="{{ asset('images/admin/'.$user->image)}}" alt="avatar">
                <h4 class="user-name dropdown-toggle" data-toggle="dropdown">{{ $user->username }} <i class="fa fa-angle-down"></i></h4>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('admin.profile',[$user->id])}}">Edit Profile</a>
                    <a class="dropdown-item" href="{{route('admin.password',[$user->id])}}">Change Password</a>
                    <a class="dropdown-item" href="#">Message</a>
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="{{route('logout')}}">Log Out</a>
                </div>
            </div>
        </div>
    </div>
</div>