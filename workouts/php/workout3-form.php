Here is the form<br />

<form method="post">
	
	<?php foreach ($items as $i => $text): ?>
		<input type="text" name="item[<?php echo $i ?>]" value="<?php echo htmlspecialchars($text) ?>" /><br />
	<?php endforeach; ?>

<?php
// both options are possible
foreach ($items as $i => $text) {
	echo '<input type="text" name="item[' . $i . ']" value="' . htmlspecialchars($text) . '" /><br />';
	}  ?>
	
	<input type="text" name="item[<?php echo count($items) ?>]" />
	<input type="submit" value="Add" />
</form>


