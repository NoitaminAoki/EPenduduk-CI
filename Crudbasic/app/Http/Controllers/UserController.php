<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\User;

class UserController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
    public function getProfile()
    {
    	return view('user.profile');
    }
    public function postProfile(Request $r)
    {

        $message =[
            'required' => 'The attribute:field is required.',
            'unique' => 'The attribute:has already taken.',
        ];

        $this->validate($r, [
    	'nama' => 'required',
    	'email' => 'required|email'
    	]);

    $id = Auth::user()->id;
    $user = User::find($id);

    $user->name = $r->input('nama');
    $user->email = $r->input('email');
    $user->save();

    return redirect(url('siswa'));
    }

    public function getPassword()
    {
    	return view('user.password');
    }

    public function postPassword(Request $r)
    {
    	$this->validate($r, [
    		'old_password' => 'required',
    		'password' => 'required|confirmed|min:6',
    		'password_confirmation' => 'required',
    		]);
    $id = Auth::user()->id;
    $user = User::find($id);

    if (!\Hash::check($r->input('old_password'), $user->password)) {
    	$message = "wrong old password";
    return redirect(url('user/password'))->with('message', $message);
} else {
	$user->password = bcrypt($r->input('password'));
	$user->save();
	Auth::logout();
	return redirect(url('login'));
}
    }


}
