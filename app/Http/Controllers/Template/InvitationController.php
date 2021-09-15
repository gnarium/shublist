<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Invitation;

class InvitationController extends Controller
{
    public function index()
    {
        return view('Template.invitation');
    }

    public function invite($slug)
    {
        $invi = Invitation::where('slug',$slug)->first();
        return view('Template.invi.invite')
                        ->with('invite',$invi);
    }
}
