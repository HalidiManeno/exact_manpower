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
                                            placeholder="first name">
                                        <span class="text-danger" id="lastname-error"></span>
                                    </div>
                                </div>
                          
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">last name</label>
                                        <input type="text" name="last_name" class="form-control" id="lastname"
                                            placeholder="last name">
                                        <span class="text-danger" id="lastname-error"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Location</label>
                                        <input type="text" name="location" class="form-control" id="lastname"
                                            placeholder="location">
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
@foreach (App\Models\PersonDetail::all() as $user_data)
<div class="modal fade" id="modal-admin_update{{$user_data->id }}">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header ">
                <h4 class="modal-title " style="text-center">user Information</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>https://github.com/HalidiManeno/exact
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
                                            placeholder="first name">
                                        <span class="text-danger" id="lastname-error"></span>
                                    </div>
                                </div>
                          
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">last name</label>
                                        <input type="text" name="last_name" class="form-control" id="lastname"
                                            placeholder="last name">
                                        <span class="text-danger" id="lastname-error"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Location</label>
                                        <input type="text" name="location" class="form-control" id="lastname"
                                            placeholder="location">
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