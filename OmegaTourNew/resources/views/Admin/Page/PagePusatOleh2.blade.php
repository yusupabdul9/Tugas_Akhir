@extends('Admin.index')
@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Form Pusat Oleh-Oleh</h3>
      </div>
    </div>

    <!-- Form Admin -->
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Form Design <small>different form elements</small></h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Middle Name / Initial</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div id="gender" class="btn-group" data-toggle="buttons">
                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                      <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                    </label>
                    <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                      <input type="radio" name="gender" value="female"> Female
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button class="btn btn-primary" type="button">Cancel</button>
                  <button class="btn btn-primary" type="reset">Reset</button>
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- <Table> -->
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Table design <small>Custom design</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <!-- Untuk searcing -->
                <div class="title_right">
                  <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                      </span>
                    </div>
                  </div>
                </div>
            <!-- Untuk searcing -->
          <div class="x_content">
            <div class="table-responsive">
              <table class="table table-striped jambo_table bulk_action">
                <thead>
                  <tr class="headings">
                    <th>
                      <input type="checkbox" id="check-all" class="flat">
                    </th>
                    <th class="column-title">Invoice </th>
                    <th class="column-title">Invoice Date </th>
                    <th class="column-title">Order </th>
                    <th class="column-title">Bill to Name </th>
                    <th class="column-title">Status </th>
                    <th class="column-title">Amount </th>
                    <th class="column-title no-link last"><span class="nobr">Action</span>
                    </th>
                    <th class="bulk-actions" colspan="7">
                      <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="even pointer">
                    <td class="a-center ">
                      <input type="checkbox" class="flat" name="table_records">
                    </td>
                    <td class=" ">121000040</td>
                    <td class=" ">May 23, 2014 11:47:56 PM </td>
                    <td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i></td>
                    <td class=" ">John Blank L</td>
                    <td class=" ">Paid</td>
                    <td class="a-right a-right ">$7.45</td>
                    <td class=" last"><a href="#">View</a>
                    </td>
                  </tr>
                  <tr class="odd pointer">
                    <td class="a-center ">
                      <input type="checkbox" class="flat" name="table_records">
                    </td>
                    <td class=" ">121000039</td>
                    <td class=" ">May 23, 2014 11:30:12 PM</td>
                    <td class=" ">121000208 <i class="success fa fa-long-arrow-up"></i>
                    </td>
                    <td class=" ">John Blank L</td>
                    <td class=" ">Paid</td>
                    <td class="a-right a-right ">$741.20</td>
                    <td class=" last"><a href="#">View</a>
                    </td>
                  </tr>
                  <tr class="even pointer">
                    <td class="a-center ">
                      <input type="checkbox" class="flat" name="table_records">
                    </td>
                    <td class=" ">121000038</td>
                    <td class=" ">May 24, 2014 10:55:33 PM</td>
                    <td class=" ">121000203 <i class="success fa fa-long-arrow-up"></i>
                    </td>
                    <td class=" ">Mike Smith</td>
                    <td class=" ">Paid</td>
                    <td class="a-right a-right ">$432.26</td>
                    <td class=" last"><a href="#">View</a>
                    </td>
                  </tr>
                  <tr class="odd pointer">
                    <td class="a-center ">
                      <input type="checkbox" class="flat" name="table_records">
                    </td>
                    <td class=" ">121000037</td>
                    <td class=" ">May 24, 2014 10:52:44 PM</td>
                    <td class=" ">121000204</td>
                    <td class=" ">Mike Smith</td>
                    <td class=" ">Paid</td>
                    <td class="a-right a-right ">$333.21</td>
                    <td class=" last"><a href="#">View</a>
                    </td>
                  </tr>
                  <tr class="even pointer">
                    <td class="a-center ">
                      <input type="checkbox" class="flat" name="table_records">
                    </td>
                    <td class=" ">121000040</td>
                    <td class=" ">May 24, 2014 11:47:56 PM </td>
                    <td class=" ">121000210</td>
                    <td class=" ">John Blank L</td>
                    <td class=" ">Paid</td>
                    <td class="a-right a-right ">$7.45</td>
                    <td class=" last"><a href="#">View</a>
                    </td>
                  </tr>
                  <tr class="odd pointer">
                    <td class="a-center ">
                      <input type="checkbox" class="flat" name="table_records">
                    </td>
                    <td class=" ">121000039</td>
                    <td class=" ">May 26, 2014 11:30:12 PM</td>
                    <td class=" ">121000208 <i class="error fa fa-long-arrow-down"></i>
                    </td>
                    <td class=" ">John Blank L</td>
                    <td class=" ">Paid</td>
                    <td class="a-right a-right ">$741.20</td>
                    <td class=" last"><a href="#">View</a>
                    </td>
                  </tr>
                  <tr class="even pointer">
                    <td class="a-center ">
                      <input type="checkbox" class="flat" name="table_records">
                    </td>
                    <td class=" ">121000038</td>
                    <td class=" ">May 26, 2014 10:55:33 PM</td>
                    <td class=" ">121000203</td>
                    <td class=" ">Mike Smith</td>
                    <td class=" ">Paid</td>
                    <td class="a-right a-right ">$432.26</td>
                    <td class=" last"><a href="#">View</a>
                    </td>
                  </tr>
                  <tr class="odd pointer">
                    <td class="a-center ">
                      <input type="checkbox" class="flat" name="table_records">
                    </td>
                    <td class=" ">121000037</td>
                    <td class=" ">May 26, 2014 10:52:44 PM</td>
                    <td class=" ">121000204</td>
                    <td class=" ">Mike Smith</td>
                    <td class=" ">Paid</td>
                    <td class="a-right a-right ">$333.21</td>
                    <td class=" last"><a href="#">View</a>
                    </td>
                  </tr>
                  <tr class="even pointer">
                    <td class="a-center ">
                      <input type="checkbox" class="flat" name="table_records">
                    </td>
                    <td class=" ">121000040</td>
                    <td class=" ">May 27, 2014 11:47:56 PM </td>
                    <td class=" ">121000210</td>
                    <td class=" ">John Blank L</td>
                    <td class=" ">Paid</td>
                    <td class="a-right a-right ">$7.45</td>
                    <td class=" last"><a href="#">View</a>
                    </td>
                  </tr>
                  <tr class="odd pointer">
                    <td class="a-center ">
                      <input type="checkbox" class="flat" name="table_records">
                    </td>
                    <td class=" ">121000039</td>
                    <td class=" ">May 28, 2014 11:30:12 PM</td>
                    <td class=" ">121000208</td>
                    <td class=" ">John Blank L</td>
                    <td class=" ">Paid</td>
                    <td class="a-right a-right ">$741.20</td>
                    <td class=" last"><a href="#">View</a>
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
</div>  
@endsection()     
