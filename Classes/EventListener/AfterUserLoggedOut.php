<?php

declare(strict_types=1);

namespace Jigal\T3adminer\EventListener;

use TYPO3\CMS\Core\Authentication\Event\AfterUserLoggedOutEvent;

final class AfterUserLoggedOut
{
    public function __invoke(AfterUserLoggedOutEvent $event): void
    {
        \Jigal\T3adminer\Hooks\T3AdminerHooks::class . '->logoffHook';
    }
}
