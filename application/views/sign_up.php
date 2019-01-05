
<style type="text/css">

  body{
    background: #f1f1f1;
    font-family: Segoe UI;
  }

  #back_btn{
    border-radius: 0px;
  }

  #back_btn a{
    color: white;
    text-decoration: none;
  }
  small{
    font-size: 9px;
  }

</style>

<?php echo form_open(current_url()); ?>
  <div class="container" id="sign_up-panel">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">

      <img src="<?php echo base_url()?>images/logo/aaci_logo.png" id="aaci_logo_su"><br>

        <div class="panel panel-default" id="su-panel">
          <div class="panel-body">
            <div class="row">
              <!-- <div class="col-md-12">
                <div class="alert alert-danger" id="error_message_sign_up">
                  <button type="button" class="close" aria-hidden="true">&times;</button>
                  <strong><?php if(isset($sign_up_error)): echo $sign_up_error; ?><?php endif; ?></strong>
                </div>
              </div> -->
            </div>
            
            <div class="form-group">
              <h4>Username</h4>
              <input type="text" name="uname" id="sign_up_uname" value="<?php echo $this->input->post('uname'); ?>" class="form-control" required>
              <p class="help-block">Ex. Firstname.Lastname (juan.delacruz)</p>
            </div>
            
            <div class="form-group">
              <h4>Email Address</h4>
              <input type="text" name="eadd" value="<?php echo $this->input->post('eadd'); ?>" class="form-control" required> 
            </div>
          
            <div class="form-group">
              <h4>Fullname</h4>
              <input type="text" name="fullname" value="<?php echo $this->input->post('fullname'); ?>" class="form-control" required>
            </div>
            
            <br/>

            <?php echo anchor('main', 'Back', 'class="btn btn-lg btn-hot", role="button", id="back_btn" '); ?>
            <input type="submit" name="btn-register" value="Register" class="btn btn-lg btn-cool" formnovalidate>

          </div>
        </div>
      </div>
      <div class="col-md-4"></div>
    </div>

  </div>
