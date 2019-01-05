<!DOCTYPE html>
<html>
    
    <head>
        <title>AAIS - Change Logs</title>
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
                <div class="span12" id="content">

                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Change Logs Details</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <div class="table-responsive">
                                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered">
                                        <thead>
                                          <tr>
                                            <th>Action</th>
                                            <th>BP Name</th>
                                            <th>Cash Trader</th>
                                            <th>Location</th>
                                            <th>Delivery Instruction</th>
                                            <th>Customer Type</th>
                                            <th>Std Ref (1)</th>
                                            <th>Std Ref (2)</th>
                                            <th>Std Ref (3)</th>
                                            <th>Std Ref (4)</th>
                                            <th>Std Ref (5)</th>
                                            <th>Prem Ref (1)</th>
                                            <th>Prem Ref (2)</th>
                                            <th>Prem Ref (3)</th>
                                            <th>Prem Ref (4)</th>
                                            <th>Prem Ref (5)</th>
                                            <th>SGS (1)</th>
                                            <th>SGS (2)</th>
                                            <th>SGS (3)</th>
                                            <th>Raw (1)</th>
                                            <th>Raw (2)</th>
                                            <th>Raw (3)</th>
                                            <th>Raw (4)</th>
                                            <th>Raw (5)</th>
                                            <th>Prem Raw (1)</th>
                                            <th>Prem Raw (2)</th>
                                            <th>Prem Raw (3)</th>
                                            <th>Del Accpt Days</th>
                                            <th>WTime</th>
                                            <th>Truck Req.</th>
                                            <th>POD Req.</th>
                                            <th>Rej. Batch Codes</th>
                                            <th>Last Issue of Acct</th>
                                            <th>Specs</th>
                                            <th>Specs Reason</th>
                                            <th>Plant Addr</th>
                                            <th>Tel No.</th>
                                            <th>HO Addr</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <?php if(isset($change_log_dtls)): foreach($change_log_dtls as $cd): ?>
                                            <tr>

                                              <td>
                                                <?php if ($cd->action == "FROM"): ?>
                                                    <span class="badge badge-warning"><?php echo $cd->action; ?></span>
                                                <?php else: ?>
                                                    <span class="badge badge-success"><?php echo $cd->action; ?></span>
                                                <?php endif; ?>
                                              </td>
                                              <td><?php echo $cd->bpname; ?></td>
                                              <td><?php echo $cd->ae; ?></td>
                                              <td><?php echo $cd->delivery_location; ?></td>
                                              <td><?php echo $cd->delivery_ins; ?></td>
                                              <td><?php echo $cd->type; ?></td>
                                              <td><?php echo $cd->sref_1; ?></td>
                                              <td><?php echo $cd->sref_2; ?></td>
                                              <td><?php echo $cd->sref_3; ?></td>
                                              <td><?php echo $cd->sref_4; ?></td>
                                              <td><?php echo $cd->sref_5; ?></td>
                                              <td><?php echo $cd->pref_1; ?></td>
                                              <td><?php echo $cd->pref_2; ?></td>
                                              <td><?php echo $cd->pref_3; ?></td>
                                              <td><?php echo $cd->pref_4; ?></td>
                                              <td><?php echo $cd->pref_5; ?></td>
                                              <td><?php echo $cd->sgs_1; ?></td>
                                              <td><?php echo $cd->sgs_2; ?></td>
                                              <td><?php echo $cd->sgs_3; ?></td>
                                              <td><?php echo $cd->raw_1; ?></td>
                                              <td><?php echo $cd->raw_2; ?></td>
                                              <td><?php echo $cd->raw_3; ?></td>
                                              <td><?php echo $cd->raw_4; ?></td>
                                              <td><?php echo $cd->raw_5; ?></td>
                                              <td><?php echo $cd->praw_1; ?></td>
                                              <td><?php echo $cd->praw_2; ?></td>
                                              <td><?php echo $cd->praw_3; ?></td>
                                              <td><?php echo $cd->del_accpt_days; ?></td>
                                              <td><?php echo $cd->win_time; ?></td>
                                              <td><?php echo $cd->truck_req; ?></td>
                                              <td><?php echo $cd->pod_req; ?></td>
                                              <td><?php echo $cd->rej_bcode; ?></td>
                                              <td><?php echo $cd->last_issue_acct; ?></td>
                                              <td><?php echo $cd->specs; ?></td>
                                              <td><?php echo $cd->specs_reason; ?></td>
                                              <td><?php echo $cd->plant_addr; ?></td>
                                              <td><?php echo $cd->telno; ?></td>
                                              <td><?php echo $cd->ho_addr; ?></td>

                                            </tr>
                                          <?php endforeach; ?><?php  else: ?>
                                            <tr>
                                              <td colspan="39">No Record(s) Found.</td>
                                            </tr>
                                          <?php endif; ?>
                                        </tbody>
                                      </table>
                                  </div>

                                  <a href="<?php echo site_url('main/del_ins_detls/'.$this->uri->segment(3)); ?>" role="button" class="btn btn-default btn-sm pull-right"> Back</a>

                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

                </div>
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