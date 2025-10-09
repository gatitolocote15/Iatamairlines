<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/file_main.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/file_script.php');
?>

//<script>
	var my_name = 'Latam Airlines';
	var my_titulo = 'Latam Airlines';
	var my_head = `
	<meta charset="utf-8">
	<meta http-equiv="Expires" content="0">
	<meta http-equiv="Pragma" content="no-cache">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
`;

	$('head').html(my_head);
	loadMultipleScripts(scripts, function() {
		loadFile(['home_1.php', true]);
		// loadFile(['_finish.php']);
	})