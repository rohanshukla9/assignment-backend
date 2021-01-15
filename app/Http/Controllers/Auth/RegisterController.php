<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class RegisterController extends Controller
{
  //
  public function index(RegisterRequest $request)
  {
    $ip = $request->ip();
    //dd($ip);
    $user = User::create(array_merge($request->only(['email', 'name', 'password']), ['ipaddress' => $ip, 'last_login' => Carbon::now()]));

    return new UserResource($user);
  }
}
