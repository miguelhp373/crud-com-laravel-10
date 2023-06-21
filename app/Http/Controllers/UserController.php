<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public readonly User $user;

    public function __construct(){
        $this->user = new User();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = $this->user->all();
        return view('users',['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(view:'user_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->user->create([
            'image' => '',
            'firstname' => $request -> input(key:'firstname'),
            'lastname' => $request -> input(key:'lastname'),
            'email' => $request -> input(key:'email'),
            'password' => password_hash($request -> input(key:'password'),PASSWORD_DEFAULT),
        ]);

        if($created){
            return redirect()->back()->with(key:'message',value:'Sucessfully Created');
        }
        return redirect()->back()->with(key:'message',value:'Error Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('user_edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this ->user->where('id',$id)->update($request->except(keys:['_token','_method','updated_at']));

        if($updated){
            return redirect()->back()->with(key:'message',value:'Sucessfully Updated');
        }
        return redirect()->back()->with(key:'message',value:'Error Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->user->where('id',$id)->delete();

        return redirect()->route(route:'users.index');
    }
}
