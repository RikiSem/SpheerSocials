<?php


namespace App\Classes\Reps;


use App\Classes\ResponseBuilder;
use App\Models\User;

class UserRepository
{
    public static function getUserByLogin(string $login): User|null
    {
        return User::where('login', '=', $login)->first();
    }

    public static function getUserById(int $userId): User
    {
        return User::select('users.id', 'users.login', 'users.about', 'users.isPremium', 'user_social_limits.limit')
            ->where('users.id', '=', $userId)
            ->join('user_social_limits', 'user_social_limits.userId', '=', 'users.id')
            ->first();;
    }

    public static function saveNewUser(string $login, string $email, string $pass): User
    {
        return User::createUser($login, $email, $pass);
    }

    public static function verifyLoginUser(string $login, string $pass)
    {
        $user = self::getUserByLogin($login);
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
