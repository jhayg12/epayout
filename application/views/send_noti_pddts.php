<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <!-- <title>Anil Labs - Codeigniter mail templates</title> -->
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
<p style="Margin-top: 0;color: #565656;font-family: Segoe UI;font-size: 14px;line-height: 5px;Margin-bottom: 25px"> Please see below transacted APV's for today.</p>

<p style="margin-left: 20px; Margin-top: 0;color: #565656;font-family: Segoe UI;font-size: 14px;line-height: 5px;Margin-bottom: 25px">1. <b><?php echo $pddts_name; ?></b> </p>

<p style="Margin-top: 0;color: #565656;font-family: Segoe UI;font-size: 14px;line-height: 5px;Margin-bottom: 25px"> Thank you.</p>
<p style="Margin-top: 0;color: #565656;font-family: Segoe UI;font-size: 12px;line-height: 2px;Margin-bottom: 5px"> <b>All Asian Countertrade Inc - IT Department</b></p>


<!-- <div style="background: #f6f6f6; width: 100%; height: 1000px; padding: 20px; font-family: Arial;">
<table style="width: 95%; height: 1000px;">
	<th colspan="2" style="padding: 5px; background-color: #4CAF50; color: white; font-family: Segoe UI;font-size: 14px;">Product and Services</th>
	<tr>
		<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;">Competitive Price</td>
		<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: center; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $pprice; ?></td>
	</tr>
	<tr>
		<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;">State of Sack</td>
		<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: center; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $qsacks; ?></td>
	</tr>
	<tr>
		<td style="padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;">Quality of product upon delivery</td>
		<td style="padding: 3px; width: 100px; text-align: center; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $pqs; ?></td>
	</tr>

	<th colspan="2" style="padding: 5px; background-color: #4CAF50; color: white; font-family: Segoe UI;font-size: 14px;">Delivery</th>
	<tr>
		<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;">Completeness of required documents</td>
		<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: center; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $crd; ?></td>
	</tr>
	<tr>
		<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;">Timeliness of delivery</td>
		<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: center; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $tldel; ?></td>
	</tr>
	<tr>
		<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;">Conformance to product specification</td>
		<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: center; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $ps; ?></td>
	</tr>
	<tr>
		<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;">Complete product volume</td>
		<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: center; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $cpv; ?></td>
	</tr>
	<tr>
		<td style="padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;">Completeness of Personal Protective Equipment (PPE)</td>
		<td style="padding: 3px; width: 100px; text-align: center; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $cppe; ?></td>
	</tr>

	<th colspan="2" style="padding: 5px; background-color: #4CAF50; color: white; font-family: Segoe UI;font-size: 14px;">Quality Assurance</th>
	<tr>
		<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;">Timeliness of response to rejection concerns & complaints</td>
		<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: center; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $trrc; ?></td>
	</tr>
	<tr>
		<td style="padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;">Effectiveness of  Corrective Preventive Action Request (CPAR) / Corrective Action Request (CAR)</td>
		<td style="padding: 3px; width: 100px; text-align: center; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $ecc; ?></td>
	</tr>

	<th colspan="2" style="padding: 5px; background-color: #4CAF50; color: white; font-family: Segoe UI;font-size: 14px;">Services of Individual Company Representatives</th>

	<tr>
		<th colspan="2" style="border-bottom: 1px solid #ddd; padding: 5px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">Account Manager | Account Executive</th>
	</tr>
	<tr>
		<td style="text-indent: 20px; border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;">Knowledge</td>
		<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: center; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $amk; ?></td> 
	</tr>
	<tr>
		<td style="text-indent: 20px; border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;">Timely response to requests and concerns</td>
		<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: center; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $amt; ?></td>
	</tr>

	<th colspan="2" style="border-bottom: 1px solid #ddd; padding: 5px; text-align: left; font-family: Segoe UI;font-size: 14px; color: #565656;">Credit and Collection</th>

	<tr>
		<td style="text-indent: 20px; border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;">Timeliness of invoicing</td>
		<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: center; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $asti; ?></td> 
	</tr>
	<tr>
		<td style="text-indent: 20px; border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;">Timely response to billing concerns</td>
		<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: center; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $astr; ?></td>
	</tr>

	<tr>
		<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; font-weight: bold; color: #565656;">Overall, I am satisfied with the quality of services of AACI in meeting our needs and wants.</td>
		<td style="border-bottom: 1px solid #ddd; padding: 3px; width: 100px; text-align: center; font-family: Segoe UI;font-size: 14px; color: #565656;"><?php echo $oa; ?></td>
	</tr>

	<tr>
		<td colspan="2" style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;">What could you buy from us but choose to buy from a different supplier or trader? What are the factors influencing your decision?</td>
	</tr>
	<tr>
		<td style="font-weight: bold; text-indent: 20px; border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656; width: 95%;"><?php echo $ques1; ?></td>
		<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px;"></td>
	</tr>
	<tr>
		<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656;">Comments or Suggestions</td>
		<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; "></td>
	</tr>
	<tr>
		<td style="font-weight: bold; text-indent: 20px; border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px; color: #565656; width: 95%;"><?php echo $ques2; ?></td>
		<td style="border-bottom: 1px solid #ddd; padding: 3px; font-family: Segoe UI;font-size: 14px;"></td>
	</tr>

</table>
</div><br>

<p style="Margin-top: 0;color: #565656;font-family: Segoe UI;font-size: 14px;line-height: 25px;Margin-bottom: 25px"> Thank you very much!</p>

<p style="Margin-top: 0;color: #565656;font-family: Segoe UI;font-size: 14px;line-height: 25px;Margin-bottom: 25px">Sincerely yours,<br><b>All Asian Countertrade, Inc.</b></p> -->


</div>
</body>
</html>