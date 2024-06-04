<?php


namespace App\Classes;


use App\Models\Social;
use App\Models\UserAndSocial;
use Illuminate\Database\Eloquent\Collection;

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

    public static function getLinksBySocialIdAndUserId(int $userId, int $socialId): Collection
    {
        return UserAndSocial::where('socialId', '=', $socialId)
            ->where('userId', '=', $userId)
            ->get();
    }
}
