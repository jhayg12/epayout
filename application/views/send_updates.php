<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <style type="text/css">

    	body{
			font-family: Segoe UI;
		}
		table th{
			font-family: Segoe UI;
			font-weight: 600;
		}

    </style>

</head>
<body>
<div>
<p style="Margin-top: 0;color: #565656;font-family: Segoe UI;font-size: 14px;line-height: 10px;Margin-bottom: 25px">Good day!</p> 
<p style="Margin-top: 0;color: #565656;font-family: Segoe UI;font-size: 14px;line-height: 5px;Margin-bottom: 25px"> This is to notify you that changes has been made for the following record(s).</p>

<table>
	<tr>
		<td style="padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>CUSTOMER CODE</b></td>
		<td style="padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b> : </b></td>
		<td style="padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $bpcode; ?></td>
	</tr>
	<tr>
		<td style="padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>CUSTOMER NAME</b></td>
		<td style="padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b> : </b></td>
		<td style="padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $bpname; ?></td>
	</tr>
	<tr>
		<td style="padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>CREATED BY</b></td>
		<td style="padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b> : </b></td>
		<td style="padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $create_by; ?></td>
	</tr>
	<tr>
		<td style="padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>CREATE DATE</b></td>
		<td style="padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b> : </b></td>
		<td style="padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $create_date; ?></td>
	</tr>
	<tr>
		<td style="padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>UPDATED BY</b></td>
		<td style="padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b> : </b></td>
		<td style="padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $update_by; ?></td>
	</tr>
	<tr>
		<td style="padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>UPDATE DATE</b></td>
		<td style="padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b> : </b></td>
		<td style="padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $update_date; ?></td>
	</tr>
</table>

<br>

<?php if ($ae_from <> $ae_to OR $del_loc_from <> $del_loc_to OR $del_ins_from <> $del_ins_to OR $type_from <> $type_to): ?>

<div style="background: #f6f6f6; width: 100%; padding: 20px; font-family: Arial;">
<table style="width: 95%;">
	<th colspan="2" style="padding: 5px; background-color: #4CAF50; color: white; font-family: Segoe UI;font-size: 14px;">FROM</th>
		
		<tr>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>CASH TRADER</b></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 300px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $ae_from ?></td>
		</tr>

		<tr>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>DELIVERY LOCATION</b></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 300px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $del_loc_from ?></td>
		</tr>

		<tr>			
			<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>DELIVERY INSTRUCTIONS</b></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 300px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $del_ins_from ?></td>			
		</tr>

		<tr>				
			<td style="padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>TYPE</b></td>
			<td style="padding: 3px; width: 300px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $type_from ?></td>
		</tr>

	<th colspan="2" style="padding: 5px; background-color: #4CAF50; color: white; font-family: Segoe UI;font-size: 14px;">TO</th>
		
		<tr>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>CASH TRADER</b></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 300px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $ae_to ?></td>
		</tr>

		<tr>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>DELIVERY LOCATION</b></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 300px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $del_loc_to ?></td>
		</tr>

		<tr>			
			<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>DELIVERY INSTRUCTIONS</b></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 300px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $del_ins_to ?></td>			
		</tr>

		<tr>				
			<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>TYPE</b></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 300px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $type_to ?></td>
		</tr>

</table>
</div><br>

<?php endif; ?>


<?php if ($sref1_from <> $sref1_to OR $sref2_from <> $sref2_to OR $sref3_from <> $sref3_to OR $sref4_from <> $sref4_to OR $sref5_from <> $sref5_to
			OR $pref1_from <> $pref1_to OR $pref2_from <> $pref2_to OR $pref3_from <> $pref3_to OR $pref4_from <> $pref4_to OR $pref5_from <> $pref5_to
			OR $sgs1_from <> $sgs1_to OR $sgs2_from <> $sgs2_to OR $sgs3_from <> $sgs3_to
			OR $raw1_from <> $raw1_to OR $raw2_from <> $raw2_to OR $raw3_from <> $raw3_to OR $raw4_from <> $raw4_to OR $raw5_from <> $raw5_to
			OR $praw1_from <> $praw1_to OR $praw2_from <> $praw2_to OR $praw3_from <> $praw3_to): ?>

