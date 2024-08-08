<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MessageEvent;
class MessageController extends Controller
{
    public function send(Request $request)
    {
        broadcast(new MessageEvent($request->message));
        return response()->json([], 200);
    }
    public function allUserMessage(Request $request){
        return view('all_user_message');
    }
}
