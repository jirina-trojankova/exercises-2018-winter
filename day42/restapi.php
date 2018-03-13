<?php



$months = [];
for( $month = 1 ; $month <= 12; $month++) {
	$months[$month] = [
			'month_as_text' => date('M', mktime(null, null, null, $month)),
			'imaginary_users' => rand( 100, 1000)
		];
}

header('Content-Type: application/json');

echo json_encode($months);