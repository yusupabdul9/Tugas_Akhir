@extends('Admin.index')
@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Data Paket Wisata</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="table-responsive">
              <button type="button" class="btn btn-primary submit pull-right" data-toggle="modal" data-target=".bs-example-modal-lg">
              <i class="fa fa-user-plus"></i>Tambah</button> 
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Tambah Paket Wisata</h4>
          </div>
          <br>
          <!-- Form Admin -->
          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{ url('#') }}">
            <!-- {{ csrf_field()}} -->
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Name <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="Nama" name="Nama" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12"> Email
                <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="Email" class="form-control col-md-7 col-xs-12" type="text" name="Email" required="required">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Username <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="Username" name="Username" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Password<span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="Password" class="form-control col-md-7 col-xs-12" type="password" name="Password" required="required">
              </div>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" class="btn btn-success">Save</button>
                <button type="button" class="btn btn-primary">Cancel</button>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </form>          
        </div>
      </div>
    </div>


    <!-- <Table> -->
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <div class="table-responsive">
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                  <tr class="headings">
                    <th class="column-title">Id</th>
                    <th class="column-title"></th>
                    <th class="column-title"></th>
                    <th class="column-title"></th>
                    <th class="column-title"></th>
                    <th class="column-title no-link last" align="pull-right"><span class="nobr">Action</span>
                    </th>
                  </tr>
                </thead>
                <tbody>
                      <tr class="even pointer">
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td class=" last">
                          <a href='{{ url("#") }}' class="btn btn-success btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>
                          <a href='{{ url("#") }}' class="btn btn-danger btn-sm""><span class="glyphicon glyphicon-remove"></span></a>
                        </td>
                      </tr>
                </tbody>
              </table>
            </div>            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>  
@endsection()