<div style="background: #f6f6f6; width: 100%; padding: 20px; font-family: Arial;">
<table style="width: 95%;">
	<th colspan="6" style="padding: 5px; background-color: #4CAF50; color: white; font-family: Segoe UI;font-size: 14px;">FROM - MILLMARKS</th>
		
		<tr>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>STANDARD REFINED</b></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(1) <?php echo $sref1_from ?></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(2) <?php echo $sref2_from ?></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(3) <?php echo $sref3_from ?></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(4) <?php echo $sref4_from ?></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(5) <?php echo $sref5_from ?></td>
		</tr>

		<tr>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>PREMIUM REFINED</b></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(1) <?php echo $pref1_from ?></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(2) <?php echo $pref2_from ?></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(3) <?php echo $pref3_from ?></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(4) <?php echo $pref4_from ?></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(5) <?php echo $pref5_from ?></td>
		</tr>

		<tr>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>SGS</b></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(1) <?php echo $sgs1_from ?></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(2) <?php echo $sgs2_from ?></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(3) <?php echo $sgs3_from ?></td>
		</tr>

		<tr>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>RAW</b></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(1) <?php echo $raw1_from ?></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(2) <?php echo $raw2_from ?></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(3) <?php echo $raw3_from ?></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(4) <?php echo $raw4_from ?></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(5) <?php echo $raw5_from ?></td>
		</tr>

		<tr>
			<td style="padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>PREMIUM RAW</b></td>
			<td style="padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(1) <?php echo $praw1_from ?></td>
			<td style="padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(2) <?php echo $praw2_from ?></td>
			<td style="padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(3) <?php echo $praw3_from ?></td>
		</tr>

	<th colspan="6" style="padding: 5px; background-color: #4CAF50; color: white; font-family: Segoe UI;font-size: 14px;">TO - MILLMARKS</th>
		
		<tr>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>STANDARD REFINED</b></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(1) <?php echo $sref1_to ?></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(2) <?php echo $sref2_to ?></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(3) <?php echo $sref3_to ?></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(4) <?php echo $sref4_to ?></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(5) <?php echo $sref5_to ?></td>
		</tr>

		<tr>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>PREMIUM REFINED</b></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(1) <?php echo $pref1_to ?></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(2) <?php echo $pref2_to ?></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(3) <?php echo $pref3_to ?></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(4) <?php echo $pref4_to ?></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(5) <?php echo $pref5_to ?></td>
		</tr>

		<tr>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>SGS</b></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(1) <?php echo $sgs1_to ?></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(2) <?php echo $sgs2_to ?></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(3) <?php echo $sgs3_to ?></td>
		</tr>

		<tr>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>RAW</b></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(1) <?php echo $raw1_to ?></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(2) <?php echo $raw2_to ?></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(3) <?php echo $raw3_to ?></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(4) <?php echo $raw4_to ?></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(5) <?php echo $raw5_to ?></td>
		</tr>

		<tr>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>PREMIUM RAW</b></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(1) <?php echo $praw1_to ?></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(2) <?php echo $praw2_to ?></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">(3) <?php echo $praw3_to ?></td>
		</tr>

</table>
</div><br>

<?php endif; ?>



<?php if ($dadays_from <> $dadays_to OR $wtime_from <> $wtime_to OR $treq_from <> $treq_to OR $podreq_from <> $podreq_to): ?>
<div style="background: #f6f6f6; width: 100%; padding: 20px; font-family: Arial;">
<table style="width: 95%;">
	<th colspan="2" style="padding: 5px; background-color: #4CAF50; color: white; font-family: Segoe UI;font-size: 14px;">FROM - DELIVERY REQUIREMENTS</th>
		
		<tr>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>DELIVERY ACCEPTANCE DAYS</b></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 300px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $dadays_from ?></td>
		</tr>

		<tr>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>WINDOW TIME</b></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 300px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $wtime_from ?></td>
		</tr>

		<tr>			
			<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>TRUCK REQUIREMENTS</b></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 300px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $treq_from ?></td>			
		</tr>

		<tr>				
			<td style="padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>POD REQUIREMENTS</b></td>
			<td style="padding: 3px; width: 300px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $podreq_from ?></td>
		</tr>

	<th colspan="2" style="padding: 5px; background-color: #4CAF50; color: white; font-family: Segoe UI;font-size: 14px;">TO - DELIVERY REQUIREMENTS</th>
		
		<tr>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>DELIVERY ACCEPTANCE DAYS</b></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 300px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $dadays_to ?></td>
		</tr>

		<tr>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>WINDOW TIME</b></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 300px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $wtime_to ?></td>
		</tr>

		<tr>			
			<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>TRUCK REQUIREMENTS</b></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 300px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $treq_to ?></td>			
		</tr>

		<tr>				
			<td style="padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>POD REQUIREMENTS</b></td>
			<td style="padding: 3px; width: 300px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $podreq_to ?></td>
		</tr>

