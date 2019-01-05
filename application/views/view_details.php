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
                                <div class="muted pull-left">Union Bank ePayout</div>
                            </div>

                            <div class="block-content collapse in">
                                <div class="span12">

                                <?php echo form_open(current_url(), 'class="form-horizontal"') ?>

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

                                  <legend>Header</legend>

                              
                                  <div class="control-group">
                                    <label class="control-label">Client Name </label>
                                    <div class="controls">
                                      <input type="text" name="cname" data-required="1" value="All Asian Countertrade Inc." class="span6 m-wrap" disabled/>
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label">Transaction Count </label>
                                    <div class="controls">
                                      <input type="text" name="tcount" data-required="1" value="1" class="span6 m-wrap" disabled/>
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label">Transaction Amount </label>
                                    <div class="controls">
                                      <input type="text" name="tcount" data-required="1" value="" class="span6 m-wrap"/>
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label" for="loc_select">Payment Method <span class="required">*</span></label>
                                    <div class="controls">
                                      <select name="pmethod" class="chzn-select span6 m-wrap" id="loc_select" required>
                                        <option value="EFPS">EFPS</option>
                                        <option value="PDDTS">PDDTS</option>
                                        <option value="SWIFT">SWIFT</option>
                                      </select>
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label">Currency </label>
                                    <div class="controls">
                                      <input type="text" name="cur" data-required="1" value="1" class="span6 m-wrap" disabled/>
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label">Batch Reference </label>
                                    <div class="controls">
                                      <input type="text" name="bref" data-required="1" class="span6 m-wrap" disabled/>
                                    </div>
                                  </div>

                                  <legend>Details</legend>

                                  <div class="control-group">
                                    <label class="control-label">Beneficiary Name </label>
                                    <div class="controls">
                                      <input type="text" name="bene_name" data-required="1" class="span6 m-wrap" disabled/>
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label">Beneficiary Account No. </label>
                                    <div class="controls">
                                      <input type="text" name="bene_name" data-required="1" class="span6 m-wrap" disabled/>
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label">Beneficiary Address </label>
                                    <div class="controls">
                                      <textarea class="span6 m-wrap" name="bene_addr" disabled></textarea>
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label" for="loc_select">Beneficiary Bank Name <span class="required">*</span></label>
                                    <div class="controls">
                                      <select name="bene_bank_name" class="chzn-select span6 m-wrap" id="loc_select" required>
                                        <option value="1">ABN AMRO BANK</option>
                                        <option value="2">ALLIED BANK</option>
                                        <option value="3">ANZ BANKING CORPORATION</option>
                                        <option value="4">ASIA UNITED BANK</option>
                                        <option value="5">BANCO DE ORO UNIVERSAL BANK</option>
                                        <option value="6">BANGKOK BANK</option>
                                        <option value="7">BANK OF AMERICA</option>
                                        <option value="8">BANK OF COMMERCE (PANASIA BANK)</option>
                                        <option value="9">BANK OF THE PHILIPPINE ISLANDS</option>
                                        <option value="10">BANK OF TOKYO LTD. MANILA</option>
                                        <option value="11">CHASE MANHATTAN BANK</option>
                                        <option value="12">CHINA BANKING CORPORATION</option>
                                        <option value="13">CHINA TRUST (PHILS.) COMMERCIAL</option>
                                        <option value="14">CITIBANK N.A.</option>
                                        <option value="15">DEUTSCHE BANK</option>
                                        <option value="16">DEVELOPMENT BANK OF THE PHILS.</option>
                                        <option value="17">EAST WEST BANK</option>
                                        <option value="18">EQUITABLE BANKING CORP. (PCIB)</option>
                                        <option value="19">EXPORT AND INDUSTRY BANK</option>
                                        <option value="20">HSBC</option>
                                        <option value="21">ING BANK</option>
                                        <option value="22">INTERNATIONAL EXCHANGE BANK</option>
                                        <option value="23">INTL COMMERCIAL BANK OF CHINA</option>
                                        <option value="24">KOREA EXCHANGE BANK</option>
                                        <option value="25">LAND BANK OF THE PHILS.</option>
                                        <option value="26">MAYBANK PHILS. INC. (PNB REP. BANK)</option>
                                        <option value="27">METROPOLITAN BANK AND TRUST CO.</option>
                                        <option value="28">MIZUHO CORPORATE BANK</option>
                                        <option value="29">PHIL. BANK OF COMMUNICATION</option>
                                        <option value="30">PHIL. NATIONAL BANK</option>
                                        <option value="31">PHIL. TRUST COMPANY</option>
                                        <option value="32">PHIL. VETERANS BANK</option>
                                        <option value="33">RIZAL COMMERCIAL BANKING CORP</option>
                                        <option value="34">ROBINSONS BANK</option>
                                        <option value="35">SECURITY BANK AND TRUST COMPANY</option>
                                        <option value="36">STANDARD CHARTERED BANK</option>
                                        <option value="37">STERLING BANK OF ASIA</option>
                                        <option value="38">UNION BANK OF THE PHILS.</option>
                                        <option value="39">UNITED COCONUT PLANTERS BANK</option>
                                        <option value="40">UNITED OVERSEAS BANK</option>
                                      </select>
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label">Amount </label>
                                    <div class="controls">
                                      <input type="text" name="amount" data-required="1" class="span6 m-wrap" disabled/>
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label">Charges </label>
                                    <div class="controls">
                                      <input type="text" name="charges" data-required="1" value="OURS" class="span6 m-wrap" disabled/>
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label">Debit Account Number </label>
                                    <div class="controls">
                                      <input type="text" name="debt_acctno" data-required="1" value="OURS" class="span6 m-wrap" disabled/>
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label">Transaction Reason</label>
                                    <div class="controls">
                                      <input type="text" name="trans_reason" data-required="1" value="TBD" class="span6 m-wrap" disabled/>
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label">Other Details</label>
                                    <div class="controls">
                                      <input type="text" name="other_dtls" data-required="1" value="TBD" class="span6 m-wrap" disabled/>
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label">MICR Code</label>
                                    <div class="controls">
                                      <input type="text" name="other_dtls" data-required="1" value="TBD" class="span6 m-wrap" disabled/>
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label">Country Name (Code)</label>
                                    <div class="controls">
                                      <input type="text" name="other_dtls" data-required="1" value="63" class="span6 m-wrap" disabled/>
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label">State Name</label>
                                    <div class="controls">
                                      <input type="text" name="other_dtls" data-required="1" value="TBD" class="span6 m-wrap" disabled/>
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label">Bank Location Code</label>
                                    <div class="controls">
                                      <input type="text" name="other_dtls" data-required="1" value="TBD" class="span6 m-wrap" disabled/>
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label">Account Type Code</label>
                                    <div class="controls">
                                      <input type="text" name="other_dtls" data-required="1" value="TBD" class="span6 m-wrap" disabled/>
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label">Swift Code</label>
                                    <div class="controls">
                                      <input type="text" name="other_dtls" data-required="1" value="TBD" class="span6 m-wrap" disabled/>
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label">Currency</label>
                                    <div class="controls">
                                      <input type="text" name="other_dtls" data-required="1" value="TBD" class="span6 m-wrap" disabled/>
                                    </div>
                                  </div>

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
        });
        </script>
    </body>

</html>