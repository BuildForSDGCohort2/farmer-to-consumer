<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @authenticated
 * @group  Auth
 *
 * APIs Auth management
 */
class LogoutController extends Controller
{
    /**
     * Logout User
     *
     * @response 200 "Token deleted"
     */
    public function __invoke(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json('Token deleted');
    }
}
