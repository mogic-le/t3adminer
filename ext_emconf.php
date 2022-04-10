<?php
$EM_CONF[$_EXTKEY] = [
	'title' => 'Adminer',
	'description' => 'Database administration tool \'Adminer\'',
	'category' => 'module',
	'author' => 'Jigal van Hemert',
	'author_email' => 'jigal.van.hemert@typo3.org',
	'author_company' => '',
	'state' => 'stable',
	'clearCacheOnLoad' => false,
	'version' => '10.0.0',
    'autoload' => [
        'psr-4' => [
            'jigal\t3adminer\\' => 'Classes'
        ],
    ],
	'constraints' => [
		'depends' => [
			'typo3' => '10.4.10-10.9.999',
            'php' => '7.2.0-7.4.999',
        ],
		'conflicts' => [],
		'suggests' => [],
    ],
];
