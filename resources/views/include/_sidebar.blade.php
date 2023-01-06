<div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.html"><img src="{{asset('frontend')}}/images/icon/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="">
                                <a href="{{ route('dashboardbd') }}" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                                
                            </li>
                            @if($user->role == "SuperAdmin")

                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Admin
                                        
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="{{route('admin.index')}}"><i class="ti-map-alt"></i> <span>Admin</span></a></li>
                                </ul>
                                <ul class="collapse">
                                    <li><a href="{{route('admin.type.add')}}"><i class="ti-map-alt"></i> <span>Admin Type</span></a></li>
                                </ul>
                            </li>
                            @endif
                            

                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>University
                                        
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="{{route('university.list')}}"><i class="ti-map-alt"></i> <span>University</span></a></li>
                                </ul>
                                <ul class="collapse">
                                    <li><a href="{{route('scholarships.index')}}"><i class="ti-map-alt"></i> <span>Scholarship</span></a></li>
                                </ul>
                                <ul class="collapse">
                                    <li><a href="{{route('degree.index')}}"><i class="ti-map-alt"></i> <span>Degrees</span></a></li>
                                </ul>   
                                <ul class="collapse">
                                    <li><a href="{{route('major.index')}}"><i class="ti-map-alt"></i> <span>Majors</span></a></li>
                                </ul>
                                <ul class="collapse">
                                    <li><a href="{{route('englishtest.index')}}"><i class="ti-map-alt"></i> <span>English Test</span></a></li>
                                </ul>
                                <ul class="collapse">
                                    <li><a href="{{route('othertest.index')}}"><i class="ti-map-alt"></i> <span>Other Test</span></a></li>
                                </ul>                                   

                            </li>

                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Student
                                        
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="{{route('student.index')}}"><i class="ti-map-alt"></i> <span>Students </span></a></li>
                                </ul>
                                  

                            </li>

                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Employer
                                        
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href=""><i class="ti-map-alt"></i> <span>Employers</span></a></li>
                                </ul>
                                          

                            </li>
                            


                            <li><a href="maps.html"><i class="ti-map-alt"></i> <span>maps</span></a></li>
                            <li><a href="invoice.html"><i class="ti-receipt"></i> <span>Invoice Summary</span></a></li>
                 
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>