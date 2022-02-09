<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        return view('user.profile');
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(StoreUserRequest  $request)
    {
        $user = New User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->back()->with(['status'=> __('Created Successfully')]);
    }

    public function update(UserUpdateRequest $request)
    {
        $this->validate($request,['old_password' => [
            'required', function ($attribute, $value, $fail) {
                if (!Hash::check($value, auth()->user()->password)) {
                    $fail(__('Old Password didn\'t match'));
                }
            },
        ]]);
        $user = auth()->user();

        $user->name = $request->name;
        $user->email = $request->email;

        if($request->password){

            $user->password = bcrypt($request->password);
        }
        $user->save();
        return redirect()->back()->with(['status'=>__('Updated Successfully')]);
    }

    public function destroy($id)
    {
        $user = auth()->user();
        $user->delete();
        return redirect()->back();
    }

}
