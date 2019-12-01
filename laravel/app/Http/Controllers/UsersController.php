<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(70);
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.users.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->except(['name']);
        //$input = $request->all();
        $note = $request->name;
        $user = User::create($input);
        $user->notes()->create(['name'=> $note]);
        if($file = $request->file('avatar')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images',$name);
            $user['avatar']= $name;
        }
        $user->save();
        
        return redirect(route('users.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view("admin.users.edit", compact('user'));
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
         $input = $request->except(['name']);
        //$input = $request->all();
        $note = $request->name;
        $user = User::find($id);
        
        if ($file = $request->file('avatar')) {
            $name = time(). $file->getClientOriginalName();
            $file->move('images', $name);
            unlink(public_path().'/images/'.$user->avatar);
            $input['avatar'] = $name;
        }
        
        $user->update($input);
        $user->notes()->update(['name'=> $note]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->notes()->delete();
        unlink(public_path().'/images/'.$user->avatar);
        $user->delete();
        return redirect(route('users.index'));
    }
}
