<?php

namespace App\Http\Controllers\API\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Process a login request
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        // TODO: perform OAuth request here etc...
        Auth::loginUsingId(1);

        // send back auth status to client
        return $this->status();
    }

    /**
     * Process a logout request
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        // TODO: perform logout logic here
        // revoking cookies(/tokens) etc...
        Auth::logout();

        // send back auth status to client
        return $this->status();
    }

    /**
     * Process a auth status request
     *
     * @return \Illuminate\Http\Response
     */
    public function status()
    {
        $auth = Auth::check();

        return response()->json([
            'auth' => $auth,
            'id' => $auth ? Auth::user()->id : null,
            'client_token' => $auth ? Auth::user()->client_token : null
        ]);
    }
}