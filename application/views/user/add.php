<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3>Tambah Data User</h3>
    </div>

    <div class="title_right">
      <!--<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                </span>
        </div>
      </div>-->
    </div>
  </div>
  <div class="clearfix"></div>

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <?=$backBtn?>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
              <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Settings 1</a>
                </li>
                <li><a href="#">Settings 2</a>
                </li>
              </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>-->
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">

          <form class="form-horizontal form-label-left" method="post" action="<?=$action?>" novalidate>

            <!--<p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
            </p>-->
            <span class="section">Personal Info</span>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nama" required="required" type="text">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Username <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="username" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="username" required="required" type="text">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Confirm Email <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="email" id="email2" name="confirm_email" data-validate-linked="email" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="item form-group">
              <label for="password" class="control-label col-md-3">Password <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="password" type="password" name="password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
              </div>
            </div>
            <div class="item form-group">
              <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Repeat Password <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="password2" type="password" name="password2" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Level <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="select2_single form-control" name="level" tabindex="-1" required="required">
                  <option></option>
                  <option value="Staff">Staff</option>
                  <option value="Member">Member</option>
                </select>
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Modul <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="select2_single form-control" name="id_modul" tabindex="-1" required="required">
                  <option></option>
                  <?php
                    foreach ($modul as $rs) {
                      echo '<option value="'.$rs->id_modul.'">'.$rs->nama_modul.'</option>';
                    }
                  ?>
                </select>
              </div>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-md-offset-3">
                <?=$backBtn?>
                <?=$saveBtn?>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>