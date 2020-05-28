<div class="main-container">
  <div class="main-content">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">
        <div class="login-container">
          <div class="center">
            <h1>
              <span class="white">Register</span>

            </h1>

          </div>

          <div class="space-6"></div>

          <div class="position-relative">
            <div id="login-box" class="login-box visible widget-box no-border">
              <div class="widget-body">
                <div class="widget-main">

                  <div class="space-6"></div>
                  <form method="post" action="<?php echo base_url('Auth/register'); ?>">


                    <div class="form-group">
                      <span class="block input-icon input-icon-right">
                        <input type="text" class="form-control" placeholder="Nama Lengkap" name="name1" id="name1" />
                        <i class="ace-icon fa fa-user"></i>
                        <?php echo form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                      </span>
                    </div>

                    <div class="form-group">
                      <span class="block input-icon input-icon-right">
                        <input type="text" class="form-control" placeholder="Username" name="username" id="username" />
                        <i class="ace-icon fa fa-user"></i>
                        <?php echo form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                      </span>
                    </div>

                    <div class="form-grou row">
                      <div class="col-sm-6">
                        <span class="block input-icon input-icon-right">
                          <input type="password" class="form-control" placeholder="Password" name="password1" id="password2" />
                          <i class="ace-icon fa fa-lock"></i>
                          <?php echo form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                        </span>
                      </div>

                      <div class="col-sm-6">
                        <span class="block input-icon input-icon-right">
                          <input type="password" class="form-control" placeholder="Confirm Password" name="password2" id="password2" />
                          <i class="ace-icon fa fa-lock"></i>
                          <?php echo form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                        </span>
                      </div>
                    </div>
                    <div class="space"></div>

                    <div class="clearfix">


                      <button type="submit" class="width-45 btn btn-sm btn-danger">
                        <i class="ace-icon fa fa-pencil"></i>
                        <span class="bigger-110">Daftar</span>
                      </button>

                    </div>

                    <div class="space-4"></div>
                    <a class="small" href="<?php echo base_url('auth') ?>">Punya akun? Masuk disini!</a>

                  </form>



                  <div class="space-6"></div>


                </div>


              </div>
            </div>


          </div>

        </div>
      </div>
    </div>
  </div>
</div>