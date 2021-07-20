<?php

class Session 
{
    protected const FLASH_KEY = 'flash_messages';
    protected const USER_KEY = 'current_user';

    public function __construct()
    {
        session_start();
        $_SESSION[self::USER_KEY] ?? [];
        $flashMessages = $_SESSION[self::FLASH_KEY] ?? [];
        foreach ($flashMessages as $key => &$flashMessage) {
            $flashMessage['removed'] = true;
        }

        $_SESSION[self::FLASH_KEY] = $flashMessages;

    }

    public function setUser($name, $role)
    {
        $_SESSION[self::USER_KEY] = [
            'name' => $name,
            'role' => $role
        ];
    }

    public function getUser()
    {
        return $_SESSION[self::USER_KEY] ?? false;
    }

    public function userLogout()
    {
        $_SESSION[self::USER_KEY] = false;

    }

    public function setFlash($key, $message)
    {
        $_SESSION[self::FLASH_KEY][$key] = [
            'removed' => false,
            'value' => $message
        ];
    }

    public function getFlash($key)
    {
        return $_SESSION[self::FLASH_KEY][$key]['value'] ?? false;
    }

    public function __destruct()
    {
        $flashMessages = $_SESSION[self::FLASH_KEY] ?? [];
        foreach ($flashMessages as $key => &$flashMessage) {
            if ($flashMessage['removed']) {
                unset($flashMessages[$key]);
            }
        }
        
        $_SESSION[self::FLASH_KEY] = $flashMessages;

    }
}