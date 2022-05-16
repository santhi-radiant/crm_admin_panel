<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Client;

class ClientsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clients=Client::paginate(10);
        return view('admin.clients',compact('clients'));
    }


    public function create()
    {
        return view('admin.create_clients');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clients= new Client;
        $clients->company=$request->input('company');
        $clients->vat=$request->input('vat');
        $clients->address=$request->input('address');
        $clients->save();
        return redirect()->route('clients')->with('success', 'Client Successfully Created !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client=Client::where('id',$id)->first();
        return view('admin.edit_client', ['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client=Client::where('id',$id)->first();
        $client->company=$request->input('company');
        $client->vat=$request->input('vat');
        $client->address=$request->input('address');
        $client->save();
        return redirect()->route('clients')->with('success', 'Client Successfully Updated !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Client::where('id',$id)->delete();
        return redirect()->route('clients')->with('success', 'Client Successfully Deleted !!');
    }
}
