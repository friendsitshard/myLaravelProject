<?php

namespace App\Http\Controllers;

use App\Classes\User;
use App\Http\Requests\UserRegistrationRequest;
use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    public function register(UserRegistrationRequest $request)
    {
        $data = $request->validated();

        $json_data = json_encode($data);

        Storage::append('users.txt', $json_data);

        return [
            'response' => 'rarara'
        ];
    }

}
