@extends('layouts.app')
@section('content')
    

<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

 

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
               
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
      
             <span class="badge " style="color:black">Hi! {{ Auth::user()->name }}</span>  
          </a>
        
        </li>
        <li class="nav-item dropdown">
     
          <a class="nav-link" data-toggle="dropdown" href="">
           
            <i class="far fa-user"></i> 
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right"> 
            <div class="dropdown-divider"></div>
            <a href="profile" class="dropdown-item"  data-toggle="modal" data-target="#modal-profile">
              <i class="fas fa-user"></i> my Profile
             
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal-changepassword">
              <i class="fas fa-pen mr-2"></i>Change Password
             
            </a>
         
            {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> --}}
              <a class="dropdown-item" href=" "
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                     <i class="fas fa-sign-out-alt mr-2"></i>logout
              </a>

              <form id="logout-form" action="{{ route('logout')}}" method="POST" class="d-none">
                  @csrf
              </form> 
          </div>
            
            
        </li>
    
      </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
 
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
    
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
       
          </li>
       
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link"  data-toggle="modal" data-target="#modal-admin">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Add Information
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           
          </li>
 
          <li class="nav-item has-treeview">
            <a href="manage-user" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Manage users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           
          </li> 
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Users </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid"> 
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">  User Infomation</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id=" " class="table table-bordered table-striped">
                            <thead>
                            <tr> 
                              <th>first name</th> 
                              <th>last name</th>  
                              <th>location </th> 
                              <th>photo </th> 
                           
                              <th>Action </th>
                          
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $user_data)
                              <tr>
                                <td>{{ $user_data->first_name }}</td>
                                <td>{{ $user_data->last_name }}</td>
                                <td>{{ $user_data->location }}</td> 
                                <td><img src="/profile/{{$user_data->photo  }}" style="height:70px; width:70px;"></td>
                                <td class="text-right py-0 align-middle">
                                  <div class="btn-group btn-group-sm">
                                  <a href="#" class="btn btn-warning" data-id="'.$data->id.'" data-toggle="modal" data-target="#modal-user_update{{ $user_data->id }}"><i class="fas fa-pen"></i></a> 
                                  <a  id="deleteuser" data-id="'.$data->id.'"  href="/delete-user{{$user_data->id}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                  </div>
                                 </td>
                              </tr>
                            @endforeach
                               
                              
                              </tbody>
                           
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
       
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
          </section>
        
 
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
 @include('partial.modal')
  <!-- Main Footer -->
  <footer class="main-footer">
  
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      
    </div>
  </footer>
</div>
<!-- ./wrapper -->
@endsection
 
