<!DOCTYPE html>
<html>
    
    <head>
        <title>AAIS - Delivery Instructions</title>
        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>third_party/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url(); ?>third_party/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url(); ?>third_party/assets/styles.css" rel="stylesheet" media="screen">
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="vendors/flot/excanvas.min.js"></script><![endif]-->
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="<?php echo base_url(); ?>third_party/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>

        <style type="text/css">
            body, html, input, select, button, textarea{
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
                                        <!-- <a tabindex="-1" href="login.html">Logout</a> -->
                                        <?php echo anchor('main/logout', 'Logout', 'tabindex="-1"'); ?>
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
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li>
                            <a href="<?php echo site_url('main/dashboard'); ?>"><i class="icon-chevron-right"></i> Dashboard</a>
                        </li>

                        <?php if (!$no_auth_sales): ?>
                        <li class="active">
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
                                    <a href="#">Module</a> <span class="divider">/</span>    
                                </li>
                                <li>
                                    <a href="<?php echo site_url('main/sales_dashboard'); ?>">Sales</a> <span class="divider">/</span>    
                                </li>
                                <li class="active">Delivery Instructions</li>
                            </ul>
                        </div>
                    </div>

                     <!-- validation -->
                    <div class="row-fluid">
                         <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Delivery Instructions</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
					<!-- BEGIN FORM-->
					<?php echo form_open(current_url(), 'class="form-horizontal", data-toggle="validator", role="form"'); ?>
					<!-- <form action="#" id="form_sample_1" class="form-horizontal" data-toggle="validator" role="form"> -->
						<fieldset>
							<div class="alert alert-error hide">
								<button class="close" data-dismiss="alert"></button>
								You have some form errors. Please check below.
							</div>
							<div class="alert alert-success hide">
								<button class="close" data-dismiss="alert"></button>
								Your form validation is successful!
							</div>

              <div class="span12">
                <div class="control-group">
                  <label class="control-label" for="bp_select">BP Name <span class="required">*</span></label>
                  <div class="controls">
                    <?php echo form_dropdown('bpname', $cust_list, $this->input->post('bpname'), 'class="chzn-select span6 m-wrap", required="required", data-required="1", id="bp_select"'); ?>
                    <!-- <input type="text" name="bpname" data-required="1" class="span6 m-wrap" required/> -->
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="ae_select">Cash Trader <span class="required">*</span></label>
                  <div class="controls">
                    <?php echo form_dropdown('ae', $ae_list, $this->input->post('ae'), 'class="chzn-select span6 m-wrap", required="required", data-required="1", id="ae_select"'); ?>
                    <!-- <input type="text" name="ae" data-required="1" class="span6 m-wrap" required/> -->
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Location </label>
                  <div class="controls">
                    <input type="text" name="del_loc" data-required="1" class="span6 m-wrap"/>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Delivery Instructions </label>
                  <div class="controls">
                    <textarea cols="5" rows="2" data-required="1" class="span6 m-wrap" name="dins"></textarea>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label" for="type_select">Type <span class="required">*</span></label>
                  <div class="controls">
                    <?php echo form_dropdown('type', $cust_type, $this->input->post('type'), 'class="chzn-select span6 m-wrap", id="type_select"'); ?>
                  </div>
                </div>

                <legend>Mill Marks</legend>

                    <div class="span12"><legend>Standard Refined</legend></div>

                        <div class="control-group">
                            <label class="control-label" for="sref1">(1) </label>
                            <div class="controls">
                            <?php echo form_dropdown('sref1', $mm_list, $this->input->post('sref1'), 'class="chzn-select span6 m-wrap", id="sref1"'); ?>
                            </div>
                        </div>    

                        <div class="control-group">
                            <label class="control-label" for="sref2">(2) </label>
                            <div class="controls">
                            <?php echo form_dropdown('sref2', $mm_list, $this->input->post('sref2'), 'class="chzn-select span6 m-wrap", id="sref2"'); ?>
                            </div>
                        </div>    

                        <div class="control-group">
                            <label class="control-label" for="sref3">(3) </label>
                            <div class="controls">
                            <?php echo form_dropdown('sref3', $mm_list, $this->input->post('sref3'), 'class="chzn-select span6 m-wrap", id="sref3"'); ?>
                            </div>
                        </div>    

                        <div class="control-group">
                            <label class="control-label" for="sref4">(4) </label>
                            <div class="controls">
                            <?php echo form_dropdown('sref4', $mm_list, $this->input->post('sref4'), 'class="chzn-select span6 m-wrap", id="sref4"'); ?>
                            </div>
                        </div>    

                        <div class="control-group">
                            <label class="control-label" for="sref5">(5) </label>
                            <div class="controls">
                            <?php echo form_dropdown('sref5', $mm_list, $this->input->post('sref5'), 'class="chzn-select span6 m-wrap", id="sref5"'); ?>
                            </div>
                        </div>                                       

                    <div class="span12"><legend>Premium Refined</legend></div>

                        <div class="control-group">
                            <label class="control-label" for="pref1">(1) </label>
                            <div class="controls">
                            <?php echo form_dropdown('pref1', $mm_list, $this->input->post('pref1'), 'class="chzn-select span6 m-wrap", id="pref1"'); ?>
                            </div>
                        </div>    

                        <div class="control-group">
                            <label class="control-label" for="pref2">(2) </label>
                            <div class="controls">
                            <?php echo form_dropdown('pref2', $mm_list, $this->input->post('pref2'), 'class="chzn-select span6 m-wrap", id="pref2"'); ?>
                            </div>
                        </div>    

                        <div class="control-group">
                            <label class="control-label" for="pref3">(3) </label>
                            <div class="controls">
                            <?php echo form_dropdown('pref3', $mm_list, $this->input->post('pref3'), 'class="chzn-select span6 m-wrap", id="pref3"'); ?>
                            </div>
                        </div>    

                        <div class="control-group">
                            <label class="control-label" for="pref4">(4) </label>
                            <div class="controls">
                            <?php echo form_dropdown('pref4', $mm_list, $this->input->post('pref4'), 'class="chzn-select span6 m-wrap", id="pref4"'); ?>
                            </div>
                        </div>    

                        <div class="control-group">
                            <label class="control-label" for="pref5">(5) </label>
                            <div class="controls">
                            <?php echo form_dropdown('pref5', $mm_list, $this->input->post('pref5'), 'class="chzn-select span6 m-wrap", id="pref5"'); ?>
                            </div>
                        </div>

                    <div class="span12"><legend>SGS</legend></div>

                        <div class="control-group">
                            <label class="control-label" for="sgs1">(1) </label>
                            <div class="controls">
                            <?php echo form_dropdown('sgs1', $mm_list, $this->input->post('sgs1'), 'class="chzn-select span6 m-wrap", id="sgs1"'); ?>
                            </div>
                        </div>    

                        <div class="control-group">
                            <label class="control-label" for="sgs2">(2) </label>
                            <div class="controls">
                            <?php echo form_dropdown('sgs2', $mm_list, $this->input->post('sgs2'), 'class="chzn-select span6 m-wrap", id="sgs2"'); ?>
                            </div>
                        </div>    

                        <div class="control-group">
                            <label class="control-label" for="sgs3">(3) </label>
                            <div class="controls">
                            <?php echo form_dropdown('sgs3', $mm_list, $this->input->post('sgs3'), 'class="chzn-select span6 m-wrap", id="sgs3"'); ?>
                            </div>
                        </div>

                    <div class="span12"><legend>Raw</legend></div>

                        <div class="control-group">
                            <label class="control-label" for="raw1">(1) </label>
                            <div class="controls">
                            <?php echo form_dropdown('raw1', $mm_list, $this->input->post('raw1'), 'class="chzn-select span6 m-wrap", id="raw1"'); ?>
                            </div>
                        </div>    

                        <div class="control-group">
                            <label class="control-label" for="raw2">(2) </label>
                            <div class="controls">
                            <?php echo form_dropdown('raw2', $mm_list, $this->input->post('raw2'), 'class="chzn-select span6 m-wrap", id="raw2"'); ?>
                            </div>
                        </div>    

                        <div class="control-group">
                            <label class="control-label" for="raw3">(3) </label>
                            <div class="controls">
                            <?php echo form_dropdown('raw3', $mm_list, $this->input->post('raw3'), 'class="chzn-select span6 m-wrap", id="raw3"'); ?>
                            </div>
                        </div>    

                        <div class="control-group">
                            <label class="control-label" for="raw4">(4) </label>
                            <div class="controls">
                            <?php echo form_dropdown('raw4', $mm_list, $this->input->post('raw4'), 'class="chzn-select span6 m-wrap", id="raw4"'); ?>
                            </div>
                        </div>    

                        <div class="control-group">
                            <label class="control-label" for="raw5">(5) </label>
                            <div class="controls">
                            <?php echo form_dropdown('raw5', $mm_list, $this->input->post('raw5'), 'class="chzn-select span6 m-wrap", id="raw5"'); ?>
                            </div>
                        </div>

                    <div class="span12"><legend>Premium Raw</legend></div>

                        <div class="control-group">
                            <label class="control-label" for="praw1">(1) </label>
                            <div class="controls">
                            <?php echo form_dropdown('praw1', $mm_list, $this->input->post('praw1'), 'class="chzn-select span6 m-wrap", id="praw1"'); ?>
                            </div>
                        </div>    

                        <div class="control-group">
                            <label class="control-label" for="praw2">(2) </label>
                            <div class="controls">
                            <?php echo form_dropdown('praw2', $mm_list, $this->input->post('praw2'), 'class="chzn-select span6 m-wrap", id="praw2"'); ?>
                            </div>
                        </div>    

                        <div class="control-group">
                            <label class="control-label" for="praw3">(3) </label>
                            <div class="controls">
                            <?php echo form_dropdown('praw3', $mm_list, $this->input->post('praw3'), 'class="chzn-select span6 m-wrap", id="praw3"'); ?>
                            </div>
                        </div>

                <legend>Delivery Requirements</legend>        

                <div class="control-group">
                  <label class="control-label">Delivery Acceptance Days</label>
                  <div class="controls">
                    <input type="text" name="dadays" data-required="1" class="span6 m-wrap"/>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Window Time</label>
                  <div class="controls">
                    <input type="text" name="wtime" data-required="1" class="span6 m-wrap"/>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Truck Requirement</label>
                  <div class="controls">
                    <textarea cols="5" rows="2" data-required="1" class="span6 m-wrap" name="treq"></textarea>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">POD Requirement</label>
                  <div class="controls">
                    <input type="text" name="podreq" data-required="1" class="span6 m-wrap"/>
                  </div>
                </div>

                <legend>Quality Concerns</legend>        

                <div class="control-group">
                  <label class="control-label">Rejected Batch Code </label>
                  <div class="controls">
                    <input type="text" name="rbcode" data-required="1" class="span6 m-wrap"/>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Last Issue of Account</label>
                  <div class="controls">
                    <input type="text" name="liact" data-required="1" class="span6 m-wrap"/>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Specifications</label>
                  <div class="controls">
                    <select name="specs" class="span6 m-wrap">
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Reason(s)</label>
                  <div class="controls">
                    <textarea cols="5" rows="2" data-required="1" class="span6 m-wrap" name="specs_reason"></textarea>
                  </div>
                </div>

                <legend>Others</legend>       

                <div class="control-group">
                  <label class="control-label">FIFO</label>
                  <div class="controls">
                    <input type="text" name="fifo" data-required="1" class="span6 m-wrap"/>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Max No. of Batch Codes</label>
                  <div class="controls">
                    <input type="text" name="maxbno" data-required="1" class="span6 m-wrap"/>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Batch Code</label>
                  <div class="controls">
                    <input type="text" name="bcode" data-required="1" class="span6 m-wrap"/>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">PO Attachment</label>
                  <div class="controls">
                    <textarea cols="5" rows="2" data-required="1" class="span6 m-wrap" name="poattach"></textarea>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Direct Invoicing</label>
                  <div class="controls">
                    <input type="text" name="dinvoice" data-required="1" class="span6 m-wrap"/>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Others</label>
                  <div class="controls">
                    <textarea cols="5" rows="2" data-required="1" class="span6 m-wrap" name="others"></textarea>
                  </div>
                </div>
                
                <legend>Customer Profile</legend>       

                <div class="control-group">
                  <label class="control-label">Plant Addresses</label>
                  <div class="controls">
                    <textarea cols="5" rows="2" data-required="1" class="span6 m-wrap" name="paddr"></textarea>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Telephone No.</label>
                  <div class="controls">
                    <input type="text" name="telno" data-required="1" class="span6 m-wrap"/>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">HO Addresses</label>
                  <div class="controls">
                    <textarea cols="5" rows="2" data-required="1" class="span6 m-wrap" name="hoaddr"></textarea>
                  </div>
                </div>

                <!-- <div class="control-group">
                  <label class="control-label">Email<span class="required">*</span></label>
                  <div class="controls">
                    <input name="email" type="text" class="span6 m-wrap"/>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">URL<span class="required">*</span></label>
                  <div class="controls">
                    <input name="url" type="text" class="span6 m-wrap"/>
                    <span class="help-block">e.g: http://www.demo.com or http://demo.com</span>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Number<span class="required">*</span></label>
                  <div class="controls">
                    <input name="number" type="text" class="span6 m-wrap"/>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Digits<span class="required">*</span></label>
                  <div class="controls">
                    <input name="digits" type="text" class="span6 m-wrap"/>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Credit Card<span class="required">*</span></label>
                  <div class="controls">
                    <input name="creditcard" type="text" class="span6 m-wrap"/>
                    <span class="help-block">e.g: 5500 0000 0000 0004</span>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Occupation&nbsp;&nbsp;</label>
                  <div class="controls">
                    <input name="occupation" type="text" class="span6 m-wrap"/>
                    <span class="help-block">optional field</span>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Category<span class="required">*</span></label>
                  <div class="controls">
                    <select class="span6 m-wrap" name="category">
                      <option value="">Select...</option>
                      <option value="Category 1">Category 1</option>
                      <option value="Category 2">Category 2</option>
                      <option value="Category 3">Category 5</option>
                      <option value="Category 4">Category 4</option>
                    </select>
                  </div>
                </div> -->
                
              </div>

              <div class="row-fluid">
                  <div class="span12">
                    <div class="form-actions">
                      <button type="submit" class="btn btn-success"><i class="icon-ok icon-white"></i> Submit</button>
                      <button type="reset" class="btn">Reset</button>
                      <a href="<?php echo site_url('main/sales_dashboard'); ?>" role="button" class="btn btn-default btn-sm pull-right"> Back</a>
                    </div>
                  </div>
              </div>

						</fieldset>
					<!-- </form> -->
					<?php echo form_close(); ?>
					<!-- END FORM-->
				</div>
			    </div>
			</div>
                     	<!-- /block -->
		    </div>
                     <!-- /validation -->

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
            $(".datepicker").datepicker();
            $(".uniform_on").uniform();
            $(".chzn-select").chosen();
            $('.textarea').wysihtml5();

            $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                $('#rootwizard').find('.bar').css({width:$percent+'%'});
                // If it's the last tab then hide the last button and show the finish instead
                if($current >= $total) {
                    $('#rootwizard').find('.pager .next').hide();
                    $('#rootwizard').find('.pager .finish').show();
                    $('#rootwizard').find('.pager .finish').removeClass('disabled');
                } else {
                    $('#rootwizard').find('.pager .next').show();
                    $('#rootwizard').find('.pager .finish').hide();
                }
            }});
            $('#rootwizard .finish').click(function() {
                alert('Finished!, Starting over!');
                $('#rootwizard').find("a[href*='tab1']").trigger('click');
            });
        });
        </script>
    </body>

</html>