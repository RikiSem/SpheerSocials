<?php

namespace App\Http\Controllers;

use App\Classes\SocialLimitRepository;
use App\Classes\SocialRepository;
use App\Classes\SocialsLinksRepository;
use App\Classes\UserRepository;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function login(Request $req)
    {
        try {
            $login = $req->get('login');
            $pass = $req->get('pass');
            $result = UserRepository::verifyLoginUser($login, $pass);
        } catch (\Exception $e) {
            $result = $e->getMessage();
        }

        return $result;
    }

    public function registration(Request $req)
    {
        try{
            $login = $req->get('login');
            $email = $req->get('mail');
            $pass = $req->get('pass');
            $user = UserRepository::saveNewUser($login, $email, $pass);
            SocialLimitRepository::addLimit($user->id);
            $result = 'true';
        } catch (\Exception $e) {
            $result = $e->getMessage();
        }

        return $result;
    }

    public function getUserSocials(int $userId)
    {
        return SocialsLinksRepository::getUserSocialsByUserId($userId);
    }

    public function createNewSocial(Request $req)
    {
        try {
            $name = $req->get('name');
            $desription = $req->get('description');
            $userId = (int)$req->get('author');
            $result = SocialRepository::createNewSocial($name, $desription, $userId);
        } catch (\Exception $e) {
            $result = $e->getMessage();
        }

        return $result;
    }

    public function searchSocials(string $name, int $userId)
    {
        return SocialRepository::getSocialsByName($name, $userId);
    }

    public function joinToSocials(int $socialId, int $userId)
    {
        SocialsLinksRepository::addUserToSocial($userId, $socialId);
    }

    public function getUser(int $userId)
    {
        return UserRepository::getUser($userId);
    }
}
