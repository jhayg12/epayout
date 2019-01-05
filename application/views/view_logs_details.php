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

            td#ae_name, td#cust_type{width:100px !important;white-space:nowrap !important;}*/
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
                                <div class="muted pull-left">View Log Details</div>
                            </div>

                            <div class="block-content collapse in">
                                <div class="span12">

                                <form class="form-horizontal">

                                  <?php if (isset($logs_rec)): foreach ($logs_rec as $idtls): ?>

                                  <div class="control-group">
                                    <label class="control-label">APV No. </label>
                                    <div class="controls">
                                      <input type="text" name="apv_no" value="<?php echo $idtls->APV_No; ?>" readonly>
                                    </div>
                                  </div> 

                                  <div class="control-group">
                                    <label class="control-label">Payment Method </label>
                                    <div class="controls">
                                      <input type="text" name="pmethod" value="<?php echo $idtls->PaymentMethod; ?>" readonly>
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label">Currency </label>
                                    <div class="controls">
                                      <input type="text" name="currency" value="<?php echo $idtls->Currency; ?>" readonly>
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label">Location </label>
                                    <div class="controls">
                                      <input type="text" name="loc" value="<?php echo $idtls->Location; ?>" readonly>
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label">Beneficiary Name </label>
                                    <div class="controls">
                                      <input type="text" name="benename" value="<?php echo $idtls->BeneficiaryName; ?>" readonly>
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label">Beneficiary Account No. </label>
                                    <div class="controls">
                                      <input type="text" name="beneacctno" value="<?php echo $idtls->BeneficiaryAccountNo; ?>" readonly>
                                    </div>
                                  </div>
                                  
                                  <div class="control-group">
                                    <label class="control-label">Beneficiary Bank Name </label>

                                    <div class="controls">
                                      <textarea readonly><?php echo $idtls->BName; ?></textarea>
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label">Beneficiary Address </label>

                                    <div class="controls">
                                      <textarea readonly><?php echo $idtls->BeneficiaryAddress;?></textarea>
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label">Amount </label>
                                    <div class="controls">
                                      <input type="text" name="amount" value="<?php echo $idtls->Amount; ?>" readonly>
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label">Debit Account No </label>
                                    <div class="controls">
                                      <input type="text" name="dacct" value="<?php echo $idtls->DebitAccountNo; ?>" readonly>
                                    </div>
                                  </div>
                                  
                              
                                <?php endforeach; ?>
                                <?php endif; ?>

                                </form>

                                  <div class="row-fluid">
                                      <div class="span12">
                                        <div class="form-actions">
                                          <a href="<?php echo site_url('main/view_logs'); ?>" role="button" class="btn btn-default btn-sm pull-right"> Back</a>
                                        </div>
                                      </div>
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

             $(".bene_acct").chosen();

             $(".bene_bank_name").chosen();

             $(".bene_name").chosen();

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

                        $('#bank_code').val(val.BranchCode);
                        $('#micr_code').val(val.MICR);
                        $('#branch_code').val(val.BankCode);

                        $('#bank_name').val($("#bankbname_select :selected").text());

                        $('#bname').val($("#bene_name_select :selected").text());
                        $('#bacct').val($("#bene_acct_select :selected").text());

                      });
                    }
                  });

                }

             }).change();


              // USE FOR ADDING NEW ENTRY ON THE DROPDOWN LIST 
              // var select, chosen;

              // // cache the select element as we'll be using it a few times
              // select = $(".chosen-select");

              // // init the chosen plugin
              // select.chosen({ no_results_text: 'Press Enter to add new entry:' });
              
              // // get the chosen object
              // chosen = select.data('chosen');

              // // Bind the keyup event to the search box input
              // chosen.dropdown.find('input').on('keyup', function(e)
              // {
              //     // if we hit Enter and the results list is empty (no matches) add the option
              //     if (e.which == 13 && chosen.dropdown.find('li.no-results').length > 0)
              //     {
              //         var option = $("<option>").val(this.value).text(this.value);
            
              //         // add the new option
              //         select.prepend(option);
              //         // automatically select it
              //         select.find(option).prop('selected', true);
              //         // trigger the update
              //         select.trigger("chosen:updated");
              //         // select.trigger("liszt:updated");
              //     }
              // });

        });
        </script>
    </body>

</html>