<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php echo form_open(current_url()); ?>
<label>Enter A Number</label>
<input type="text" name="num" value="<?php echo $this->input->post('num') ?>" />

<input type="submit" value="Submit" name="submit">

<?php echo form_close(); ?>

<?php if (isset($siblings)): ?>
<label>Siblings:</label>
<label><b><?php echo $siblings; ?></b></label>
<?php endif; ?>

<?php if (isset($answer)): ?>
<label>The Answer is:</label>
<label><b><?php echo $answer; ?></b></label>
<?php endif; ?>

</body>
</html>