<!DOCTYPE html>
<html>
    
    <head>
        <title>AAIS - Delivery Instructions</title>
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
                                <li>
                                    <a href="<?php echo site_url('main/sales_dashboard'); ?>">Delivery Instructions</a> <span class="divider">/</span>    
                                </li>
                                <li class="active">Delivery Instructions - Details</li>
                            </ul>
                        </div>
                    </div>


                    <?php echo form_open(current_url(), 'class="form-horizontal", data-toggle="validator", role="form"'); ?>

                    <?php if(isset($del_dtls)): foreach($del_dtls as $dtls): ?>

                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Delivery Instructions - Details</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">

                            <div class="row-fluid">
                                <div class="span12">
                                    <a href="#changelogs_modal" role="button" data-toggle="modal" class="btn btn-default btn-sm pull-right"> Change Logs</a>
                                </div>
                            </div>

                            <legend><b><?php echo $dtls->CardName; ?></b></legend>
                            
                            <div class="span12">
                                
                                    <div class="control-group">
                                      <label class="control-label" for="ae_select">Cash Trader <span class="required">*</span></label>
                                      <div class="controls">
                                        <?php echo form_dropdown('ae', $ae_list, $dtls->ae, 'class="chzn-select span4 m-wrap", required="required", data-required="1", id="ae_select"'); ?>
                                      
                                        <input type="hidden" name="ae_old" id="ae_old" value="<?php echo $this->input->post('ae_old') ?>" data-required="1" class="span1 m-wrap" />
                                        <input type="hidden" name="ae_new" id="ae_new" value="<?php echo $this->input->post('ae_new') ?>" data-required="1" class="span1 m-wrap" />
                                      </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Location </label>
                                        <div class="controls">
                                            <input type="text" name="del_loc" id="del_loc" value="<?php echo $dtls->delivery_location; ?>" data-required="1" class="span4 m-wrap" />
                                            
                                            <input type="hidden" name="del_loc_old" id="del_loc_old" value="<?php echo $this->input->post('del_loc_old') ?>" data-required="1" class="span1 m-wrap" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Delivery Instructions </label>
                                        <div class="controls">
                                            <textarea cols="5" rows="2" data-required="1" class="span6 m-wrap del_ins" name="dins" id="dins"><?php echo $dtls->delivery_ins; ?></textarea>

                                            <textarea cols="5" rows="2" data-required="1" class="span1 m-wrap del_ins" name="dins_old" id="dins_old"></textarea>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                      <label class="control-label" for="type_select">Type <span class="required">*</span></label>
                                      <div class="controls">
                                        <?php echo form_dropdown('type', $cust_type, $dtls->type, 'class="chzn-select span6 m-wrap", id="type_select"'); ?>
                                      
                                        <input type="hidden" name="type_old" id="type_old" value="<?php echo $this->input->post('type_old') ?>" data-required="1" class="span1 m-wrap" />
                                        <input type="hidden" name="type_new" id="type_new" value="<?php echo $this->input->post('type_new') ?>" data-required="1" class="span1 m-wrap" />
                                        </div>
                                    </div>
                                
                            </div>
                    
                            <legend>Approved Mill Marks</legend>

                                    <div class="span-12">
                                    <legend>Standard Refined</legend>

                                        <div class="control-group">
                                          <label class="control-label" for="sref1">(1) </label>
                                          <div class="controls">
                                            <?php echo form_dropdown('sref1', $mm_list, $stdref_detls_1, 'class="chzn-select span6 m-wrap", id="sref1"'); ?>
                                            
                                            <input type="hidden" name="sref1_old" id="sref1_old" value="<?php echo $this->input->post('sref1_old') ?>" data-required="1" class="span1 m-wrap" />
                                            <input type="hidden" name="sref1_new" id="sref1_new" value="<?php echo $this->input->post('sref1_new') ?>" data-required="1" class="span1 m-wrap" />
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <label class="control-label" for="sref2">(2) </label>
                                          <div class="controls">
                                            <?php echo form_dropdown('sref2', $mm_list, $stdref_detls_2, 'class="chzn-select span6 m-wrap", id="sref2"'); ?>
                                            
                                            <input type="hidden" name="sref2_old" id="sref2_old" value="<?php echo $this->input->post('sref2_old') ?>" data-required="1" class="span1 m-wrap" />
                                            <input type="hidden" name="sref2_new" id="sref2_new" value="<?php echo $this->input->post('sref2_new') ?>" data-required="1" class="span1 m-wrap" />
                                          </div>
                                        </div>

                                        
                                        <div class="control-group">
                                          <label class="control-label" for="sref3">(3) </label>
                                          <div class="controls">
                                            <?php echo form_dropdown('sref3', $mm_list, $stdref_detls_3, 'class="chzn-select span6 m-wrap", id="sref3"'); ?>
                                          
                                            <input type="hidden" name="sref3_old" id="sref3_old" value="<?php echo $this->input->post('sref3_old') ?>" data-required="1" class="span1 m-wrap" />
                                            <input type="hidden" name="sref3_new" id="sref3_new" value="<?php echo $this->input->post('sref3_new') ?>" data-required="1" class="span1 m-wrap" />
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <label class="control-label" for="sref4">(4) </label>
                                          <div class="controls">
                                            <?php echo form_dropdown('sref4', $mm_list, $stdref_detls_4, 'class="chzn-select span6 m-wrap", id="sref4"'); ?>
                                          
                                            <input type="hidden" name="sref4_old" id="sref4_old" value="<?php echo $this->input->post('sref4_old') ?>" data-required="1" class="span1 m-wrap" />
                                            <input type="hidden" name="sref4_new" id="sref4_new" value="<?php echo $this->input->post('sref4_new') ?>" data-required="1" class="span1 m-wrap" />
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <label class="control-label" for="sref5">(5) </label>
                                          <div class="controls">
                                            <?php echo form_dropdown('sref5', $mm_list, $stdref_detls_5, 'class="chzn-select span6 m-wrap", id="sref5"'); ?>
                                          
                                            <input type="hidden" name="sref5_old" id="sref5_old" value="<?php echo $this->input->post('sref5_old') ?>" data-required="1" class="span1 m-wrap" />
                                            <input type="hidden" name="sref5_new" id="sref5_new" value="<?php echo $this->input->post('sref5_new') ?>" data-required="1" class="span1 m-wrap" />
                                          </div>
                                        </div>

                                    <legend>Premium Refined</legend>

                                        <div class="control-group">
                                          <label class="control-label" for="pref1">(1) </label>
                                          <div class="controls">
                                            <?php echo form_dropdown('pref1', $mm_list, $prref_detls_1, 'class="chzn-select span6 m-wrap", id="pref1"'); ?>
                                          
                                            <input type="hidden" name="pref1_old" id="pref1_old" value="<?php echo $this->input->post('pref1_old') ?>" data-required="1" class="span1 m-wrap" />
                                            <input type="hidden" name="pref1_new" id="pref1_new" value="<?php echo $this->input->post('pref1_new') ?>" data-required="1" class="span1 m-wrap" />
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <label class="control-label" for="pref2">(2) </label>
                                          <div class="controls">
                                            <?php echo form_dropdown('pref2', $mm_list, $prref_detls_2, 'class="chzn-select span6 m-wrap", id="pref2"'); ?>
                                          
                                            <input type="hidden" name="pref2_old" id="pref2_old" value="<?php echo $this->input->post('pref2_old') ?>" data-required="1" class="span1 m-wrap" />
                                            <input type="hidden" name="pref2_new" id="pref2_new" value="<?php echo $this->input->post('pref2_new') ?>" data-required="1" class="span1 m-wrap" />
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <label class="control-label" for="pref3">(3) </label>
                                          <div class="controls">
                                            <?php echo form_dropdown('pref3', $mm_list, $prref_detls_3, 'class="chzn-select span6 m-wrap", id="pref3"'); ?>
                                          
                                            <input type="hidden" name="pref3_old" id="pref3_old" value="<?php echo $this->input->post('pref3_old') ?>" data-required="1" class="span1 m-wrap" />
                                            <input type="hidden" name="pref3_new" id="pref3_new" value="<?php echo $this->input->post('pref3_new') ?>" data-required="1" class="span1 m-wrap" />
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <label class="control-label" for="pref4">(4) </label>
                                          <div class="controls">
                                            <?php echo form_dropdown('pref4', $mm_list, $prref_detls_4, 'class="chzn-select span6 m-wrap", id="pref4"'); ?>
                                          
                                            <input type="hidden" name="pref4_old" id="pref4_old" value="<?php echo $this->input->post('pref4_old') ?>" data-required="1" class="span1 m-wrap" />
                                            <input type="hidden" name="pref4_new" id="pref4_new" value="<?php echo $this->input->post('pref4_new') ?>" data-required="1" class="span1 m-wrap" />
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <label class="control-label" for="pref5">(5) </label>
                                          <div class="controls">
                                            <?php echo form_dropdown('pref5', $mm_list, $prref_detls_5, 'class="chzn-select span6 m-wrap", id="pref5"'); ?>
                                          
                                            <input type="hidden" name="pref5_old" id="pref5_old" value="<?php echo $this->input->post('pref5_old') ?>" data-required="1" class="span1 m-wrap" />
                                            <input type="hidden" name="pref5_new" id="pref5_new" value="<?php echo $this->input->post('pref5_new') ?>" data-required="1" class="span1 m-wrap" />
                                          </div>
                                        </div>

                                    <legend>SGS</legend>

                                        <div class="control-group">
                                          <label class="control-label" for="sgs1">(1) </label>
                                          <div class="controls">
                                            <?php echo form_dropdown('sgs1', $mm_list, $sgs_detls_1, 'class="chzn-select span6 m-wrap", id="sgs1"'); ?>
                                          
                                            <input type="hidden" name="sgs1_old" id="sgs1_old" value="<?php echo $this->input->post('sgs1_old') ?>" data-required="1" class="span1 m-wrap" />
                                            <input type="hidden" name="sgs1_new" id="sgs1_new" value="<?php echo $this->input->post('sgs1_new') ?>" data-required="1" class="span1 m-wrap" />
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <label class="control-label" for="sgs2">(2) </label>
                                          <div class="controls">
                                            <?php echo form_dropdown('sgs2', $mm_list, $sgs_detls_2, 'class="chzn-select span6 m-wrap", id="sgs2"'); ?>
                                          
                                            <input type="hidden" name="sgs2_old" id="sgs2_old" value="<?php echo $this->input->post('sgs2_old') ?>" data-required="1" class="span1 m-wrap" />
                                            <input type="hidden" name="sgs2_new" id="sgs2_new" value="<?php echo $this->input->post('sgs2_new') ?>" data-required="1" class="span1 m-wrap" />
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <label class="control-label" for="sgs3">(3) </label>
                                          <div class="controls">
                                            <?php echo form_dropdown('sgs3', $mm_list, $sgs_detls_3, 'class="chzn-select span6 m-wrap", id="sgs3"'); ?>
                                          
                                            <input type="hidden" name="sgs3_old" id="sgs3_old" value="<?php echo $this->input->post('sgs3_old') ?>" data-required="1" class="span1 m-wrap" />
                                            <input type="hidden" name="sgs3_new" id="sgs3_new" value="<?php echo $this->input->post('sgs3_new') ?>" data-required="1" class="span1 m-wrap" />
                                          </div>
                                        </div>

                                    <legend>Raw</legend>

                                        <div class="control-group">
                                          <label class="control-label" for="raw1">(1) </label>
                                          <div class="controls">
                                            <?php echo form_dropdown('raw1', $mm_list, $raw_detls_1, 'class="chzn-select span6 m-wrap", id="raw1"'); ?>
                                          
                                            <input type="hidden" name="raw1_old" id="raw1_old" value="<?php echo $this->input->post('raw1_old') ?>" data-required="1" class="span1 m-wrap" />
                                            <input type="hidden" name="raw1_new" id="raw1_new" value="<?php echo $this->input->post('raw1_new') ?>" data-required="1" class="span1 m-wrap" />
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <label class="control-label" for="raw2">(2) </label>
                                          <div class="controls">
                                            <?php echo form_dropdown('raw2', $mm_list, $raw_detls_2, 'class="chzn-select span6 m-wrap", id="raw2"'); ?>
                                          
                                            <input type="hidden" name="raw2_old" id="raw2_old" value="<?php echo $this->input->post('raw2_old') ?>" data-required="1" class="span1 m-wrap" />
                                            <input type="hidden" name="raw2_new" id="raw2_new" value="<?php echo $this->input->post('raw2_new') ?>" data-required="1" class="span1 m-wrap" />
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <label class="control-label" for="raw3">(3) </label>
                                          <div class="controls">
                                            <?php echo form_dropdown('raw3', $mm_list, $raw_detls_3, 'class="chzn-select span6 m-wrap", id="raw3"'); ?>
                                          
                                            <input type="hidden" name="raw3_old" id="raw3_old" value="<?php echo $this->input->post('raw3_old') ?>" data-required="1" class="span1 m-wrap" />
                                            <input type="hidden" name="raw3_new" id="raw3_new" value="<?php echo $this->input->post('raw3_new') ?>" data-required="1" class="span1 m-wrap" />
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <label class="control-label" for="raw4">(4) </label>
                                          <div class="controls">
                                            <?php echo form_dropdown('raw4', $mm_list, $raw_detls_4, 'class="chzn-select span6 m-wrap", id="raw4"'); ?>
                                          
                                            <input type="hidden" name="raw4_old" id="raw4_old" value="<?php echo $this->input->post('raw4_old') ?>" data-required="1" class="span1 m-wrap" />
                                            <input type="hidden" name="raw4_new" id="raw4_new" value="<?php echo $this->input->post('raw4_new') ?>" data-required="1" class="span1 m-wrap" />
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <label class="control-label" for="raw5">(5) </label>
                                          <div class="controls">
                                            <?php echo form_dropdown('raw5', $mm_list, $raw_detls_5, 'class="chzn-select span6 m-wrap", id="raw5"'); ?>
                                          
                                            <input type="hidden" name="raw5_old" id="raw5_old" value="<?php echo $this->input->post('raw5_old') ?>" data-required="1" class="span1 m-wrap" />
                                            <input type="hidden" name="raw5_new" id="raw5_new" value="<?php echo $this->input->post('raw5_new') ?>" data-required="1" class="span1 m-wrap" />
                                          </div>
                                        </div>

                                    <legend>Premium Raw</legend>

                                        <div class="control-group">
                                          <label class="control-label" for="praw1">(1) </label>
                                          <div class="controls">
                                            <?php echo form_dropdown('praw1', $mm_list, $praw_detls_1, 'class="chzn-select span6 m-wrap", id="praw1"'); ?>
                                          
                                            <input type="hidden" name="praw1_old" id="praw1_old" value="<?php echo $this->input->post('praw1_old') ?>" data-required="1" class="span1 m-wrap" />
                                            <input type="hidden" name="praw1_new" id="praw1_new" value="<?php echo $this->input->post('praw1_new') ?>" data-required="1" class="span1 m-wrap" />
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <label class="control-label" for="praw2">(2) </label>
                                          <div class="controls">
                                            <?php echo form_dropdown('praw2', $mm_list, $praw_detls_2, 'class="chzn-select span6 m-wrap", id="praw2"'); ?>
                                          
                                            <input type="hidden" name="praw2_old" id="praw2_old" value="<?php echo $this->input->post('praw2_old') ?>" data-required="1" class="span1 m-wrap" />
                                            <input type="hidden" name="praw2_new" id="praw2_new" value="<?php echo $this->input->post('praw2_new') ?>" data-required="1" class="span1 m-wrap" />
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <label class="control-label" for="praw3">(3) </label>
                                          <div class="controls">
                                            <?php echo form_dropdown('praw3', $mm_list, $praw_detls_3, 'class="chzn-select span6 m-wrap", id="praw3"'); ?>
                                          
                                            <input type="hidden" name="praw3_old" id="praw3_old" value="<?php echo $this->input->post('praw3_old') ?>" data-required="1" class="span1 m-wrap" />
                                            <input type="hidden" name="praw3_new" id="praw3_new" value="<?php echo $this->input->post('praw3_new') ?>" data-required="1" class="span1 m-wrap" />
                                          </div>
                                        </div>

                                    </div>

                                <legend>Delivery Requirements</legend>
                                    <div class="span-12">
                                        
                                            <div class="control-group">
                                                <label class="control-label">Delivery Acceptance Days </label>
                                                <div class="controls">
                                                    <input type="text" name="dadays" id="dadays" value="<?php echo $dtls->del_accpt_days; ?>" data-required="1" class="span4 m-wrap" />
                                                
                                                    <input type="hidden" name="dadays_old" id="dadays_old" value="<?php echo $this->input->post('dadays_old') ?>" data-required="1" class="span1 m-wrap" />
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Window Time </label>
                                                <div class="controls">
                                                    <input type="text" name="wtime" id="wtime" value="<?php echo $dtls->win_time; ?>" data-required="1" class="span4 m-wrap" />
                                                
                                                    <input type="hidden" name="wtime_old" id="wtime_old" value="<?php echo $this->input->post('wtime_old') ?>" data-required="1" class="span1 m-wrap" />
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Truck Requirement </label>
                                                <div class="controls">
                                                    <textarea cols="5" rows="2" data-required="1" class="span6 m-wrap" name="treq" id="treq"><?php echo $dtls->truck_req; ?></textarea>

                                                    <textarea cols="5" rows="2" data-required="1" class="span1 m-wrap" name="treq_old" id="treq_old" ></textarea>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">POD Requirement </label>
                                                <div class="controls">
                                                    <textarea cols="5" rows="2" data-required="1" class="span6 m-wrap" name="podreq" id="podreq"><?php echo $dtls->pod_req; ?></textarea>

                                                    <textarea cols="5" rows="2" data-required="1" class="span1 m-wrap" name="podreq_old" id="podreq_old" ></textarea>
                                                </div>
                                            </div>
                                       
                                    </div>
                                <legend>Quality Concerns</legend>
                                    <div class="span-12">
                                        
                                            <div class="control-group">
                                                <label class="control-label">Rejected Batch Codes </label>
                                                <div class="controls">
                                                    <input type="text" name="rbcode" id="rbcode" value="<?php echo $dtls->rej_bcode; ?>" data-required="1" class="span4 m-wrap" />
                                                
                                                    <input type="hidden" name="rbcode_old" id="rbcode_old" value="<?php echo $this->input->post('rbcode_old') ?>" data-required="1" class="span1 m-wrap" />
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Last Issue of the Account </label>
                                                <div class="controls">
                                                    <textarea cols="5" rows="2" data-required="1" class="span6 m-wrap" name="lacct" id="lacct"><?php echo $dtls->last_issue_acct; ?></textarea>
                                                
                                                    <textarea cols="5" rows="2" data-required="1" class="span1 m-wrap" name="lacct_old" id="lacct_old" ></textarea>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Specifications </label>
                                                <div class="controls">
                                                    <?php $specs_type = array('Yes'=>'Yes', 'No'=>'No'); ?>
                                                    <?php echo form_dropdown('specs', $specs_type, $dtls->specs, 'data-required="1", class="span4 m-wrap", id="specs_select"'); ?>
                                                
                                                    <input type="hidden" name="specs_old" id="specs_old" value="<?php echo $this->input->post('specs_old') ?>" data-required="1" class="span1 m-wrap" />
                                                    <input type="hidden" name="specs_new" id="specs_new" value="<?php echo $this->input->post('specs_new') ?>" data-required="1" class="span1 m-wrap" />

                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Reason(s) </label>
                                                <div class="controls">
                                                    <textarea cols="5" rows="2" data-required="1" class="span6 m-wrap" name="specs_reason" id="specs_reason"><?php echo $dtls->specs_reason; ?></textarea>

                                                    <textarea cols="5" rows="2" data-required="1" class="span1 m-wrap" name="specs_reason_old" id="specs_reason_old"></textarea>
                                                </div>
                                            </div>
                                        
                                    </div>
                                <legend>Customer Profile</legend>
                                    <div class="span-12">
                                        
                                            <div class="control-group">
                                                <label class="control-label">Plant Addresses </label>
                                                <div class="controls">
                                                    <textarea cols="5" rows="2" data-required="1" class="span6 m-wrap" name="paddr" id="paddr"><?php echo $dtls->plant_addr; ?></textarea>

                                                    <textarea cols="5" rows="2" data-required="1" class="span1 m-wrap" name="paddr_old" id="paddr_old"></textarea>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Telephone Number </label>
                                                <div class="controls">
                                                    <input type="text" name="telno" id="telno" value="<?php echo $dtls->telno; ?>" data-required="1" class="span4 m-wrap" />
                                                
                                                    <input type="hidden" name="telno_old" id="telno_old" value="<?php echo $this->input->post('telno_old') ?>" data-required="1" class="span1 m-wrap" />
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">HO Addresses </label>
                                                <div class="controls">
                                                    <textarea cols="5" rows="2" data-required="1" class="span6 m-wrap" name="hoaddr" id="hoaddr"><?php echo $dtls->ho_addr; ?></textarea>

                                                    <textarea cols="5" rows="2" data-required="1" class="span1 m-wrap" name="hoaddr_old" id="hoaddr_old"></textarea>
                                                </div>
                                            </div>
                                        
                                    </div>
                                <legend>Status</legend>
                                    <div class="span-12">
                                            
                                            <div class="control-group">
                                                <label class="control-label" for="stats_select">Document Status </label>
                                                <div class="controls">
                                                    <?php $stats_list = array('0'=>'Inactive', '1'=>'Active'); ?>
                                                    <?php echo form_dropdown('doc_stats', $stats_list, $dtls->Status, 'class="chzn-select span4 m-wrap", data-required="1", id="stats_select"'); ?>
                                                
                                                    <input type="hidden" name="stats_old" id="stats_old" value="<?php echo $this->input->post('stats_old') ?>" data-required="1" class="span1 m-wrap" />
                                                    <input type="hidden" name="stats_new" id="stats_new" value="<?php echo $this->input->post('stats_new') ?>" data-required="1" class="span1 m-wrap" />

                                                </div>
                                            </div>
        
                                    </div>

                                    <div class="row-fluid">
                                        <div class="span12">
                                            <div class="form-actions">
                                              <!-- <button type="submit" class="btn btn-success"><i class="icon-refresh icon-white"></i>  Update</button> -->

                                              <?php if (!$if_readonly_sales): ?>
                                                <a href="#update_modal" role="button" data-toggle="modal" class="btn btn-success btn-sm"><i class="icon-refresh icon-white"></i> Update</a>
                                                <a href="#delete_modal" role="button" data-toggle="modal" class="btn btn-danger btn-sm"><i class="icon-trash icon-white"></i> Delete</a>
                                              <?php else: ?>
                                                <button class="btn btn-success" disabled><i class="icon-refresh icon-white"></i> Update</button>
                                                <button class="btn btn-danger" disabled><i class="icon-trash icon-white"></i> Delete</button>
                                              <?php endif; ?>

                                              <a href="<?php echo site_url('main/sales_dashboard'); ?>" role="button" class="btn btn-default btn-sm pull-right"> Back</a>
                                           
                                                <div id="update_modal" class="modal hide">
                                                    <div class="modal-header">
                                                        <button data-dismiss="modal" class="close" type="button">&times;</button>
                                                        <h3>Update Confirmation</h3>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Record(s) from <b><?php echo $dtls->CardName; ?></b> will be udpated.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary"> Confirm</button>
                                                        <a data-dismiss="modal" class="btn" href="#">Cancel</a>
                                                    </div>
                                                </div>

                                                <div id="delete_modal" class="modal hide">
                                                    <div class="modal-header">
                                                        <button data-dismiss="modal" class="close" type="button">&times;</button>
                                                        <h3>Delete Confirmation</h3>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Record(s) from <b><?php echo $dtls->CardName; ?></b> will be deleted.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a class="btn btn-primary" href="<?php echo site_url('main/remove_del_dtls/'.$this->uri->segment(3)); ?>" role="button">Confirm</a>
                                                        <a data-dismiss="modal" class="btn" href="#">Cancel</a>
                                                    </div>
                                                </div>

                                                <div id="changelogs_modal" class="modal hide">
                                                    <div class="modal-header">
                                                        <button data-dismiss="modal" class="close" type="button">&times;</button>
                                                        <h3>Change Logs</h3>
                                                    </div>
                                                    <div class="modal-body">
                                                        <table class="table table-bordered table-condensed table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>Doc Entry</th>
                                                                    <th>CreateBy</th>
                                                                    <th>CreateDate</th>
                                                                    <th>Updated By</th>
                                                                    <th>UpdateDate</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php if (isset($change_log_dtls)): foreach ($change_log_dtls as $cd): ?>
                                                                <tr>
                                                                    <td style="text-align:center;"><?php echo anchor('main/change_logs/'.$cd->DocEntry, $cd->DocEntry, 'role="button", class="btn btn-default btn-xs"'); ?></td>
                                                                    <td><?php echo $cd->CreateBy; ?></td>
                                                                    <td><?php echo $cd->CreateDate; ?></td>
                                                                    <td><?php echo $cd->UpdateBy; ?></td>
                                                                    <td><?php echo $cd->UpdateDate; ?></td>
                                                                </tr>
                                                                <?php endforeach; ?>
                                                                <?php else: ?>
                                                                <tr>
                                                                    <td colspan="5">No Record(s) Found.</td>
                                                                </tr>
                                                                <?php endif; ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a data-dismiss="modal" class="btn" href="#">Close</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

                <?php endforeach; ?>
                <?php endif; ?>

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
        
        // STD REFINED ==========================================
        $('#sref1').change(function(){
            $('#sref1_new').val($('#sref1 :selected').text());
        });

        $('#sref2').change(function(){
            $('#sref2_new').val($('#sref2 :selected').text());
        });

        $('#sref3').change(function(){
            $('#sref3_new').val($('#sref3 :selected').text());
        });

        $('#sref4').change(function(){
            $('#sref4_new').val($('#sref4 :selected').text());
        });

        $('#sref5').change(function(){
            $('#sref5_new').val($('#sref5 :selected').text());
        });

        // PREMIUM REFINED ORIG ==========================================
        $('#pref1').change(function(){
            $('#pref1_new').val($('#pref1 :selected').text());
        });

        $('#pref2').change(function(){
            $('#pref2_new').val($('#pref2 :selected').text());
        });

        $('#pref3').change(function(){
            $('#pref3_new').val($('#pref3 :selected').text());
        });

        $('#pref4').change(function(){
            $('#pref4_new').val($('#pref4 :selected').text());
        });

        $('#pref5').change(function(){
            $('#pref5_new').val($('#pref5 :selected').text());
        });


         // SGS ==========================================
        $('#sgs1').change(function(){
            $('#sgs1_new').val($('#sgs1 :selected').text());
        });

        $('#sgs2').change(function(){
            $('#sgs2_new').val($('#sgs2 :selected').text());
        });

        $('#sgs3').change(function(){
            $('#sgs3_new').val($('#sgs3 :selected').text());
        });

        // Raw ==========================================
        $('#raw1').change(function(){
            $('#raw1_new').val($('#raw1 :selected').text());
        });

        $('#raw2').change(function(){
            $('#raw2_new').val($('#raw2 :selected').text());
        });

        $('#raw3').change(function(){
            $('#raw3_new').val($('#raw3 :selected').text());
        });

        $('#raw4').change(function(){
            $('#raw4_new').val($('#raw4 :selected').text());
        });

        $('#raw5').change(function(){
            $('#raw5_new').val($('#raw5 :selected').text());
        });

         // PREMIUM RAW ==========================================
        $('#praw1').change(function(){
            $('#praw1_new').val($('#praw1 :selected').text());
        });

        $('#praw2').change(function(){
            $('#praw2_new').val($('#praw2 :selected').text());
        });

        $('#praw3').change(function(){
            $('#praw3_new').val($('#praw3 :selected').text());
        });

        // AE
        $('#ae_select').change(function(){
            $('#ae_new').val($('#ae_select :selected').text());
        });

        // TYPE
        $('#type_select').change(function(){
            $('#type_new').val($('#type_select :selected').text());
        });

        // SPECS
        $('#specs_select').change(function(){
            $('#specs_new').val($('#specs_select :selected').text());
        });

        // STATUS
        $('#stats_select').change(function(){
            $('#stats_new').val($('#stats_select :selected').val());
        });

        
        // ON LOAD
        $(function() {

            $('#dins_old').hide();
            $('#treq_old').hide();
            $('#podreq_old').hide();
            $('#lacct_old').hide();
            $('#specs_reason_old').hide();
            $('#paddr_old').hide();
            $('#hoaddr_old').hide();

            // PLUGIN FOR SELECT CONTROL
            $(".chzn-select").chosen();

            // AUTOSIZE THE TEXTAREA FIELD
            $(".del_ins").height( $("textarea")[0].scrollHeight );

            // STD REFINED ===========================================
            $('#sref1_old').val($('#sref1 :selected').text());
            $('#sref2_old').val($('#sref2 :selected').text());
            $('#sref3_old').val($('#sref3 :selected').text());
            $('#sref4_old').val($('#sref4 :selected').text());
            $('#sref5_old').val($('#sref5 :selected').text());

            // PREMIUM REFINED
            $('#pref1_old').val($('#pref1 :selected').text());
            $('#pref2_old').val($('#pref2 :selected').text());
            $('#pref3_old').val($('#pref3 :selected').text());
            $('#pref4_old').val($('#pref4 :selected').text());
            $('#pref5_old').val($('#pref5 :selected').text());

            // SGS
            $('#sgs1_old').val($('#sgs1 :selected').text());
            $('#sgs2_old').val($('#sgs2 :selected').text());
            $('#sgs3_old').val($('#sgs3 :selected').text());
     
            // RAW
            $('#raw1_old').val($('#raw1 :selected').text());
            $('#raw2_old').val($('#raw2 :selected').text());
            $('#raw3_old').val($('#raw3 :selected').text());
            $('#raw4_old').val($('#raw4 :selected').text());
            $('#raw5_old').val($('#raw5 :selected').text());

            // PREMIUM RAW
            $('#praw1_old').val($('#praw1 :selected').text());
            $('#praw2_old').val($('#praw2 :selected').text());
            $('#praw3_old').val($('#praw3 :selected').text());

            // AE
            $('#ae_old').val($('#ae_select :selected').text());

            // TYPE
            $('#type_old').val($('#type_select :selected').text());

            // LOCATION
            $('#del_loc_old').val($('#del_loc').val());

            // DELIVERY INSTRUCTIONS
            $('#dins_old').text($('#dins').text());

            // DELIVERY ACCEPTANCE DAYSs
            $('#dadays_old').val($('#dadays').val());

            // WINDOW TIME
            $('#wtime_old').val($('#wtime').val());

            // TRUCK REQ
            $('#treq_old').text($('#treq').text());

            // POD REQ
            $('#podreq_old').text($('#podreq').text());

            // REJECTED BCODE
            $('#rbcode_old').val($('#rbcode').val());

            // LAST ISSUE OF ACCT
            $('#lacct_old').text($('#lacct').text());

            // SPECS REASON
            $('#specs_reason_old').text($('#specs_reason').text());

            // PLANT ADDRESS
            $('#paddr_old').text($('#paddr').text());

            // TELEPHONE NO.
            $('#telno_old').val($('#telno').val());

            // HO ADDRESS
            $('#hoaddr_old').text($('#hoaddr').text());

            // STATUS
            $('#stats_old').val($('#stats_select :selected').val());

            // SPECS
            $('#specs_old').val($('#specs_select :selected').text());

        });
        </script>
    </body>

</html>