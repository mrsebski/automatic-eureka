<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'date_of_birth' => ['date_format:Y-m-d','before:today','nullable'],
            'phone_number' => ['required','string','min:8','max:11'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
   


    public function index()
    {
        return User::all();
    }

    public function show(User $user)
    {
        return $user;
    }


    public function update(Request $request, User $user)
    {

    	$this->validator($request->all())->validate();


    	


        $user->update([
            'name' => $request['name'],
            'firstname' => $request['firstname'],
            'surname' => $request['surname'],
            'date_of_birth' => $request['date_of_birth'],
            'phone_number' => $request['phone_number'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);


        return response()->json($user, 200);
    }

    public function delete(User $user)
    {
        $user->delete();

        return response()->json(null, 204);
    }




}
