<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\dataRequest;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        if(request()->has('search')){
            $users = User::where('email', 'LIKE', '%'.request()->search.'%')
            ->orWhere('first_name', 'LIKE', '%'.request()->search.'%')
            ->orWhere('last_name', 'LIKE', '%'.request()->search.'%')
            ->orWhere('username', 'LIKE', '%'.request()->search.'%')
            ->get();
        }


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
    public function store(dataRequest $request)
    {
        $validated = $request->validated();

        User::create($validated);

        return redirect()->route('users.index');

        toast('Success Toast','success')->autoClose(5000);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {

        if(auth()->user()->id !== $user->id){

            return back()->with('toast_success', 'You don\'t have the right to delete. '.$user->username);

        }else{

            $user->delete();

            return back()->with('toast_success', 'You have deleted '.$user->username.'successfully.');
        }
    }
}
