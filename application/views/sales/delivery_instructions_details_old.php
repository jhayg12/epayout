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
                                    <?php echo anchor('#', 'Change Logs', 'role="button", class="btn btn-default btn-sm pull-right"'); ?>
                                </div>
                            </div>

                            <legend><b><?php echo $dtls->CardName; ?></b></legend>
                            
                            <div class="span12">
                                
                                    <div class="control-group">
                                      <label class="control-label" for="ae_select">Cash Trader <span class="required">*</span></label>
                                      <div class="controls">
                                        <?php echo form_dropdown('ae', $ae_list, $dtls->ae, 'class="chzn-select span4 m-wrap", required="required", data-required="1", id="ae_select"'); ?>
                                      </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Location </label>
                                        <div class="controls">
                                            <input type="text" name="del_loc" value="<?php echo $dtls->delivery_location; ?>" data-required="1" class="span4 m-wrap" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Delivery Instructions </label>
                                        <div class="controls">
                                            <textarea cols="5" rows="2" data-required="1" class="span6 m-wrap del_ins" name="dins"><?php echo $dtls->delivery_ins; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                      <label class="control-label" for="type_select">Type <span class="required">*</span></label>
                                      <div class="controls">
                                        <?php echo form_dropdown('type', $cust_type, $dtls->type, 'class="chzn-select span6 m-wrap", id="type_select"'); ?>
                                      </div>
                                    </div>
                                
                            </div>
                    
                            <legend>Approved Mill Marks</legend>

                                    <div class="span-12">
                                       
                                            <div class="control-group">
                                              <label class="control-label" for="sref_select">Standard Refined</label>
                                              <div class="controls">
                                                <?php echo form_dropdown('sref[]', $mm_list, $this->input->post('sref'), 'multiple="multiple", id="sref_select", class="chzn-select span6 m-wrap"'); ?>
                                                <p class="help-block">Select to Remove/Add MillMark from List</p>
                                              </div>
                                            </div>

                                            <!-- STD REFINED LOGS -->
                                            <div class="control-group sref_temp">
                                              <div class="controls">
                                                <?php echo form_dropdown('sref_temp[]', $mm_list, $stdref_detls, 'multiple="multiple", id="sref_temp", class="chzn-select span6 m-wrap"'); ?>
                                              </div>
                                            </div>

                                            <div class="control-group">
                                              <div class="controls">
                                                <input type="hidden" id="sref_logs" name="sref_logs" value="<?php echo $this->input->post('sref_logs') ?>">
                                              </div>
                                            </div>

                                            <div class="control-group">
                                              <div class="controls">
                                                <input type="hidden" id="sref_orig" name="sref_orig" value="<?php echo $this->input->post('sref_orig') ?>">
                                              </div>
                                            </div>

                                            <!-- END STD REFINED LOGS -->

                                            <div class="control-group">
                                              <label class="control-label"></label>
                                              <div class="controls span4">
                                                <table class="table table-bordered table-condensed table-striped" id="stdref">
                                                    <thead>
                                                        <tr>
                                                            <th>Mill Mark Name</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php if(isset($stdref_detls_tbl)): foreach($stdref_detls_tbl as $sd): ?>
                                                        <tr>
                                                            <td><?php echo $sd->MName; ?></td>
                                                        </tr>
                                                        <?php endforeach; ?>
                                                        <?php else: ?>
                                                        <tr>
                                                            <td>No Selected Mill Mark</td>
                                                        </tr>
                                                        <?php endif; ?>
                                                    </tbody>
                                                </table>
                                              </div>
                                            </div>

                                            <div class="control-group">
                                              <label class="control-label" for="pref_select">Premium Refined</label>
                                              <div class="controls">
                                                <?php echo form_dropdown('pref[]', $mm_list, $this->input->post('pref'), 'multiple="multiple", id="pref_select", class="chzn-select span6 m-wrap"'); ?>
                                                <p class="help-block">Select to Remove/Add MillMark from List</p>
                                              </div>
                                            </div>

                                            <!-- PREMIUM REFINED LOGS -->
                                            <div class="control-group pref_temp">
                                              <div class="controls">
                                                <?php echo form_dropdown('pref_temp[]', $mm_list, $prref_detls, 'multiple="multiple", id="pref_temp", class="chzn-select span6 m-wrap"'); ?>
                                              </div>
                                            </div>

                                            <div class="control-group">
                                              <div class="controls">
                                                <input type="hidden" id="pref_logs" name="pref_logs" value="<?php echo $this->input->post('pref_logs') ?>">
                                              </div>
                                            </div>

                                            <div class="control-group">
                                              <div class="controls">
                                                <input type="hidden" id="pref_orig" name="pref_orig" value="<?php echo $this->input->post('pref_orig') ?>">
                                              </div>
                                            </div>
                                            <!-- END PREMIUM REFINED LOGS -->

                                            <div class="control-group">
                                              <label class="control-label"></label>
                                              <div class="controls span4">
                                                <table class="table table-bordered table-condensed table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Mill Mark Name</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php if(isset($prref_detls_tbl)): foreach($prref_detls_tbl as $sd): ?>
                                                        <tr>
                                                            <td><?php echo $sd->MName; ?></td>
                                                        </tr>
                                                        <?php endforeach; ?>
                                                        <?php else: ?>
                                                        <tr>
                                                            <td>No Selected Mill Mark</td>
                                                        </tr>
                                                        <?php endif; ?>
                                                    </tbody>
                                                </table>
                                              </div>
                                            </div>

                                            <div class="control-group">
                                              <label class="control-label" for="sgs_select">SGS</label>
                                              <div class="controls">
                                                <?php echo form_dropdown('sgs[]', $mm_list, $this->input->post('sgs'), 'multiple="multiple", id="sgs_select", class="chzn-select span6 m-wrap"'); ?>
                                                <p class="help-block">Select to Remove/Add MillMark from List</p>
                                              </div>
                                            </div>

                                            <!-- SGS LOGS -->
                                            <div class="control-group sgs_temp">
                                              <div class="controls">
                                                <?php echo form_dropdown('sgs_temp[]', $mm_list, $sgs_detls, 'multiple="multiple", id="sgs_temp", class="chzn-select span6 m-wrap"'); ?>
                                              </div>
                                            </div>

                                            <div class="control-group">
                                              <div class="controls">
                                                <input type="hidden" id="sgs_logs" name="sgs_logs" value="<?php echo $this->input->post('sgs_logs') ?>">
                                              </div>
                                            </div>

                                            <div class="control-group">
                                              <div class="controls">
                                                <input type="hidden" id="sgs_orig" name="sgs_orig" value="<?php echo $this->input->post('sgs_orig') ?>">
                                              </div>
                                            </div>
                                            <!-- END SGS LOGS -->

                                            <div class="control-group">
                                              <label class="control-label"></label>
                                              <div class="controls span4">
                                                <table class="table table-bordered table-condensed table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Mill Mark Name</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php if(isset($sgs_detls_tbl)): foreach($sgs_detls_tbl as $sd): ?>
                                                        <tr>
                                                            <td><?php echo $sd->MName; ?></td>
                                                        </tr>
                                                        <?php endforeach; ?>
                                                        <?php else: ?>
                                                        <tr>
                                                            <td>No Selected Mill Mark</td>
                                                        </tr>
                                                        <?php endif; ?>
                                                    </tbody>
                                                </table>
                                              </div>
                                            </div>

                                            <div class="control-group">
                                              <label class="control-label" for="raw_select">Raw</label>
                                              <div class="controls">
                                                <?php echo form_dropdown('raw[]', $mm_list, $this->input->post('raw'), 'multiple="multiple", id="raw_select", class="chzn-select span6 m-wrap"'); ?>
                                                <p class="help-block">Select to Remove/Add MillMark from List</p>
                                              </div>
                                            </div>

                                            <!-- RAW LOGS -->
                                            <div class="control-group raw_temp">
                                              <div class="controls">
                                                <?php echo form_dropdown('raw_temp[]', $mm_list, $raw_detls, 'multiple="multiple", id="raw_temp", class="chzn-select span6 m-wrap"'); ?>
                                              </div>
                                            </div>

                                            <div class="control-group">
                                              <div class="controls">
                                                <input type="hidden" id="raw_logs" name="raw_logs" value="<?php echo $this->input->post('raw_logs') ?>">
                                              </div>
                                            </div>

                                            <div class="control-group">
                                              <div class="controls">
                                                <input type="hidden" id="raw_orig" name="raw_orig" value="<?php echo $this->input->post('raw_orig') ?>">
                                              </div>
                                            </div>
                                            <!-- END RAW LOGS -->

                                            <div class="control-group">
                                              <label class="control-label"></label>
                                              <div class="controls span4">
                                                <table class="table table-bordered table-condensed table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Mill Mark Name</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php if(isset($raw_detls_tbl)): foreach($raw_detls_tbl as $sd): ?>
                                                        <tr>
                                                            <td><?php echo $sd->MName; ?></td>
                                                        </tr>
                                                        <?php endforeach; ?>
                                                        <?php else: ?>
                                                        <tr>
                                                            <td>No Selected Mill Mark</td>
                                                        </tr>
                                                        <?php endif; ?>
                                                    </tbody>
                                                </table>
                                              </div>
                                            </div>

                                            <div class="control-group">
                                              <label class="control-label" for="praw_select">Premium Raw</label>
                                              <div class="controls">
                                                <?php echo form_dropdown('praw[]', $mm_list, $this->input->post('praw'), 'multiple="multiple", id="praw_select", class="chzn-select span6 m-wrap"'); ?>
                                                <p class="help-block">Select to Remove/Add MillMark from List</p>
                                              </div>
                                            </div>

                                            <!-- PREMIUM RAW LOGS -->
                                            <div class="control-group praw_temp">
                                              <div class="controls">
                                                <?php echo form_dropdown('praw_temp[]', $mm_list, $praw_detls, 'multiple="multiple", id="praw_temp", class="chzn-select span6 m-wrap"'); ?>
                                              </div>
                                            </div>

                                            <div class="control-group">
                                              <div class="controls">
                                                <input type="hidden" id="praw_logs" name="praw_logs" value="<?php echo $this->input->post('praw_logs') ?>">
                                              </div>
                                            </div>

                                            <div class="control-group">
                                              <div class="controls">
                                                <input type="hidden" id="praw_orig" name="praw_orig" value="<?php echo $this->input->post('praw_orig') ?>">
                                              </div>
                                            </div>

                                            <!-- END PREMIUM RAW LOGS -->

                                            <div class="control-group">
                                              <label class="control-label"></label>
                                              <div class="controls span4">
                                                <table class="table table-bordered table-condensed table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Mill Mark Name</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php if(isset($praw_detls_tbl)): foreach($praw_detls_tbl as $sd): ?>
                                                        <tr>
                                                            <td><?php echo $sd->MName; ?></td>
                                                        </tr>
                                                        <?php endforeach; ?>
                                                        <?php else: ?>
                                                        <tr>
                                                            <td>No Selected Mill Mark</td>
                                                        </tr>
                                                        <?php endif; ?>
                                                    </tbody>
                                                </table>
                                              </div>
                                            </div>

                                        
                                    </div>

                                <legend>Delivery Requirements</legend>
                                    <div class="span-12">
                                        
                                            <div class="control-group">
                                                <label class="control-label">Delivery Acceptance Days </label>
                                                <div class="controls">
                                                    <input type="text" name="dadays" value="<?php echo $dtls->del_accpt_days; ?>" data-required="1" class="span4 m-wrap" />
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Window Time </label>
                                                <div class="controls">
                                                    <input type="text" name="wtime" value="<?php echo $dtls->win_time; ?>" data-required="1" class="span4 m-wrap" />
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Truck Requirement </label>
                                                <div class="controls">
                                                    <textarea cols="5" rows="2" data-required="1" class="span6 m-wrap" name="treq" ><?php echo $dtls->truck_req; ?></textarea>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">POD Requirement </label>
                                                <div class="controls">
                                                    <textarea cols="5" rows="2" data-required="1" class="span6 m-wrap" name="podreq" ><?php echo $dtls->pod_req; ?></textarea>
                                                </div>
                                            </div>
                                       
                                    </div>
                                <legend>Quality Concerns</legend>
                                    <div class="span-12">
                                        
                                            <div class="control-group">
                                                <label class="control-label">Rejected Batch Codes </label>
                                                <div class="controls">
                                                    <input type="text" name="rbcode" value="<?php echo $dtls->rej_bcode; ?>" data-required="1" class="span4 m-wrap" />
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Last Issue of the Account </label>
                                                <div class="controls">
                                                    <textarea cols="5" rows="2" data-required="1" class="span6 m-wrap" name="lacct" ><?php echo $dtls->last_issue_acct; ?></textarea>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Specifications </label>
                                                <div class="controls">
                                                    <?php $specs_type = array('Yes'=>'Yes', 'No'=>'No'); ?>
                                                    <?php echo form_dropdown('specs', $specs_type, $dtls->specs, 'data-required="1", class="span4 m-wrap"'); ?>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Reason(s) </label>
                                                <div class="controls">
                                                    <textarea cols="5" rows="2" data-required="1" class="span6 m-wrap" name="specs_reason" ><?php echo $dtls->specs_reason; ?></textarea>
                                                </div>
                                            </div>
                                        
                                    </div>
                                <legend>Customer Profile</legend>
                                    <div class="span-12">
                                        
                                            <div class="control-group">
                                                <label class="control-label">Plant Addresses </label>
                                                <div class="controls">
                                                    <textarea cols="5" rows="2" data-required="1" class="span6 m-wrap" name="paddr" ><?php echo $dtls->plant_addr; ?></textarea>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Telephone Number </label>
                                                <div class="controls">
                                                    <input type="text" name="telno" value="<?php echo $dtls->telno; ?>" data-required="1" class="span4 m-wrap" />
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">HO Addresses </label>
                                                <div class="controls">
                                                    <textarea cols="5" rows="2" data-required="1" class="span6 m-wrap" name="hoaddr" ><?php echo $dtls->ho_addr; ?></textarea>
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
        
        // STD REFINED ORIG
        $('#sref_select').change(function(){

            var selected_sref_orig=[];
            $('#sref_select :selected').each(function(){
                 selected_sref_orig[$(this).val()]=$(this).text();
            });

            $('#sref_orig').val(selected_sref_orig);
        });

        // PREMIUM REFINED ORIG
        $('#pref_select').change(function(){

            var selected_pref_orig=[];
            $('#pref_select :selected').each(function(){
                 selected_pref_orig[$(this).val()]=$(this).text();
            });

            $('#pref_orig').val(selected_pref_orig);
        });

        // SGS ORIG
        $('#sgs_select').change(function(){

            var selected_sgs_orig=[];
            $('#sgs_select :selected').each(function(){
                 selected_sgs_orig[$(this).val()]=$(this).text();
            });

            $('#sgs_orig').val(selected_sgs_orig);
        });

        // RAW ORIG
        $('#raw_select').change(function(){

            var selected_raw_orig=[];
            $('#raw_select :selected').each(function(){
                 selected_raw_orig[$(this).val()]=$(this).text();
            });

            $('#raw_orig').val(selected_raw_orig);
        });

        // PREMIUM RAW ORIG
        $('#praw_select').change(function(){

            var selected_praw_orig=[];
            $('#praw_select :selected').each(function(){
                 selected_praw_orig[$(this).val()]=$(this).text();
            });

            $('#praw_orig').val(selected_praw_orig);
        });

        // ON LOAD
        $(function() {
            // PLUGIN FOR SELECT CONTROL
            $(".chzn-select").chosen();

            // AUTOSIZE THE TEXTAREA FIELD
            $(".del_ins").height( $("textarea")[0].scrollHeight );

            // STD REFINED
            $('.sref_temp').hide();

            var selected_sref=[];
            $('#sref_temp :selected').each(function(){
                 selected_sref[$(this).val()]=$(this).text();
            });

            $('#sref_logs').val(selected_sref);

            // PREMIUM REFINED
            $('.pref_temp').hide();

            var selected_pref=[];
            $('#pref_temp :selected').each(function(){
                 selected_pref[$(this).val()]=$(this).text();
            });

            $('#pref_logs').val(selected_pref);

            // SGS REFINED
            $('.sgs_temp').hide();

            var selected_sgs=[];
            $('#sgs_temp :selected').each(function(){
                 selected_sgs[$(this).val()]=$(this).text();
            });

            $('#sgs_logs').val(selected_sgs);

            // RAW REFINED
            $('.raw_temp').hide();

            var selected_raw=[];
            $('#raw_temp :selected').each(function(){
                 selected_raw[$(this).val()]=$(this).text();
            });

            $('#raw_logs').val(selected_raw);

            // PREMIUM RAW REFINED
            $('.praw_temp').hide();

            var selected_praw=[];
            $('#praw_temp :selected').each(function(){
                 selected_praw[$(this).val()]=$(this).text();
            });

            $('#praw_logs').val(selected_praw);


            $('#stdref tr').each(function() {
                if (!this.rowIndex) return; // skip first row
                var customerId = this.cells[0].innerHTML;
            });

            alert(customerId);


        });
        </script>
    </body>

</html>