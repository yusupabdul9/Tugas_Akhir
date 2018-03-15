<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Omega Tour</title>


    {!!Html::style('https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css')!!}
    <!-- Custom Theme Style -->
    {!!Html::style('//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css')!!}

    <!-- Bootstrap -->
    {!!Html::style('../vendors/bootstrap/dist/css/bootstrap.min.css')!!}
    <!-- Font Awesome -->
    {!!Html::style('../vendors/font-awesome/css/font-awesome.min.css')!!}
    <!-- NProgress -->
    {!!Html::style('../vendors/nprogress/nprogress.css')!!}

     <!-- iCheck -->
     {!!Html::style('../vendors/iCheck/skins/flat/green.css')!!}
     <!-- Datatables -->
     {!!Html::style('../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')!!}

     {!!Html::style('../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')!!}

     {!!Html::style('../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')!!}

     {!!Html::style('../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')!!}

     {!!Html::style('../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')!!}
    <!-- jQuery custom content scroller -->
    {!!Html::style('../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css')!!}
    <!-- Custom Theme Style -->
    {!!Html::style('../build/css/custom.min.css')!!}
    <!-- Animate.css -->
    {!!Html::style('../vendors/animate.css/animate.min.css')!!}

  </head>

<body class="nav-md">
   <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;" >
              <a href="index.html" class="site_title"><span>Omega Tour</span></a>
            </div>
            
            <div class="clearfix"></div>
    
            <br />

            <!-- sidebar menu -->
                @include('Admin.SideBar.SideBar')
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
                @include('Admin.Footer.MenuFooter')
            <!-- /menu footer buttons -->
            
          </div>
        </div>

        <!-- top navigation -->
            @include('Admin.Navigation.Navigation')
        <!-- /top navigation -->

        <!-- page content -->
            @yield('content')
        <!-- /page content -->

        <!-- footer content -->
            @include('Admin.Footer.FooterContent')
        <!-- /footer content -->
      </div>
    </div> 
    <!-- jQuery -->
    {!!Html::script('../vendors/jquery/dist/jquery.min.js')!!}
    <!-- Bootstrap -->
    {!!Html::script('../vendors/bootstrap/dist/js/bootstrap.min.js')!!}
    <!-- FastClick -->
    {!!Html::script('../vendors/fastclick/lib/fastclick.js')!!}
    <!-- NProgress -->
    {!!Html::script('../vendors/nprogress/nprogress.js')!!}
    <!-- iCheck -->
    {!!Html::script('../vendors/iCheck/icheck.min.js')!!}
    <!-- Datatables -->
    {!!Html::script('../vendors/datatables.net/js/jquery.dataTables.min.js')!!}

    {!!Html::script('../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')!!}

    {!!Html::script('../vendors/datatables.net-buttons/js/dataTables.buttons.min.js')!!}

    {!!Html::script('../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')!!}

    {!!Html::script('../vendors/datatables.net-buttons/js/buttons.flash.min.js')!!}

    {!!Html::script('../vendors/datatables.net-buttons/js/buttons.html5.min.js')!!}

    {!!Html::script('../vendors/datatables.net-buttons/js/buttons.print.min.js')!!}

    {!!Html::script('../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')!!}

    {!!Html::script('../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')!!}

    {!!Html::script('../vendors/datatables.net-responsive/js/dataTables.responsive.min.js')!!}
    
    {!!Html::script('../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')!!}

    {!!Html::script('../vendors/datatables.net-scroller/js/dataTables.scroller.min.js')!!}

    {!!Html::script('../vendors/jszip/dist/jszip.min.js')!!}

    {!!Html::script('../vendors/pdfmake/build/pdfmake.min.js')!!}

    {!!Html::script('../vendors/pdfmake/build/vfs_fonts.js')!!}
    <!-- jQuery custom content scroller -->
    {!!Html::script('../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')!!}

    <!-- Custom Theme Scripts -->
    {!!Html::script('../build/js/custom.min.js')!!}

    {!!Html::script('https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js')!!}

    @include('sweet::alert')
</body>
</html>
