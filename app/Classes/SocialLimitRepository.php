<?php


namespace App\Classes;


use App\Models\UserSocialLimit;

class SocialLimitRepository
{

    public static function addLimit(int $userId)
    {
        UserSocialLimit::addLimit($userId);
    }


}
