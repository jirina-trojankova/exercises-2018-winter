<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>A HTML5 document</title>
</head>
<body>

<pre>inside $_POST is <?php var_dump($_POST) ?></pre>

<?php
$datetime = null;
$email = null;
if (isset($_POST['datetime']) && strtotime($_POST['datetime']) > time() - 86400) {
	$datetime = $_POST['datetime'];
}
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$howmanypeople = filter_input(INPUT_POST, 'howmanypeople', FILTER_VALIDATE_INT);

echo 'DATE: '.$datetime.'</br>';
echo 'EMAIL: '.$email.'</br>';
?>


<form method="post">
	
	<?php echo date('Y-m-d')?>
	<input type="hidden" name="datetime" value="<?php echo date('Y-m-d')?>" />
	
	<br /><br />
	
	<label>Email:
		<input type="text" name="email" value="<?php echo $email ?>" />
	</label>
	<br /><br />
	
	<label>How many people:
		<input type="text" name="howmanypeople" value="<?php echo $howmanypeople ?>" />
	</label>
	<br /><br />
	
	<input type="submit" />
</form>

<hr/>

<h2>File uploads</h2>

<pre>inside $_FILES is <?php var_dump($_FILES) ?>

<?php
if (isset($_FILES['image']) && false !== $is = getimagesize($_FILES['image']["tmp_name"])) {
	var_dump($is);
}
?>
</pre>
<form method="post" enctype="multipart/form-data">
	<input type="file" name="image">
	<input type="submit" />

</form>


</body>
</html>