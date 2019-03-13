

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <!-- Meta, title, CSS, favicons, etc. -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" href="<?=site_url('template/')?>production/images/user.png" type="image/ico" />
      <title><?=$title?></title>
      <!-- Bootstrap -->
      <link href="<?=site_url('template/')?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
      <!-- Font Awesome -->
      <link href="<?=site_url('template/')?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <!-- NProgress -->
      <link href="<?=site_url('template/')?>vendors/nprogress/nprogress.css" rel="stylesheet">
      <!-- iCheck -->
      <link href="<?=site_url('template/')?>vendors/iCheck/skins/flat/green.css" rel="stylesheet">
      <!-- bootstrap-progressbar -->
      <link href="<?=site_url('template/')?>vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
      <!-- JQVMap -->
      <link href="<?=site_url('template/')?>vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
      <!-- bootstrap-daterangepicker -->
      <link href="<?=site_url('template/')?>vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
      <!-- Datatables -->
      <link href="<?=site_url('template/')?>vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
      <link href="<?=site_url('template/')?>vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
      <link href="<?=site_url('template/')?>vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
      <link href="<?=site_url('template/')?>vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
      <link href="<?=site_url('template/')?>vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
      <!-- Custom Theme Style -->
      <link href="<?=site_url('template/')?>build/css/custom.min.css" rel="stylesheet">
   </head>
   <body class="nav-md">
      <div class="container body">
         <div class="main_container">
            <div class="col-md-3 left_col">
               <div class="left_col scroll-view">
                  <div class="navbar nav_title" style="border: 0;">
                     <a href="<?=site_url('')?>" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
                  </div>
                  <div class="clearfix"></div>
                  <!-- menu profile quick info -->
                  <div class="profile clearfix">
                     <div class="profile_pic">
                        <img src="<?=site_url('template/')?>production/images/img.jpg" alt="..." class="img-circle profile_img">
                     </div>
                     <div class="profile_info">
                        <span>Welcome,</span>
                        <h2><?=$userdata['nama']?></h2>
                     </div>
                  </div>
                  <!-- /menu profile quick info -->
                  <br />
                  <!-- sidebar menu -->
                  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                     <div class="menu_section">
                        <h3>General</h3>
                        <!--<ul class="nav side-menu">
                           <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                             <ul class="nav child_menu">
                               <li><a href="index.html">Dashboard</a></li>
                               <li><a href="index2.html">Dashboard2</a></li>
                               <li><a href="index3.html">Dashboard3</a></li>
                             </ul>
                           </li>
                           </ul> -->
                        <ul class="nav side-menu">
                           <?php
                              $uri = explode("/",uri_string());
                               foreach($menu['menu'] as $mn){
                                if($mn['linked']==$uri[0]){
                                   $classmenuaktif="class='active'";
                                }elseif(($uri[0]=='' OR $uri[0]=='home' OR $uri[0]== 'main')  AND $mn['linked']==''){
                              
                                   $classmenuaktif="class='active'";
                                }else{
                              
                                   $classmenuaktif="class='aa'";
                                }
                                $temp_active = "<li $classmenuaktif ><a href='{p1}'><i class='{p2}'></i>{p3}<span class='fa fa-chevron-down'></span></a>";
                                $temp_non = "<li $classmenuaktif ><a href='{p1}'><i class='{p2}'></i>{p3}</a></li>";
                                 $key = array_keys($mn['submenu'])[0];
                                 if($key){
                                  echo str_replace(array('{p1}','{p2}','{p3}'), array('#',$mn['icon'],$mn['menu']), $temp_active);
                                  echo "<ul class='nav child_menu'>\r\n";
                                   foreach($mn['submenu'] as $submenu){
                                       echo "<li><a href='#'>".$submenu['submenu']."</a></li>\r\n";
                                   }
                                   echo"</ul></li>\r\n";
                                 }else{
                                    echo str_replace(array('{p1}','{p2}','{p3}'), array($mn['linked'],$mn['icon'],$mn['menu']), $temp_non);
                                 }
                               }
                               ?>
                        </ul>
                     </div>
                  </div>
                  <!-- /sidebar menu -->
                  <!-- /menu footer buttons -->
                  <!--
                     <div class="sidebar-footer hidden-small">
                       <a data-toggle="tooltip" data-placement="top" title="Settings">
                         <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                       </a>
                       <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                         <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                       </a>
                       <a data-toggle="tooltip" data-placement="top" title="Lock">
                         <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                       </a>
                       <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                         <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                       </a>
                     </div> 
                     -->
                  <!-- /menu footer buttons -->
               </div>
            </div>
            <!-- top navigation -->
            <div class="top_nav">
               <div class="nav_menu">
                  <nav>
                     <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                     </div>
                     <ul class="nav navbar-nav navbar-right">
                        <li class="">
                           <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                           <img src="<?=site_url('template/')?>production/images/img.jpg" alt=""><?=$userdata['nama']?>
                           <span class=" fa fa-angle-down"></span>
                           </a>
                           <ul class="dropdown-menu dropdown-usermenu pull-right">
                              <li><a href="javascript:;"> Profile</a></li>
                              <li>
                                 <a href="javascript:;">
                                    <!--<span class="badge bg-red pull-right">50%</span>-->
                                    <span>Settings</span>
                                 </a>
                              </li>
                              <li><a href="javascript:;">Help</a></li>
                              <li><a href="<?=site_url('login/logout')?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                           </ul>
                        </li>
                        <li role="presentation" class="dropdown">
                           <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                           <i class="fa fa-envelope-o"></i>
                           <span class="badge bg-green"></span>
                           </a>
                           <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                           </ul>
                        </li>
                     </ul>
                  </nav>
               </div>
            </div>
            <!-- /top navigation -->
            <!-- page content -->
            <div class="right_col" role="main">
               <?php
                  $this->load->view($content);
                  ?>
            </div>
            <!-- /page content -->
            <!-- footer content -->
            <footer>
               <div class="pull-right">
                  Template by <a href="https://colorlib.com">Colorlib</a>
               </div>
               <div class="pull-left">
                  &copy; Backend by Firdy
               </div>
               <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
         </div>
      </div>
      <!-- jQuery -->
      <script src="<?=site_url('template/')?>vendors/jquery/dist/jquery.min.js"></script>
      <!-- Bootstrap -->
      <script src="<?=site_url('template/')?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
      <!-- FastClick -->
      <script src="<?=site_url('template/')?>vendors/fastclick/lib/fastclick.js"></script>
      <!-- NProgress -->
      <script src="<?=site_url('template/')?>vendors/nprogress/nprogress.js"></script>
      <!-- Chart.js -->
      <script src="<?=site_url('template/')?>vendors/Chart.js/dist/Chart.min.js"></script>
      <!-- gauge.js -->
      <script src="<?=site_url('template/')?>vendors/gauge.js/dist/gauge.min.js"></script>
      <!-- bootstrap-progressbar -->
      <script src="<?=site_url('template/')?>vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
      <!-- iCheck -->
      <script src="<?=site_url('template/')?>vendors/iCheck/icheck.min.js"></script>
      <!-- Skycons -->
      <script src="<?=site_url('template/')?>vendors/skycons/skycons.js"></script>\
      <!-- validator -->
      <script src="<?=site_url('template/')?>vendors/validator/validator.js"></script>
      <!-- Flot -->
      <script src="<?=site_url('template/')?>vendors/Flot/jquery.flot.js"></script>
      <script src="<?=site_url('template/')?>vendors/Flot/jquery.flot.pie.js"></script>
      <script src="<?=site_url('template/')?>vendors/Flot/jquery.flot.time.js"></script>
      <script src="<?=site_url('template/')?>vendors/Flot/jquery.flot.stack.js"></script>
      <script src="<?=site_url('template/')?>vendors/Flot/jquery.flot.resize.js"></script>
      <!-- Flot plugins -->
      <script src="<?=site_url('template/')?>vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
      <script src="<?=site_url('template/')?>vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
      <script src="<?=site_url('template/')?>vendors/flot.curvedlines/curvedLines.js"></script>
      <!-- DateJS -->
      <script src="<?=site_url('template/')?>vendors/DateJS/build/date.js"></script>
      <!-- JQVMap -->
      <script src="<?=site_url('template/')?>vendors/jqvmap/dist/jquery.vmap.js"></script>
      <script src="<?=site_url('template/')?>vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
      <script src="<?=site_url('template/')?>vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
      <!-- bootstrap-daterangepicker -->
      <script src="<?=site_url('template/')?>vendors/moment/min/moment.min.js"></script>
      <script src="<?=site_url('template/')?>vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
      <!-- Datatables -->
      <script src="<?=site_url('template/')?>vendors/datatables.net/js/jquery.dataTables.min.js"></script>
      <script src="<?=site_url('template/')?>vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
      <script src="<?=site_url('template/')?>vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
      <script src="<?=site_url('template/')?>vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
      <script src="<?=site_url('template/')?>vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
      <script src="<?=site_url('template/')?>vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
      <script src="<?=site_url('template/')?>vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
      <script src="<?=site_url('template/')?>vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
      <script src="<?=site_url('template/')?>vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
      <script src="<?=site_url('template/')?>vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
      <script src="<?=site_url('template/')?>vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
      <script src="<?=site_url('template/')?>vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
      <script src="<?=site_url('template/')?>vendors/jszip/dist/jszip.min.js"></script>
      <script src="<?=site_url('template/')?>vendors/pdfmake/build/pdfmake.min.js"></script>
      <script src="<?=site_url('template/')?>vendors/pdfmake/build/vfs_fonts.js"></script>
      <!-- Custom Theme Scripts -->
      <script src="<?=site_url('template/')?>build/js/custom.min.js"></script>
      <script type="text/javascript">
         window.setTimeout(function() {
         $(".alert").fadeTo(300, 0).slideUp(300, function(){
             $(this).remove(); 
         });
         }, 2000);   
      </script>
      <script type="text/javascript">
         $(document).ready( function () {
           $('#datatable-id').DataTable( {
             dom: 'Bfrtip',
             "buttons": [
                 'csv', 'excel', 'pdf', 'print'
             ]
             
           });
         });
         
      </script>
      <script src="<?php echo base_url('template/vendors/sweetalert/sweetalert.min.js'); ?>"></script>
      <script type="text/javascript">
         function reload_table()
         {
             history.go(0);
         
         }
         
         
         function deleteData(id)
         {
             swal({
                 title: "Anda yakin?",
                 text: "Data yang telah dihapus tidak dapat dikembalikan!",
                 icon: "warning",
                 buttons: true,
                 dangerMode: true,
             })
             .then((willDelete) => {
             if (willDelete) {
         
                 ctrl = "<?= $this->uri->segment(1) ?>";
                 $.ajax({
                     url : "<?php echo site_url(); ?>"+ctrl+"/delete/"+id,
                     type: "POST",
                     dataType: "JSON",
                     success: function(data)
                     {
                       
                         swal("Data berhasil dihapus!",{icon:"success"});
                         setTimeout(function() {
                             reload_table();
                         }, '650');
                     },
                     error: function (jqXHR, textStatus, errorThrown)
                     {
                         swal("Error saat hapus data!",{icon:"warning"});
                     }
                 });
             
             }else {
         
               swal("Data Aman!",{icon:"success"});
               setTimeout(function() {
                   reload_table();
               }, '700');
             
             }
           });
         }
      </script>
   </body>
</html>

