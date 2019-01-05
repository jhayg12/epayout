<!DOCTYPE html>
<html>
    
    <head>
        <title>AAIS - Add User</title>
        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>third_party/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url(); ?>third_party/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url(); ?>third_party/assets/styles.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url(); ?>third_party/assets/DT_bootstrap.css" rel="stylesheet" media="screen">
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="vendors/flot/excanvas.min.js"></script><![endif]-->
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="<?php echo base_url(); ?>third_party/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>

        <style type="text/css">
            body, html, table, span, select, input, textarea, button{
                font-family: Segoe UI;
            }
        </style>

    </head>
    
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">AAIS</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                            
                                <?php if (isset($userdata)): foreach ($userdata as $usr): ?>
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> <?php echo $usr->memb__username; ?> <i class="caret"></i>
                                <?php endforeach; ?>
                                <?php endif; ?>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="<?php echo site_url('main/change_password/'.$this->uri->segment(3)); ?>">Change Password</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="<?php echo site_url('main/logout'); ?>">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li>
                                <a href="<?php echo site_url('main/dashboard'); ?>">Dashboard</a>
                            </li>

                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Modules <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">

                                    <?php if (!$no_auth_sales): ?>
                                    <li class="dropdown-submenu">
                                        <a tabindex="-1" href="<?php echo site_url('main/sales_dashboard'); ?>">Sales</a>
                                        <ul class="dropdown-menu">
                                          <li><a href="<?php echo site_url('main/sales_customer_profile'); ?>">Customer Profile</a></li>
                                          <li><a href="<?php echo site_url('main/sales_delivery_ins'); ?>">Create Delivery Instructions</a></li>
                                        </ul>
                                    </li>
                                    <?php endif; ?>

                                    <?php if (!$no_auth_tdg): ?>
                                    <li>
                                        <a tabindex="-1" href="#">Trading</a>
                                    </li>
                                    <?php endif; ?>

                                    <?php if (!$no_auth_tre): ?>
                                    <li>
                                        <a tabindex="-1" href="#">Treasury</a>
                                    </li>
                                    <?php endif; ?>

                                    <?php if (!$no_auth_bnc): ?>
                                    <li>
                                        <a tabindex="-1" href="#">Billing and Collection</a>
                                    </li>
                                    <?php endif; ?>

                                    <?php if (!$no_auth_acct): ?>
                                    <li>
                                        <a tabindex="-1" href="#">Accounting</a>
                                    </li>
                                    <?php endif; ?>

                                    <?php if (!$no_auth_loans): ?>
                                    <li>
                                        <a tabindex="-1" href="#">Loans and Investment</a>
                                    </li>
                                    <?php endif; ?>

                                    <?php if (!$no_auth_log): ?>
                                    <li>
                                        <a tabindex="-1" href="#">Logistics</a>
                                    </li>
                                    <?php endif; ?>

                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Reports <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <?php if (!$no_auth_sales): ?>
                                    <li>
                                        <a tabindex="-1" href="#">Sales</a>
                                    </li>
                                    <?php endif; ?>

                                    <?php if (!$no_auth_tdg): ?>
                                    <li>
                                        <a tabindex="-1" href="#">Trading</a>
                                    </li>
                                    <?php endif; ?>

                                    <?php if (!$no_auth_tre): ?>
                                    <li>
                                        <a tabindex="-1" href="#">Treasury</a>
                                    </li>
                                    <?php endif; ?>

                                    <?php if (!$no_auth_bnc): ?>
                                    <li>
                                        <a tabindex="-1" href="#">Billing and Collection</a>
                                    </li>
                                    <?php endif; ?>

                                    <?php if (!$no_auth_acct): ?>
                                    <li>
                                        <a tabindex="-1" href="#">Accounting</a>
                                    </li>
                                    <?php endif; ?>

                                    <?php if (!$no_auth_loans): ?>
                                    <li>
                                        <a tabindex="-1" href="#">Loans and Investment</a>
                                    </li>
                                    <?php endif; ?>

                                    <?php if (!$no_auth_log): ?>
                                    <li>
                                        <a tabindex="-1" href="#">Logistics</a>
                                    </li>
                                    <?php endif; ?>

                                </ul>
                            </li>

                            <?php if ($if_admin): ?>
                            <li class="dropdown active">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Settings <b class="caret"></b>

                                </a>
                                <ul class="dropdown-menu" id="menu1">
                                    <li class="dropdown-submenu">
                                        <a tabindex="-1" href="#">Administration</a>
                                        <ul class="dropdown-menu">
                                          <li><a href="<?php echo site_url('main/user_mgmt'); ?>">Users Management</a></li>
                                        </ul>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="dropdown-submenu">
                                        <a tabindex="-1" href="#">Master Data</a>
                                        <ul class="dropdown-menu">
                                          <li><a href="<?php echo site_url('main/ae_mgmt'); ?>">Account Executive List</a></li>
                                          <li><a href="<?php echo site_url('main/cust_type'); ?>">Customer Type List</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <?php endif; ?>

                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">

            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li>
                            <a href="<?php echo site_url('main/dashboard'); ?>"><i class="icon-chevron-right"></i> Dashboard</a>
                        </li>

                        <?php if (!$no_auth_sales): ?>
                        <li>
                            <a href="<?php echo site_url('main/sales_dashboard'); ?>"><i class="icon-chevron-right"></i> Sales</a>
                        </li>
                        <?php endif; ?>

                        <?php if (!$no_auth_tdg): ?>
                        <li>
                            <a href="#"><i class="icon-chevron-right"></i> Trading</a>
                        </li>
                        <?php endif; ?>

                        <?php if (!$no_auth_tre): ?>
                        <li>
                            <a href="#"><i class="icon-chevron-right"></i> Treasury</a>
                        </li>
                        <?php endif; ?>

                        <?php if (!$no_auth_bnc): ?>
                        <li>
                            <a href="#"><i class="icon-chevron-right"></i> Billing and Collection</a>
                        </li>
                        <?php endif; ?>

                        <?php if (!$no_auth_acct): ?>
                        <li>
                            <a href="#"><i class="icon-chevron-right"></i> Accounting</a>
                        </li>
                        <?php endif; ?>

                        <?php if (!$no_auth_loans): ?>
                        <li>
                            <a href="#"><i class="icon-chevron-right"></i> Loans and Investments</a>
                        </li>
                        <?php endif; ?>

                        <?php if (!$no_auth_log): ?>
                        <li>
                            <a href="#"><i class="icon-chevron-right"></i> Logistics</a>
                        </li>
                        <?php endif; ?>

                    </ul>
                </div>
                <!--/span-->
                <div class="span9" id="content">

                    <div class="navbar">
                        <div class="navbar-inner">
                            <ul class="breadcrumb">
                                <li>
                                    <a href="#">Settings</a> <span class="divider">/</span>    
                                </li>
                                <li>
                                    <a href="#">Administration</a> <span class="divider">/</span>    
                                </li>
                                <li>
                                    <a href="<?php echo site_url('main/user_mgmt'); ?>">Users Management</a> <span class="divider">/</span>    
                                </li>
                                <li class="active">Add Users</li>
                            </ul>
                        </div>
                    </div>

                    <?php if (isset($error)): ?>
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Error!</h4>
                            <?php echo $error; ?>
                    </div>
                    <?php endif; ?>

                    <?php echo form_open(current_url(), 'class="form-horizontal", data-toggle="validator", role="form"'); ?>

                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add User Account</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">

                            <legend><b>Account Information</b></legend>
                            
                            <div class="span12">
                                    
                                    <div class="control-group">
                                      <label class="control-label">Name <span class="required">*</span></label>
                                      <div class="controls">
                                        <input type="text" name="user_name" value="<?php echo $this->input->post('user_name'); ?>" data-required="1" class="span4 m-wrap" required/>
                                      </div>
                                    </div>
                                    <div class="control-group">
                                      <label class="control-label">User Id <span class="required">*</span></label>
                                      <div class="controls">
                                        <input type="text" name="user_id" value="<?php echo $this->input->post('user_id'); ?>" data-required="1" class="span4 m-wrap" required/>
                                        <p class="help-block">Ex: Firstname.Lastname (juan.delacruz)</p>
                                      </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Email Address <span class="required">*</span></label>
                                        <div class="controls">
                                            <input type="text" name="eadd" value="<?php echo $this->input->post('eadd'); ?>" data-required="1" class="span4 m-wrap"  required/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                      <label class="control-label" for="dept_select">Department <span class="required">*</span></label>
                                      <div class="controls">
                                        <?php echo form_dropdown('dept', $dept_list, $this->input->post('dept'), 'class="chzn-select span6 m-wrap", id="dept_select"'); ?>
                                      </div>
                                    </div>
                                    <div class="control-group">
                                      <label class="control-label" for="memb_select">Members Of <span class="required">*</span></label>
                                      <div class="controls">
                                        <?php echo form_dropdown('usr_type', $usr_type, $this->input->post('usr_type'), 'class="chzn-select span6 m-wrap", id="memb_select"'); ?>
                                      </div>
                                    </div>
                                
                            </div>
                    
                            <legend>Access Modules</legend>

                                    <div class="span-12">
                                            
                                            <div class="control-group">
                                              <label class="control-label" for="sa_acc_select">Sales </label>
                                              <div class="controls">
                                                <?php echo form_dropdown('sales_acc', $access_type, $this->input->post('sales_acc'), 'class="chzn-select span6 m-wrap", id="sa_acc_select"'); ?>
                                              </div>
                                            </div>

                                            <div class="control-group">
                                              <label class="control-label" for="tr_acc_select">Trading </label>
                                              <div class="controls">
                                                <?php echo form_dropdown('trading_acc', $access_type, $this->input->post('trading_acc'), 'class="chzn-select span6 m-wrap", id="tr_acc_select"'); ?>
                                              </div>
                                            </div>

                                            <div class="control-group">
                                              <label class="control-label" for="tre_acc_select">Treasury </label>
                                              <div class="controls">
                                                <?php echo form_dropdown('tre_acc', $access_type, $this->input->post('tre_acc'), 'class="chzn-select span6 m-wrap", id="tre_acc_select"'); ?>
                                              </div>
                                            </div>

                                            <div class="control-group">
                                              <label class="control-label" for="bnc_acc_select">Billing and Collection </label>
                                              <div class="controls">
                                                <?php echo form_dropdown('bnc_acc', $access_type, $this->input->post('bnc_acc'), 'class="chzn-select span6 m-wrap", id="bnc_acc_select"'); ?>
                                              </div>
                                            </div>

                                            <div class="control-group">
                                              <label class="control-label" for="act_acc_select">Accounting </label>
                                              <div class="controls">
                                                <?php echo form_dropdown('act_acc', $access_type, $this->input->post('act_acc'), 'class="chzn-select span6 m-wrap", id="act_acc_select"'); ?>
                                              </div>
                                            </div>

                                            <div class="control-group">
                                              <label class="control-label" for="loans_acc_select">Loans and Investments </label>
                                              <div class="controls">
                                                <?php echo form_dropdown('loans_acc', $access_type, $this->input->post('loans_acc'), 'class="chzn-select span6 m-wrap", id="loans_acc_select"'); ?>
                                              </div>
                                            </div>

                                            <div class="control-group">
                                              <label class="control-label" for="log_acc_select">Logistics </label>
                                              <div class="controls">
                                                <?php echo form_dropdown('log_acc', $access_type, $this->input->post('log_acc'), 'class="chzn-select span6 m-wrap", id="log_acc_select"'); ?>
                                              </div>
                                            </div>
                                    </div>

                                <!-- <legend>User Status</legend>

                                    <div class="span12">
                                            <div class="control-group">
                                              <label class="control-label" for="stats_select">Status </label>
                                              <div class="controls">
                                                <?php $stats_list = array('1'=>'Active', '0'=>'Inactive'); ?>
                                                <?php echo form_dropdown('usr_stats', $stats_list, $this->input->post('usr_stats'), 'class="chzn-select span6 m-wrap", id="stats_select"'); ?>
                                              </div>
                                            </div>    
                                    </div> -->
                                    
                                    <div class="row-fluid">
                                        <div class="span12">
                                            <div class="form-actions">
                                              <button type="submit" class="btn btn-success"><i class="icon-ok icon-white"></i>  Submit</button>
                                              <button type="reset" class="btn">Reset</button>
                                              <!--<a href="#delete_modal" role="button" data-toggle="modal" class="btn btn-danger btn-sm"><i class="icon-trash icon-white"></i> Delete</a>-->
                                              <a href="<?php echo site_url('main/user_mgmt'); ?>" role="button" class="btn btn-default btn-sm pull-right"> Back</a>
                                        
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

                <?php echo form_close(); ?>

                </div>
            </div>
            <hr>
            <footer>
                <p>&copy; All Asian Information System 2017</p>
            </footer>
        </div>
        <!--/.fluid-container-->

        <link href="<?php echo base_url(); ?>third_party/vendors/datepicker.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url(); ?>third_party/vendors/uniform.default.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url(); ?>third_party/vendors/chosen.min.css" rel="stylesheet" media="screen">

        <link href="<?php echo base_url(); ?>third_party/vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">

        <script src="<?php echo base_url(); ?>third_party/vendors/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url(); ?>third_party/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>third_party/vendors/jquery.uniform.min.js"></script>
        <script src="<?php echo base_url(); ?>third_party/vendors/chosen.jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>third_party/vendors/bootstrap-datepicker.js"></script>

        <script src="<?php echo base_url(); ?>third_party/vendors/wysiwyg/wysihtml5-0.3.0.js"></script>
        <script src="<?php echo base_url(); ?>third_party/vendors/wysiwyg/bootstrap-wysihtml5.js"></script>

        <script src="<?php echo base_url(); ?>third_party/vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>third_party/vendors/jquery-validation/dist/jquery.validate.min.js"></script>
    <!--<script type="text/javascript" src="<?php echo base_url(); ?>third_party/vendors/jquery-validation/dist/validator.js"></script>!-->
    <script src="<?php echo base_url(); ?>third_party/assets/form-validation.js"></script>
        
    <script src="<?php echo base_url(); ?>third_party/assets/scripts.js"></script>
        <script>

    jQuery(document).ready(function() {   
       FormValidation.init();
    });

        $(function() {
            $(".chzn-select").chosen();
        });
        </script>
    </body>

</html>