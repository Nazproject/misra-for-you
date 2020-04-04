<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Arr;
//use Auth;
class Handler extends ExceptionHandler
{
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }
        //$guard = array_get($exception->guards(), 0);
        $guard = Arr::get($exception->guards(), 0);
        switch ($guard) {
          case 'admin':
            $login = 'admin.login';
            break;

          default:
            $login = 'login';
            break;
        }
        return redirect()->guest(route($login));
    }
}