</table>
</div><br>
<?php endif; ?>

<?php if ($rbcode_from <> $rbcode_to OR $lacct_from <> $lacct_to OR $specs_from <> $specs_to OR $specs_reason_from <> $specs_reason_to): ?>
<div style="background: #f6f6f6; width: 100%; padding: 20px; font-family: Arial;">
<table style="width: 95%;">
	<th colspan="2" style="padding: 5px; background-color: #4CAF50; color: white; font-family: Segoe UI;font-size: 14px;">FROM - QUALITY CONCERNS</th>
		
		<tr>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>REJECTED BATCH CODES</b></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 300px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $rbcode_from ?></td>
		</tr>

		<tr>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>LAST ISSUE OF THE ACCOUNT</b></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 300px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $lacct_from ?></td>
		</tr>

		<tr>			
			<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>SPECIFICATIONS</b></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 300px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $specs_from ?></td>			
		</tr>

		<tr>				
			<td style="padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>REASON</b></td>
			<td style="padding: 3px; width: 300px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $specs_reason_from ?></td>
		</tr>

	<th colspan="2" style="padding: 5px; background-color: #4CAF50; color: white; font-family: Segoe UI;font-size: 14px;">TO - QUALITY CONCERNS</th>
		
		<tr>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>REJECTED BATCH CODES</b></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 300px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $rbcode_to ?></td>
		</tr>

		<tr>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>LAST ISSUE OF THE ACCOUNT</b></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 300px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $lacct_to ?></td>
		</tr>

		<tr>			
			<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>SPECIFICATIONS</b></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 300px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $specs_to ?></td>			
		</tr>

		<tr>				
			<td style="padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>REASON</b></td>
			<td style="padding: 3px; width: 300px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $specs_reason_to ?></td>
		</tr>

</table>
</div><br>
<?php endif; ?>

<?php if ($paddr_from <> $paddr_to OR $telno_from <> $telno_to OR $hoaddr_from <> $hoaddr_to): ?>
<div style="background: #f6f6f6; width: 100%; padding: 20px; font-family: Arial;">
<table style="width: 95%;">
	<th colspan="2" style="padding: 5px; background-color: #4CAF50; color: white; font-family: Segoe UI;font-size: 14px;">FROM - CUSTOMER PROFILE</th>
		
		<tr>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>PLANT ADDRESS</b></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 300px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $paddr_from ?></td>
		</tr>

		<tr>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>TELEPHONE NUMBER</b></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 300px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $telno_from ?></td>
		</tr>

		<tr>			
			<td style="padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>HO ADDRESS</b></td>
			<td style="padding: 3px; width: 300px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $hoaddr_from ?></td>			
		</tr>

	<th colspan="2" style="padding: 5px; background-color: #4CAF50; color: white; font-family: Segoe UI;font-size: 14px;">TO - CUSTOMER PROFILE</th>
		
		<tr>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>PLANT ADDRESS</b></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 300px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $paddr_to ?></td>
		</tr>

		<tr>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>TELEPHONE NUMBER</b></td>
			<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 300px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $telno_to ?></td>
		</tr>

		<tr>			
			<td style="padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;"><b>HO ADDRESS</b></td>
			<td style="padding: 3px; width: 300px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $hoaddr_to ?></td>			
		</tr>

</table>
</div><br>
<?php endif; ?>

<p style="Margin-top: 0;color: #565656;font-family: Segoe UI;font-size: 14px;line-height: 5px;Margin-bottom: 25px"> Thank you.</p>
<p style="Margin-top: 0;color: #565656;font-family: Segoe UI;font-size: 12px;line-height: 5px;Margin-bottom: 5px"> <b>AAIS - All Asian Information Systems</b></p>

</div>
</body>
</html>