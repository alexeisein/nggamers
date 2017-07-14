<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ugamer;//DB model
use App\Http\Requests; //request to access inputs
use App\Http\Requests\UgamersRequest; //validation request
use Illuminate\HttpResponse;
use App\Http\Controllers\Controller;//normal controller extention
use Illuminate\Support\Facades\Auth;// authentication
use Illuminate\Support\Facades\Mail;//mail function
use Session;//use session i.e flash message


use Cornford\Googlmapper\Facades\MapperFacade as Mapper;

// require 'vendor/autoload.php'; 
use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;


class GamersController extends Controller
{

/*Redirects unsigned in users.*/
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'create']);
        // $this->middleware('auth', ['only' => 'index']);
        // $this->middleware('auth', ['only' => 'show']);
        $this->middleware('auth', ['only' => 'store']);
        $this->middleware('auth', ['only' => 'edit']);
        $this->middleware('auth', ['only' => 'update']);
        $this->middleware('auth', ['only' => 'destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gamers = Ugamer::latest('created_at')->get();
        return view('gamers.index_gamers', compact('gamers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gamers.create_gamer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UgamersRequest $request)
    {
        Ugamer::create($request->all());
        flash()->success('You have created a gamer');
       // flash()->overlay('You have created a gamer', 'Well done !');//Modal msg
        return redirect()->route('gamers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ugamer $gamer)
    {
        return view('gamers.show_gamer', compact('gamer'));
        /*or: $gamer = Ugamer::findorFail($gamer)*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gamers = Ugamer::findOrFail($id);
        return view('gamers.edit_gamer', compact('gamers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, UgamersRequest $request)
    {

        $gamers = Ugamer::findOrFail($id);
        $gamers->update($request->all());

        session()->flash('flash_message', 'Updated successfully !');
        return redirect()->route('gamers.show', $gamers->id);

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gamers = Ugamer::findOrFail($id);
        $gamers->delete();
        flash()->success('Gamer successfully deleted');
        return redirect()->route('gamers.index');
    }


}
