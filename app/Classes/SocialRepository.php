<?php


namespace App\Classes;


use App\Models\Social;

class SocialRepository
{
    public static function createNewSocial(string $name, string $desription, int $userId)
    {
        $socialId = Social::createNewSocial($name, $desription, $userId)->id;
        SocialsLinksRepository::addUserToSocial($userId, $socialId);
    }
}
