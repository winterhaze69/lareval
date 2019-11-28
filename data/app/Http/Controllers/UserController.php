<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = User::all();

      return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
'email' => 'required|unique:users',
]);


      $newUser = new User;
    $newUser->name = $request->name;
    $newUser->email = $request->email;
    $newUser->password = bcrypt($request->password);
    $newUser->role = $request->role;
    $newUser->save();

  return redirect('users')->with('status', 'user created!');
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
    public function edit(User $user)
    {
          return view('users.edit', compact('user'));
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

      $request->validate([
'email' => 'required|unique:users',
]);

      $theUser = User::find($id);
      $theUser->name = $request->name;
      $theUser->email = $request->email;
      $theUser->password = bcrypt($request->password);
      $theUser->role = $request->role;
      $theUser->save();

       return redirect('users')->with('status', 'user updated!');
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
      $user->delete();
        return redirect('users')->with('status', 'user deleted!');
    }
}
