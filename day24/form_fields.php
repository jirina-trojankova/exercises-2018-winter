<?php date_default_timezone_set ('Europe/Berlin');

error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>A HTML5 document</title>
</head>
<body>


<pre>inside $_GET is <?php var_dump($_GET) ?></pre>
<pre>inside $_POST is <?php var_dump($_POST) ?></pre>
<pre>date_default_timezone_get is <?php echo(date_default_timezone_get()) ?></pre>


<?php
	$howdoyoufeelaboutforms = isset($_POST['howdoyoufeelaboutforms']) ? $_POST['howdoyoufeelaboutforms'] : '';
	$reason = isset($_POST['reason']) ? $_POST['reason'] : '';
	$gohome = isset($_POST['gohome']) ? true : false;
	$whatareyouupto = isset($_POST['whatareyouupto']) ? $_POST['whatareyouupto'] : null;
	$homeby = isset($_POST['homeby']) ? $_POST['homeby'] : null;

?>

<form method="post">
	
	
	<input type="hidden" name="datetime" value="<?php echo date('Y-m-d H:i:s')?>">
	
	
	<label>How do you feel about forms
		<input type="text" name="howdoyoufeelaboutforms" value="<?php echo htmlspecialchars($howdoyoufeelaboutforms)?>" />
	</label>
	<br />
	
	<label>Do you want to go home?
		<input type="checkbox" name="gohome" <?php
		if ($gohome)
			echo 'checked="checked"';
		?> />
	</label>
	<br />
	
	<label>Please, tell me why.
		<textarea type="checkbox" name="reason"><?php echo htmlspecialchars($reason)?></textarea>
	</label>
	<br />
	
	<label>What are you up to?<br />
		<?php $options = ["beer" => 'beer', "dance" => 'dance', "food" => 'food', "morecode" => 'more code', ];
			foreach ($options as $value => $label): ?>
				<input type="radio" name="whatareyouupto" value="<?php echo $value ?>"<?php if ($value == $whatareyouupto) echo 'checked="checked"'; ?>><?php echo $label ?><br />
		<?php endforeach; ?>

	</label>
	<br /><br />
	
	<label>Do you go home by?<br />
		<select name="homeby">
		<?php $options = ["car" => 'car', "tram" => 'tram', "metro" => 'metro', "walk" => 'walk', ];
			foreach ($options as $value => $label): ?>
				<option value="<?php echo $value ?>"<?php if ($value == $homeby) echo 'selected="selected"';?>><?php echo $label ?></option>
		<?php endforeach; ?>
		</select>

	</label>
	<br /><br />
	

	<input type="submit" />
</form>




</body>
</html>