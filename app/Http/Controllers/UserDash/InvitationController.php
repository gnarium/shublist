<?php

namespace App\Http\Controllers\UserDash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

use App\Models\Invitation;

class InvitationController extends Controller
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
        return view('UserDash.invitations.create_invitation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $invi = new Invitation;
        $invi->user_id = Auth::user()->id;
        $invi->quote = $request->quote;
        $invi->invi_date = 65545;
        
        /**----------------Image 1------------------- */
        if ($request->hasFile('image1')) {
            $image = $request->image1->store('public/invi/'.Auth::user()->email.'/birthday');
            $invi->img1 = $image;
        }

        /**----------------Image 2------------------- */
        if ($request->hasFile('image2')) {
            $image = $request->image2->store('public/invi/'.Auth::user()->email.'/birthday');
            $invi->img2 = $image;
        }

        /**----------------Image 3------------------- */
        if ($request->hasFile('image3')) {
            $image = $request->image3->store('public/invi/'.Auth::user()->email.'/birthday');
            $invi->img3 = $image;
        }

        $invi->slug = Str::random(10).time();
        
        $invi->save();
        if($invi){
            return redirect()->route('invite',$invi->slug);
        }else {
            return redirect()->back();
        }
        
    }

    /**
     * Display the specified resource.
     *
     
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invitation = Invitation::find($id);
        return view('UserDash.invitations.invitation')
                        ->with('invite',$invitation);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $invitation = Invitation::find($id);
        return view('UserDash.invitations.edit_invitation')
                            ->with('invite',$invitation);
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
        $invi =  Invitation::find($id);        
        $invi->quote = $request->quote;
        $invi->invi_date = 65545;
        
        /**----------------Image 1------------------- */
        if ($request->hasFile('image1')) {
            $image = $request->image1->store('public/invi/'.Auth::user()->email.'/birthday');
            $invi->img1 = $image;
        }

        /**----------------Image 2------------------- */
        if ($request->hasFile('image2')) {
            $image = $request->image2->store('public/invi/'.Auth::user()->email.'/birthday');
            $invi->img2 = $image;
        }

        /**----------------Image 3------------------- */
        if ($request->hasFile('image3')) {
            $image = $request->image3->store('public/invi/'.Auth::user()->email.'/birthday');
            $invi->img3 = $image;
        }
        $invi->save();
        if($invi){
            return redirect()->route('my-invitations.show',$id);
        }else {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $invi =  Invitation::where('id',$id)
                            ->where('user_id',Auth::user()->id)->first();
        if ($invi) {
            $invi->delete();
            return redirect()->back();
        }else {
            return redirect()->back();
        }
    }
}
