<div class="main-container">
  <div class="main-content">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">
        <div class="login-container">
          <div class="center">
            <h1>

              <span class="white">Login</span>

            </h1>

          </div>

          <div class="space-6"></div>

          <div class="position-relative">
            <div id="login-box" class="login-box visible widget-box no-border">
              <div class="widget-body">
                <div class="widget-main">
                  <?php echo $this->session->flashdata('message') ?>
                  <div class="space-6"></div>

                  <form method="post" action="<?php echo base_url('Auth'); ?>">

                    <div class="block clearfix form-group">
                      <span class="block input-icon input-icon-right">
                        <input type="text" class="form-control" placeholder="Username" name="username" id="username" />
                        <i class="ace-icon fa fa-user"></i>
                        <?php echo form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                      </span>
                    </div>

                    <div class="block clearfix form-group">
                      <span class="block input-icon input-icon-right">
                        <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
                        <i class="ace-icon fa fa-lock"></i>
                        <?php echo form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                      </span>
                    </div>

                    <div class="space"></div>

                    <div class="clearfix">

                      <button type="submit" class="width-45 pull-left btn btn-sm btn-primary">
                        <i class="ace-icon fa fa-key"></i>
                        <span class="bigger-110">Login</span>
                      </button>
                    </div>
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