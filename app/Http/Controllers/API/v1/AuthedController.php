<?php

namespace App\Http\Controllers\API\v1;

use Illuminate\Http\Request;
use App\Notifications\NotifyUser;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class AuthedController extends Controller
{
    /**
     * Add auth middleware to this controller
     */
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    /**
     * Broadcast a notification on a private channel to the authenticated user
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function notify()
    {
        $user = Auth::user();
        // $user->notify(new NotifyUser($user));
        Notification::send($user, new NotifyUser($user));
        // $user->notify(new NotifyUser($user));
        Log::info('sent notification to '.$user->id);

        return response()->json([
            'notification_sent' => true
        ]);
    }

    /**
     * Give a response if the request is from an authenticated user
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function test()
    {
        Log::info('called /authed/test');
        return response()->json([
            'test' => true
        ]);
    }
}