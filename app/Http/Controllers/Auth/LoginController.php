<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Resources\UserResource;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LoginController extends Controller
{
  //

  public function index(LoginRequest $request)
  {
    if (!$token = auth()->attempt($request->only('email', 'password'))) {
      return response()->json([
        'errors' => [
          'email' => ['Could not  sign you in with those details']
        ]
      ], 422);
    }

    $request->user()->update([
      'last_login' => Carbon::now()
    ]);

    return (new UserResource($request->user()))
      ->additional([
        'meta' => [
          'token' => $token,
          'success' => 'You have successfully logged in'
        ]
      ]);
  }
}
