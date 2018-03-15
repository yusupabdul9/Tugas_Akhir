@extends('Admin.index')
@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          
          <div class="x_title">
            <h2> Data Admin </h2>
            <div class="clearfix"></div>
          </div>

          <div class="x_content">
            <div class="table-responsive">
              <!-- <a class="btn btn-primary submit pull-right" href="{{ url('/CreateAdmin')}}">
                <i class="fa fa-user-plus"></i> <label> Tambah </label>
              </a> -->
              <button type="button" class="btn btn-primary submit pull-right" data-toggle="modal" data-target=".bs-example-modal-lg">
              <i class="fa fa-user-plus"></i>Tambah</button> 
                        
            </div>            
          </div>
        </div>
      </div>
    </div>

     <!-- Form Admin -->
     @include('Admin.PopUp.Popup')
    
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
                    <th class="column-title">Id_admin</th>
                    <th class="column-title">Nama Admin</th>
                    <th class="column-title">Email</th>
                    <th class="column-title">Password</th>
                    <th class="column-title no-link last" align="pull-right"><span class="nobr">Action</span>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @if(count($admins) > 0) 
                    @foreach($admins->all() as $admin)
                      <tr class="even pointer">
                        <td >ADM{{ $admin -> id}}</td>
                        <td >{{ $admin -> name}}</td>
                        <td >{{ $admin -> email}}</td>
                        <td >{{ $admin -> password}}</td>
                        <td class=" last">
                          <a href='{{ url("Admin/SearchAdmin/{$admin->id}") }}' class="btn btn-success btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>
                          <a href='{{ url("Admin/DeleteAdmin/{$admin->id}") }}' class="btn btn-danger btn-sm""><span class="glyphicon glyphicon-remove"></span></a>
                        </td>
                      </tr>
                    @endforeach
                  @endif
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
