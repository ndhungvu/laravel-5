<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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

        if (Auth::attempt(array('email' => $input['email'], 'password' => $input['password'], 'status' => 1, 'group_id'=> 1))){
            $user = Auth::user();
            return Redirect::route('admin.dashboard')->with('flashSuccess', 'You are now logged in');
        }
        return Redirect::back()->with('flashError', 'Your email/password was incorrect');
    }

    public function getLogout() {
        Auth::logout();
        Return Redirect::route('admin.user.login');
    }
}
