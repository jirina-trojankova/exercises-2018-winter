<?php
// init part
session_start();

// here action part BEGINS
if (count($_POST)) {
	// if herer in $_POST is bla
	$must_int = filter_input(INPUT_POST, 'must_int', FILTER_VALIDATE_INT);
	$display_form = filter_input(INPUT_POST, 'display', FILTER_VALIDATE_BOOLEAN);
	//here in $must_int is false
	if (false !== $must_int) {
		$_SESSION['must_int'] = $must_int;
		$_SESSION['form_data_recieved_at'] = date('Y-m-d H:i:s');
		
		$future_location = 'Location: ?';
		if ($display_form) {
			$future_location = 'Location: ?display=form';
		}
		header($future_location);
		exit;
	}
}
// here action part ENDS
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>GET, POST Explained</title>
</head>
<body>
<!-- here is palace for our content -->

<fieldset>
	<legend>$_SESSION</legend>
	<?php var_dump($_SESSION) ?>
</fieldset>

<fieldset>
	<legend>$_POST</legend>
	<?php var_dump($_POST) ?>
</fieldset>

<a href="?display=form">Display form</a><br>
<a href="?">Display none</a> <br><br>

<?php if (isset($_GET['display']) && $_GET['display'] == 'form'): ?>
	<form method="post" action="?display=form">
		
		This must be integer <input type="text" name="must_int" value="<?php echo isset($_POST['must_int']) ? $_POST['must_int'] : '' ?>"><br>
		Display form after successful submition:
		<label>
			<input type="radio" name="display" value="yes">yes
		</label>
		<label>
			<input type="radio" name="display" value="no">no
		</label><br>
		
		<input type="submit" value="Submit my form">
	</form>
<?php endif; ?>



</body>
</html>
