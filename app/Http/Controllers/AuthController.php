<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AuthController extends Controller
{
  public function getLogin () {
      if(Auth::check()) return redirect ('/');
      return view('auth.login');
  }
  public function postLogin () {
      $usrname = \Input::get('username');
      $pwd = md5(\Input::get('password'));

      if(Auth::check()) return redirect ('/');

      $user = \DB::table('users')->where('username', \Input::get('username'))
              ->first();
      if (isset($user)) {
          if ($pwd == $user->password) {
            \Auth::loginUsingId($user->id);
            return redirect ('/');
          }else {
            $errUP = "Mật khẩu không đúng, vui lòng nhập lại.";
            return view('auth.login')->with("errUP",$errUP);
          }
      }else {
          $errUP = "Người dùng không tồn tại.";
          return view('auth.login')->with("errUP",$errUP);
      }


  }
  public function getLogout () {
      Auth::logout();
      return redirect ('/login');
  }

  public function getRegister () {
      if (\Auth::check()) {
        return redirect('/');
      }else {
        return view('auth.register');
      }
  }

  public function postRegister () {
        $usrname = \Input::get('username');
        $email = \Input::get('email');
        $pwd = md5(\Input::get('pwd'));

        \DB::table('users')->insert([
                          'username'=> \Input::get('username'),
                          'email'=> \Input::get('email'),
                          'password'=> md5(\Input::get('pwd'))
                        ]);

        $user = \DB::table('users')->where('username', \Input::get('username'))
                ->first();

        \Auth::loginUsingId($user->id);

        return redirect ('/');
  }

}
