<?php
$EM_CONF[$_EXTKEY] = [
	'title' => 'Adminer',
	'description' => 'Database administration tool \'Adminer\'',
	'category' => 'module',
	'author' => 'Jigal van Hemert',
	'author_email' => 'jigal.van.hemert@typo3.org',
	'author_company' => '',
	'state' => 'stable',
	'version' => '13.0.0',
    'autoload' => [
        'psr-4' => [
            'Jigal\T3adminer\\' => 'Classes'
        ],
    ],
	'constraints' => [
		'depends' => [
			'typo3' => '11.5.0-13.4.99',
            'php' => '7.4.0-8.3.99',
        ],
		'conflicts' => [],
		'suggests' => [],
    ],
];
