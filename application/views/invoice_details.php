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
                                <div class="muted pull-left">Union Bank ePayout - RTGS</div>
                            </div>

                            <div class="block-content collapse in">
                                <div class="span12">

                                <?php echo form_open("main/validate", 'class="form-horizontal"') ?>

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
                                    <label class="control-label">Currency </label>
                                    <div class="controls">
                                      <input type="text" name="currency" value="<?php echo $idtls->CurrencyDoc; ?>" class="span6 m-wrap" readonly/>
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label">Beneficiary Name </label>
                                    <div class="controls">
                                      <input type="text" name="bene_name" data-required="1" value="<?php echo $idtls->BeneficiaryAccountName; ?>" class="span6 m-wrap"/>
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label">Beneficiary Account No. <span class="required">*</span></label>
                                    <div class="controls">
                                      <input type="text" name="bene_acct" value="<?php echo $this->input->post("bene_acct"); ?>" data-required="1" class="span6 m-wrap" required/>
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label">Beneficiary Address <span class="required">*</span></label>
                                    <div class="controls">
                                      <textarea class="span6 m-wrap" name="bene_addr" required><?php echo $idtls->BeneAddress; echo $this->input->post('bene_addr'); ?></textarea>
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label" for="bankbname_select">Beneficiary Bank Name <span class="required">*</span></label>
                                    <div class="controls">
                                      <?php 
                                        $blist = array(
                                                '1' => 'ABN AMRO BANK',
                                                '2' => 'ALLIED BANK',
                                                '3' => 'ANZ BANKING CORPORATION',
                                                '4' => 'ASIA UNITED BANK',
                                                '5' => 'BANCO DE ORO UNIVERSAL BANK',
                                                '6' => 'BANGKOK BANK',
                                                '7' => 'BANK OF AMERICA',
                                                '8' => 'BANK OF COMMERCE (PANASIA BANK)',
                                                '9' => 'BANK OF THE PHILIPPINE ISLANDS',
                                                '10' => 'BANK OF TOKYO LTD. MANILA',
                                                '11' => 'CHASE MANHATTAN BANK',
                                                '12' => 'CHINA BANKING CORPORATION',
                                                '13' => 'CHINA TRUST (PHILS.) COMMERCIAL',
                                                '14' => 'CITIBANK N.A.',
                                                '15' => 'DEUTSCHE BANK',
                                                '16' => 'DEVELOPMENT BANK OF THE PHILS.',
                                                '17' => 'EAST WEST BANK',
                                                '18' => 'EQUITABLE BANKING CORP. (PCIB)',
                                                '19' => 'EXPORT AND INDUSTRY BANK',
                                                '20' => 'HSBC',
                                                '21' => 'ING BANK',
                                                '22' => 'INTERNATIONAL EXCHANGE BANK',
                                                '23' => 'INTL COMMERCIAL BANK OF CHINA',
                                                '24' => 'KOREA EXCHANGE BANK',
                                                '25' => 'LAND BANK OF THE PHILS.',
                                                '26' => 'MAYBANK PHILS. INC. (PNB REP. BANK)',
                                                '27' => 'METROPOLITAN BANK AND TRUST CO.',
                                                '28' => 'MIZUHO CORPORATE BANK',
                                                '29' => 'PHIL. BANK OF COMMUNICATION',
                                                '30' => 'PHIL. NATIONAL BANK',
                                                '31' => 'PHIL. TRUST COMPANY',
                                                '32' => 'PHIL. VETERANS BANK',
                                                '33' => 'RIZAL COMMERCIAL BANKING CORP',
                                                '34' => 'ROBINSONS BANK',
                                                '35' => 'SECURITY BANK AND TRUST COMPANY',
                                                '36' => 'STANDARD CHARTERED BANK',
                                                '37' => 'STERLING BANK OF ASIA',
                                                '38' => 'UNION BANK OF THE PHILS.',
                                                '39' => 'UNITED COCONUT PLANTERS BANK',
                                                '40' => 'UNITED OVERSEAS BANK'
                                              );

                                      ?>

                                      <?php echo form_dropdown('bene_bank_name', $blist, $this->input->post('bene_bank_name'), 'class="chzn-select span6 m-wrap", id="bankbname_select" required="required" '); ?>

              
                                      <input type="hidden" name="bank_code" id="bank_code" class="span1 m-wrap" value="<?php echo $this->input->post('bank_code') ?>">
                                      <input type="hidden" name="micr_code" id="micr_code" class="span1 m-wrap" value="<?php echo $this->input->post('micr_code') ?>">
                                      <input type="hidden" name="branch_code" id="branch_code" class="span1 m-wrap" value="<?php echo $this->input->post('branch_code') ?>">
                                      
                                      <input type="hidden" name="bank_name" id="bank_name" class="span1 m-wrap" value="<?php echo $this->input->post('bank_name') ?>">

                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label">Beneficiary Bank Address </label>
                                    <div class="controls">
                                      <textarea class="span6 m-wrap" name="bene_bank_addr"><?php echo $this->input->post('bene_bank_addr'); ?></textarea>
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label">Swift Code </label>
                                    <div class="controls">
                                      <input type="text" name="swift_code" data-required="1" value="<?php echo $this->input->post('swift_code') ?>" class="span6 m-wrap"/>
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label">Amount </label>
                                    <div class="controls">
                                      <input type="text" name="net_amount" value="<?php echo number_format($idtls->NetAmount, 2) ?>" class="span6 m-wrap" readonly/>
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label">Debit Account Number <span class="required">*</span></label>
                                    <div class="controls">
                                      <input type="text" name="debt_acctno" data-required="1" value="3212705192" class="span6 m-wrap" required/>
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
             $(".chzn-select").chosen();

            // $("#bank_code").val("");
            // $("#micr_code").val("");
            // $("#branch_code").val("");

             $("#bankbname_select").change(function(){

                if (this.value == "1") {

                  $("#bank_code").val("TABK01");
                  $("#micr_code").val("333333333");
                  $("#branch_code").val("077");

                  $("#bank_name").val($("#bankbname_select :selected").text());

                } else if (this.value == "2") {

                  $("#bank_code").val("ALBK01");
                  $("#micr_code").val("010320013");
                  $("#branch_code").val("032");

                  $("#bank_name").val($("#bankbname_select :selected").text());

                } else if (this.value == "3") {

                  $("#bank_code").val("ANZB01");
                  $("#micr_code").val("010700015");
                  $("#branch_code").val("070");

                  $("#bank_name").val($("#bankbname_select :selected").text());

                } else if (this.value == "4") {

                  $("#bank_code").val("AUBK01");
                  $("#micr_code").val("011020011");
                  $("#branch_code").val("102");

                  $("#bank_name").val($("#bankbname_select :selected").text());

                } else if (this.value == "5") {

                  $("#bank_code").val("BCDO01");
                  $("#micr_code").val("010760013");
                  $("#branch_code").val("053");

                  $("#bank_name").val($("#bankbname_select :selected").text());

                } else if (this.value == "6") {

                  $("#bank_code").val("BKBK01");
                  $("#micr_code").val("010670019");
                  $("#branch_code").val("067");

                  $("#bank_name").val($("#bankbname_select :selected").text());

                } else if (this.value == "7") {

                  $("#bank_code").val("BUSA01");
                  $("#micr_code").val("010120019");
                  $("#branch_code").val("012");

                  $("#bank_name").val($("#bankbname_select :selected").text());

                } else if (this.value == "8") {

                  $("#bank_code").val("BCOM01");
                  $("#micr_code").val("010440016");
                  $("#branch_code").val("044");

                  $("#bank_name").val($("#bankbname_select :selected").text());

                } else if (this.value == "9") {

                  $("#bank_code").val("BPIS01");
                  $("#micr_code").val("010040018");
                  $("#branch_code").val("004");

                  $("#bank_name").val($("#bankbname_select :selected").text());
                  
                } else if (this.value == "10") {

                  $("#bank_code").val("BOTM01");
                  $("#micr_code").val("010460012");
                  $("#branch_code").val("046");

                  $("#bank_name").val($("#bankbname_select :selected").text());

                } else if (this.value == "11") {

                  $("#bank_code").val("CMBK01");
                  $("#micr_code").val("010720011");
                  $("#branch_code").val("072");

                  $("#bank_name").val($("#bankbname_select :selected").text());

                } else if (this.value == "12") {

                  $("#bank_code").val("CHBC01");
                  $("#micr_code").val("010100013");
                  $("#branch_code").val("010");

                  $("#bank_name").val($("#bankbname_select :selected").text());

                } else if (this.value == "13") {

                  $("#bank_code").val("CTPC01");
                  $("#micr_code").val("010690028");
                  $("#branch_code").val("069");

                  $("#bank_name").val($("#bankbname_select :selected").text());
                  
                } else if (this.value == "14") {

                  $("#bank_code").val("CITI01");
                  $("#micr_code").val("010070017");
                  $("#branch_code").val("007");

                  $("#bank_name").val($("#bankbname_select :selected").text());

                } else if (this.value == "15") {

                  $("#bank_code").val("DEUB01");
                  $("#micr_code").val("010650013");
                  $("#branch_code").val("065");

                  $("#bank_name").val($("#bankbname_select :selected").text());

                } else if (this.value == "16") {

                  $("#bank_code").val("DBPH01");
                  $("#micr_code").val("010590018");
                  $("#branch_code").val("059");

                  $("#bank_name").val($("#bankbname_select :selected").text());

                } else if (this.value == "17") {

                  $("#bank_code").val("EWBK01");
                  $("#micr_code").val("010620014");
                  $("#branch_code").val("062");

                  $("#bank_name").val($("#bankbname_select :selected").text());
                  
                } else if (this.value == "18") {

                  $("#bank_code").val("EBCO01");
                  $("#micr_code").val("011049995");
                  $("#branch_code").val("013");

                  $("#bank_name").val($("#bankbname_select :selected").text());

                } else if (this.value == "19") {

                  $("#bank_code").val("EXIB01");
                  $("#micr_code").val("010860146");
                  $("#branch_code").val("086");

                  $("#bank_name").val($("#bankbname_select :selected").text());

                } else if (this.value == "20") {

                  $("#bank_code").val("HSBC01");
                  $("#micr_code").val("010060014");
                  $("#branch_code").val("006");

                  $("#bank_name").val($("#bankbname_select :selected").text());

                } else if (this.value == "21") {

                  $("#bank_code").val("INGB01");
                  $("#micr_code").val("222222222");
                  $("#branch_code").val("066");

                  $("#bank_name").val($("#bankbname_select :selected").text());
                  
                } else if (this.value == "22") {

                  $("#bank_code").val("IEBK01");
                  $("#micr_code").val("010680012");
                  $("#branch_code").val("068");

                  $("#bank_name").val($("#bankbname_select :selected").text());

                } else if (this.value == "23") {

                  $("#bank_code").val("ICBC01");
                  $("#micr_code").val("111111111");
                  $("#branch_code").val("056");

                  $("#bank_name").val($("#bankbname_select :selected").text());

                } else if (this.value == "24") {

                  $("#bank_code").val("KEBK01");
                  $("#micr_code").val("010710018");
                  $("#branch_code").val("071");

                  $("#bank_name").val($("#bankbname_select :selected").text());

                } else if (this.value == "25") {

                  $("#bank_code").val("LBPH01");
                  $("#micr_code").val("010359990");
                  $("#branch_code").val("035");

                  $("#bank_name").val($("#bankbname_select :selected").text());
                  
                } else if (this.value == "26") {

                  $("#bank_code").val("MAYB01");
                  $("#micr_code").val("010220016");
                  $("#branch_code").val("022");

                  $("#bank_name").val($("#bankbname_select :selected").text());

                } else if (this.value == "27") {

                  $("#bank_code").val("MBTC01");
                  $("#micr_code").val("010260018");
                  $("#branch_code").val("026");

                  $("#bank_name").val($("#bankbname_select :selected").text());

                } else if (this.value == "28") {

                  $("#bank_code").val("FUJI01");
                  $("#micr_code").val("010640010");
                  $("#branch_code").val("064");

                  $("#bank_name").val($("#bankbname_select :selected").text());

                } else if (this.value == "29") {

                  $("#bank_code").val("PHBC01");
                  $("#micr_code").val("010110016");
                  $("#branch_code").val("011");

                  $("#bank_name").val($("#bankbname_select :selected").text());
                  
                } else if (this.value == "30") {

                  $("#bank_code").val("PNBK01");
                  $("#micr_code").val("010080010");
                  $("#branch_code").val("008");

                  $("#bank_name").val($("#bankbname_select :selected").text());

                } else if (this.value == "31") {

                  $("#bank_code").val("PTCO01");
                  $("#micr_code").val("010090039");
                  $("#branch_code").val("009");

                  $("#bank_name").val($("#bankbname_select :selected").text());

                } else if (this.value == "32") {

                  $("#bank_code").val("PHVB01");
                  $("#micr_code").val("010330016");
                  $("#branch_code").val("033");

                  $("#bank_name").val($("#bankbname_select :selected").text());

                } else if (this.value == "33") {

                  $("#bank_code").val("RCBC01");
                  $("#micr_code").val("010280014");
                  $("#branch_code").val("028");

                  $("#bank_name").val($("#bankbname_select :selected").text());
                  
                } else if (this.value == "34") {

                  $("#bank_code").val("RSBK01");
                  $("#micr_code").val("011070016");
                  $("#branch_code").val("107");

                  $("#bank_name").val($("#bankbname_select :selected").text());

                } else if (this.value == "35") {

                  $("#bank_code").val("SBTC01");
                  $("#micr_code").val("010140015");
                  $("#branch_code").val("014");

                  $("#bank_name").val($("#bankbname_select :selected").text());

                } else if (this.value == "36") {

                  $("#bank_code").val("STCB01");
                  $("#micr_code").val("010050011");
                  $("#branch_code").val("005");

                  $("#bank_name").val($("#bankbname_select :selected").text());

                } else if (this.value == "37") {

                  $("#bank_code").val("SBAI01");
                  $("#micr_code").val("011190019");
                  $("#branch_code").val("000");

                  $("#bank_name").val($("#bankbname_select :selected").text());
                  
                } else if (this.value == "38") {

                  $("#bank_code").val("UBPH01");
                  $("#micr_code").val("010419995");
                  $("#branch_code").val("041");

                  $("#bank_name").val($("#bankbname_select :selected").text());

                } else if (this.value == "39") {

                  $("#bank_code").val("UCPB01");
                  $("#micr_code").val("010290017");
                  $("#branch_code").val("029");

                  $("#bank_name").val($("#bankbname_select :selected").text());

                } else {

                  $("#bank_code").val("WESB01");
                  $("#micr_code").val("010270341");
                  $("#branch_code").val("027");

                  $("#bank_name").val($("#bankbname_select :selected").text());

                } 

             });

        });
        </script>
    </body>

</html>