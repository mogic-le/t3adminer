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
	'version' => '11.0.0',
    'autoload' => [
        'psr-4' => [
            'jigal\t3adminer\\' => 'Classes'
        ],
    ],
	'constraints' => [
		'depends' => [
			'typo3' => '11.5.0-11.9.999',
            'php' => '7.4.0-8.1.999',
        ],
		'conflicts' => [],
		'suggests' => [],
    ],
];
