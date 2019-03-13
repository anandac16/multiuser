<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3>Data Users</h3>
    </div>

    <div class="title_right">
      
    </div>
  </div>

  <div class="clearfix"></div>
  <?php
    $err = $this->session->flashdata('error');
    echo $err ? $err : '' ;
  ?>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <a class="btn btn-sm btn-flat btn-primary" href="<?=site_url('user/add')?>"><i class="fa fa-plus"></i> Tambah Data</a>
          <!--<h2>Default Example <small>Users</small></h2>-->
          <ul class="nav navbar-right panel_toolbox">
            <li>
              <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <!--<li>
              <a class="close-link"><i class="fa fa-close"></i></a>
            </li>-->
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <!--<p class="text-muted font-13 m-b-30">
            DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
          </p>-->
          <div class="table-responsive">
            <table id="datatable-id" class="table table-hover table-striped table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Username</th>
                  <th>Level</th>
                  <th>Modul</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
               <?php
               $no = 0;
                foreach ($data as $rs) {
                  $no++;
                  echo "<tr>
                          <td>$no</td>
                          <td>$rs->nama</td>
                          <td>$rs->email</td>
                          <td>$rs->username</td>
                          <td>$rs->level</td>
                          <td>$rs->nama_modul</td>
                          <td>

                              <a href='".site_url('user/edit/')."$rs->id_user' class='btn btn-sm btn-flat btn-success'><i class='fa fa-pencil' title='Edit Data ". $rs->username ."'></i></a>

                              <a href='javascript:void(0)' class='btn btn-sm btn-flat btn-danger' onclick='deleteData(".$rs->id_user.")'><i class='fa fa-trash' title='Delete Data ". $rs->username ."'></i></a>

                          </td>
                        </tr>
                        ";
                }
               ?> 
              </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>