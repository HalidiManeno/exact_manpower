<div class="modal fade" id="modal-admin">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header ">
                <h4 class="modal-title " style="text-center">user Information</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card card-primary">
                    <form id=" " enctype="multipart/form-data" action="/add-users" method="post">
                    @csrf
                        <div class="card-body">
                            <input type="hidden" name="public" value="1" class="form-control" id="" placeholder="">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">First name</label>
                                        <input type="text" name="first_name" class="form-control" id="lastname"
                                            placeholder="first name" required>
                                        <span class="text-danger" id="lastname-error"></span>
                                    </div>
                                </div>
                          
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">last name</label>
                                        <input type="text" name="last_name" class="form-control" id="lastname"
                                            placeholder="last name" required>
                                        <span class="text-danger" id="lastname-error"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Location</label>
                                        <input type="text" name="location" class="form-control" id="lastname"
                                            placeholder="location" required>
                                        <span class="text-danger" id="lastname-error"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Profile Photo</label>
                                        <input type="file" name="photo" class="form-control" id="file" required>
                                        <span class="text-danger" id="position-error"></span>
                                    </div>
                                </div>
                             
                            </div>
                       
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                    </form>
                </div>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@foreach (App\Models\PersonDetail::all() as $user_data)
<div class="modal fade" id="modal-user_update{{ $user_data->id }}">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header ">
                <h4 class="modal-title " style="text-center">user Information</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card card-primary">
                    <form id=" " enctype="multipart/form-data" action="/update-user" method="post">
                    @csrf
                        <div class="card-body">
                            <input type="hidden" name="user_id" value="{{$user_data->id}}" class="form-control" id="" placeholder="">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">First name</label>
                                        <input type="text" name="first_name" class="form-control" id="lastname"
                                            placeholder="first name" value="{{ $user_data->first_name }}">
                                        <span class="text-danger" id="lastname-error"></span>
                                    </div>
                                </div>
                          
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">last name</label>
                                        <input type="text" name="last_name" class="form-control" id="lastname"
                                            placeholder="last name" value="{{ $user_data->last_name }}">
                                        <span class="text-danger" id="lastname-error"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Location</label>
                                        <input type="text" name="location" class="form-control" id="lastname"
                                            placeholder="location" value="{{ $user_data->location }}">
                                        <span class="text-danger" id="lastname-error"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Profile Photo</label>
                                        <input type="file" name="photo" class="form-control" id="file">
                                        <span class="text-danger" id="position-error"></span>
                                    </div>
                                </div>
                             
                            </div>
                       
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                    </form>
                </div>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endforeach
<div class="modal fade" id="modal-profile">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header ">
                <h4 class="modal-title " style="text-center">My account</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                   <div class="col-md-4">
                    <div class="card  card-outline">
                        <div class="card-body box-profile">
                          <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle"
                                 src="/../../dist/img/avatar.png"
                                 alt="User profile picture">
                          </div>
          
                          <h3 class="profile-username text-center">{{Auth::user()->name}}</h3>
          
                          <p class="text-muted text-center " style="color:red"> </p> 
                  
                        </div>
                        <!-- /.card-body -->
                      </div>
                   </div>
                   <div class="col-md-8">
                    <div class="card card-primary">
                        <form id="register-profile" enctype="multipart/form-data" action="update-profile" method="post">
                        @csrf
                            <div class="card-body">
                                <input type="hidden" name="public" value="1" class="form-control" id="" placeholder="">
                                <div class="row">
    
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Username</label>
                                            <input type="text" name="name" value="{{ Auth::user()->name }} " class="form-control" id="lastname"
                                                placeholder="product name">
                                            <span class="text-danger" id="lastname-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="text" name="email"  value="{{ Auth::user()->email}} " class="form-control" id="lastname"
                                                placeholder="product name">
                                            <span class="text-danger" id="lastname-error"></span>
                                        </div>
                                    </div> 
                                </div>
                           
                            </div>
                            <!-- /.card-body -->
                            <div class="row" id="messag"></div>
                            <div class="card-footer">
                                <button class="btn btn-primary " id="register-profile-btn" type="submit">save
                                    change</button>
                               
                            </div>
                            <div class="form-group">
                                <b><span class="text-success" id="success-message"> </span><b>
                            </div>
                        </form>
                    </div>
                  </div>
                </div>
              
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="modal-changepassword">
    <div class="modal-dialog  modal-sm">
        <div class="modal-content">
            <div class="modal-header ">
                <h4 class="modal-title " style="text-center">update Password</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card card-primary">
                    <form id="change-password" enctype="multipart/form-data" action="change-password" method="post">
                    @csrf
                        <div class="card-body">
                            <input type="hidden" name="public" value="1" class="form-control" id="" placeholder="">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">current password</label>
                                        <input type="password" name="current_password" class="form-control" id="lastname"
                                            >
                                        <span class="text-danger" id="lastname-error"></span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">new password</label>
                                        <input type="password" name="password" class="form-control" id="lastname"
                                            >
                                        <span class="text-danger" id="lastname-error"></span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">confirm password</label>
                                        <input  id="password-confirm"  type="password" name="password_confirmation" class="form-control" id="lastname"
                                           >
                                        <span class="text-danger" id="lastname-error"></span>
                                    </div>
                                </div>
                              
                              
                             
                            </div>
                       
                        </div>
                        <!-- /.card-body -->
                        <div class="row" id="messag"></div>
                        <div class="card-footer">
                            <button class="btn btn-primary " id="change-password-btn" type="submit">save
                                change</button>
                            <button type="" class="btn btn-secondary" data-dismiss="modal">close</button>
                        </div>
                        <div class="form-group">
                            <b><span class="text-success" id="success-message"> </span><b>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div> 