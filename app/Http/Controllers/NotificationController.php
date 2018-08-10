<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{

    public function __construct()
    {
        //Todos os métodos do controller precisam estar atutenticado
        $this->middleware('auth');
    }

    public function notifications(Request $request)
    {
        $notifications = $request->user()->notifications;
        return response()->json(compact('notifications'));
    }

}
