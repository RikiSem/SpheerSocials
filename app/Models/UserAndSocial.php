<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAndSocial extends Model
{
    use HasFactory;
    protected $guarded = [];
    public static function addUserToSocial(int $userId, int $socialId)
    {
        self::create([
            'userId' => $userId,
            'socialId' => $socialId
        ]);
    }

    public static function getUserSocials(int $userId): Collection|bool
    {
        return self::where('userId', '=', $userId)
                ->join('socials','socials.id', '=', 'socialId',)
                ->get() ?? false ;
    }

}
