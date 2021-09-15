<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvitationFormController extends Controller
{
    public function index()
    {
        return view('Template.invi.invitationForm');
    }
    
}
