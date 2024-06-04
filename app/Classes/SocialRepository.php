<?php


namespace App\Classes;


use App\Models\Social;
use Illuminate\Database\Eloquent\Collection;

class SocialRepository
{
    public static function createNewSocial(string $name, string $desription, int $userId): int
    {
        $socialId = Social::createNewSocial($name, $desription, $userId)->id;
        SocialsLinksRepository::addUserToSocial($userId, $socialId);
        return $socialId;
    }

    public static function getSocialsByName(string $name, int $userId): array
    {
        return Social::getByName($name, $userId);
    }
}
