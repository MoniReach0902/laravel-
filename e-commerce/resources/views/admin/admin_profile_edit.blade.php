@extends('admin.admin_master')
@section('admin')
    <div class="container-full">

        <!-- Main content -->
        <section class="content">

            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Admin Profile Edit</h4>

                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col">
                        <form novalidate="">
                            <div class="row">
                                <div class="col-12">
                                    {{-- <div class="form-group">
								<h5>Basic Text Input <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" name="text" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
								<div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
							</div> --}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Admin Username <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="name" class="form-control" required=""
                                                        data-validation-required-message="This field is required" value="{{$editData->name}}">
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Email <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="email" name="email" class="form-control" required=""
                                                        data-validation-required-message="This field is required" value="{{$editData->email}}">
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div c+lass="form-group">
                                        <h5>Profile Images <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" name="profile_photo_path" class="form-control" required="">
                                            <div class="help-block"></div>
                                        </div>
                                    </div>
                                        </div>
                                        <div class="col-md-6">
                                            <img src="{{!empty($editData->profile_photo_path)? url('upload/admin_images/'.$editData->profile_photo_path):url('uploads/no-images.jpg')}}" alt="" style="width: 100px;height: 100x;">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="text-xs-right">
                                    {{-- <button type="submit" class="">Submit</button> --}}
                                    <input type="button" value="Update" class="btn btn-rounded btn-info">
                                </div>
                            </div>
                        </form>

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->

            <!-- /.box -->


        </section>
        <!-- /.content -->
    </div>
@endsection
