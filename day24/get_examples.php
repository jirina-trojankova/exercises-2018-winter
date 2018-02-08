<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>A HTML5 document</title>
    </head>
    <body>
		<p>
<?php

	
		echo "this is a + b = ";
		echo $_GET['a'] + $_GET['b'];
?></p>
		
		<p>$_GET
<?php echo $_GET; ?></p>
		
		<a href="?name=Jakub&city=Budejovice">this is my name link</a>
		
		<br /><br /><br />
		
		<table border="1" cellpadding="5">
			<?php for($a = 1; $a <= 5; $a++){
				echo "<tr>";
						for($b = 1; $b <= 5; $b++){
							echo "<td>";
							/*$query_string = http_build_query(
								[
									'a' => $a,
									'b' => $b,
								]);*/
							$query_string = 'a=' . $a . '&b=' . $b;
							echo $query_string;
							echo "<a href='?";
							echo $query_string;
							echo "'>link</a>";
							echo "</td>";
						}
				echo "</tr>";
			} ?>
		</table>

		<pre>$_POST
<?php var_dump($_POST); ?></pre>
    </body>
</html>

