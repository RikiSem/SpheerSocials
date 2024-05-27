<?php


namespace App\Classes;


use App\Models\UserAndSocial;

class SocialsLinksRepository
{
    public static function addUserToSocial(int $userId, int $socialId)
    {
        UserAndSocial::addUserToSocial($userId, $socialId);
    }
    public static function getUserSocialsByUserId(int $userId)
    {
        return UserAndSocial::getUserSocials($userId);
    }
}
