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
        $validated = $req->validate([
            'name' => 'max:255',
            'phone' => 'max:15',
            'address' => 'max:255',
        ]);

        
        $user = User::find(Auth::user()->id);
        $user->name = $req->name;
        $user->save();

        $profile = Profile::where('user_id',Auth::user()->id)->first();
        $profile->phone = $req->phone;
        $profile->dob = $req->DOB;
        $profile->address = $req->address;

         /**----------------Image 1------------------- */
         if ($req->hasFile('profile')) {
            $image = $req->profile->store('public/'.Auth::user()->id.'/profile');
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
