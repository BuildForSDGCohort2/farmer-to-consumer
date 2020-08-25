<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\RegisterRequest;
use App\Models\User;

/**
 * @group  Auth
 *
 * APIs Auth management
 */
class RegisterController extends Controller
{
    /**
     * Register User
     *
     * @bodyParam  name string required full name. Example: John Doe
     * @bodyParam  email string required email address. Example: johndoe@farmer-to-consumer.test
     * @bodyParam  password string required user password. Example: johndoe2020
     * @bodyParam  password_confirmation string required password confirmation. Example: johndoe2020
     *
     * @response 200  {
     *  "user": {"name":"John Doe","email":"johndoe@farmer-to-consumer.test"},
     *  "token": "1|8Fh0rH9Z7ZFTH7q883gnhy7zspRY7LtBLmY5qWt6NLZYKfpCIkTt9zgkuKRWqhZ0MFL3ulcj1x3oE81D"
     *  }
     */
    public function __invoke(RegisterRequest $request)
    {
        $user = new User($request->validated());
        $user->save();

        $token = $user->createToken('authToken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response()->json($response, 200);
    }
}
