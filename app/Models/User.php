<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function createUser(string $login, string $email, string $pass)
    {
        self::create([
            'login' => $login,
            'email' => $email,
            'password' => password_hash($pass, PASSWORD_BCRYPT),
        ]);
    }

    public static function getUserByLogin(string $login): self|bool
    {
        return self::where('login', '=', $login)->first() ?? false;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getEmail()
    {
        return $this->email;
    }
}
