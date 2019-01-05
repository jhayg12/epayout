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
            body, html, table, span, input, button, textarea{
                font-family: Segoe UI;
            }

            table a{
                color: black;
                text-decoration: underline;
            }

            .pagination a{
                color: black;
            }

            #bene_acct, #bene_addr, #net_amount, #bene_name_select, #bene_acct_select {
              font-weight: bold;
            }

            td#ae_name, td#cust_type{width:100px !important;white-space:nowrap !important;}

            /*li.no-results {
             visibility:hidden;
            }*/

        </style>

    </head>
    
    <body>
        
        <div class="container-fluid">

            <div class="row-fluid">

                <!--/span-->
                <div class="span2"></div>
                <div class="span8" id="content">

                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Union Bank ePayout - RTGS</div>
                            </div>

                            <div class="block-content collapse in">
                                <div class="span12">

                                <?php echo form_open("main/validate_epcs", 'class="form-horizontal"') ?>

                                  <?php if (validation_errors()): ?>
                                  <div class="alert alert-error">
                                      <button class="close" data-dismiss="alert">&times;</button>
                                      <p><?php echo validation_errors(); ?></p>
                                  </div>
                                  <?php endif; ?>

                                  <?php if (isset($error)): ?>
                                  <div class="alert alert-error">
                                      <button class="close" data-dismiss="alert">&times;</button>
                                      <p><?php echo $error; ?></p>
                                  </div>
                                  <?php endif; ?>

                                  <?php if (isset($inv_no)): ?>
                                    <input type="hidden" name="apv_no" value="<?php echo $inv_no; ?>">
                                  <?php else: ?>
                                    <input type="hidden" name="apv_no" value="<?php echo $this->input->post('apv_no'); ?>">
                                  <?php endif; ?>

                                  <?php if (isset($loc)): ?>
                                    <input type="hidden" name="loc" value="<?php echo $loc; ?>">
                                  <?php else: ?>
                                    <input type="hidden" name="loc" value="<?php echo $this->input->post('loc'); ?>">
                                  <?php endif; ?>

                                  <?php if (isset($inv_dtls)): foreach ($inv_dtls as $idtls): ?>

                                  <div class="control-group">
                                    <label class="control-label">Payment Method </label>
                                    <div class="controls">
                                      <?php if (isset($pmethod)): ?>
                                        <input type="text" name="pmethod" value="<?php echo $pmethod; ?>" readonly>
                                      <?php else: ?>
                                        <input type="text" name="pmethod" value="<?php echo $this->input->post('pmethod'); ?>" readonly>
                                      <?php endif; ?>
                                    </div>
                                  </div> 

                                  <div class="control-group">
                                    <label class="control-label">Currency </label>
                                    <div class="controls">
                                      <input type="text" name="currency" value="<?php echo $idtls->CurrencyDoc; ?>" class="span6 m-wrap" readonly/>
                                    </div>
                                  </div>

                                  <!-- <div class="control-group">
                                    <label class="control-label">Beneficiary Name </label>
                                    <div class="controls">
                                      <input type="text" name="bene_name" data-required="1" value="<?php echo $idtls->BeneficiaryAccountName; ?>" class="span6 m-wrap"/>
                                    </div>
                                  </div> -->

                                  <div class="control-group">
                                    <label class="control-label" for="bene_name_select">Beneficiary Name <span class="required">*</span></label>
                                    <div class="controls">
                                      <?php echo form_dropdown('bene_name', $bene_name_list, strtoupper($idtls->VendorCode), 'class="bene_name span6 m-wrap", id="bene_name_select" required="required" readonly="reaonly"' ); ?>
                                    
                                      <input type="hidden" name="bene_name_orig" id="bene_name_orig" class="span1 m-wrap" value="<?php echo $idtls->BeneficiaryAccountName; ?>">
                                    
                                      <input type="hidden" name="bname" id="bname" class="span1 m-wrap" value="<?php echo $this->input->post('bname') ?>">
                                    </div>
                                  </div>

                                  <!-- <div class="control-group">
                                    <label class="control-label">Beneficiary Account No. <span class="required">*</span></label>
                                    <div class="controls">
                                      <input type="text" name="bene_acct" id="bene_acct" value="<?php echo $this->input->post("bene_acct"); ?>" data-required="1" class="span6 m-wrap" readonly required/>
                                    </div>
                                  </div> -->

                                  <div class="control-group">
                                    <label class="control-label" for="bene_acct_select">Beneficiary Account No. <span class="required">*</span></label>
                                    <div class="controls">
                                      <?php echo form_dropdown('bene_acct', $bank_acct_list, $this->input->post('bene_acct'), 'class="bene_acct span6 m-wrap", id="bene_acct_select" required="required" readonly="reaonly"' ); ?>
                                    
                                      <input type="hidden" name="bacct" id="bacct" class="span1 m-wrap" value="<?php echo $this->input->post('bacct') ?>">
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label">Beneficiary Address <span class="required">*</span></label>
                                    <div class="controls">

                                      <?php $BeneAddr = "";  ?>
                                      <?php if ($idtls->BeneAddress != NULL): ?>
                                        <?php $BeneAddr = $idtls->BeneAddress; ?>
                                      <?php else: ?>
                                        <?php $BeneAddr = "NO ADDRESS AVAILABLE"; ?>
                                      <?php endif; ?>

                                      <textarea class="span6 m-wrap" name="bene_addr" id="bene_addr" required><?php echo $BeneAddr; ?></textarea>
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label" for="bankbname_select">Beneficiary Bank Name <span class="required">*</span></label>
                                    <div class="controls">
                                      
                                      <?php echo form_dropdown('bene_bank_name', $bank_list, $this->input->post('bene_bank_name'), 'class="bene_bank_name span6 m-wrap", id="bankbname_select" required="required" '); ?>

                                      <input type='hidden' id='tags' style='width:300px'/>

                                      <input type="hidden" name="bank_code" id="bank_code" class="span1 m-wrap" value="<?php echo $this->input->post('bank_code') ?>">
                                      <input type="hidden" name="micr_code" id="micr_code" class="span1 m-wrap" value="<?php echo $this->input->post('micr_code') ?>">
                                      <input type="hidden" name="branch_code" id="branch_code" class="span1 m-wrap" value="<?php echo $this->input->post('branch_code') ?>">
                                      
                                      <input type="hidden" name="bank_name" id="bank_name" class="span1 m-wrap" value="<?php echo $this->input->post('bank_name') ?>">

                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label">Amount </label>
                                    <div class="controls">

                                       <?php   

                                            $amount = 0;
                                            if ($idtls->NetAmount <= 0) {
                                                $amount = $idtls->GrossAmount;
                                            } else {
                                                $amount = $idtls->NetAmount;
                                            }

                                       ?>

                                      <input type="text" name="net_amount" id="net_amount" value="<?php echo number_format($amount, 2) ?>" class="span6 m-wrap" readonly/>
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label">Debit Account Number <span class="required">*</span></label>
                                    <div class="controls">
                                      <input type="text" name="debt_acctno" data-required="1" value="013030000702" class="span6 m-wrap" required/>
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label">Other Details </label>
                                    <div class="controls">
                                      <textarea class="span6 m-wrap" name="other_dtls"><?php echo $this->input->post('other_dtls'); ?></textarea>
                                    </div>
                                  </div>

                                <?php endforeach; ?>
                                <?php endif; ?>

                                  <div class="row-fluid">
                                      <div class="span12">
                                        <div class="form-actions">
                                          <button type="submit" class="btn btn-success"><i class="icon-ok icon-white"></i> Add</button>
                                          <button type="reset" class="btn">Reset</button>
                                          <a href="<?php echo site_url('main'); ?>" role="button" class="btn btn-default btn-sm pull-right"> Back</a>
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
        $(function() {

             // SET BENEFICIARY NAME
             var benename;
             benename = $('#bene_name_orig').val().toUpperCase().split(' ')[0];

             $("#bene_name_select option:contains("+ benename +")").each(function () {
                  // if($(this).html()=='ANTONIO'){
                    $(this).attr('selected', 'selected');
                  // }
             });

             $(".chzn-select").chosen();

             $(".bene_bank_name").chosen();

             $(".bene_name").change(function(){

                if (this.value != "") {

                   $.ajax({
                    url: "<?php echo base_url()?>index.php/main/get_bene_acctno",
                    type: "POST",
                    dataType: "json",
                    data: {bene_code: this.value},
                    success: function(data){
                      $.each(data.bene_acctno_data, function(index, val){
                        // $('#bene_acct').val(val.Account_No);
                        $('#bankbname_select').val(val.Bank);
                        $('#bankbname_select').trigger('chosen:updated');

                        $('#bene_acct_select').val(val.BeneAcctId);
                        $('#bene_acct_select').trigger('chosen:updated');

                        $('#bank_code').val(val.BankCode);
                        $('#micr_code').val(val.MICR);
                        $('#branch_code').val(val.BranchCode);

                        $('#bank_name').val($("#bankbname_select :selected").text());

                        $('#bname').val($("#bene_name_select :selected").text());
                        $('#bacct').val($("#bene_acct_select :selected").text());

                      });
                    }
                  });

                }

             }).change();


              // USE FOR ADDING NEW BENEFICIARY NAME
              var select, chosen;

              // cache the select element as we'll be using it a few times
              select = $(".bene_name");

              // init the chosen plugin
              select.chosen({ no_results_text: 'Press Enter to add new entry:' });
              
              // get the chosen object
              chosen = select.data('chosen');

              // Bind the keyup event to the search box input
              chosen.dropdown.find('input').on('keyup', function(e)
              {
                  // if we hit Enter and the results list is empty (no matches) add the option
                  if (e.which == 13 && chosen.dropdown.find('li.no-results').length > 0)
                  {
                      var option = $("<option>").val(this.value.toUpperCase()).text(this.value.toUpperCase());

                      // add the new option
                      select.prepend(option);
                      // automatically select it
                      select.find(option).prop('selected', true);
                      // trigger the update
                      select.trigger("chosen:updated");
                      // select.trigger("liszt:updated");
                  }
              });

              // USE FOR ADDING NEW BENEFICIARY ACCOUNT NUMBER
              var select2, chosen2;

              // cache the select element as we'll be using it a few times
              select2 = $(".bene_acct");

              // init the chosen plugin
              select2.chosen({ no_results_text: 'Press Enter to add new entry:' });
              
              // get the chosen object
              chosen2 = select2.data('chosen');

              // Bind the keyup event to the search box input
              chosen2.dropdown.find('input').on('keyup', function(e)
              {
                  // if we hit Enter and the results list is empty (no matches) add the option
                  if (e.which == 13 && chosen2.dropdown.find('li.no-results').length > 0)
                  {
                      var option2 = $("<option>").val(this.value.toUpperCase()).text(this.value.toUpperCase());

                      // add the new option
                      select2.prepend(option2);
                      // automatically select it
                      select2.find(option2).prop('selected', true);
                      // trigger the update
                      select2.trigger("chosen:updated");
                      // select.trigger("liszt:updated");
                  }
              });

              $(".bene_name").chosen();

              $(".bene_acct").chosen();

        });
        </script>
    </body>

</html>