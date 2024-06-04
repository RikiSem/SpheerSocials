<?php

namespace App\Models;

use App\Classes\SocialsLinksRepository;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    use HasFactory;
    protected $guarded = [];

    public const CHUNK_LIMIT = 50;

    public static function createNewSocial(string $name, string $desription, string $userId): self
    {
        return self::create([
            'name' => $name,
            'description' => $desription,
            'author' => $userId,
        ]);
    }

    public static function getByName(string $name, int $userId): array
    {
        $result = [];
        self::where('name', 'like', '%' . $name . '%')->chunk(self::CHUNK_LIMIT, function ($socials) use (&$result, $userId) {
            /** @var Social $social */
            foreach ($socials as $key => $social) {
                $socialLinkedWithUser = SocialsLinksRepository::getLinksBySocialIdAndUserId($userId, $social->id);
                if ($socialLinkedWithUser->isEmpty()) {
                    $result[$key]['id'] = $social->id;
                    $result[$key]['name'] = $social->name;
                    $result[$key]['description'] = $social->description;
                    $result[$key]['isJoinedUser'] = false;

                    continue;
                }
                $result[$key]['id'] = $social->id;
                $result[$key]['name'] = $social->name;
                $result[$key]['description'] = $social->description;
                $result[$key]['isJoinedUser'] = true;
            }
        });

        return $result;
    }
}
