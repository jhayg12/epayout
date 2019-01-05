
<style type="text/css">

  body{
    background: #f1f1f1;
    font-family: Segoe UI;
  }

  #sign_up{
    width: 100%;
    text-align: center;
    margin-top: -10px;
  }

  #sign_up label{
    font-weight: normal;
  }

  .forgot_password{
    margin-top: -15px;
  }

</style>

<?php echo form_open(current_url()); ?>
<div class="container" id="login-panel">

    <div class="row">
    	<div class="col-md-4"></div>
      	<div class="col-md-4">
	      	<img src="<?php echo base_url()?>images/logo/aaci_logo.png" id="aaci_logo_login"><br>

	      	<?php if(isset($error)): ?>
	      	<div class="bs-callout bs-callout-warning">
				<p><b>ERROR:</b> <?php echo $error; ?></p>
			</div>
			<?php endif; ?>

			<?php if(validation_errors()): ?>
	      	<div class="bs-callout bs-callout-warning">
				<p><b>ERROR:</b> <?php echo validation_errors(); ?></p>
			</div>
			<?php endif; ?>

	        <div class="panel panel-default" id="log_panel">
	          	<div class="panel-body">
	  				
	  				<div class="form-group">
	  					<h4>Username</h4>
	            		<input type="text" name="uname" id="login_uname" value="<?php echo $this->input->post('uname'); ?>" class="form-control" required>
	  				</div>
	            	
	            	<div class="form-group">
	            		<h4>Password</h4>
	            		<input type="password" name="pword" id="login_pwd" value="<?php echo $this->input->post('pword'); ?>" class="form-control" required>
	            	</div>
	            	
	 	        	<div class="forgot_password">
	              		<small><?php echo anchor('main/forgot_password', 'Forgot Password?'); ?></small>
	            	</div><br>

	            	<input type="submit" name="btn-login" value="Login" class="btn btn-lg btn-cool" id="login" formnovalidate>

	          	</div>
	        </div>
	        <!--<div class="row">
	          	<div class="col-md-12" id="sign_up">
	            	<label>Doesn't have an account?</label>
	            	<?php echo anchor('main/sign_up', 'Sign Up Here!'); ?>
	        	</div>
	      	</div>-->
    	</div>
    	<div class="col-md-4"></div>
	</div>
</div>

