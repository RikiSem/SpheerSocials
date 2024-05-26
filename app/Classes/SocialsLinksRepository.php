<?php


namespace App\Classes;


use App\Models\UserAndSocial;

class SocialsLinksRepository
{
    public static function getUserSocialsByUserId(string $userId)
    {
        return UserAndSocial::getUserSocials($userId);
    }
}
