<!DOCTYPE html>
<html>

<head>
    <title>AAIS - Add Bank Account Details</title>
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
                            <div class="muted pull-left">Add Bank Account Details</div>
                        </div>

                        <div class="block-content collapse in">
                            <?php echo form_open("main/store_add_bank_account", 'class="form-horizontal"') ?>

                            <!-- ERROR MESSAGES -->
                            <?php if (validation_errors()): ?>
                            <div class="alert alert-error">
                                <button class="close" data-dismiss="alert">&times;</button>
                                <p>
                                    <?php echo validation_errors(); ?>
                                </p>
                            </div>
                            <?php endif; ?>
                            <!-- END OF ERROR MESSAGES -->

                            <?php if (isset($error)): ?>
                            <div class="alert alert-error">
                                <button class="close" data-dismiss="alert">&times;</button>
                                <p>
                                    <?php echo $error; ?>
                                </p>
                            </div>
                            <?php endif; ?>

                            <!-- BP CODE -->
                            <div class="control-group">
                                <label class="control-label">BP Code </label>
                                <div class="controls">
                                    <input type="text" name="bp_code" id="bp_code" value="<?php echo $this->input->post('bp_code'); ?>"
                                        required>
                                </div>
                            </div>
                            <!-- END OF BP CODE -->

                            <!-- ACCOUNT NAME -->
                            <div class="control-group">
                                <label class="control-label">BP Name </label>
                                <div class="controls">
                                    <input type="text" name="bp_name" id="bp_name" value="<?php echo $this->input->post('bp_name'); ?>"
                                        style="text-transform: uppercase;" required>
                                </div>
                            </div>
                            <!-- END OF ACCOUNT NAME -->

                            <!-- BANK NAME -->
                            <div class="control-group">
                                <label class="control-label" for="bankbname_select">Bank Name <span class="required">*</span></label>
                                <div class="controls">
                                    <?php echo form_dropdown('bene_bank_name', $bank_list, $this->input->post('bene_bank_name'), 'class="bene_bank_name span10 m-wrap", id="bankbname_select" required'); ?>
                                    <input type='hidden' id='tags' style='width:300px' />
                                    <input type="hidden" name="bank_code" id="bank_code" class="span1 m-wrap" value="<?php echo $this->input->post('bank_code') ?>">
                                    <input type="hidden" name="micr_code" id="micr_code" class="span1 m-wrap" value="<?php echo $this->input->post('micr_code') ?>">
                                    <input type="hidden" name="branch_code" id="branch_code" class="span1 m-wrap" value="<?php echo $this->input->post('branch_code') ?>">
                                    <input type="hidden" name="bank_name" id="bank_name" class="span1 m-wrap" value="<?php echo $this->input->post('bank_name') ?>">
                                </div>
                            </div>
                            <!-- END OF BANK NAME -->

                            <!-- ACCOUNT NUMBER -->
                            <div class="control-group">
                                <label class="control-label">Account Number </label>
                                <div class="controls">
                                    <input type="text" name="account_code" value="<?php echo $this->input->post('account_code'); ?>"
                                        required>
                                </div>
                            </div>
                            <!-- END OF ACCOUNT NUMBER -->

                            <div class="row-fluid">
                                <div class="span12">
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"><i class="icon-ok icon-white"></i>
                                            Add</button>
                                        <button type="reset" class="btn">Reset</button>
                                        <a href="<?php echo site_url('main'); ?>" role="button" class="btn btn-default btn-sm pull-right">
                                            Back</a>
                                    </div>
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
    <script src="<?php echo base_url(); ?>third_party/assets/form-validation.js"></script>

    <script src="<?php echo base_url(); ?>third_party/assets/scripts.js"></script>
    <script>
        $(function () {
            $(".bene_bank_name").chosen();

            $("#bp_code").blur(function () {
                $.ajax({
                    url: "<?php echo base_url()?>index.php/main/get_bp_name",
                    type: "POST",
                    dataType: "json",
                    data: {
                        bp_code: this.value
                    },
                    success: function (data) {
                        $('#bp_name').val(data.bp_data[0].CardName);
                        $('#bankbname_select').focus();
                    }
                });
            });

        });
    </script>

</body>

</html>