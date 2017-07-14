<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


use App\Http\Requests; //request to access inputs
use Illuminate\HttpResponse;
use Illuminate\Support\Facades\Auth;// authentication
use Session;//use session i.e flash message

class PagesController extends Controller
{

/*Home page*/
    public function home()
    {
        
        return view('pages.index');
    }

/*ABout page*/
    public function about()
    {

    	return view('pages.about');
    }

/*Contact page*/
    public function contact()
    {
    	return view('pages.contact');
    }

/*Contact page*/
    public function PostContact(Request $request)
    {
        $this->validate($request, [
            'name' => 'min:2|regex:/^[\pL\s\-]+$/u',
            'surname' => 'min:2|regex:/^[\pL\s\-]+$/u',
            'phone' => 'required',
            'email' => 'required|email',
            'message' => 'min:20',
        ]);

        if ($this->validate->fails()) {
            return redirect()->back()
                ->withErrors($validator);
        }

        $data = array(
            'name' => $request->name,
            'surname' => $request->surname,
            'phone' => $request->phone,
            'email' => $request->email,
            'bodyMessge' => $request->message,
        );

        Mail::send('emails.contact', $data, function ($message) use($data)
        {
            
            $message->from($data['email']);
            $message->to('alexeis112@gmail.com');
            $message->subject('Contacting about your business');
        });

        session()->flash('flash_message', 'Message has been sent. Thank you');
        // return redirect('/contact');
        return back();
    }

/*Traditional query*/
    // public function gamers(){
    //     $gamers = DB::table('ugamers')->get();
    //     return view('pages.gamers', compact('gamers'));
    // }


   

}
