<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    use HasFactory;
    protected $guarded = [];
    public static function createNewSocial(string $name, string $desription, string $userId)
    {
        return self::create([
            'name' => $name,
            'description' => $desription,
            'author' => $userId,
        ]);
    }
}
