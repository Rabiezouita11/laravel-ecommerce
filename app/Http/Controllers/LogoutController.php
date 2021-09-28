<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class LogoutController extends Controller
{
    public function index(Request $request)
    {

        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? new Response('', 204)
            : redirect('/index');


    }
    protected function guard()
    {
        return Auth::guard();
    }
    protected function loggedOut(Request $request)
    {
        //
    }

}
