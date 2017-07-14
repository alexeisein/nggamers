<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\User;
use File;

class UserProfileController extends Controller
{

	public function getDashboard()
    {
    	$user = Auth::user();
    	return view('user.dashboard', compact('user'));
    }

    public function getProfile()
    {
    	$user = Auth::user();
    	return view('user.profile', compact('user'));
    }

    public function postProfile(Request $request)
    {
    	$user = User::findorFail(Auth::user()->id);
            
            $this->validate($request, [
            'profile_photo' => 'image|mimes:png,jpg,jpeg|max:1000',
            ]);

            if ($request->hasFile('profile_photo')){

                $user = Auth::user();
                $uploadedImg = $request->file('profile_photo');
                $filename = $user->username.'_'.time().'.'.$uploadedImg->getClientOriginalExtension();
                //filename now contains name & its extension

                //Deletes current image before new uploads
                if ($user->avatar !== 'avatar.jpg') {
                    $fileDir = 'images/'.$user->avatar;
                      if (File::exists($fileDir)) {
                        unlink($fileDir);
                    }
                }

                //Saving upload in system
                Image::make($uploadedImg)
                    // ->resize(300,300)
                    ->save('images/'.$filename);

                //Saving filename or extension in database to replace avatar.jpg
                //$user = Auth::user();
                $user->avatar = $filename;
                $user->save();

                return back();
            }
    }
        

}
