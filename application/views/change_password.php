<!DOCTYPE html>
<html>
    
    <head>
        <title>AAIS - Change Password</title>
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
            body, html, table, span, input, button{
                font-family: Segoe UI;
            }

            table {
                display: block;
                overflow-x: auto;
                white-space: nowrap;
            }

            table a{
                color: black;
                text-decoration: underline;
            }

            .pagination a{
                color: black;
            }

            td#ae_name, td#cust_type{width:100px !important;white-space:nowrap !important;}*/
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

                            <li class="dropdown active">
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
                            <li class="dropdown">
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
                <div class="span4"></div>
                <div class="span4" id="content">

                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Change Password</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    
                                <?php echo form_open(current_url(), 'class="form-horizontal"'); ?>
                                    
                                <?php if(isset($error)): ?>
                                <div class="alert alert-error">
                                    <button class="close" data-dismiss="alert">&times;</button>
                                    <p><?php echo $error; ?></p>
                                </div>
                                <?php endif; ?>

                                <?php if(validation_errors()): ?>
                                <div class="alert alert-error">
                                    <button class="close" data-dismiss="alert">&times;</button>
                                    <p><?php echo validation_errors(); ?></p>
                                </div>
                                <?php endif; ?>

                                <?php if(isset($success)): ?>
                                <div class="alert alert-success">
                                    <button class="close" data-dismiss="alert">&times;</button>
                                    <p><?php echo $success; ?></p>
                                </div>
                                <?php endif; ?>
                                    
                                    <div class="control-group pull-left">
                                        <label class="control-label">Old Password <span class="required">*</span></label>
                                        <div class="controls">
                                            <input type="password" name="old_pass" value="<?php echo $this->input->post('old_pass') ?>" data-required="1" class="span12 m-wrap" required/>
                                        </div>
                                    </div>

                                    <div class="control-group pull-left">
                                        <label class="control-label">New Password <span class="required">*</span></label>
                                        <div class="controls">
                                            <input type="password" name="new_pass" value="<?php echo $this->input->post('new_pass') ?>" data-required="1" class="span12 m-wrap" required/>
                                        </div>
                                    </div>

                                    <div class="control-group pull-left">
                                        <label class="control-label">Re-Type New Password <span class="required">*</span></label>
                                        <div class="controls">
                                            <input type="password" name="re_pass" value="<?php echo $this->input->post('re_pass') ?>" data-required="1" class="span12 m-wrap" required/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row-fluid">
                                    <div class="span12">
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-success">Submit</button>
                                            <a href="<?php echo site_url('main/dashboard') ?>" role="button" class="btn btn-default btn-sm"> Back</a>
                                        </div>
                                    </div>
                                </div>

                                <?php echo form_close(); ?>

                            </div>
                        </div>
                        <!-- /block -->
                    </div>

                </div>
                <div class="span4"></div>
            </div>
            <hr>
            <footer>
                <p>&copy; All Asian Information System 2017</p>
            </footer>
        </div>
        <!--/.fluid-container-->

        <script src="<?php echo base_url(); ?>third_party/vendors/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url(); ?>third_party/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>third_party/vendors/datatables/js/jquery.dataTables.min.js"></script>


        <script src="<?php echo base_url(); ?>third_party/assets/scripts.js"></script>
        <script src="<?php echo base_url(); ?>third_party/assets/DT_bootstrap.js"></script>
        <script>
        $(function() {
            
        });
        </script>
    </body>

</html>