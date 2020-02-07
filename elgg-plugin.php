<?php
require_once(__DIR__ . "/lib/functions.php");

return [
	'bootstrap' => hypeLists::class,
	'views' => [
		'default' => [
			'hypeList.js' => __DIR__ . '/views/default/components/list.js',
			'js/framework/lists/init.js' => __DIR__ . '/views/default/components/list/init.js',
			'js/framework/lists/require' => __DIR__ . '/views/default/components/list/require.php',
		],
	],
];
