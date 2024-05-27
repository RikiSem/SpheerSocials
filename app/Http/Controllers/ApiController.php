<?php

namespace App\Http\Controllers;

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
            UserRepository::saveNewUser($login, $email, $pass);
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
            SocialRepository::createNewSocial($name, $desription, $userId);
            $result = 'true';
        } catch (\Exception $e) {
            $result = $e->getMessage();
        }

        return $result;
    }
}
