<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="{{route('dashboard')}}"> <img alt="image" src="{{ asset('assets/img/logo.png') }}" class="header-logo" /> <span
          class="logo-name">Edusys360</span>
        </a>
      </div>
      <ul class="sidebar-menu">
        <li class="dropdown {{ ($route=='dashboard')?'active':'' }}">
          <a href="{{ route('dashboard') }}" class="nav-link"><i data-feather="home"></i>
            <span>Dashboard</span></a>
        </li> 
        <li class="dropdown {{ ($prefix=='/academicyear')?'active':'' }} ">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i
            data-feather="calendar"></i><span>School Year</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('view.year') }}">View Year</a></li>
            <li><a class="nav-link" href="{{ route('add.year') }}">Add Year</a></li>
          </ul>
        </li>
        <li class="dropdown {{ ($prefix=='/course')?'active':'' }} ">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i
            data-feather="book-open"></i><span>Course</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('view.subjects') }}">View Subjects</a></li>
            <li><a class="nav-link" href="{{ route('add.subject') }}">Add Subject</a></li>
          </ul>
        </li>
        <li class="dropdown {{ ($prefix=='/class')?'active':'' }} ">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i
            data-feather="grid"></i><span>Classroom</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('view.class') }}">View Classes</a></li>
            <li><a class="nav-link" href="{{ route('add.class') }}">Add Class</a></li>
            <li><a class="nav-link" href="{{ route('view.assign.subjects') }}">Assign Subjects</a></li>
          </ul>
        </li>
        <li class="dropdown {{ ($prefix=='/exam')?'active':'' }} ">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i
            data-feather="file-text"></i><span>Exam</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('view.exam.model') }}">View Exam Model</a></li>
            <li><a class="nav-link" href="{{ route('add.exam.model') }}">Add Exam Model</a></li>
          </ul>
        </li>
        <li class="dropdown {{ ($prefix=='/fee')?'active':'' }} ">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i
            data-feather="dollar-sign"></i><span>Fee Category</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('view.fee.category') }}">Fee Categories</a></li>
            <li><a class="nav-link" href="{{ route('view.fee.amount') }}">Fee Amount</a></li>
          </ul>
        </li>
        <li class="dropdown {{ ($prefix=='/users')?'active':'' }} ">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i
            data-feather="users"></i><span>Users</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('view.user') }}">View Users</a></li>
            <li><a class="nav-link" href="{{ route('add.user') }}">Add User</a></li>
          </ul>
        </li>
        {{-- <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="copy"></i><span>Basic
            Components</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="alert.html">Alert</a></li>
            <li><a class="nav-link" href="badge.html">Badge</a></li>
            <li><a class="nav-link" href="breadcrumb.html">Breadcrumb</a></li>
            <li><a class="nav-link" href="buttons.html">Buttons</a></li>
          </ul>
        </li> --}}
      </ul>  
    </aside>
  </div>