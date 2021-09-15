<?php

namespace App\Http\Controllers\UserDash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function update(Request $req)
    {
        $user = User::find(Auth::user()->id);
        $user->name = $req->name;
        $user->save();

        $profile = Profile::where('user_id',Auth::user()->id)->first();
        $profile->phone = $req->phone;
        $profile->address = $req->address;

         /**----------------Image 1------------------- */
         if ($req->hasFile('profile')) {
            $image = $req->profile->store('public/'.Auth::user()->email.'/profile');
            $profile->image = $image;
        }
        $profile->save();
        if ($profile) {
            return back();
        }else {
            return back();
        }

    }
}
