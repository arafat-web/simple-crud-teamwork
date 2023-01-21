
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
                <li class="nav-link bordered px-3 active">
                    <a href="index.html" class="nav-link px-3 active">
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
                    <div class="collapse" id="collapseExample">
                        <div>
                            <ul class="navbar-nav ps-3">
                                <li>
                                    <a href="add-student.html" class="nav-link px-3">
                                        <span class="me-2"><i class="bi bi-1-circle"></i></span>
                                        <span>Add Student</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="all-student.html" class="nav-link px-3">
                                        <span class="me-2"><i class="bi bi-2-circle"></i></span>
                                        <span>All Students</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="nav-link bordered px-3">
                    <a href="{{route('department')}}" class="nav-link px-3">
                        <span class="me-2"><i class="bi bi-intersect"></i></span>
                        <span>Departments</span>
                    </a>
                </li>

                <li class="nav-link bordered px-3">
                    <a href="programs.html" class="nav-link px-3">
                        <span class="me-2"><i class="bi bi-journal-text"></i></span>
                        <span>Program</span>
                    </a>
                </li>
                <li class="nav-link bordered px-3">
                    <a href="profile.html" class="nav-link px-3">
                        <span class="me-2"><i class="bi bi-person"></i></span>
                        <span>Profile</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
