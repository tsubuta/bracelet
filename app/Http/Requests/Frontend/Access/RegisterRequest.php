<?php namespace App\Http\Requests\Frontend\Access;

use App\Http\Requests\Request;

class RegisterRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'username' 		=> 'required|max:255',
			'last_name' => 'required|string|max:255',
			'first_name' => 'required|string|max:255',
			'email' 	=> 'required|email|max:255|unique:users',
			'password'  => 'required|min:6|confirmed',
			'tel' => 'required|digits:10',
		];
	}
}