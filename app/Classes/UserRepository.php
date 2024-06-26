<?php


namespace App\Classes;


use App\Models\User;

class UserRepository
{
    public static function getUser(int $userId): User
    {
        return User::getUserById($userId);
    }

    public static function saveNewUser(string $login, string $email, string $pass): User
    {
        return User::createUser($login, $email, $pass);
    }

    public static function verifyLoginUser(string $login, string $pass)
    {
        $result = 'false';
        $user = User::getUserByLogin($login);
        if ($user) {
            if (password_verify($pass, $user->getPassword())) {
                $result = $user->getId();
            }
        }
        return $result;
    }
}
