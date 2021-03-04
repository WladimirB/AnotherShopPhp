<?php

abstract class AdminBase
{
    public static function checkAdmin()
    {
        $userId = User::checkLogged();
        
        $user = User::getUserById($userId);
        
        if($user['role'] == 1) {
            return true;
        }
        
        return false;
    }
}