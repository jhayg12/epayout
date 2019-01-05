<!DOCTYPE html>
<html>
    
    <head>
        <title>AAIS - Logs</title>
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
  
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span2"></div>
                <div class="span8" id="content">

                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Union Bank ePayout - Logs</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">

                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                    <thead>
                      <tr>
                        <th>APV No</th>
                        <th>Client Name</th>
                        <th>Account No.</th>
                        <th>Amount</th>
                        <th>Payment Method</th>
                        <th>Location</th>
                        <th>Create DateTime</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if(isset($log_dtls)): foreach($log_dtls as $ldtls): ?>
                        <tr>
                            <td>
                            <?php echo anchor('main/view_log_dtls/'.$ldtls->APV_No, $ldtls->APV_No); ?>
                            <td><?php echo $ldtls->BeneficiaryName; ?></td>
                            <td><?php echo $ldtls->BeneficiaryAccountNo; ?></td>
                            <td><?php echo $ldtls->TotalTransAmount; ?></td>
                            <td><?php echo $ldtls->PaymentMethod; ?></td>
                            <td><?php echo $ldtls->Location; ?></td>
                            <td><?php echo $ldtls->CreateDate; echo " "; echo $ldtls->CreateTime; ?></td>
                        </tr>
                      <?php endforeach; ?><?php  else: ?>
                        <tr>
                          <td colspan="5">No Record(s) Found.</td>
                        </tr>
                      <?php endif; ?>
                    </tbody>
                  </table>
                                </div>
                                <div class="row-fluid">
                                    <div class="span12">
                                        <a href="<?php echo site_url('main'); ?>" role="button" class="btn btn-default btn-sm pull-right"> Back</a>
                                        <span class="pull-left"><p><small><em>Note: Click the <b>APV No</b> for more details.</small></em></p></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

                </div>
                <div class="span2"></div>
            </div>
            <hr>
            <footer>
                <p>&copy; All Asian Integration Systems 2017</p><br>
                <img src="<?php echo base_url(); ?>/images/aaci_logo.png" alt="logo" />
                <img src="<?php echo base_url(); ?>/images/ub_logo.png" alt="logo" />
                <img src="<?php echo base_url(); ?>/images/hub_logo.png" alt="logo" />
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