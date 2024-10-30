<?php

declare(strict_types=1);

namespace Jigal\T3adminer\EventListener;

use TYPO3\CMS\Core\Authentication\Event\AfterUserLoggedOutEvent;

final class AfterUserLoggedOut
{
    public function __invoke(AfterUserLoggedOutEvent $event): void
    {
        $AbstractUserAuthentication = $event->getUser();

        if (isset($_SESSION)) {
            session_write_close();
        }
        if ($sessionId = $_COOKIE['tx_t3adminer'] ?? null) {
            session_id($sessionId);
            session_start();
            unset(
                $_SESSION['pwds'],
                $_SESSION['ADM_driver'],
                $_SESSION['ADM_user'],
                $_SESSION['ADM_password'],
                $_SESSION['ADM_server'],
                $_SESSION['ADM_db'],
                $_SESSION['ADM_tca'],
                $_SESSION['ADM_extConf'],
                $_SESSION['ADM_hideOtherDBs'],
                $_SESSION['ADM_SignonURL'],
                $_SESSION['ADM_uploadDir']
            );
            session_write_close();
            $AbstractUserAuthentication->removeCookie('tx_t3adminer');
        }
    }
}
