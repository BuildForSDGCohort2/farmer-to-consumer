<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @group  Auth
 *
 * APIs Auth management
 */
class UserController extends Controller
{
    /**
     * Get User by Token
     * @authenticated
     *
     * @response 200  {
     *      "user": {
     *          "name":"John Doe",
     *          "email":"johndoe@farmer-to-consumer.test",
     *          "email_verified_at": null,
     *          "created_at": "2020-08-25T11:53:39.000000Z",
     *          "updated_at": "2020-08-25T11:53:39.000000Z"
     *      }
     *  }
     */
    public function __invoke(Request $request)
    {
        return $request->user();
    }
}
