<!DOCTYPE html>
<html>

<head>
    <title>AAIS - ePayout</title>
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
        body,
        html,
        table,
        span,
        input,
        button {
            font-family: Segoe UI;
        }

        table a {
            color: black;
            text-decoration: underline;
        }

        .pagination a {
            color: black;
        }

        td#ae_name,
        td#cust_type {
            width: 100px !important;
            white-space: nowrap !important;
        }

        */
    </style>

</head>

<body>

    <div class="container-fluid">

        <div class="row-fluid">

            <!--/span-->
            <div class="span4"></div>
            <div class="span4" id="content">

                <div class="row-fluid">
                    <!-- block -->
                    <div class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left">Union Bank ePayout - RTGS </div>
                            <div class="muted pull-right"><a href="<?php echo site_url('main/settings_login'); ?>"><i
                                        class="icon-cog"></i></a></div>
                        </div>

                        <div class="block-content collapse in">
                            <div class="span12">

                                <?php echo form_open(current_url(), 'class="form-horizontal"') ?>

                                <?php if (validation_errors()): ?>
                                <div class="alert alert-error">
                                    <button class="close" data-dismiss="alert">&times;</button>
                                    <p>
                                        <?php echo validation_errors(); ?>
                                    </p>
                                </div>
                                <?php endif; ?>

                                <?php if (isset($error)): ?>
                                <div class="alert alert-error">
                                    <button class="close" data-dismiss="alert">&times;</button>
                                    <p>
                                        <?php echo $error; ?>
                                    </p>
                                </div>
                                <?php endif; ?>

                                <!-- <div class="control-group">
                                    <label class="control-label">APV Date <span class="required">*</span></label>
                                    <div class="controls">
                                      <input type="text" name="apv_no" value="<?php echo $this->input->post('apv_no') ?>" data-required="1" class="span8 m-wrap" required/>
                                    </div>
                                  </div> -->

                                <div class="control-group">
                                    <label class="control-label">APV Number <span class="required">*</span></label>
                                    <div class="controls">
                                        <input type="text" name="apv_no" value="<?php echo $this->input->post('apv_no') ?>"
                                            data-required="1" class="span8 m-wrap" required />
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="pmethod_select">Payment Method <span class="required">*</span></label>
                                    <div class="controls">
                                        <?php $plist = array('EPCS'=>'EPCS', 'PDDTS'=>'PDDTS', 'SWIFT'=>'SWIFT'); ?>
                                        <?php echo form_dropdown('pmethod', $plist, $this->input->post('pmethod'), 'class="chzn-select span8 m-wrap", id="pmethod_select" '); ?>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="loc_select">Location <span class="required">*</span></label>
                                    <div class="controls">
                                        <select name="loc" class="chzn-select span8 m-wrap" id="loc_select" required>
                                            <option value="Makati">Makati</option>
                                            <option value="Bacolod">Bacolod</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row-fluid">
                                    <div class="span12">
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-success"><i class="icon-ok icon-white"></i>
                                                Get</button>
                                            <button type="reset" class="btn">Reset</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="row-fluid">
                                    <div class="span12">
                                        <a href="<?php echo site_url('main/view_logs'); ?>" class="btn btn-primary pull-right"
                                            role="button">View Logs >></a>
                                    </div>
                                </div>

                                <?php echo form_close(); ?>

                            </div>
                        </div>
                    </div>
                    <!-- /block -->
                </div>
            </div>
            <div class="span4"></div>
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
        $(function () {
            $(".chzn-select").chosen();
        });
    </script>
</body>

</html>