<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\User;
class UsersController extends Controller
{
     public function index()
     {
         return UserResource::collection(User::paginate(10));
     }
}
