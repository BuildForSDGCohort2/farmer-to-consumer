<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

/**
 * @group  Auth
 *
 * APIs Auth management
 */
class LoginController extends Controller
{
    /**
     * Login User
     *
     * @bodyParam  email string required email address. Example: johndoe@farmer-to-consumer.test
     * @bodyParam  password string required user password. Example: johndoe2020
     *
     * @response 200  {
     *  "user": {
     *      "name":"John Doe",
     *      "email":"johndoe@farmer-to-consumer.test",
     *      "email_verified_at": null,
     *      "created_at": "2020-08-25T11:53:39.000000Z",
     *      "updated_at": "2020-08-25T11:53:39.000000Z"
     *  },
     *  "token": "1|8Fh0rH9Z7ZFTH7q883gnhy7zspRY7LtBLmY5qWt6NLZYKfpCIkTt9zgkuKRWqhZ0MFL3ulcj1x3oE81D"
     *  }
     */
    public function __invoke(LoginRequest $request)
    {
        $user = User::where('email', $request->input('email'))->first();

        if (!$user || !Hash::check($request->input('password'), $user->password)) {
            return response([
                'message' => ['These credentials do not match our records.']
            ], 404);
        }

        $token = $user->createToken('authToken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response()->json($response, 200);
    }
}
