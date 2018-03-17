<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;
class user_model extends Authenticatable{

   protected $table = "user_models";
   protected $fillable=["name","pass","email"];

   public static function form()
   {
      $name = Input::get("name");
      $pass = Input::get("pass");
      $email = Input::get("email");
      $users = new user_model();
      $users->name =$name;
      $users->pass =$pass;
      $users->email =$email;
      $users->save();


   }


}
