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
        $validated = $request->validate([
            'heading_1' => 'max:100',
            'quote_1' => 'max:250',
            'heading_2' => 'max:100',
            'quote_2' => 'max:250',
            'heading_3' => 'max:100',
            'quote_3' => 'max:250',
            'heading_4' => 'max:100',
            'quote_4' => 'max:250',
            'heading_5' => 'max:100',
            'quote_5' => 'max:250',
            'heading_6' => 'max:100',
            'quote_6' => 'max:250',
            'heading_7' => 'max:100',
            'quote_7' => 'max:250',
            'heading_8' => 'max:100',
            'quote_8' => 'max:250',
            'heading_9' => 'max:100',
            'quote_9' => 'max:250',
            'heading_10' => 'max:100',
            'quote_10' => 'max:250',
        ]);

        $invi = new Invitation;
        $invi->user_id = Auth::user()->id;
        
        $invi->heading_1 = $request->heading_1;
        $invi->quote_1 = $request->quote_1;


        $invi->heading_2 = $request->heading_2;
        $invi->quote_2 = $request->quote_2;

        $invi->heading_3 = $request->heading_3;
        $invi->quote_3 = $request->quote_3;

        $invi->heading_4 = $request->heading_4;
        $invi->quote_4 = $request->quote_4;

        $invi->heading_5 = $request->heading_5;
        $invi->quote_5 = $request->quote_5;

        $invi->heading_6 = $request->heading_6;
        $invi->quote_6 = $request->quote_6;

        $invi->heading_7 = $request->heading_7;
        $invi->quote_7 = $request->quote_7;

        $invi->heading_8 = $request->heading_8;
        $invi->quote_8 = $request->quote_8;

        $invi->heading_9 = $request->heading_9;
        $invi->quote_9 = $request->quote_9;

        $invi->heading_10 = $request->heading_10;
        $invi->quote_10 = $request->quote_10;

        $invi->slug = Str::random(10).time();
        /**----------------Image 1------------------- */
        if ($request->hasFile('img_1')) {
            $image = $request->img_1->store('public/'.Auth::user()->id.'/birthday');
            $invi->image_1 = $image;
        }

        /**----------------Image 2------------------- */
        if ($request->hasFile('img_2')) {
            $image = $request->img_2->store('public/'.Auth::user()->id.'/birthday');
            $invi->image_2 = $image;
        }

        /**----------------Image 3------------------- */
        if ($request->hasFile('img_3')) {
            $image = $request->img_3->store('public/'.Auth::user()->id.'/birthday');
            $invi->image_3 = $image;
        }

        /**birthday memories photo album */
        /**----------------Image 1------------------- */
        if ($request->hasFile('bday_memo_1')) {
            $image = $request->bday_memo_1->store('public/'.Auth::user()->id.'/birthday/memories');
            $invi->memories_1 = $image;
        }

        /**----------------Image 2------------------- */
        if ($request->hasFile('bday_memo_2')) {
            $image = $request->bday_memo_2->store('public/'.Auth::user()->id.'/birthday/memories');
            $invi->memories_2 = $image;
        }

        /**----------------Image 1------------------- */
        if ($request->hasFile('bday_memo_3')) {
            $image = $request->bday_memo_3->store('public/'.Auth::user()->id.'/birthday/memories');
            $invi->memories_3 = $image;
        }

        /**----------------Image 1------------------- */
        if ($request->hasFile('bday_memo_4')) {
            $image = $request->bday_memo_4->store('public/'.Auth::user()->id.'/birthday/memories');
            $invi->memories_4 = $image;
        }

        
        $invi->save();
        if($invi){
            return redirect()->route('my-invitations.show',$invi->slug);
        }else {
            return redirect()->back();
        }        
    }

    /**
     * Display the specified resource.
     *
     
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $invitation = Invitation::where('slug',$slug)->first();
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
        $invitation = Invitation::where('user_id',Auth::user()->id)
                                    ->where('id',$id)->first();
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

        $validated = $request->validate([
            'heading_1' => 'max:100',
            'quote_1' => 'max:250',
            'heading_2' => 'max:100',
            'quote_2' => 'max:250',
            'heading_3' => 'max:100',
            'quote_3' => 'max:250',
            'heading_4' => 'max:100',
            'quote_4' => 'max:250',
            'heading_5' => 'max:100',
            'quote_5' => 'max:250',
            'heading_6' => 'max:100',
            'quote_6' => 'max:250',
            'heading_7' => 'max:100',
            'quote_7' => 'max:250',
            'heading_8' => 'max:100',
            'quote_8' => 'max:250',
            'heading_9' => 'max:100',
            'quote_9' => 'max:250',
            'heading_10' => 'max:100',
            'quote_10' => 'max:250',
        ]);
        
        $invi = Invitation::where('user_id',Auth::user()->id)
                                    ->where('id',$id)->first();

        $invi->heading_1 = $request->heading_1;
        $invi->quote_1 = $request->quote_1;


        $invi->heading_2 = $request->heading_2;
        $invi->quote_2 = $request->quote_2;

        $invi->heading_3 = $request->heading_3;
        $invi->quote_3 = $request->quote_3;

        $invi->heading_4 = $request->heading_4;
        $invi->quote_4 = $request->quote_4;

        $invi->heading_5 = $request->heading_5;
        $invi->quote_5 = $request->quote_5;

        $invi->heading_6 = $request->heading_6;
        $invi->quote_6 = $request->quote_6;

        $invi->heading_7 = $request->heading_7;
        $invi->quote_7 = $request->quote_7;

        $invi->heading_8 = $request->heading_8;
        $invi->quote_8 = $request->quote_8;

        $invi->heading_9 = $request->heading_9;
        $invi->quote_9 = $request->quote_9;

        $invi->heading_10 = $request->heading_10;
        $invi->quote_10 = $request->quote_10;

        /**----------------Image 1------------------- */
        if ($request->hasFile('img_1')) {
            $image = $request->img_1->store('public/'.Auth::user()->id.'/birthday');
            $invi->image_1 = $image;
        }

        /**----------------Image 2------------------- */
        if ($request->hasFile('img_2')) {
            $image = $request->img_2->store('public/'.Auth::user()->id.'/birthday');
            $invi->image_2 = $image;
        }

        /**----------------Image 3------------------- */
        if ($request->hasFile('img_3')) {
            $image = $request->img_3->store('public/'.Auth::user()->id.'/birthday');
            $invi->image_3 = $image;
        }

        /**birthday memories photo album */
        /**----------------Image 1------------------- */
        if ($request->hasFile('bday_memo_1')) {
            $image = $request->bday_memo_1->store('public/'.Auth::user()->id.'/birthday/memories');
            $invi->memories_1 = $image;
        }

        /**----------------Image 2------------------- */
        if ($request->hasFile('bday_memo_2')) {
            $image = $request->bday_memo_2->store('public/'.Auth::user()->id.'/birthday/memories');
            $invi->memories_2 = $image;
        }

        /**----------------Image 1------------------- */
        if ($request->hasFile('bday_memo_3')) {
            $image = $request->bday_memo_3->store('public/'.Auth::user()->id.'/birthday/memories');
            $invi->memories_3 = $image;
        }

        /**----------------Image 1------------------- */
        if ($request->hasFile('bday_memo_4')) {
            $image = $request->bday_memo_4->store('public/'.Auth::user()->id.'/birthday/memories');
            $invi->memories_4 = $image;
        }
        $invi->save();
        

        if($invi){
            return redirect()->route('my-invitations.show',$invi->slug);
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
            return redirect()->route('user-dashboard');
        }else {
            return redirect()->back(); 
        }
    }
}
