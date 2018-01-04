<?php namespace App\Services;

//use App\User;
use App\Admin;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|min:6',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return Admin
	 */
	public function create(array $data)
	{
		return Admin::create([
			'name' => $data['name'],
			'email' => $data['email'],
			'account_number' => $data['account_number'],
			'password' => bcrypt($data['password']),

//            'photo'=>uploadFile('img','photo','uploads'),
//            'desc'=>$data['desc']
		]);
	}

}
