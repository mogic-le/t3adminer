<?php

declare(strict_types=1);

namespace Jigal\T3adminer\EventListener;

use TYPO3\CMS\Core\Authentication\Event\BeforeUserLogoutEvent;

/**
 * Event handler for TYPO3v12+.
 * v11 handling is in Hooks\T3AdminerHooks
 */
final class BeforeUserLogout
{
    /**
     * Hook to remove t3adminer session on logoff
     */
    public function __invoke(BeforeUserLogoutEvent $event): void
    {
        if (isset($_SESSION)) {
            session_write_close();
        }
        if ($sessionId = $_COOKIE['tx_t3adminer'] ?? null) {
            //restore session save path, because CMS installtool sets its own
            // save path in SessionService() during admin user logout
            $savePath = $GLOBALS['BE_USER']->getSessionData('t3adminer_session_savepath');
            if ($savePath != '') {
                session_save_path($savePath);
            }

            session_set_save_handler(new \SessionHandler(), true);
            session_id($sessionId);
            session_start();

            unset(
                $_SESSION['pwds'],
                $_SESSION['ADM_driver'],
                $_SESSION['ADM_user'],
                $_SESSION['ADM_password'],
                $_SESSION['ADM_port'],
                $_SESSION['ADM_server'],
                $_SESSION['ADM_db'],
                $_SESSION['ADM_tca'],
                $_SESSION['ADM_extConf'],
                $_SESSION['ADM_hideOtherDBs'],
                $_SESSION['ADM_SignonURL'],
                $_SESSION['ADM_uploadDir']
            );
            session_write_close();

            //remove the cookie
            setcookie('tx_t3adminer', '', 1, '/');
        }
    }
}
