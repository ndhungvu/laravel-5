<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        /*Get users*/
        $users = User::whereNull('deleted_at')->paginate(15);
        return View('admin.users.index', compact('users'));
    }

    public function getDetail($id) {
        $user = User::find($id);
        return View('admin.users.detail',compact('user'));
    }

    public function getCreate() {

    }

    public function postCreate() {

    }

    public function getEdit() {
        
    }

    public function postEdit() {
        
    }

    public function postDelete() {
        
    }

    public function postDeleteAll() {
        
    }

    public function getLogin() {
        return View('admin.users.login');
    }

    public function postLogin() {
        $input = array(
            'email' => Input::get('email'),
            'password' => Input::get('password')
        );

        $rules = array(
           'email' => 'required|email',
           'password' => 'required'
        );

        $valid = Validator::make($input, $rules);
        if($valid->fails()) {
            return Redirect::back()->withErrors($valid);
        }

        if (Auth::attempt(array('email' => $input['email'], 'password' => $input['password'], 'is_admin'=> 1, 'deleted_at'=> NULL))){
            $user = Auth::user();
            return Redirect::route('admin.dashboard')->with('flashSuccess', 'You are now logged in');
        }
        return Redirect::back()->with('flashError', 'Your email/password was incorrect');
    }

    public function getLogout() {
        Auth::logout();
        return Redirect::route('admin.login');
    }
}
