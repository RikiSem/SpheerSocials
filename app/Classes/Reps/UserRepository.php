<?php


namespace App\Classes\Reps;


use App\Classes\ResponseBuilder;
use App\Models\User;

class UserRepository
{
    public static function getUserByLogin(string $login): User
    {
        return User::getUserByLogin($login);
    }

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
        $user = User::getUserByLogin($login);
        try {
            if ($user) {
                if (password_verify($pass, $user->getPassword())) {
                    $result = ResponseBuilder::okResponse($user->getId());
                } else {
                    throw new \Exception('Verify failed');
                }
            } else {
                throw new \Exception('Verify failed');
            }
        } catch (\Exception $e) {
            $result = ResponseBuilder::VerifyFailedResponse($e->getMessage());
        }

        return $result;
    }

}
