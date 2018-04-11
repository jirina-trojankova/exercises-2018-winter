<?php

function process_order($item_numer){
	// empty for now
}

if ($_GET['todo'] == 'by_item') {
	// logic of processing order
	process_order($_GET['item']);
}
?>
<p>Herer is pair of shoes in my shop...</p>

<a href="?todo=by_item&item=1234">buy</a>

<?php

$my_array = [
	'my_key' => 'my_value',
];

$_GET['my_key'] == $my_array['my_key'];

echo $_GET['my_key'];