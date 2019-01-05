
<style type="text/css">

  body{
    background: #f1f1f1;
    font-family: Segoe UI;
  }

  #back_btn{
    border-radius: 0px;
    float: right;
  }

  #back_btn a{
    color: white;
    text-decoration: none;
  }

</style>

<?php echo form_open(current_url()); ?>
  <div class="container-fluid" id="forgot_password-panel">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">

      <img src="<?php echo base_url()?>images/logo/aaci_logo.png" id="aaci_logo_fp"><br>

        <div class="panel panel-default" id="fp-panel">
          <div class="panel-body">
            <!-- <div class="row">
              <div class="col-md-12">
                <div class="alert alert-danger" id="error_message_forgot_password">
                  <button type="button" class="close" aria-hidden="true">&times;</button>
                  <strong><?php if(isset($forgot_password_error)): echo $forgot_password_error; ?><?php endif; ?></strong>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="alert alert-info" id="forgot_password_success">
                  <button type="button" class="close" aria-hidden="true">&times;</button>
                  <strong><?php if(isset($forgot_password_success)): echo $forgot_password_success; ?><?php endif; ?></strong>
                </div>
              </div>
            </div> -->

            <h4>Email Address</h4>
            <input type="text" name="eadd" id="eadd"  class="form-control" required>
            <small class="help-block">The entered email address must be the same with the email address used during registration.</small>
            <br/>

            <?php echo anchor('main', 'Back', 'class="btn btn-lg btn-hot", role="button", id="back_btn" '); ?>
            <input type="submit" name="btn-send" value="Send" class="btn btn-lg btn-cool" formnovalidate>

          </div>
        </div>
      </div>
      <div class="col-md-4"></div>
    </div>
  </div>


