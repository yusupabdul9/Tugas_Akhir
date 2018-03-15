    
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Tambah </h4>
          </div>
          <br>
          <!-- Form Admin -->
          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{ url('Admin/insertAdmin') }}">
            {{ csrf_field()}}
            
              <!-- field yang ada  -->
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
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Password<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="Password" class="form-control col-md-7 col-xs-12" type="password" name="Password" required="required">
                </div>
              </div>
                <!-- field yang ada  -->
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