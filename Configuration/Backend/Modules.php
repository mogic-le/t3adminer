<?php

return [
    't3adminer' => [
        'parent' => 'tools',
        'access' => 'systemMaintainer',
        'path' => '/module/t3adminer',
        'iconIdentifier' => 'adminer-module',
        'labels' => 'LLL:EXT:t3adminer/Resources/Private/Language/locallang_mod.xlf',
        'routes' => [
            '_default' => [
                'target' => \jigal\t3adminer\Controller\AdminerController::class . '::main',
            ],
        ],
    ],
];
