@extends('Admin.index')
@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Form Admin</h3>
      </div>
    </div>

    <!-- Form Admin -->
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{ url('/UpdateAdmin',array($admins->id)) }}">
              {{ csrf_field()}}
              <fieldset>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Name <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="Nama" name="Nama" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $admins->Nama;?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12"> Email </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="Email" class="form-control col-md-7 col-xs-12" type="text" name="Email" value="<?php echo $admins->Email;?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Password<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                   <input id="Password" class="form-control col-md-7 col-xs-12" type="password" name="Password" required="required" value="<?php echo $admins->Password;?>">
                  </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button class="btn btn-primary" type="button">Cancel</button>
                    <button class="btn btn-primary" type="reset">Reset</button>
                    <button type="submit" class="btn btn-success">Update</button>
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>  
@endsection() 