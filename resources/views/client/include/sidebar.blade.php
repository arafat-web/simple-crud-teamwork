
<div class="offcanvas offcanvas-start bg-purple text-white sidebar-nav" tabindex="-1" id="offcanvasExample"
     aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header shadow-sm d-block text-center">
        <div class="offcanvas-title" id="offcanvasExampleLabel">
            <a class="navbar-brand fw-bold" href="index.html">E-Student</a>
        </div>
    </div>
    <div class="offcanvas-body pt-3 p-0">
        <nav class="navbar-dark">
            <ul class="navbar-nav sidenav">
                <li class="nav-link bordered px-3 @if(isset($page) && $page == 'dashboard')active @endif">
                    <a href="{{route('dashboard')}}" class="nav-link px-3 active">
                        <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-link bordered px-3">
                    <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#collapseExample" role="button"
                       aria-expanded="false" aria-controls="collapseExample">
              <span class="me-2">
                <i class="bi bi-people-fill"></i>
              </span>
                        <span>Students</span>
                        <span class="right-icon ms-auto">
                <i class="bi bi-chevron-down"></i>
              </span>
                    </a>
                    <div class="collapse @if(isset($sub_page) && $sub_page == 'students')show @endif" id="collapseExample">
                        <div>
                            <ul class="navbar-nav ps-3">
                                <li>
<<<<<<< HEAD
                                    <a>
=======
                                    <a href="{{route('add.student')}}" class="nav-link @if(isset($page) && $page == 'add.student')active @endif px-3">
>>>>>>> 11c15e31bd50195cde25522270f380d1a251573c
                                        <span class="me-2"><i class="bi bi-1-circle"></i></span>
                                        <span>Add Student</span>
                                    </a>
                                </li>
                                <li>
<<<<<<< HEAD
                                    <a>
=======
                                    <a href="{{route('all.students')}}" class="nav-link @if(isset($page) && $page == 'all.students')active @endif px-3">
>>>>>>> 11c15e31bd50195cde25522270f380d1a251573c
                                        <span class="me-2"><i class="bi bi-2-circle"></i></span>
                                        <span>All Students</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="nav-link bordered px-3">
                    <a href="{{route('department')}}" class="nav-link  @if(isset($page) && $page == 'department')active @endif px-3">
                        <span class="me-2"><i class="bi bi-intersect"></i></span>
                        <span>Departments</span>
                    </a>
                </li>

                <li class="nav-link bordered px-3">
                    <a href="{{route('program')}}" class="nav-link  @if(isset($page) && $page == 'program')active @endif px-3">
                        <span class="me-2"><i class="bi bi-journal-text"></i></span>
                        <span>Program</span>
                    </a>
                </li>
                <li class="nav-link bordered px-3">
                    <a href="{{route('profile')}}" class="nav-link  @if(isset($page) && $page == 'profile')active @endif px-3">
                        <span class="me-2"><i class="bi bi-person"></i></span>
                        <span>Profile</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
