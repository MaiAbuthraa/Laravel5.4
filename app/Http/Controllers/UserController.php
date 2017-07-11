<?php

namespace App\Http\Controllers;
use App\Model\User;
use Illuminate\Http\Request;
use App\Acme\Transformers\UserTransformer as Transformer;
use App\Acme\Forms\UserForm as Form;

class UserController extends Controller
{
  /**
  * @var UserTransformer
  */
  private $transformer;
  private $form;
  function __construct()
   {
      //Transformer
       $this->transformer = new Transformer();
       //Form
       $this->form = new Form();
   }

   public function index(User $users)
   {
       $users = $users::all(); // Get users from DB
       return $this->transformer->collection($users->all());
       //return fractal()->collection($users)->transformWith(new UserTransformer)->toArray();
  }
}
