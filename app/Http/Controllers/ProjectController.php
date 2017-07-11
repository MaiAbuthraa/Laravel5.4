<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
  /**
  * @var Manager
  */
  private $fractal;

  /**
  * @var UserTransformer
  */
  private $userTransformer;
  
}
