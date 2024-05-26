<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAndSocial extends Model
{
    use HasFactory;

    public static function getUserSocials(string $userId): Collection|bool
    {
        return self::where('userId', '=', $userId)
                ->join('socials','socials.id', '=', 'socialId',)
                ->get() ?? false ;
    }
}
