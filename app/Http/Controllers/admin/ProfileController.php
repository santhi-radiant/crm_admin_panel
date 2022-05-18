<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function profile()
    {
        $user=User::where('id',Auth::user()->id)->first();
        return view('admin.profile',['user'=>$user]);


    }
    public function edit_profile($id)
    {
        $user=User::where('id',Auth::user()->id)->first();
        return view('admin.edit_profile',['user'=>$user]);

    }

    public function update_profile(Request $request,$id)
    {
         
        $user=User::where('id',$id)->first();
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        if($request->hasFile('photo') && $request->file('photo')->isValid())
        {
            $user->addMediaFromRequest('photo')->toMediaCollection();

        }
        
        $user->save();
        return redirect()->route('profile',['id'=>$id])->with('success', 'Your Profile Successfully Updated !!');

    }
    public function destroy_profile($id)
    {

        User::where('id',$id)->delete();
        return redirect()->route('profile')->with('success', 'Profile Successfully Deleted !!');

    }
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
