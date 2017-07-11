<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
//use App\Transformers\UserTransformer;


class UserController extends Controller
{
  /**
  * @var Manager
  */
  //private $fractal;

  /**
  * @var UserTransformer
  */
  //private $userTransformer;
  /*function __construct(Manager $fractal, UserTransformer $userTransformer)
   {
       $this->fractal = $fractal;
       $this->userTransformer = $userTransformer;
   }
   */
   public function index(User $users)
   {
       return [];
       $users = [];//$users::all(); // Get users from DB
       //return fractal()->collection($users)->transformWith(new UserTransformer)->toArray();
  }
}
